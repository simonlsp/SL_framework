<?php
class database_query
{
    protected $type;
    protected $connection;
    function __construct($type)
    {
        $this->type=$type;
    }
    function connect($address,$user,$password)
    {
        unset($this->connection);
        switch ($this->type)
        {
            case 'mysql':
            $this->connection=mysqli_connect($address,$user,$password);
            return($this->connection);
            break;
            case 'sqlite':
            $this->connection=new SQlite3();
            $this->connection->open($address);
            return($this->connection);
            break;
        }
    }
    function multi_query($query_str)
    {
        switch ($this->type)
        {
            case 'mysql':
            $result=mysqli_multi_query($this->connection,$query_str);
            // ------ NO VALUE RETURNING ------ //
            while ($this->connection->more_results() && $this->connection->next_result())
            {
                //nothing
            } 
            return($result);
            break;
            case 'sqlite':
            return($this->connection->query($query_str));
            break;
        }
    }
    function query($query_str)
    {
        switch ($this->type)
        {
            case 'mysql':
            return(mysqli_query($this->connection,$query_str));
            break;
            case 'sqlite':
            return($this->connection->query($query_str));
            break;
        }
    }
    function close()
    {
        switch ($this->type)
        {
            case 'mysql':
            mysqli_close($this->connection);
            break;
            case 'sqlite':
            $this->connection->close();
            break;
        }
    }
}
function password_gen($salt,$password)
{
    return md5(strtoupper(sha1($password.strtoupper(md5($salt.$password))).md5($salt.strtoupper(sha1($password.$salt)))));
}
?>