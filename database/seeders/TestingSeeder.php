<?php

namespace Database\Seeders;

use App\Models\Testing;
use Illuminate\Database\Seeder;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testing::truncate();

        $testing = [

            [
                'title' => 'test one',
                'content' => 'test one'
            ],
            [
                'title' => 'test two',
                'content' => 'test two'
            ],
            [
                'title' => 'test three',
                'content' => 'test three'
            ]
            
        ];

        Testing::insert($testing);
    }
}
