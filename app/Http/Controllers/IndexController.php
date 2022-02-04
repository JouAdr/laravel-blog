<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $site_settings = [
            'title' => setting('site.title'),
            'description' => setting('site.description')
        ];

        return view('home', [
            'site_settings' => $site_settings
        ]);
    }
}
