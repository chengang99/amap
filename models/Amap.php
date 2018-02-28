<?php

namespace chengang99\amap\models;
/**
 * Created by PhpStorm.
 * User: chengang
 * Date: 2018/2/28
 * Time: 上午9:21
 */

class Amap
{

    const TYPE_LINE = 0;
    const TYPE_DRIVING = 1;
    const TYPE_BUS = 2;
    const TYPE_WALKING = 3;

    public $types =[
        self::TYPE_LINE => '直线',
        self::TYPE_DRIVING => '驾车',
        self::TYPE_BUS => '公交',
        self::TYPE_WALKING => '步行'
    ];

    public function __construct()
    {

    }

    public function actionDistance($startLon,$startLat,$endLon,$endLat,$type = self::TYPE_LINE)
    {

    }
}