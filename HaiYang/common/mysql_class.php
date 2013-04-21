<?php

class MySQL {
	private $host;
	private $name;
	private $pass;
	private $database;
	private $charset;
	private $result;
	private $conn;
	
	/*���캯��*/
	function __construct($host,$name,$pass,$database,$charset) {
		$this->host    =  $host;
		$this->name    =  $name;
		$this->pass    =  $pass;
		$this->database   =  $database;
		$this->charset =  $charset;
		$this->connect();

	}
	
	/*���ݿ�����*/
	function connect() {
		$conn = mysql_connect($this->host,$this->name,$this->pass)or die($this->error());
		$this->conn = $conn;
		mysql_select_db($this->database,$conn) or die("�޸����ݿ�".$this->database);
		mysql_query("SET NAMES '$this->charset'");
		
	}
	/*���ݿ�ִ����䣬��ִ�в�ѯ����޸�ɾ�����κ�sql���*/
	function query($sql) {
		if(!($query = mysql_query($sql))) $this->show('����SQL���:', $sql);
		$this->result = $query;
		return $this->result;
	}
	
	/*��������µ����ݿ�*/
	public function create_database($database_name) {
		$database = $database_name;
		$sqlDatabase = 'create database ' . $database;
		$this->query($sqlDatabase);
	}
	//�������SQL���
	function show($message = '', $sql = '') {
		if(!$sql) echo $message;
		else echo $message.'<br>'.$sql;
	}
	
	/*
	 mysql_fetch_row()    array  $row[0],$row[1],$row[2]
	mysql_fetch_array()  array  $row[0] �� $row[id]
	mysql_fetch_assoc()  array  ��$row->content �ֶδ�Сд����
	mysql_fetch_object() object ��$row[id],$row[content] �ֶδ�Сд����
	*/
	
	//�򻯲�ѯselect
	public function findall($table) {
		$this->query("SELECT * FROM $table");
	}
	
	
	//�򻯲���insert
	function fn_insert($table,$name,$value){
		$this->query("insert into $table ($name) value ($value)");
	}
	
	//��ɾ��del
	function fn_delete($table,$condition) {
		$this->query("delete from $table where $condition");
	}
	
	//���޸�update
	function fn_update($table,$mod_content,$conditon) {
		$this->query("update $table set $mod_content where $conditon");
	}
	
	/*ȡ����һ�� INSERT ���������� ID*/
	public function insert_id() {
		return mysql_insert_id();
	}
	
	// ����insert,update,deleteִ�н��ȡ��Ӱ������
	public function db_affected_rows() {
		return mysql_affected_rows();
	}

	//�ͷŽ����
	public function free() {
		@ mysql_free_result($this->result);
	}
	
	//�����������Զ��ر����ݿ�,�������ջ���
	public function __destruct() {
		if (!empty ($this->result)) {
			$this->free();
		}
		mysql_close($this->conn);
	} 
	
}
	
	
