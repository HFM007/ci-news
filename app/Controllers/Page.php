<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function index()
    {
        //
    }

    public function about()
    {
        echo view ('about');
        
    }

    public function contact()
    {
        $data['name'] = 'CI News';
        echo view ('contact', $data);
    }

    public function faqs()
    {
        $data['data_faqs'] = [
            [
                'question'=> 'Apa itu Codeigniter',
                'answer' => 'Codeigniter adalah framework PHP yang sangat powerful'
            ],
            [
                'question' => 'Siapa yang membuat codeigniter',
                'answer' => 'CI awalnya dibuat oleh Ellislab'
            ],
            [
                'question' => 'Apakah Codeigniter masih dikembangkan',
                'answer' => 'Codeigniter sekarang dikembangkan oleh British Columbia Institute of Technology'
            ]
        ];
        echo view ('faqs', $data);
    }   
}
