<?php
namespace Home\Model;

use Think\Model;

class UserModel extends Model {
    protected $tablePrefix = '';
    protected $tableName = 'think_user';

    protected $_auto = array (
        array('created_at','date("Y-m-d H:i:s", time())',3,'function'),
        array('updated_at','date("Y-m-d H:i:s", time())',3,'function'),
    );

}