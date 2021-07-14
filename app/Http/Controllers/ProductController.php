<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show(){
     
      return "WellCome to Product Page ";  
    /*
		$json_file = file_get_contents("https://api.hgbrasil.com/finance/stock_price?key=senhacadastrada&symbol=bidi4");   
		$json_str = json_decode($json_file, true);		
		return response()->json(['success'=>true,'message'=>'success', 'data' => $json_str]);	
      */
    }
}
