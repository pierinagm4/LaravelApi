<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Models\product;

class ProductController extends Controller
{
    public function getProduct(){
        return product::all();
    }

    public function getProductByID($id){
        return product::find($id);
    }
}
