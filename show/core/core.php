<?php
/*
 * copry right PHPBODY
 */

//�����ļ��ļ���
define("SHOWCONFIG",PHPBODY."/show/config");

//ģ���ļ�Ŀ¼
define("SHOWTEMPLATE",PHPBODY."/show/display");

//���ļ�
define("SHOWLIBRARY",PHPBODY."/show/core/library");

//�����ļ� ��������
define("SHOWFUNCTION",PHPBODY."/show/core/function");

//���Ʋ�
define("SHOWCONTROL",PHPBODY."/show/control");

//ģ�Ͳ�
define("SHOWMODEL",PHPBODY."/show/model");

include SHOWCONFIG."/database.php";
include SHOWCONFIG."/template.php";
include SHOWLIBRARY."/autoload.lib.php";
include SHOWCONTROL."/base.php";
$GLOBALS['sdb'] = db::i();
include SHOWLIBRARY."/session.lib.php";
$GLOBALS['r'] = new r(); 
global $r,$sdb;
//route
if(!isset($r->get->c))
{
    $home = new home();
    $home->index();
}else{
    if(!isset($r->get->a))
    {
        $r->get->a = 'index';
    }
    try{
        @$tmp = new $r->get->c;
    }catch(Exception $e)
    {
        
    }
    $a = $r->get->a;
    $tmp->$a();
}
?>