<?php

namespace Database\Seeders;

use App\Models\PurchaseMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseMethod::create([
            'name' => 'クレジット',
        ]);
    }
}
