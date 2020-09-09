<?php

namespace App\Http\Controllers\Vlog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ArticleService;

class ArticleController extends Controller {

	
    public function index(Request $request){
        $params = $request->all();
		
	print_r($params);

        $articleService = new ArticleService();

        $detailData = $articleService->getArticleById($params);

	print_r($detailData);
        exit;
	$viewData = [
            'article' => $detailData,
        ];
        return view('vlog.detail', $viewData);
    }

    public function detail(){
        return view('vlog.detail');
    }

}
