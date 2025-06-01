<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemCategory;


class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['家電', '本', '衣類', '食品', 'その他'];
        foreach ($categories as $name) {
            ItemCategory::create(['name' => $name]);
        }
    }
}
