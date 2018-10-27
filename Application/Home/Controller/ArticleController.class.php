<?php
namespace Home\Controller;

use Think\Controller;

class ArticleController extends Controller {

    public function show($id){
        echo 'this is an article page, id='.$id;
    }

}