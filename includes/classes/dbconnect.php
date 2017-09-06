<?php

//Loads the ADODB Class file
require_once(DIR_DB_CLASS     . 'adodb.inc.php');

class DataConnect {

    //Variables to store instances of this class
    var $db, $core;
    
    //The Data Access constructor.
    function DataConnect() {
    
		$this->db = ADONewConnection(DATABASE_TYPE); 
		
		$this->db->debug = false; 
		
		$this->db->Connect(DATABASE_SERVER, DATABASE_USER, DATABASE_PASS, DATABASE_NAME) or die("Can't Connect to the Database"); 
        
        //$this->db           = &ADONewConnection(DATABASE_TYPE);
        //$this->db->debug    = false;
        
        }
   
    //returns the DB connection
    function GetConnection() {
        return $this->db;
    }
    
    
}
?>