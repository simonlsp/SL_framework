<?php
include('elements.php');
include('query.php');
class page extends container
{
    function __construct($html_array)
    {
        $this->input=$html_array;
        $this->outputstr="<!DOCTYPE HTML>".lb."<html>".lb;
        $this->child_temp=new head($this->input['head']);
        $this->addelement($this->child_temp);
        $this->child_temp=new body($this->input['body']);
        $this->addelement($this->child_temp);
        $this->outputstr=$this->outputstr."</html>";
    }
}
function render($html_array)
{
    $html=new page($html_array);
    echo($html->output());
}
class login_session
{
    Protected $user;
    Protected $key;
    function __construct($user)
    {
        $this->$user=$user;
    }
}
?>