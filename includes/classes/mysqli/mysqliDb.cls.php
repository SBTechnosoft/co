<?php
/**
* support/OracleDriver.class.php
* @author banti badami
* @documentation This class only works as interpreter, works directly with the database.
*/
class mysqliDb
{
		//Atributes
		#This is the service name registered in Oracle client
		var $tnsName;              
		#This is the user name
		var $user;                 
		#This is the user's password
		var $pass;                 
        #This is the database Name
        var $dbName;
		#This is the database connection variable
		var $conn;
		#Is already connected?
		var $connectionStatus;
		var $rsQry; 

		//public function to set common oracle return functions...
		var $sql;
		var $no_of_rows;
		var $no_of_colums;

		/** 
		 * It is the class constructor. Inits the connection with the database.
		 * The parameters are:
		 * -tns (Oracle's service name)
		 * -usr (User name)
		 * -pwd (password)
		 */
         
		function __construct($tns = TNS, $usr = DB_SERVER_USERNAME, $pwd = DB_SERVER_PASSWORD,$dbName = DB_NAME) 
        {
			$this->connectionStatus = false;
			$this->connect($tns, $usr, $pwd,$dbName);
		}
		
		/**
		 * It is the class destructor, free the connections
		 */
		function __destruct() 
        {
			$this->conn_close();
		}

		/**
		 * Connects with the database (opens a connection port between the mysql server and the apache server).
		 * The parameters are:
		 * -tns (It is the mysql's database service)
		 * -usr (It is the username)
		 * -pwd (It is the user's password)
		 */
         
		function connect($tns = TNS, $usr = DB_SERVER_USERNAME, $pwd = DB_SERVER_PASSWORD,$dbName = DB_NAME) 
        {     
              
			$this->setTns($tns);
			$this->setUser($usr);
			$this->setPass($pwd);
            $this->setDb($dbName);
            
			if($this->conn = mysqli_connect($this->tnsName ,$this->user, $this->pass,$this->dbName)) 
            {
                // if(!mysqli_select_db($this->dbName))
                // {
                    // $this->connectionStatus = false;
                    // return;
                // }
				$this->connectionStatus = true;
			}
		}
        
		/**
		 * Closes the connection port with the database
		 */
         
		function conn_close() 
        {
			mysqli_close($this->conn);
			unset($this->conn);
			$this->connectionStatus = false;
		}
        
        
		/**
		 * Input :
		 * $start  -- The number of initial rows to ignore when fetching the result (default value of 0, to start at the first line)
		 * $end  -- The number of rows to read, starting at the skip th row (default to -1, meaning all the rows).
		 * Output : 
		 * $temp with resulted row in an array. 
		 */ 
		function getResultArray($sql,$start=false,$end=false)
        {   
            $temp=array();
            $row = array();
            
			if($this->rsQry = $this->parse($sql)) 
            {
				$this->sql =  $sql;
                $i=0;
			    while($row = mysqli_fetch_array($this->rsQry,mysqli_ASSOC))
                {
                    $temp[$i] = $row;
                    $i++;
                }	
			}
            else
            { 
				return 0x00;  
			}
            $this->no_of_rows = $this->getNRows();
            $this->no_of_colums = $this->getNCols();
			$this->close();
			return $temp;
		}
        
		/**
		 * To Insert data into database and return no of rows affected if successful.
		 * Input :
		 * @sql: sql insert statement
		 * @output : no of rows inserted on success or oci_error on failure
		 */ 
		function insertQuery($sql)
        {
			if($this->rsQry = $this->parse($sql)) 
            {
				$this->sql =  $sql;
				
				$this->no_of_rows = $this->getNRows();
		        $this->no_of_colums = $this->getNCols();   //Fetch no of rows affected....
				$this->close();
				return  true;				
			}
            else
            { 
                //echo "Exit Part";
				return 0x00;  
			}
		}
        
		/**
		 * Get Number of rows..
		 */
		function getNRows() 
        { 
            if($this->rsQry)
            {
                return true;
            }
            else
            {
			    return mysqli_num_rows($this->rsQry);
            }
		}
	
		/**
		 * get No of columns...
		 */
         
		function getNCols() 
        {
            if($this->rsQry)
            {
                return true;
            }
            else
            {
			    return mysqli_num_fields($this->rsQry);
            }
		}
	    
		/**
		 * Close the variable rsQuery....
		 */
         
		function close() 
        {
            if($this->rsQry==false)
            {
			    mysqli_free_result($this->rsQry);
			    unset($this->rsQry);
            }
		}
	
		/**
		 * Stablish a service name
		 */
		function setTns($tns) 
        {
			$this->tnsName = ((empty($tns)) ? "localhost" : $tns);
		}
	
		/**
		 * Stablish a name for the user (this will works as schema as well)
		 */
		function setUser($usr) 
        {
			$this->user = ((empty($usr)) ? "root" : $usr);
		}
	
		/**
		 * Stablish a new password for a user in the schema
		 */
		function setPass($pwd) 
        {
			$this->pass = $pwd;
		}
	
        /**
        * Stablish a new database Name for a connection 
        */
        function setDb($dbName)
        {
            $this->dbName = ((empty($dbName)) ? "innodb" : $dbName);
        }
		/**
		 * Get the TNS name
		 */
		function getTns() 
        {
			return $this->tnsName;
		}

		/**
		 * Get the User name
		 */
		function getUser() 
        {
			return $this->user;
		}

		/**
		 * Get the Password
		 */
		function getPass() 
        {
			return $this->pass;
		}

		/**
		 * Verifies the kind of query to be realized
		 */
         
		function parse($sql) 
        {
            return mysqli_query($sql);
			//return @oci_parse($this->conn, $sql);
		}

		/**
		 * This will give us the connection status...
		 */
		function getConnStatus() 
        {
			return $this->connectionStatus;
		}
	}
?>     