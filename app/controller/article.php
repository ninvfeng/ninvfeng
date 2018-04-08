<?php
namespace app\controller;
class article{

    //添加文章
    public function add(){
        $data['title']=post('title','require','请填写标题');
        $data['cover']=post('cover','require','请上传封面');
        $data['desc']=post('desc','require','请填写描述');
        $data['content']=post('content','require','请填写描述');
        $data['created_at']=date('Y-m-d H:i:s');
        $res=db('article')->insert($data);
        response($res);
    }

    //修改文章
    public function edit(){
        $id=post('id','require|number','文章不存在');
        $data['title']=post('title','require','请填写标题');
        $data['cover']=post('cover','require','请上传封面');
        $data['desc']=post('desc','require','请填写描述');
        $data['content']=post('content','require','请填写描述');
        $data['created_at']=date('Y-m-d H:i:s');
        $res=db('article')->where(['id'=>$id])->update($data);
        response($res);
    }

    //删除文章
    public function del(){
        $id=post('id','require|number','文章不存在');
        $res=db('article')->where(['id'=>$id])->delete();
        response($res);
    }
}
