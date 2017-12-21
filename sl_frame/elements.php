<?php
include("frame_config.php");
class head_list
{
    protected $input;
    protected $outputstr;
    function output()
    {
        return($this->outputstr);
    }
}
class container extends head_list
{
    protected $child_temp;
    function addelement($element)
    {
        $this->outputstr=$this->outputstr.$element->output();
    }
}
// ------ HEAD STUFF ------ //
class meta_list extends head_list
{
    function __construct($meta_array)
    {
        $this->input=$meta_array;
        $this->outputstr='';
        foreach ($this->input as $key => $value)
        {
            $this->outputstr=$this->outputstr."<meta name='{$key}' content='{$value}' />".lb;
        }
    }
}
class link_list extends head_list
{
    function __construct($link_array)
    {
        $this->input=$link_array;
        $this->outputstr='';
        foreach ($this->input as $key)
        {
            $this->outputstr=$this->outputstr."<link href='{$key['href']}' rel='{$key['rel']}' type='{$key['type']}' />".lb;
        }
    }
}
class scripts_list extends head_list
{
    function __construct($scripts_array)
    {
        $this->input=$scripts_array;
        $this->outputstr='';
        foreach ($this->input as $key)
        {
            $this->outputstr=$this->outputstr."<script src='{$key}'></script>".lb;
        }
    }
}
class head extends container
{
    protected $meta;
    protected $link;
    protected $scripts;
    function __construct($head_array)
    {
        $this->input=$head_array;
        $this->outputstr="<head>".lb."<meta charset='{$this->input['charset']}' />".lb."<title>{$this->input['title']}</title>".lb;
        $this->child_temp=new meta_list($this->input['meta']);
        $this->addelement($this->child_temp);
        $this->child_temp=new link_list($this->input['link']);
        $this->addelement($this->child_temp);
        $this->child_temp=new scripts_list($this->input['scripts']);
        $this->addelement($this->child_temp);
        $this->outputstr=$this->outputstr."</head>".lb;
    }
}
// ------ BODY STUFF ------ //
class container_element extends container
{
    function __construct($element_array)
    {
        $this->input=$element_array;
        // ------ GENERATE TAG HEAD ------ //
        $this->outputstr="<".$this->input['type'];
        foreach ($this->input['prop'] as $key => $value)
        {
            $this->outputstr=$this->outputstr." {$key}='{$value}'";
        }
        $this->outputstr=$this->outputstr.">".lb;
        // ------ GENERATE TAG CONTENT ------ //
        if(isset($this->input['child']))
        {
            foreach($this->input['child'] as $child_array)
            {
                $this->child_temp=new container_element($child_array);
                $this->addelement($this->child_temp);
            }
        }
        elseif(isset($this->input['content']))
        {
            $this->outputstr=$this->outputstr.$this->input['content'].lb;
        }
        // ------ GENERATE TAG TAIL ------ //
        $this->outputstr=$this->outputstr."</{$this->input['type']}>".lb;
    }
}
class body extends container
{
    function __construct($body_array)
    {
        $this->input=$body_array;
        // ------ GENERATE HEAD ------ //
        $this->outputstr="<body>".lb;
        // ------ GENERATE CONTENT ------ //
        foreach($this->input as $element_array)
        {
            $this->child_temp=new container_element($element_array);
            $this->addelement($this->child_temp);
        }
        // ------ GENERATE TAIL ------ //
        $this->outputstr=$this->outputstr."</body>".lb;
    }
}