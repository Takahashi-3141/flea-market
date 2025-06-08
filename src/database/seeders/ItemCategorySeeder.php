<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemCategory;
use Illuminate\Support\Facades\Hash;


class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //item_id 登録
        ItemCategory::create([
            'name' => '家電',
        ]);
        $categories = ['家電', '本', '衣類', '食品', 'その他'];
        foreach ($categories as $name) {
            ItemCategory::create(['name' => $name]);
        }
    }
}
