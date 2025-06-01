<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;


class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::create([
            'user_id' => 1,
            'item_category_id' => 1,
            'item_condition_id' => 1,
            'name' => '腕時計',
            'price' => 15000,
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'bland' => 'サンプルブランド'
        ]);

        Item::create([
            'user_id' => 2,
            'item_category_id' => 2,
            'item_condition_id' => 3,
            'name' => 'HDD',
            'price' => 5000,
            'description' => '高速で信頼性の高いハードディスク',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'bland' => 'サンプルブランド'
        ]);

        Item::create([
            'user_id' => 2,
            'item_category_id' => 3,
            'item_condition_id' => 2,
            'name' => '玉ねぎ３束',
            'price' => 300,
            'description' => '新鮮な玉ねぎ3束のセット',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'bland' => 'サンプルブランド'
        ]);

        Item::create([
            'user_id' => 2,
            'item_category_id' => 3,
            'item_condition_id' => 2,
            'name' => '革靴',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'bland' => 'サンプルブランド'
        ]);

        Item::create([
            'user_id' => 2,
            'item_category_id' => 3,
            'item_condition_id' => 2,
            'name' => 'ノートPC',
            'price' => 45000,
            'description' => '高性能なノートパソコン',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'bland' => 'サンプルブランド'
        ]);
    }

    Item::create([
        'user_id' => 2,
        'item_category_id' => 4,
        'item_condition_id' => 2,
        'name' => 'マイク',
        'price' => 8000,
        'description' => '高音質のレコーディング用マイク',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
        'bland' => 'サンプルブランド'
    ]);


    Item::create([
        'user_id' => 2,
        'item_category_id' => 3,
        'item_condition_id' => 2,
        'name' => 'ショルダーバッグ',
        'price' => 3500,
        'description' => 'おしゃれなショルダーバッグ',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
        'bland' => 'サンプルブランド'
    ]);

    Item::create([
        'user_id' => 2,
        'item_category_id' => 3,
        'item_condition_id' => 2,
        'name' => 'コーヒーミル',
        'price' => 4000,
        'description' => '手動のコーヒーミル',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
        'bland' => 'サンプルブランド'
    ]);

}
