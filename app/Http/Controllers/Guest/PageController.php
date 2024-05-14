<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        $trains=Train::paginate(10);
        return view('home',compact('trains'));
    }

    public function trainDetails($id){

        $train = Train::find($id);

        if (!isset($train)) {
            abort(404);
        }



        return view('trainDetails', compact('train'));
    }
}
