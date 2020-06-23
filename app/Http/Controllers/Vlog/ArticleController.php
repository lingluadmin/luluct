<?php

namespace App\Http\Controllers\Vlog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller {

	
    public function index(Request $request){
        $params = $request->all();
        $articleService = new ArticleService();

        $detailData = $articleService->getArticleById($params);

        $viewData = [
            'article' => $detailData,
        ];
        return view('vlog.detail', $viewData);
    }

    public function detail(){
        return view('vlog.detail');
    }

}
