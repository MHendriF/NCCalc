<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CalculatorController extends Controller
{
    public function findPrice(Request $request)
    {
    	$data =  Item::select('harga')->where('id',$request->id)->first();
    	return response()->json($data);
    }
}
