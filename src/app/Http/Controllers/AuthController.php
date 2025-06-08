<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('auth.register');
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        // 登録後、プロフィール設定ページへリダイレクト
        return redirect()->route('user.profile');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect()->route('items.index');
    }

    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function login_process(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // 初回ログイン後のみプロフィール未登録ならプロフィール画面へ
            if (is_null($user->address) || is_null($user->postcode)) {
                return redirect()->route('user.profile');
            }

            // 通常ログイン後
            return redirect()->route('items.index');
        }
        return back()->withErrors(['login' => 'メールアドレスまたはパスワードが間違っています']);
    }
}
