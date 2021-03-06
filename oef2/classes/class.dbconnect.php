<?php

	
	define('SQL_ASSOC', MYSQL_ASSOC);
	define('SQL_NUM', MYSQL_NUM);
	define('SQL_BOTH', MYSQL_BOTH);
	define('CRLF', "\r\n");
	class dbconnect
	{
		var $showError;

		function dbconnect($file = '', $line = 0)
		{
			$host =DB_HOST;
			$user =DB_USERNAME;
			$pass =DB_PASS;
			$base =DB_NAME;
			if(!$this->dbc = @mysql_connect($host, $user, $pass))
			{
                $error = 'Cannot connect to MySQL server. In file '.$file.' in line '.$line.'. Date: '.date('Y-m-d H:i:s').'<br />'.CRLF;
				die($error);
			}
			if(!@mysql_query("USE ".$base, $this->dbc))
			{
				$error = 'Error <b>'.mysql_error($this->dbc).'</b> in query <b>'.$query.'</b>. In file '.$file.' in line '.$line.'. Date: '.date('Y-m-d H:i:s').'<br />'.CRLF;
				die($error);
			}
			$this->showError = true;
		}
		
		function query($query, $file = '', $line = 0)
		{
			if(!$result = @mysql_query($query, $this->dbc))
			{
                $error = 'Error <b>'.mysql_error($this->dbc).'</b> in query <b>'.$query.'</b>. In file '.$file.' in line '.$line.'. Date: '.date('Y-m-d H:i:s').'<br />'.CRLF;
				if($this->showError)
				{
					echo $error;
				}
			}
			return new dbcResult($result);
		}
		
		function query_bool($query, $file = '', $line = 0)
		{
			if(!$result = @mysql_query($query, $this->dbc))
			{
                $error = 'Error <b>'.mysql_error($this->dbc).'</b> in query <b>'.$query.'</b>. In file '.$file.' in line '.$line.'. Date: '.date('Y-m-d H:i:s').'<br />'.CRLF;
				if($this->showError)
				{
					echo $error;
				}
			}
			return ($result?true:false);
		}
		
		function insert_id()
		{
			$id = $this->firstCell("SELECT LAST_INSERT_ID() as id");
			return $id;
		}
		
		function fetch_array($query, $type = SQL_BOTH)
		{
			$result = $this->query($query);
			return $result->fetch_array($type);
		}
		function show_col($table, $type = SQL_ASSOC)
		{
			$result = $this->query("SHOW COLUMNS FROM $table");
			return $result->fetch_array($type);
		}
		
		function first_cell($query)
		{
			$result = $this->query($query);
			$row = $result->fetch_array(SQL_NUM);
			return $row[0];
		}
                
		
		function change_base($base, $file = '', $line = 0)
		{
			if(!$result = @mysql_query('USE '.$base, $this->dbc))
			{
                $error = 'Error <b>'.mysql_error($this->dbc).'</b> in query <b>'.$query.'</b>. In file '.$file.' in line '.$line.'. Date: '.date('Y-m-d H:i:s').'<br />'.CRLF;
				if($this->showError)
				{
					echo $error;
				}
			}
			return ($result?true:false);
		}
		
		function close()
		{
			@mysql_close($this->dbc);
			unset($this);
		}
	}
	
	class dbcResult
	{
		function dbcResult($result)
		{
			$this->result = $result;
		}
		
		function fetch_array($type = SQL_BOTH)
		{
			return @mysql_fetch_array($this->result, $type);
		}
		
		function first_cell()
		{
			$row = @mysql_fetch_row($this->result);
			return $row[0];
		}
		
		function num_rows()
		{
			return @mysql_num_rows($this->result);
		}
	}
?>
