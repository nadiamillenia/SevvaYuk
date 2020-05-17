<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $shops = Shop::with('category')->get();
        return view('pages.home.index')->with('shops', $shops);
    }

    public function search(Request $request) 
    {
        $shops = Shop::where('name', 'like', '%'. $request->search .'%')->paginate(9);
        return view('pages.shop.index')->with('shops', $shops);
    }
}
