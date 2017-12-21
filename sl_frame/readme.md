框架通过解析数组渲染网页
实例如下
```
$array=array();
$array['head']=array();
$array['head']['title']='网站初始化中......';
$array['head']['charset']='utf-8';
$array['head']['meta']=array();
$array['head']['meta']['robots']='none';
$array['head']['meta']['author']='simonlsp_workshop';
$array['head']['link']=array();
$array['head']['link'][1]=array();
$array['head']['link'][1]['href']='css/common_dark.css';
$array['head']['link'][1]['rel']='stylesheet';
$array['head']['link'][1]['type']='text/css';
$array['head']['scripts']=array();
$array['body']=array();

$array['body'][1]=array();
$array['body'][1]['type']='div';
$array['body'][1]['prop']=array();
$array['body'][1]['prop']['id']='wrapper';
$array['body'][1]['child']=array();

$array['body'][1]['child'][1]=array()
$array['body'][1]['child'][1]['type']='div';
$array['body'][1]['child'][1]['prop']=array();
$array['body'][1]['child'][1]['prop']['id']='headline';
$array['body'][1]['child'][1]['child']=array();

$array['body'][1]['child'][1]['child'][1]=array();
$array['body'][1]['child'][1]['child'][1]['type']='h1';
$array['body'][1]['child'][1]['child'][1]['prop']=array();
$array['body'][1]['child'][1]['child'][1]['prop']['style']='margin-left:10px;';
$array['body'][1]['child'][1]['child'][1]['content']="实验室耗材购买管理平台";

$array['body'][1]['child'][2]=array()
$array['body'][1]['child'][2]['type']='div';
$array['body'][1]['child'][2]['prop']=array();
$array['body'][1]['child'][2]['prop']['id']='main_nav';
$array['body'][1]['child'][2]['child']=array();

$array['body'][1]['child'][2]['child'][1]=array();
$array['body'][1]['child'][2]['child'][1]['type']='h2';
$array['body'][1]['child'][2]['child'][1]['prop']=array();
$array['body'][1]['child'][2]['child'][1]['prop']['style']='margin-left:10px;';
$array['body'][1]['child'][2]['child'][1]['content']="站点已经安装完成，请进行初始化配置";

$array['body'][1]['child'][3]=array()
$array['body'][1]['child'][3]['type']='div';
$array['body'][1]['child'][3]['prop']=array();
$array['body'][1]['child'][3]['prop']['id']='left_nav';
$array['body'][1]['child'][3]['child']=array();

$array['body'][1]['child'][3]['child'][1]=array();
$array['body'][1]['child'][3]['child'][1]['type']='ol';
$array['body'][1]['child'][3]['child'][1]['prop']=array();
$array['body'][1]['child'][3]['child'][1]['child']=array();

$array['body'][1]['child'][3]['child'][1]['child'][1]=array();
$array['body'][1]['child'][3]['child'][1]['child'][1]['type']='li';
$array['body'][1]['child'][3]['child'][1]['child'][1]['prop']=array();
$array['body'][1]['child'][3]['child'][1]['child'][1]['prop']['style']='color:darkgreen;';
$array['body'][1]['child'][3]['child'][1]['child'][1]['content']='确定数据库类型';

$array['body'][1]['child'][3]['child'][1]['child'][2]=array();
$array['body'][1]['child'][3]['child'][1]['child'][2]['type']='li';
$array['body'][1]['child'][3]['child'][1]['child'][2]['prop']=array();
$array['body'][1]['child'][3]['child'][1]['child'][2]['prop']['style']='color:darkgreen;';
$array['body'][1]['child'][3]['child'][1]['child'][2]['content']='确定连接字符串';

$array['body'][1]['child'][3]['child'][1]['child'][3]=array();
$array['body'][1]['child'][3]['child'][1]['child'][3]['type']='li';
$array['body'][1]['child'][3]['child'][1]['child'][3]['prop']=array();
$array['body'][1]['child'][3]['child'][1]['child'][3]['prop']['style']='color:darkgreen;';
$array['body'][1]['child'][3]['child'][1]['child'][3]['content']='管理员账号注册';

$array['body'][1]['child'][3]['child'][1]['child'][4]=array();
$array['body'][1]['child'][3]['child'][1]['child'][4]['type']='li';
$array['body'][1]['child'][3]['child'][1]['child'][4]['prop']=array();
$array['body'][1]['child'][3]['child'][1]['child'][4]['prop']['style']='color:darkgreen;';
$array['body'][1]['child'][3]['child'][1]['child'][4]['content']='数据库初始化';

$array['body'][1]['child'][4]=array()
$array['body'][1]['child'][4]['type']='div';
$array['body'][1]['child'][4]['prop']=array();
$array['body'][1]['child'][4]['prop']['id']='maincontent';
$array['body'][1]['child'][4]['child']=array();

$array['body'][1]['child'][4]['child'][1]=array();
$array['body'][1]['child'][4]['child'][1]['type']='form';
$array['body'][1]['child'][4]['child'][1]['prop']=array();
$array['body'][1]['child'][4]['child'][1]['id']='setupform';
$array['body'][1]['child'][4]['child'][1]['action']='setup.php';
$array['body'][1]['child'][4]['child'][1]['method']='POST';
$array['body'][1]['child'][4]['child'][1]['content']='这是表单'

$array['body'][1]['child'][5]=array()
$array['body'][1]['child'][5]['type']='div';
$array['body'][1]['child'][5]['prop']=array();
$array['body'][1]['child'][5]['prop']['id']='bottomline';
$array['body'][1]['child'][5]['child']=array();

$array['body'][1]['child'][5]['child'][1]=array();
$array['body'][1]['child'][5]['child'][1]['type']='p';
$array['body'][1]['child'][5]['child'][1]['prop']=array();
$array['body'][1]['child'][5]['child'][1]['prop']['style']='margin-left:35px;';
$array['body'][1]['child'][5]['child'][1]['content']='Version: 0.1 Beta';

```