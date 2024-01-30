<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About |'
        ];
        return view('pages/aboutPage', $data);
    }

    public function career()
    {
        $data = [
            'title' => 'Career |'
        ];
        return view('pages/careerPage', $data);
    }

    public function shop()
    {
        $data = [
            'title' => 'Shop |'
        ];
        return view('pages/shopPage', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact |'
        ];
        return view('pages/contactPage', $data);
    }
}
