<html>
<head>
<title>Validation Stage</title>
</head>
</html>
<?php
//$user = array ("name"=>"","email"=>"","dob"=>"","bgroup"=>"","gender"=>"","degree"=>"");


	if(isset($_POST['name']))
	{
		if($_POST['name'] == "")
		{	
			echo "No name was given";
			echo "<html><center><a href='form1.html'> [Back] </a> </html>";
		}
		else
		{	$wordCount = 0; $letterError = 0; $letterCount = 0;
			foreach(str_split($_POST['name'],1) as $value)
			{
				if(($value >= 'a' && $value <= 'z') or ($value >= 'A' && $value <= 'Z') or $value == " ")
				{
					if($value != " " ){$letterCount += 1;}
					else
					{
						if($letterCount > 0 )
						{ 
							$wordCount += 1;
							$letterCount = 0;
						}
					}
				}
				else
				{
					$letterError += 1;
				}
			}
			
			if($letterCount > 0)
			{
				$wordCount += 1;
			}
			
			if(($wordCount >= 2) && ($letterError == 0))
			{
				//$user["name"] = $_POST['name'];
				echo "Name: ".$_POST['name'];
				echo "<html><center><a href='form2.html'> [Next] </a> </html>";
			}
			else
			{
				if($letterError > 0)
				{
					echo "Name can only have letter and space"."<br>";
				}
				if($wordCount < 2)
				{
					echo "Name must have 2 parts";
				}
				echo "<html><center><a href='form1.html'> [Back] </a> </html>";
			}
		}
		
	}
	
	if(isset($_POST['email']))
	{
		if($_POST['email'] == "")
		{	
			echo "No mail address was given";
			echo "<html><center><a href='form2.html'> [Back] </a> </html>";
		}
		else
		{	$dotCount = 0; $letterError = 0; $atCount = 0; $validity = 0;
			foreach(str_split($_POST['email'],1) as $value)
			{
				if(($value >= 'a' && $value <= 'z') or ($value >= 'A' && $value <= 'Z') or ($value == '@') or ($value == '.'))
				{
					if($value == '@' ){$atCount += 1;}
					if($value == '.' ){$dotCount += 1;}
				}
				else
				{
					$letterError += 1;
				}
			}
			
			if(($dotCount == 1) && ($letterError == 0) && ($atCount == 1))
			{
				$check = explode('.',$_POST['email']);
				if ($check[1] == "com" || $check[1] == "org")
				{
					$validity = 1;
				}
			}
			
			if($validity == 0)
			{
				echo "Invalid email, follow the hint"."<br>";
				echo "<html><center><a href='form1.html'> [Back] </a> </html>";
			}
			else
			{
				//$user["email"] = $_POST['email'];
				echo "Email: ".$_POST['email'];
				echo "<html><center><a href='form3.html'> [Next] </a> </html>";
			}
		}
	}
	
	
	if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) )
	{
		if($_POST['date'] == "" or $_POST['month'] == "" or $_POST['year'] == "")
		{	
			echo "incomplete date!";
			echo "<html><center><a href='form3.html'> [Back] </a> </html>";
		}
		else
		{	
			$checkDate = 0; $checkMonth = 0; $checkYear = 0;
			
			if(($_POST['year'] >= 1953) && ($_POST['year'] <= 1998))
			{
				$checkYear = 1;
			}
			
			if(($_POST['month'] >= 1) && ($_POST['month'] <= 12))
			{
				$checkMonth = 1;
			}
			
			if ($checkYear == 1 && $checkMonth == 1)
			{
				if((($_POST['year'] % 4) == 0) && ($_POST['month'] == 2))
				{
					if(($_POST['date'] >= 1) && ($_POST['date'] <= 29))
					{
						$checkDate = 1;
					}
				}
				else
				{
					if(($_POST['month'] == 2) && (($_POST['date'] >= 1) && ($_POST['date'] <= 28)))
					{
						$checkDate = 1;
					}
					elseif((($_POST['month'] == 1)or($_POST['month'] == 3)or($_POST['month'] == 5)or
							($_POST['month'] == 7)or($_POST['month'] == 8)or($_POST['month'] == 10)or
							($_POST['month'] == 12)) && (($_POST['date'] >= 1) && ($_POST['date'] <= 31)))
					{
						$checkDate = 1;
					}
					else
					{
						if(($_POST['month'] != 2) &&(($_POST['date'] >= 1) && ($_POST['date'] <= 30)))
						{
							$checkDate = 1;
						}
					}
				}
				
			}
			
			if(($checkDate == 1) && ($checkMonth == 1) && ($checkYear == 1))
			{
				//$user["dob"] = $_POST['date']."/".$_POST['month']."/".$_POST['year'];
				echo "Date of Birth : ".$_POST['date']."/".$_POST['month']."/".$_POST['year']."<br>";
				echo "<html><center><a href='form4.html'> [Next] </a> </html>";
			}
			else
			{
				echo "invalid date!";
				echo "<html><center><a href='form3.html'> [Back] </a> </html>";
			}
		}
		
	}
	
	
	if(isset($_POST['gender']))
	{
		if($_POST['gender'] != "nill")
		{
			//$user["gender"] = $_POST['gender'];
			echo"Gender : ".$_POST['gender'];
			echo "<html><center><a href='form5.html'> [Next] </a> </html>";
		}
		else
		{
			echo "Must select an option";
			echo "<html><center><a href='form4.html'> [Back] </a> </html>";	;
		}
	}
	
	
	if(isset($_POST['ssc']) || isset($_POST['hsc']) || isset($_POST['bsc']) || isset($_POST['msc']))
	{
		$countDegree = 0;
		if(isset($_POST['ssc']))
		{
			$countDegree += 1;
		}
		if(isset($_POST['hsc']))
		{
			$countDegree += 1;
		}
		if(isset($_POST['bsc']))
		{
			$countDegree += 1;
		}
		if(isset($_POST['msc']))
		{
			$countDegree += 1;
		}
		
		if($countDegree >= 2)
		{
			echo "Degree : "."<br>";
			if(isset($_POST['ssc']))
			{
				//$user["degree"] = $_POST['degree'];
				echo $_POST['ssc']."<br>";
			}
			if(isset($_POST['hsc']))
			{
				//$user["degree"] += $_POST['degree'];
				echo $_POST['hsc']."<br>";
			}
			if(isset($_POST['bsc']))
			{
				//$user["degree"] += $_POST['degree'];
				echo $_POST['bsc']."<br>";
			}
			if(isset($_POST['msc']))
			{
				//$user["degree"] += $_POST['degree'];
				echo $_POST['msc']."<br>";
			}
			echo "<html><center><a href='form6.html'> [Next] </a> </html>";
		}
		else
		{
			echo "At least two degree needed";
			echo "<html><center><a href='form5.html'> [Back] </a> </html>";	;
		}
	}
	
	
	
	if(isset($_POST['bgroup']))
	{
		if($_POST['bgroup'] != "nill")
		{
			echo '<form action="form7.php" method="POST"><fieldset><legend>Blood Group</legend><input type="hidden" name="userinfo" value = $user>
			<p align="center">'.$_POST['bgroup'].'</p></fieldset></form>';
		}
		else
		{
			echo "Must select a group";
			echo "<html><center><a href='form6.html'> [Back] </a> </html>";	;
		}
	}
	
	
	
?>