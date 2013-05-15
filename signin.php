<?php
	session_start();
	include ("db.php");

		$username = $_POST['username'];
		$pass = $_POST['password'];
		
		$password = md5($pass);
		
		
		$sql = "SELECT * FROM user
				WHERE UserName = '$username' AND Password  = '$password'";
		$res = mysql_query($sql);
		
		if (mysql_num_rows($res) == 0)
			{
				$userSql = "SELECT UserName FROM user
							WHERE UserName = '$username'";
				$userRes = mysql_query($userSql);
							
				if (mysql_num_rows($userRes) == 0)
				{
					header("location: index.php?err=u");
				}
				else
					header("location: index.php?err=p");
			}
		else
		{
			$_SESSION['username'] = $username;
			while ($row = mysql_fetch_array($res))
			{	
				$firstName = $row['FirstName'];
				$lastName = $row['LastName'];
				$branch = $row['BranchId'];
				$admin = $row['Admin'];
				$isTeamLead = $row['IsTeamLead'];
				$reportTo = $row['ReportTo'];
				$userId = $row['Id'];
				
				$_SESSION['userId'] = $userId;
				$_SESSION['firstName'] = $firstName;
				$_SESSION['lastName'] = $lastName;
				$_SESSION['branch'] = $branch;
				$_SESSION['admin'] = $admin;
				$_SESSION['isTeamLead'] = $isTeamLead;
				$_SESSION['reportTo'] = $reportTo;
			}
			
			header("location: landing.php");
		}

?>