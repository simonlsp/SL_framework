<?php
session_start();
include('sl_frame/sl_frame.php');
include('config.php');
include('pages/login.php');
// ------ 后台处理 ------ //
if($_GET['act']=='signup')
{

}
if($_GET['act']=='signin')
{
    
}
// ------ 界面渲染 ------ //
if($_GET['act']=='signup')
{
    $page['body'][1]['child'][3]['child'][1]['child'][2]['content']=<<<'EOT'
    <a style='color:white;' href="login.php?act=signup">注册</a>
EOT;
    $page['body'][1]['child'][3]['child'][1]['child'][1]['content']=<<<'EOT'
    <a style='color:grey;' href="login.php?act=signin">登录</a>
EOT;
$page['body'][1]['child'][4]['child'][1]['prop']['action']='login.php?act=signup';
$page['body'][1]['child'][4]['child'][1]['content']=<<<'EOT'
<h3>用户注册：</h3>
<br />用户名：<br />
<input type="text" name="user" style="width:200px;"/>
<br />密码：<br />
<input type="password" name="password" style="width:200px;"/>
<br />
<input type="submit" value="注册" style="padding:5px;" />
EOT;
}
render($page);
?>