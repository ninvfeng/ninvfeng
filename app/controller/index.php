<?php
namespace app\controller;
class index{

    //首页
    public function index(){

        //文章
        $article=db('article')->page(1)->select();

        response(compact('article'));
    }
}
