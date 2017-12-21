<?php
$_setup=array();
$config_path='config.php';
// ------ CONFIG META ------ //
// STRUCTURE: $config_meta['GROUPNAME']=ARRAY OF ALL KEYS IN THE GROUP
$_setup['config']=array();
$_setup['config']['db']=array('type','address','user','password','inited');
$_setup['config']['site']=array('admin','default_theme','installed');
// ------ CONFIG UPDATED IN EACH STEPS ------ //
// STRUCTURE: $_setup_['upgrade'][STEP]=array('GROUP,KEY,POSTNAME','GROUP,KEY,POSTNAME')
// AN EMPTY ARRAY SHOULD ALWAYS BE THE LAST FLAG, MARKING THE END OF SETTING UP
class post_config
{
    public $group;
    public $key;
    public $postname;
    function __construct($group,$key,$postname)
    {
        $this->group=$group;
        $this->key=$key;
        $this->postname=$postname;
    }
}
$_setup['update']=array();
$_setup['update'][1]=array(new post_config('db','type','dbtype'));
$_setup['update'][2]=array(new post_config('db','address','address'),new post_config('db','user','user'),new post_config('db','password','password'));
$_setup['update'][3]=array(new post_config('db','address','path'));
$_setup['update'][4]=array(new post_config('site','admin','user'),new post_config('site','default_theme','default_theme'));
$_setup['update'][5]=array();
// ------ SETUP FLAG IN EACH STEPS ------ //
// THE FIRST ONE TO BE TRUE WOULD BE THE RUNNING STEP
// PLEASE BE CAREFUL HERE, A WRONG FLAG WOULD MAKE AN ENDLESS INSTALL
// TRUE SHOULD ALWAYS BE THE LAST FLAG, MARKING THE END OF SETTING UP
function step_refresh()
{
    global $_setup;
    global $_config;
    $_setup['flag']=array();
    //确定数据库类型
    $_setup['flag'][1]=!isset($_config['db']['type']);
    //Mysql连接凭证
    $_setup['flag'][2]=(!isset($_config['db']['address']))&&($_config['db']['type']=='mysql');
    //Sqlite文件名
    $_setup['flag'][3]=(!isset($_config['db']['address']))&&($_config['db']['type']=='sqlite');
    //管理员账号
    $_setup['flag'][4]=!isset($_config['site']['admin']);
    //安装完毕
    $_setup['flag'][5]=true;
}
// ------ SETUP FORM IN EACH STEPS ------ //
// AN EMPTY form SHOULD ALWAYS BE THE LAST FLAG, MARKING THE END OF SETTING UP
$_setup['form']=array();
$_setup['form'][1]=<<<EOT
<h3>请选择你希望使用的数据库类型：</h3>
<br />
<input type="radio" name="dbtype" value="mysql" checked/>Mysql/Mariadb
<br />
<input type="radio" name="dbtype" value="sqlite" />SQLite
<br /><b style="color:#FF0000;">请确保config.php对网页服务器可写，并已设置为禁止外部访问！</b><br />
<input type="submit" value="下一步" style="padding:5px;" />
EOT;
$_setup['form'][2]=<<<EOT
<h3>请输入Mysql/Mariadb数据库的连接凭证：</h3>
<br />数据库地址与接口：<br />
<input type="text" name="address" style="width:200px;"/>
<br />用户名（需要建立数据库的权限）：<br />
<input type="text" name="user" style="width:200px;"/>
<br />密码：<br />
<input type="password" name="password" style="width:200px;"/>
<br />
<input type="submit" value="下一步" style="padding:5px;" />
EOT;
$_setup['form'][3]=<<<EOT
<h3>请输入希望建立SQLite数据库的文件名：</h3>
<br />文件名：<br />
<input type="text" name="path" style="width:200px;"/>
<br /><b style="color:#FF0000;">请确保sqlite文件夹对网页服务器可写，并已设置为禁止外部访问！</b><br />
<input type="submit" value="下一步" style="padding:5px;" />
EOT;
$_setup['form'][4]=<<<EOT
<h3>请注册站长账号：</h3>
<p>实验耗材管理平台的用户权限大致依照以下等级划分：</p>
<ol>
    <li>A级人员：权限管理，具有更改用户权限程度的能力。</li>
    <li>B级人员：订单管理，具有批准和否决申请程度的能力。</li>
    <li>C级人员：授权用户，具有提交订单申请程度的能力。</li>
    <li>D级人员：新注册用户，没有任何能力。</li>
</ol>
<p>站长为试剂管理平台的管理者，权限锁定为A级。</p>
<br />用户名：<br />
<input type="text" name="user" style="width:200px;"/>
<br />密码：<br />
<input type="password" name="password" style="width:200px;"/>
<br />站点默认色调<br />
<input type="radio" name="default_theme" value="dark" checked/>dark
<br />
<input type="radio" name="default_theme" value="light" />light
<input type="submit" value="下一步" style="padding:5px;" />
EOT;
$_setup['form'][5]=<<<EOT
<h3>安装完成：</h3>
<input type="submit" value="转到首页" style="padding:5px;" />
EOT;
?>