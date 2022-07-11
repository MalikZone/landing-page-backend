<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        $services = [

            [
                'title' => 'title one',
                'img' => 'https://cdnb.artstation.com/p/assets/images/images/045/365/979/large/alena-aenami-stardust-1k.jpg?1642544897'
            ],
            [
                'title' => 'title two',
                'img' => 'https://cdna.artstation.com/p/assets/images/images/044/596/606/large/alena-aenami-escape-hd.jpg?1640552880'
            ],
            [
                'title' => 'title three',
                'img' => 'https://cdnb.artstation.com/p/assets/images/images/045/365/979/large/alena-aenami-stardust-1k.jpg?1642544897'
            ],
            [
                'title' => 'title four',
                'img' => 'https://cdna.artstation.com/p/assets/images/images/044/596/606/large/alena-aenami-escape-hd.jpg?1640552880'
            ],
            [
                'title' => 'title five',
                'img' => 'https://cdnb.artstation.com/p/assets/images/images/045/365/979/large/alena-aenami-stardust-1k.jpg?1642544897'
            ],
            [
                'title' => 'title six',
                'img' => 'https://cdna.artstation.com/p/assets/images/images/044/596/606/large/alena-aenami-escape-hd.jpg?1640552880'
            ],
            [
                'title' => 'title seven',
                'img' => 'https://cdnb.artstation.com/p/assets/images/images/045/365/979/large/alena-aenami-stardust-1k.jpg?1642544897'
            ],
            [
                'title' => 'title eight',
                'img' => 'https://cdna.artstation.com/p/assets/images/images/044/596/606/large/alena-aenami-escape-hd.jpg?1640552880'
            ],
            [
                'title' => 'title nine',
                'img' => 'https://cdnb.artstation.com/p/assets/images/images/045/365/979/large/alena-aenami-stardust-1k.jpg?1642544897'
            ],
            [
                'title' => 'title ten',
                'img' => 'https://cdna.artstation.com/p/assets/images/images/044/596/606/large/alena-aenami-escape-hd.jpg?1640552880'
            ],
            
        ];

        Service::insert($services);
    }
}
