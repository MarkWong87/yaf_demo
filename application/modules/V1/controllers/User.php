<?php
/**
 * Created by PhpStorm.
 * User: wangxiafei
 * Date: 2019/11/5
 * Time: 2:31 PM.
 */

class UserController extends ApiController
{
    public function indexAction()
    {
        $arr = ['status' => true, 'error' => '', 'data' => ''];
        $this->response($arr);
    }

    public function demoAction()
    {
        $dbConfig = Yaf_Registry::get('database');
        $db = new Medoo\Medoo($dbConfig['write']);
        $rows = $db->select('jz_user', ['id', 'user_name', 'mobile'], ['LIMIT' => 10]);

        $this->response($rows);
    }
}
