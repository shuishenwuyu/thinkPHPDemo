<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

    public function addUser(){
        echo 'add user done!';
    }

    public function addUser1(){
        $user = M('User');
        $data['username'] = 'shuishen10';
        $data['email'] = 'shuishen10@qq.com';
        $user->create($data);
        $record = $user->add();
        dump($record);
    }

    public function addUser2(){
        $user = D('User');
        $data['username'] = 'shuishen17';
        $data['email'] = 'shuishen17@qq.com';
        $user->create($data);
        $record = $user->add();
        dump($record);
        $record1 = $user->find($record);
        dump($record1);
    }

    public function readData(){
        $user = M('User');
        $record = $user->where('username="shuishen"')->find();
        dump($record);
    }

    public function readData1(){
        $user = M('User');
        $record = $user->where('id>96')->getField('email,username');
        dump($record);
    }

    public function saveData(){
        $user = M('User');
        $data['username'] = 'shuishen12';
        //$data['email'] = 'shuishen11@qq.com';
        $record = $user->where('id=95')->save($data);
        dump($record);
    }

    public function setData(){
        $user = M('User');
        $record = $user->where('id=96')->setField('username','shuishen13');
        dump($record);
    }

    public function setData1(){
        $user = M('User');
        $data = array('username'=>'shuishen15', 'email'=>'shuishen15@qq.com');
        //$data['username'] = 'shuishen14';
        //$data['email'] = 'shuishen14@qq.com';
        $record = $user->where('id=97')->setField($data);
        dump($record);
    }

    public function delData(){
        $user = M('User');
        $record = $user->where('id=97')->delete();
        dump($record);
    }

    public function delData1(){
        $user = M('User');
        $record = $user->delete('95,96');
        dump($record);
    }



}