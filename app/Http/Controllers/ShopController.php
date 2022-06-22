<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;


class ShopController extends Controller
{
   
    public function show()
    {
        $shoplist = Shop::all();
        return view('home',['shoplist'=>$shoplist]);
    }

    public function search()
    {
        $search=$_GET['searchshops'];
        $shoplist= Shop::where('name','LIKE','%'.$search.'%')->get();
        return view('shopsearch',['shoplist'=>$shoplist]);
    }

}
