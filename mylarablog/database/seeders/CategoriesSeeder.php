<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
          [
          'name' => 'Programming',
          'description' =>'Programming posts only',
          'status' => 'active'
          ],
        [
          'name' => 'Play',
          'description' =>'Play posts only',
            'status' => 'inactive'
          ],
          [
          'name' => 'Test',
          'description' =>'Fight posts only',
                    'status' => 'active'
          ],
           [
          'name' => 'Fight',
          'description' =>'Fight posts only',
                    'status' => 'active'
          ]
          ]);
    }
}
