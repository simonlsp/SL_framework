<?php

$page=array();
$page['head']=array();
$page['head']['title']='网站初始化中......';
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
$page['body'][1]['child'][2]['prop']['style']='background-color: #2d2d2d;';
$page['body'][1]['child'][2]['child']=array();

$page['body'][1]['child'][2]['child'][1]=array();
$page['body'][1]['child'][2]['child'][1]['type']='h2';
$page['body'][1]['child'][2]['child'][1]['prop']=array();
$page['body'][1]['child'][2]['child'][1]['prop']['style']='margin-left:10px;';
$page['body'][1]['child'][2]['child'][1]['content']="站点已经安装完成，请进行初始化配置";

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
$page['body'][1]['child'][3]['child'][1]['child'][1]['content']='确定数据库类型';

$page['body'][1]['child'][3]['child'][1]['child'][2]=array();
$page['body'][1]['child'][3]['child'][1]['child'][2]['type']='li';
$page['body'][1]['child'][3]['child'][1]['child'][2]['prop']=array();
$page['body'][1]['child'][3]['child'][1]['child'][2]['prop']['style']='color:darkred;';
$page['body'][1]['child'][3]['child'][1]['child'][2]['content']='确定连接字符串';

$page['body'][1]['child'][3]['child'][1]['child'][3]=array();
$page['body'][1]['child'][3]['child'][1]['child'][3]['type']='li';
$page['body'][1]['child'][3]['child'][1]['child'][3]['prop']=array();
$page['body'][1]['child'][3]['child'][1]['child'][3]['prop']['style']='color:darkred;';
$page['body'][1]['child'][3]['child'][1]['child'][3]['content']='管理员账号注册';

$page['body'][1]['child'][3]['child'][1]['child'][4]=array();
$page['body'][1]['child'][3]['child'][1]['child'][4]['type']='li';
$page['body'][1]['child'][3]['child'][1]['child'][4]['prop']=array();
$page['body'][1]['child'][3]['child'][1]['child'][4]['prop']['style']='color:darkred;';
$page['body'][1]['child'][3]['child'][1]['child'][4]['content']='数据库初始化';

$page['body'][1]['child'][4]=array();
$page['body'][1]['child'][4]['type']='div';
$page['body'][1]['child'][4]['prop']=array();
$page['body'][1]['child'][4]['prop']['id']='maincontent';
$page['body'][1]['child'][4]['child']=array();

$page['body'][1]['child'][4]['child'][1]=array();
$page['body'][1]['child'][4]['child'][1]['type']='form';
$page['body'][1]['child'][4]['child'][1]['prop']=array();
$page['body'][1]['child'][4]['child'][1]['prop']['id']='setupform';
$page['body'][1]['child'][4]['child'][1]['prop']['action']='setup.php';
$page['body'][1]['child'][4]['child'][1]['prop']['method']='POST';
$page['body'][1]['child'][4]['child'][1]['content']='这是表单';

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