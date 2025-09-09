<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([ [
            'title' => "Apcodesphere The leading Developer",
           'blogger_id' => 1,
            'category_id' => 1,
            'status' => 'active',
            'slug' => "apcodesphere-thr-leading-developer",
            'content' => 'Testnet'
          ],
                    [
            'title' => "Precious The leading Developer",
           'blogger_id' => 1,
            'category_id' => 1,
            'status' => 'active',
            'slug' => "pr3cious-thr-leading-developer",
            'content' => 'prexious'
          ],
                    [
            'title' => "dokun The leading Developer",
           'blogger_id' => 1,
            'category_id' => 1,
            'status' => 'draft',
            'slug' => "dokun-thr-leading-developer",
            'content' => 'dokun'
          ]]);
    }
}
