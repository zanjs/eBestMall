<?php
/**
 * frontend 基础控制器
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/5 18:55
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use Detection\MobileDetect;

class BaseController extends Controller
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        /*
        $device = new MobileDetect();
        if ($device->isMobile()){
            return $this->redirect(['/mobile']);
        }
        */
    }
}