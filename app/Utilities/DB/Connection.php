<?php
namespace App\Utilities\DB;

use App\Utilities\Contracts\ConnectionContract;

class Connection implements ConnectionContract{

	public static $instance;

	protected $sql;

	protected $conn;

	protected $dbName;

	protected $dbPass;

	protected $host;

	protected $user;

	protected $result;

    protected $configPath = __DIR__.'/../../../config';

	

	public static function getInstance(){
		if (self::$instance instanceOf self) {
			return self::$instance;
		}else{
			self::$instance = new Connection;
			self::$instance->getConfig()->connect();
			return self::$instance;
		}

	}

	protected function getConfig(){
		// if (file_exists($this->configPath)) {
			// include($this->configPath);
		// $this->dbName = DBNAME;
		// $this->dbPass = DBPASS;
		// $this->host = DBHOST;
		// $this->user = DBUSER;

		// return $this;
		// }
		// else{
		// 	throw new \Exception("config file not found", 1);
			
		// }

		$this->dbName = config('database.DBNAME');
		$this->dbPass = config('database.DBPASS');
		$this->host = config('database.DBHOST');
		$this->user = config('database.DBUSER');
		$this->port = config('database.DBPORT');

		return $this;
		
	}

	protected function connect(){

// 		Connection usin PostgreSQL
//		$db_connection = pg_connect("host=localhost dbname=dbname user=username password=password");

// 		$this->conn = pg_connect($this->host $this->port $this->dbName $this->user $this->dbPass);
// 		$host        = "host = ec2-54-157-234-29.compute-1.amazonaws.com";
// 		$port        = "port = 5432";
// 		$dbname      = "dbname = d4rg9rmpa4q9or";
// 		$credentials = "user = wdsbntrykrxisx password=3193407753c309de6d805b56bf1b1b9cc0dfda70772e6c7f87eb86daa35e32c6";
// 		$this->conn = mysqli_connect( "$host $port $dbname $credentials"  ); 
		
		$db_host        = 'www.db4free.net';
		$db_user        = 'sammy_db';
		$db_pass        = 'password';
		$db_database    = 'cbt_technologies'; 
		$db_port        = '3306';

		$this->conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);
		
// 		$this->conn = mysqli_connect($this->host,$this->user,$this->dbPass,$this->dbName, $this->port);
		echo $this->conn;
		
		if (!$this->conn) {
			throw new \Exception("Failed to connect: ".mysqli_connect_error());
			
		}
		return $this;
	}

	public function getOne($sql){
		$this->result = pg_query($this->conn,$sql);
		return pg_fetch_assoc($this->result);

	}

	public function getMany($sql){
		$this->result = pg_query($this->conn,$sql);
		$results = pg_fetch_all($this->result, MYSQLI_ASSOC);
		pg_free_result($this->result); //free result

		return  $results;
	}

	public function getLast(){

	}

	public function getFirst(){

	}
	
	public function pushInsert($sql) :bool
	{
		return pg_query($this->conn,$sql);
	}
	public function deleteData($sql) :bool
	{
		return mysqli_query($this->conn, $sql);
	}
	public function updateData($sql){
		return mysqli_query($this->conn, $sql);
	}
	public function closeconn(){
		return mysqli_close($this->conn); 
	}
	public function getConnection(){
		return mysqli_connect($this->host,$this->user,$this->dbPass,$this->dbName);

	}
}
