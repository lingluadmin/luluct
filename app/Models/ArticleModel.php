<?php
namespace App\Models;

use App\Models\BaseModel;

class ArticleModel extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table    = 'l_article';

    public $timestamps  = false;

    public function getArticleById($id){
        $data = $this->where('id', $id)->first();
        return $data ? $data->toArray() : [];
    }

}
