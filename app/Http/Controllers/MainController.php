<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\RatesContract;

class MainController extends Controller
{
    public function index(RatesContract $rates)
    {
    	$rate = $rates->getRate();
    	return view('rate',['rate'=>$rate]);
    }
}
