<?php

class admin extends base{
    public function index()
    {
        if($_SESSION['admin'] =='')
        {
            header("Location:index.php?c=admin&a=login");
        }
    }
    public function login()
    {
        global $r;
        if($r->get->name && $r->get->pass)
        {
            
        }
        tpl::d('login.tpl');
    }
}