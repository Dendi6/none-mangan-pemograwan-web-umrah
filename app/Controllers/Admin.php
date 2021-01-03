<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Note'
        ];

        return view('admin/beranda/index', $data);
    }
}
