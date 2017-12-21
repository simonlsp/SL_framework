<?php
include('sl_frame/sl_frame.php');
include('config.php');
include('sl_frame/setup_config.php');
include('pages/setup.php');
// ------ CREATE CONFIG FILE ------ //
function update_config($configfile)
{
    global $_setup;
    global $_config;
    // ------ ASSMBLE CONFIG FILE ------ //
    $config_str = '<?php'.lb.'$_config=array();'.lb;
    foreach ($_setup['config'] as $group => $group_array)
    {
        $config_str.=lb.'// ------ CONFIG '.strtoupper($group).' ------ //'.lb;
        foreach ($group_array as $key)
        {
            $config_str.="\$_config['{$group}']['{$key}']=";
            if(isset($_config[$group][$key]))
            {
                $config_str.="'{$_config[$group][$key]}';".lb;
            }
            else
            {
                $config_str.="null;".lb;
            }
        }
    }
    $config_str.='?>';
    // ------ UPDATE CONFIG FILE ------ //
    try
    {
        $configwriter=fopen($configfile,'w');
        fwrite($configwriter,$config_str);
        fclose($configwriter);
    }
    catch(Exception $e)
    {
        return -1;
    }
    return 0;
}
// ------ TO GET CURRENT STEP ------ //
function install_step($flag_array)
{
    foreach ($flag_array as $key => $value)
    {
        if($value)
        {
            return($key);
        }
    }
}
// ------ TO PROCESS POST DATA ------ //
function step_post($current_step)
{
    global $_config;
    global $_setup;
    foreach($_setup['update'][$current_step] as $update_inf)
    {
        if(isset($_POST[$update_inf->postname]))
        {
            $_config[$update_inf->group][$update_inf->key]=$_POST[$update_inf->postname];
        }
        else
        {
            return false;
        }
    }
    return true;
}
// ------ TO INIT THE DB ------ //
function db_init($admin,$password)
{
    include('dbinit.php');
    global $_config;
    $db=new database_query($_config['db']['type']);
    $db->connect($_config['db']['address'],$_config['db']['user'],$_config['db']['password']);
    $db->multi_query($dbinit_str[$_config['db']['type']]);
    $db->query("INSERT INTO lab_manage.user (uid,user,password,power) value (1,'{$admin}','{password_gen($admin,$password)}','A');");
    $db->close();
    return false;
}
// ------ TO TEST IF THE DB IS INITED ------ //
// FOR PERFORMANCE CONCERN, I SUGGEST THAT ONLY ONE FLAG SHOULD BE CHECKED.
// THE INTEGRITY OF DATA STRUCTURE SHOULD BE ENSURED BY TRANSACTION.
function db_check()
{
    global $_config;
    $db=new database_query($_config['db']['type']);
    $db->connect($_config['db']['address'],$_config['db']['user'],$_config['db']['password']);
    if(!$db)
    {
        return false;
    }
    $result=$db->query("SELECT user FROM lab_manage.user WHERE uid=1;");
    if(mysqli_fetch_array($result)['user']==$_config['site']['admin'])
    {
        $db->close();
        return true;
    }
    else
    {
        $db->close();
        return false;
    }
}
// ------ PROTECTION ------ //
if(isset($_config['site']['installed']))
{
    echo('网站已经安装成功，初始化界面已禁用。如需修正请在设置中更改，或直接修改配置文件。');
    exit(0);
}
// ------ GET CURRENT STEP ------ //
step_refresh();
$step=install_step($_setup['flag']);
// ------ UPDATE CONFIG ------ //
if($step==4)
{
    db_init($_POST['user'],$_POST['password']);
}
if($step==5)
{
    if(db_check())
    {
        $_config['site']['installed']='complete';
    }
    else
    {}
}
if(step_post($step))
{
    update_config('config.php');
}
// ------ REFRESH STEP ------ //
step_refresh();
$step=install_step($_setup['flag']);
// ------ THINGS TO DO IN EACH STEP ------ //
for ($i=1;$i<$step;$i++)
{
    if(isset($page['body'][1]['child'][3]['child'][1]['child'][$i]['prop']['style']))
    {
        $page['body'][1]['child'][3]['child'][1]['child'][$i]['prop']['style']='color:darkgreen';
    }
}
if(isset($page['body'][1]['child'][3]['child'][1]['child'][$step]['prop']['style']))
{
    $page['body'][1]['child'][3]['child'][1]['child'][$step]['prop']['style']='color:#f0f0f0';
}
$page['body'][1]['child'][4]['child'][1]['content']=$_setup['form'][$step];
if($step==5)
{
    $page['body'][1]['child'][4]['child'][1]['prop']['method']='GET';
    $page['body'][1]['child'][4]['child'][1]['prop']['action']='index.php';
}
render($page)
?>