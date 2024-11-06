<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        //membuat data
        $news_data = [
            [
                'title' => 'Selamat Datang di CodeIgniter 4',
                'slug'  => 'CodeIgniter Intro',
                'content' => 'Pengenalan CodeIgniter 4 untuk pemula'
            ],
            [
                'title' => 'Hello World',
                'slug'  => 'Hello World',
                'content' => 'Hello World dengan CodeIgniter 4'
            ],
            [
                'title' => 'Meetup komunitas CodeIgniter',
                'slug'  => 'Meetup CodeIgniter',
                'content' => 'Meetup CodeIgniter di Jakarta'
            ]
        ];

        foreach ($news_data as $data) {
            // insert data ke database
            $this->db->table('news')->insert($data);
        }
    }
}
