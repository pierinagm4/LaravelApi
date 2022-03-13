<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;

class StoreController extends Controller
{
    
    public function getStore(){
        return store::all();
    }

    public function getStoreByID($id){
        return store::find($id);
    }

}
