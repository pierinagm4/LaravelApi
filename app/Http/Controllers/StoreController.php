<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;

class StoreController extends Controller
{
    
    public function getStore(){
        return store::all();
    }

<<<<<<< HEAD
    public function getStoreByID($id){
        return store::find($id);
    }

=======
>>>>>>> 69dfaa9707ef7cf7047d53e4d19a6eb485b9113f
}
