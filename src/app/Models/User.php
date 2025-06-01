<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'postcode',
        'building',
    ];

    // ユーザーが出品した商品
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    // ユーザーが行った購入
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    // ユーザーがコメントした商品
    public function itemComments()
    {
        return $this->hasMany(ItemComment::class);
    }

    // ユーザーのマイリスト（お気に入り）
    public function mylists()
    {
        return $this->hasMany(Mylist::class);
    }
}
