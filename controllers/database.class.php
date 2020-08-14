<?php
require_once "constants.php";
session_start();
class Database {
  
	public $connection;

	function __construct(){

		$this->open_db_connection();
	}

  private $db_host = "localhost"; 
  private $db_user = "root"; // Change as required
  private $db_pass = ""; // Change as required
  private $db_name = "fixit";


	public function open_db_connection(){
    $this->connection =  new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if ($this->connection->connect_errno) {
      die("Database connection failed" . $this->connection->connect_error);exit;
    }

  }

   /* 
    CONFIRM QUERY
  */
  private function confirm_query($result) {

		if(!$result){
			die("Query failed" . $this->connection->error);
		}

  }
  
  /* 
    CLEAN UP QUERY
  */
  public function escape_string($sql) {
		$escape_string = $this->connection->real_escape_string($sql);
		return $escape_string;
	}

   /* 
    QUERY
  */
  public function query($sql) {
    $this->connection->escape_string($sql);
    $result = $this->connection->query($sql);
		$this->confirm_query($result);
    return $result;
  }
  
  /* 
    INSERT QUERY
  */
  public function saveData($table, $sql){
      return $this->query("INSERT INTO " . $table . "  SET " . $sql);
  }

  
  /* 
  SELECT QUERY
  */
  public function selectData($table, $field = '*', $conditions = "", $column = ''){
    $rows = [];
		$fields = trim($field);
		$where = !empty($conditions) ? "WHERE" : "";
    $result = $this->query("SELECT " . $fields . " FROM " . $table . "  $where " . $conditions);
    $row_cnt = $result->num_rows;
		if (!empty($result)) {
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    }
	}

   /* 
  UPDATE QUERY
  */
  public function updateData($table, $sql, $conditions){
    $result = $this->query("UPDATE " . $table . "  SET " . $sql . " WHERE " . $conditions);
    return $result;
  }

   /* 
    DELETE QUERY
  */
  public function deleteData($table,$conditions){
    $result = $this->query("DELETE FROM " . $table . "  WHERE " . $conditions);
    return $result;
  }

  /***
   * GET LAST INSERTED ID
   */
  public function insert_id() {
		return mysqli_insert_id($this->connection);
  }
  
  /**
   * Undocumented function
   * function for mysqli_real_escape_string
   */
  public function escape($data) {
		return strtolower(trim(addslashes($this->connection->real_escape_string($data))));
	}
}

$db = new Database;