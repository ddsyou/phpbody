<?php

Class db{
    private $link;
    private $array;
    private $db;
    private $sql;
    private $data;
    private $xdata;
    private static $_instance;
    /*
     * ����ʱ����
     */
    function __construct()
    {
       self::conn();
    }
    
    /*
     * ��������
     */
    public static function i(){  //getInstance
        if(!(self::$_instance instanceof self)){
        self::$_instance = new self;
    }
        return self::$_instance;
    }
    
    /*
     * ��������
     */
    function conn()
    {
        $this->link = mysql_connect($GLOBALS['db']['host'],$GLOBALS['db']['user'],$GLOBALS['db']['pass']) or die('�������ݿ�����');
        mysql_select_db($GLOBALS['db']['databases'],$this->link) or die('���ݿ�No Found');
    }
    /*
     * ������ѯ
     * ���ʧ�ܣ�����
     */
    public function query($sql)
    {
//        $sql = addslashes($sql);
//        $sql = self::safe($sql);
        $d = mysql_query($sql) or die("Invalid query: " .$sql.mysql_error());
        return $d;
    }
    public function affected_rows()
    {
        return mysql_affected_rows();
    }
    /*
     * ��ȫ����
     */
    function safe($sql)
    {
        $sql = mysql_real_escape_string($sql);
        return $sql;
    }
    /*
     * ��ȡһ����Ϣ
     */
    function get_one($sql)
    {
        $result = $this->query($sql);
        while($this->xdata = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            break;
        }
        return $this->xdata;
    }
    /*
     * ��ȡȫ����Ϣ
     */
    function get_all($sql)
    {
        $result = $this->query($sql);
        while($this->xdata = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            $this->data[] = $this->xdata;
        }
        return $this->data;
    }
}
?>
