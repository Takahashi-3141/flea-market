<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemComment;

class ItemCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemComment::create([
            'user_id' => 1,
            'item_id' => 1,
            'comment' => 'とても良い商品でした！'
        ]);
    }
}
