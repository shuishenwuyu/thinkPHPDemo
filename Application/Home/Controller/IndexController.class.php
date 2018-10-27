<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    
    public function read($id='', $name=''){
        if($id){
            echo "<br>".U('User/add', array('test'=>1, 'aa'=>2));
            echo "<p>read id page with ".$id."</p>";

        } else {
            echo "read name page with ".$name;
        }
    }

    public function _before_top(){
        echo "<p>before top </p>";
    }

    public function top(){
        echo "<p>top page </p>";
    }

    public function _after_top(){
        echo "<p>after top </p>";
    }

    public function archive($year, $month){
        echo "blogs".$year." ".$month;
    }

    public function user(){
        $User = M('User');
        $data['username'] = 'shuishen';
        $data['email'] = 'shuishen@qq.com';
        $result = $User->add($data);
        if($result){
            $this->success('success', '/User/addUser', 3);
        } else {
            $this->error('failed');
        }
    }

    public function redirectToArticle(){
        $this->redirect('/Article/show', array('id'=>2), 3, 'redirecting...');
    }

    public function testRedirectToArticle(){
        $this->redirect('/Article/show/id/4', 'redirecting...', 5);
    }
   

}