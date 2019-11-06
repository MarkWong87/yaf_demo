<?php
/**
 * Created by PhpStorm.
 * User: wangxiafei
 * Date: 2019/11/5
 * Time: 2:53 PM.
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public function _initConfig(Yaf_Dispatcher $dispatcher)
    {
        //把配置保存起来
        $arrConfig = Yaf_Application::app()->getConfig()->toArray();
        Yaf_Registry::set('config', $arrConfig);
        $dispatcher->getInstance()->autoRender(FALSE);  // 关闭自动加载模板
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher)
    {
        //注册一个插件
        /*
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);
        */
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
    }

    public function _initDatabase(Yaf_Dispatcher $dispatcher)
    {
        $arrConfig = Yaf_Registry::get('config');
        Yaf_Registry::set('database', $arrConfig['database']);
        ;
    }
}
