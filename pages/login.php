<?php

$page=array();
$page['head']=array();
$page['head']['title']='实验室耗材购买管理平台';
$page['head']['charset']='utf-8';
$page['head']['meta']=array();
$page['head']['meta']['robots']='none';
$page['head']['meta']['author']='simonlsp_workshop';
$page['head']['link']=array();
$page['head']['link'][1]=array();
$page['head']['link'][1]['href']='css/common_dark.css';
$page['head']['link'][1]['rel']='stylesheet';
$page['head']['link'][1]['type']='text/css';
$page['head']['scripts']=array();
$page['body']=array();

$page['body'][1]=array();
$page['body'][1]['type']='div';
$page['body'][1]['prop']=array();
$page['body'][1]['prop']['id']='wrapper';
$page['body'][1]['child']=array();

$page['body'][1]['child'][1]=array();
$page['body'][1]['child'][1]['type']='div';
$page['body'][1]['child'][1]['prop']=array();
$page['body'][1]['child'][1]['prop']['id']='headline';
$page['body'][1]['child'][1]['child']=array();

$page['body'][1]['child'][1]['child'][1]=array();
$page['body'][1]['child'][1]['child'][1]['type']='h1';
$page['body'][1]['child'][1]['child'][1]['prop']=array();
$page['body'][1]['child'][1]['child'][1]['prop']['style']='margin-left:10px;';
$page['body'][1]['child'][1]['child'][1]['content']="实验室耗材购买管理平台";

$page['body'][1]['child'][2]=array();
$page['body'][1]['child'][2]['type']='div';
$page['body'][1]['child'][2]['prop']=array();
$page['body'][1]['child'][2]['prop']['id']='main_nav';
$page['body'][1]['child'][2]['child']=array();

$page['body'][1]['child'][2]['child'][1]=array();
$page['body'][1]['child'][2]['child'][1]['type']='ui';
$page['body'][1]['child'][2]['child'][1]['prop']=array();
$page['body'][1]['child'][2]['child'][1]['prop']['class']='main_list';
$page['body'][1]['child'][2]['child'][1]['content']=<<<'EOT'
<li><a id="disable_list" title="权限不足">申请管理</a></li>
<li><a id="disable_list" title="权限不足">申请审批</a></li>
<li><a id="disable_list" title="权限不足">用户设置</a></li>
<li><a id="disable_list" title="权限不足">用户管理</a></li>
<li><a id="disable_list" title="权限不足">系统管理</a></li>
<li><a id="active_list">注册/登录</a></li>
EOT;

$page['body'][1]['child'][3]=array();
$page['body'][1]['child'][3]['type']='div';
$page['body'][1]['child'][3]['prop']=array();
$page['body'][1]['child'][3]['prop']['id']='left_nav';
$page['body'][1]['child'][3]['child']=array();

$page['body'][1]['child'][3]['child'][1]=array();
$page['body'][1]['child'][3]['child'][1]['type']='ol';
$page['body'][1]['child'][3]['child'][1]['prop']=array();
$page['body'][1]['child'][3]['child'][1]['child']=array();

$page['body'][1]['child'][3]['child'][1]['child'][1]=array();
$page['body'][1]['child'][3]['child'][1]['child'][1]['type']='li';
$page['body'][1]['child'][3]['child'][1]['child'][1]['prop']=array();
$page['body'][1]['child'][3]['child'][1]['child'][1]['prop']['style']='color:darkred;';
$page['body'][1]['child'][3]['child'][1]['child'][1]['content']=<<<'EOT'
<a style='color:white;' href="login.php?act=signin">登录</a>
EOT;

$page['body'][1]['child'][3]['child'][1]['child'][2]=array();
$page['body'][1]['child'][3]['child'][1]['child'][2]['type']='li';
$page['body'][1]['child'][3]['child'][1]['child'][2]['prop']=array();
$page['body'][1]['child'][3]['child'][1]['child'][2]['prop']['style']='color:darkred;';
$page['body'][1]['child'][3]['child'][1]['child'][2]['content']=<<<'EOT'
<a style='color:grey;' href="login.php?act=signup">注册</a>
EOT;

$page['body'][1]['child'][4]=array();
$page['body'][1]['child'][4]['type']='div';
$page['body'][1]['child'][4]['prop']=array();
$page['body'][1]['child'][4]['prop']['id']='maincontent';
$page['body'][1]['child'][4]['child']=array();

$page['body'][1]['child'][4]['child'][1]=array();
$page['body'][1]['child'][4]['child'][1]['type']='form';
$page['body'][1]['child'][4]['child'][1]['prop']=array();
$page['body'][1]['child'][4]['child'][1]['prop']['id']='setupform';
$page['body'][1]['child'][4]['child'][1]['prop']['action']='login.php?act=signin';
$page['body'][1]['child'][4]['child'][1]['prop']['method']='POST';
$page['body'][1]['child'][4]['child'][1]['content']=<<<'EOT'
<h3>用户登录：</h3>
<br />用户名：<br />
<input type="text" name="user" style="width:200px;"/>
<br />密码：<br />
<input type="password" name="password" style="width:200px;"/>
<br />
<input type="submit" value="登录" style="padding:5px;" />
EOT;

$page['body'][1]['child'][5]=array();
$page['body'][1]['child'][5]['type']='div';
$page['body'][1]['child'][5]['prop']=array();
$page['body'][1]['child'][5]['prop']['id']='bottomline';
$page['body'][1]['child'][5]['child']=array();

$page['body'][1]['child'][5]['child'][1]=array();
$page['body'][1]['child'][5]['child'][1]['type']='p';
$page['body'][1]['child'][5]['child'][1]['prop']=array();
$page['body'][1]['child'][5]['child'][1]['prop']['style']='margin-left:35px;';
$page['body'][1]['child'][5]['child'][1]['content']='Version: 0.1 Beta';

?>