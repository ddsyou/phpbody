<?php
if(!defined('BODY')){exit();}
/**
* 栏目相关
* Author show
* copyright phpbody
*/
Class category extends base{
    public function index()
    {
    	global $r;

    	// $array = array("bb","aa"=>array("cc"));
    	// $d = array_search("cc",$array);
    	// form::sbug($d);exit();
    	$menu = categoryModel::getMenu();
    	tpl::a("menu",$menu);
    	tpl::a("c",$r->get("c",""));
    	tpl::a("a",$r->get("a",""));
        tpl::d("category.index.tpl");
    }
    public function add()
    {
    	global $r;
    	$parentid = $r->post("parentid",0);
    	$name = $r->post("name",'');
    	if(!empty($name))
    	{
    		categoryModel::CategoryAdd($name,$parentid);
    		form::go('category','index');
    	}
    }
}