<?php

namespace App\Http\Controllers;
use DB;
use HTML;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class DatabaseController extends Controller
{
      public function home()
    {
        //Declare the database 'CatsSubcats'; only get if type=cat; get items that meet criteria from database
    	$CatsSubcats=DB::table('CatsSubcats')->where('type', 'cat')->get();

        // send this to the welcome page with info in 'CatsSubcats'
    	return view('welcome', compact('CatsSubcats'));        

    } 

    public function item($id)
    {
        //Declare the database 'menu'; only get if menu->subcat_id='the current id' and type=item; get items that meet criteria from database
    	$item=DB::table('item')->where('cat_id', $id)->get();
        // send this to the item page with info in 'menu'
    	return view('item', compact('item'));

    }
     public function subcat($id)
    {
        //Declare the database 'menu'; only get if menu->cat_id='the current id' and type=subcat; get items that meet criteria from database 
		$CatsSubcats=DB::table('CatsSubcats')->where('type', 'subcat')->where('cat_id', $id)->get();
        // send this to the item page with info in 'menu'
    	return view('subcat', compact('CatsSubcats'));

    }

         public function deletecat($id)
    {

        DB::table('CatsSubcats')->where('cat_id', $id)->Delete();
        DB::table('item')->where('id', $id)->Delete();
        return back();

    }
    




}







