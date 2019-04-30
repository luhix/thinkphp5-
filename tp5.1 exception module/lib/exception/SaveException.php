<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/14
 * Time: 10:38
 */

namespace app\lib\exception;


class SaveException extends BaseException
{
    public $stateCode = 200;
    public $code = 41000;
    public $msg = "save Failed";
}