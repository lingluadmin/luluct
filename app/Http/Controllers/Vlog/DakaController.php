<?php

namespace App\Http\Controllers\Vlog;

use App\Http\Controllers\Controller;

class DakaController extends Controller {

	
    public function index(){
	    return view('vlog');
    }

    public function detail(){
        return view('vlog.detail');
    }
}
