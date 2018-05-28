<?php 
	namespace app\common\validate;
	use think\Validate;
	class yzm extends Validate
	{
		protected $rule =[
	    'vali' =>"captcha",
		];
		protected $message=[
		  'vali.captcha'=>'验证码错误',
		];
		protected $scene=[//场景验证
			'valia'=>['vali'],
		];
	} 

 ?>
<!-- 以下为模板 -->
<!--   protected $rule =   [
        'account'  => 'require|min:4|unique:manager',
        'password'   => 'require|min:6|confirm:repassword',
        'code'  =>'require|captcha'
    ];
    protected $message  =   [
        'account.require' => '账号不能为空',
        'account.min' => '账号长度不合法',
        'account.unique'     => '账号已存在',
        'password.require'   => '密码不能为空',
        'password.min'  => '密码长度不能小于6位',
        'password.confirm'        => '两次密码输入不一致',
        'code.require'  =>'验证码不能为空',
        'code.captcha' =>'验证码输入不正确'
    ];
    protected $scene = [
        'add'   =>['account','password'],
        'edit'  =>  ['password'],
        'login' =>['account'=>'require|min:4','password'=>'require|min:6','code'],
    ];
} -->