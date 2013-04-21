<?php

class MySQL {
	private $host;
	private $name;
	private $pass;
	private $database;
	private $charset;
	private $result;
	private $conn;
	
	/*构造函数*/
	function __construct($host,$name,$pass,$database,$charset) {
		$this->host    =  $host;
		$this->name    =  $name;
		$this->pass    =  $pass;
		$this->database   =  $database;
		$this->charset =  $charset;
		$this->connect();

	}
	
	/*数据库连接*/
	function connect() {
		$conn = mysql_connect($this->host,$this->name,$this->pass)or die($this->error());
		$this->conn = $conn;
		mysql_select_db($this->database,$conn) or die("无该数据库".$this->database);
		mysql_query("SET NAMES '$this->charset'");
		
	}
	/*数据库执行语句，可执行查询添加修改删除等任何sql语句*/
	function query($sql) {
		if(!($query = mysql_query($sql))) $this->show('错误SQL语句:', $sql);
		$this->result = $query;
		return $this->result;
	}
	
	/*创建添加新的数据库*/
	public function create_database($database_name) {
		$database = $database_name;
		$sqlDatabase = 'create database ' . $database;
		$this->query($sqlDatabase);
	}
	//输出错误SQL语句
	function show($message = '', $sql = '') {
		if(!$sql) echo $message;
		else echo $message.'<br>'.$sql;
	}
	
	/*
	 mysql_fetch_row()    array  $row[0],$row[1],$row[2]
	mysql_fetch_array()  array  $row[0] 或 $row[id]
	mysql_fetch_assoc()  array  用$row->content 字段大小写敏感
	mysql_fetch_object() object 用$row[id],$row[content] 字段大小写敏感
	*/
	
	//简化查询select
	public function findall($table) {
		$this->query("SELECT * FROM $table");
	}
	
	
	//简化插入insert
	function fn_insert($table,$name,$value){
		$this->query("insert into $table ($name) value ($value)");
	}
	
	//简化删除del
	function fn_delete($table,$condition) {
		$this->query("delete from $table where $condition");
	}
	
	//简化修改update
	function fn_update($table,$mod_content,$conditon) {
		$this->query("update $table set $mod_content where $conditon");
	}
	
	/*取得上一步 INSERT 操作产生的 ID*/
	public function insert_id() {
		return mysql_insert_id();
	}
	
	// 根据insert,update,delete执行结果取得影响行数
	public function db_affected_rows() {
		return mysql_affected_rows();
	}

	//释放结果集
	public function free() {
		@ mysql_free_result($this->result);
	}
	
	//析构函数，自动关闭数据库,垃圾回收机制
	public function __destruct() {
		if (!empty ($this->result)) {
			$this->free();
		}
		mysql_close($this->conn);
	} 
	
}
	
	
