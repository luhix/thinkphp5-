<?php
namespace app\lib\exception;
use think\Exception;

/**
 * Class BaseException
 * 自定义异常类的基类
 */
class BaseException extends Exception
{
    public $stateCode = 400; //http 状态码
    public $code = 999;   // 自定义返回码
    public $msg = 'invalid parameters';

    /**
     * 构造函数，接收一个关联数组
     * @param array $params 关联数组只应包含stateCode、msg和code，且不应该是空值
     */
    public function __construct($params=[])
    {
        if(!is_array($params)){
            return;
        }
        if(array_key_exists('stateCode',$params)){
            $this->stateCode = $params['stateCode'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if(array_key_exists('code',$params)){
            $this->code = $params['code'];
        }
    }
}

