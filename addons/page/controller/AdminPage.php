<?php
//MIPCMS.Com [Don't forget the beginner's mind]
//Copyright (c) 2017~2099 http://MIPCMS.Com All rights reserved.
namespace addons\page\controller;

use mip\Init;
class AdminPage extends Init
{
    protected $beforeActionList = ['start'];
    protected $addonsName = '';
    public function start()
    {
        $addonsName = 'page'; //配置当前插件名称
        $this->addonsName = $addonsName;
        $itemInfo = db('Addons')->where('name',$addonsName)->find();
        if (!$itemInfo || $itemInfo['status'] != 1) {
            $this->error('当前插件未启用','');
        }
    }
    
    public function page()
    {
        return $this->addonsFetch('admin/page',$this->addonsName);
    }
}
