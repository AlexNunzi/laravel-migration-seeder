<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $data = [
            'trips' => Trip::whereDate('departure_time', date('Y-m-d'))->get()
        ];

        return view('home', $data);
    }
}
