<?php
namespace App\Http\Services\ArticleService;

use App;
use App\Models\ArticleModel;

class ArticleService
{
    public function getArticleById($params){
        $id = isset($params['id']) ? $params['id'] : 0;

        $articleModel = new ArticleModel();
        
        $data = $articleModel->getArticleById($id);

        return $data;
    }

}

