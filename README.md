# thinkphp5-

# thinkphp5.0 和 thinkphp5.1 在 ExceptionHandler 中处理请求的方式不同

# 必须在 config.php 指定重写的异常处理类 
```
	ex:  
	// 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '\app\lib\exception\ExceptionHandler',
```