<?php
error_reporting(0);
class Db{
	private $_link;
   private function __construct($dbconfig){
     $this -> _link = mysql_connect($dbconfig['dbhost'],$dbconfig['dbuser'],$dbconfig['dbpw'])or die('服务器连接失败');
	 
	  	mysql_select_db($dbconfig['dbname'],$this->_link) or die("指定数据库不存在");
	    mysql_query("set names'utf8'");
	   }

	private static $_instance = null;

	static function getInstance($dbconfig){
		if(self::$_instance == null){
			$classname = __CLASS__;
			self::$_instance = new $classname($dbconfig);
		}
		return self::$_instance;
	}	
	//执行mysql语句
	function execute($sql){
		return mysql_query($sql);
	}
	//返回受影响的行数；
	function affected_rows(){
		return mysql_affected_rows($this->_link);
	}
	//返回最后插入记录的ID号；
	function insert_id(){
		return mysql_insert_id($this->_link);
	}
	//返回结果集包含的记录总数；一共有记条记录；
	function num_rows($result){
		return mysql_num_rows($result);
	}
	//返回结果集以索引数组返回；
	function fetch_row($result){
		return mysql_fetch_rows($result);
	}
	function fetch_assoc($result){
		return mysql_fetch_assoc($result);
	}
	function fetch_array($result,$result_type=MYSQL_BOTH){
		return mysql_fetch_array($result,$result_type);
	}
public function fetchAll($query,$result_type=MYSQL_BOTH){
		$result = $this -> execute($query);
		while($row = $this -> fetchArray($result,$result_type)){
			$rows[] = $row;
		}
		return $rows;
	}
}
?>