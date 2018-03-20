<?php
namespace app\controller;
class article{

    public function add(){

        $title=post('title','require','标题必填');
        dump($title);
    }
}
