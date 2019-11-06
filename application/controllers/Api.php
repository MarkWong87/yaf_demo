<?php
/**
 * Created by PhpStorm.
 * User: wangxiafei
 * Date: 2019/11/5
 * Time: 2:31 PM.
 */

class ApiController extends Yaf_Controller_Abstract
{

    public function response($result)
    {
        header('Content-type: application/json');
        echo json_encode($result);

        return false;
    }
}
