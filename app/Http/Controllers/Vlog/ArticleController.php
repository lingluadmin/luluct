<?php

namespace App\Http\Controllers\Vlog;

use App\Http\Controllers\Controller;

class ArticleController extends Controller {

	
    public function index(){
        return view('vlog.detail');
    }

    public function detail(){
        return view('vlog.detail');
    }

}
