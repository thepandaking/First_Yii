<?php

namespace app\modules\admin;

use app\core\base\BaseModule;

class AdminModule extends BaseModule
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        //false 不使用布局
        //null  默认使用父级布局
        //file name  自定义布局文件
        $this->layout = 'main';
    }
}
