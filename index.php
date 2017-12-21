<?php
session_start();
include('sl_frame/sl_frame.php');
include('config.php');
include('pages/index.php');
if(!isset($_config['site']['installed']))
{
    echo '<script language="javascript">alert("请执行初始化配置");window.location.href="setup.php";</script>';
    exit(0);
}
if(!isset($_SESSION['user_id']))
{
    if(!isset($_POST['user'])||!isset($_POST['password']))
    {
        echo '<script language="javascript">window.location.href="login.php";</script>';
        exit(0);
    }
}
// else
// {
//     if($_SESSION['key']!=gen_validate($_SESSION['user_id']))
//     {
//         echo '<script language="javascript">window.location.href="login.php";</script>';
//         exit(0);
//     }
// }
// function gen_validate($uid)
// {
//     $db=new database_query($_config['db']['type']);
//     $db->connect($_config['db']['address'],$_config['db']['user'],$_config['db']['password']);
//     if(!$db)
//     {
//         exit("数据库无法连接，请确认服务器状态！");
//     }
//     $result=$db->query("SELECT password FROM lab_manage.user WHERE uid={$uid};");
//     return(md5(mysqli_fetch_array($result)['password'].date("Y-m-d")));
//     $db->close();
// }
$userid=$_SESSION['user_id'];
render($page);
?>