<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Team;
use App\OurService;

class HomeController extends Controller
{
    public function index(){
        $data['portfolios'] = Portfolio::all();
        $data['teams'] = Team::all();
        $data['our_services'] = OurService::all();

        return view('home', $data);
    }
}
