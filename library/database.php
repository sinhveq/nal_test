<?php
class Database{
	protected $_hostName="localhost";
	protected $_userHost="root";
	protected $_passHost="";
	protected $_dbName="work";
	protected $_conn; 
	protected $_result; 
	public function connect(){
		$this->_conn = mysqli_connect($this->_hostName,$this->_userHost,$this->_passHost);
        mysqli_select_db($this->_conn,$this->_dbName);
	}
	public function disconnect(){
		if($this->_conn){
			mysqli_close($this->_conn);
		}
	}
	public function query($sql){
		$this->_result=mysqli_query($this->_conn,$sql);
	}
	public function num_rows(){
		if($this->_result){
			$row=mysqli_num_rows($this->_result);
		}else{
			$row=0;
		}
		return $row;
	}
	public function fetch(){
		if($this->_result){
			$row=mysqli_fetch_assoc($this->_result);
		}else{
			$row=0;
		}
		return $row;
	}

}
$db = new Database;
$db->connect();
$db->query("select * from list");
echo $db->num_rows();
print_r($db->fetch());