<?php
class SessionAdm
{
	var $db;
	var $min_logout_time;
	function SessionAdm()
	{
		$this->db = ADONewConnection(DATABASE_TYPE); 
		$this->db->debug = false; 
		$this->db->Connect(DATABASE_SERVER, DATABASE_USER, DATABASE_PASS, DATABASE_NAME) or die("Can't Connect to the Database->". DATABASE_NAME ." @ Server->". DATABASE_SERVER ." Using {". DATABASE_USER ."/". DATABASE_PASS ."}"); 
		
		
		$this->min_logout_time = 1200;
	}
	
	function admin_verifylogin($fUser,$fPass)
	{
	
		$fPass = md5($fPass);
		$sel_qry = "select * from admin where username='$fUser' and password='$fPass'";
		$rslt=$this->db->GetRow($sel_qry);
		
		$username=$rslt["username"];
		$password=$rslt["password"];
		$adminid = $rslt["id"];
		$lastlogin = $rslt["currentlogin"];
		
		if($fUser==$username and $fPass==$password)// valid entry
		{
			$time=time();
			
			$_SESSION['admin_userid'] = $adminid;
			$_SESSION['admin_time'] = $time;
			
			$mysql = "update admin set lastlogin='$lastlogin',currentlogin='$time' where id='$adminid'";
			$this->db->Execute($mysql);
			
			return $adminid;	
		}
	}
	
	function admin_checksession()
	{
		$adminid=$_SESSION['admin_userid'];
		$time = $_SESSION['admin_time'];
		
		$min_logout_time=$this->min_logout_time;
		$min=$min_logout_time*60;
    	if((time() - $time ) > $min )
    	{
      		$this->redirect("Session timed out!");
    	}
   		else
    	{
		    $timestmp=time();
  			$_SESSION['admin_time'] = $timestmp;
    	}
	}
	
	function redirect($mess)
	{
		
		$HTML = "<html>
               <head>
                 <title>Redirecting...</title>
	                 <meta http-equiv='refresh' content='2; URL=login.php' level='_parent'>
				   <link REL='stylesheet' HREF='css/style_admin.css' TYPE='text/css'>
                 </head>
                 <body> ";

    		$HTML .= "<center><p>&nbsp;</p><p class=\"genblack\"><b>$mess</b></p></center> ";

    		$HTML .= "<center><p  class=\"genblack\">If your browser cannot load the url, <a href='login.php'>click here to continue</a>.</p><p>&nbsp;</p></center>";

    		$HTML .= "</body></html>";
	    	
    		echo $HTML;
    		exit;
		
	}
	
	function user_verifylogin($fUser,$fPass)
	{
		global $db;
		$fPass = md5($fPass);
		$sel_qry = "select * from users where email='$fUser' and password='$fPass'";
			
		$rslt =$db->GetRow($sel_qry);
	
		 $username=$rslt['email'];
		 $password=$rslt['password'];
		 $uid = $rslt['id'];
		
		if(strtolower($fUser)==strtolower($username) and $fPass==$password)// valid entry
		{
			$time=time();
			
			$_SESSION[s_userid] = $uid;
			
			$_SESSION[s_time] = $time;			
			
			return $uid;		
		}
	   	else
			return 0;
		
	}
	
	
	function user_checksession()
	{
		$uid=$_SESSION[s_userid];
		$time = $_SESSION[s_time];
 
		$min_logout_time=$this->min_logout_time;
		$min=$min_logout_time*60;
    	if((time() - $time ) > $min )
    	{
      		return "fail";
    	}
   		else
    	{
		    $timestmp=time();
  			$_SESSION[s_time] = $timestmp;
    	}
	}
	
	function user_logged($url)
	{
		$s_user_id = $_SESSION[s_userid];

		if($s_user_id)
		{
			$this->user_checksession();
			
			if($this->user_checksession() == "fail")
			{
				unset($_SESSION[s_userid]);
				unset($_SESSION[s_time]);
				$_SESSION[d_msg] = "Session Timed Out";
				header("Location: ".$url);
				exit;			
			}
			
		}
		else
		{
			header("Location: ".$url);
			exit;
		}
		return $s_user_id;
	}
	
	function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
		  $ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
		  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	
}
?>