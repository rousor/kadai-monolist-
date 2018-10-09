<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Item;

class WelcomeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('updated_at', 'desc')->paginate(20);
        //        print_r($items);
        

        return view('welcome', [
            'items' => $items,
        ]);
    }
}
