<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Auth;
use App\Models\User;

class ItemController extends Controller
{
    // 商品一覧ページ
    public function index()
    {
        $items = Item::latest()->paginate(8);
        return view('items.index', compact('items'));
    }

    // マイリスト（お気に入り）
    public function mylist()
    {
        $user = Auth::user();
        $favorites = $user->favorites()->with('item')->get();
        return view('items.mylist', compact('favorites'));
    }

    // 商品詳細
    public function detail($item_id)
    {
        $item = Item::findOrFail($item_id);
        return view('items.detail', compact('item'));
    }

    // 商品購入画面
    public function purchase($item_id)
    {
        $item = Item::findOrFail($item_id);
        return view('items.purchase', compact('item'));
    }

    // 購入処理
    public function purchase_process(Request $request, $item_id)
    {
        $item = Item::findOrFail($item_id);
        Purchase::create([
            'user_id' => Auth::id(),
            'item_id' => $item->id,
            'quantity' => 1,
            'price' => $item->price
        ]);
        return redirect()->route('mypage.tab', ['tab' => 'buy']);
    }

    // 商品登録画面
    public function create()
    {
        return view('items.create');
    }

    // 商品登録処理
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }

        $data['user_id'] = Auth::id();

        Item::create($data);
        return redirect()->route('items.index');
    }
}
