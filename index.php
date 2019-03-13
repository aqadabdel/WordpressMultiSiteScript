<?php
//DEBUG

ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<html>
	<head>
		<title>MULTI GENERATOR</title>
     		 <!--Import Google Icon Font-->
      		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      		<!--Import materialize.css-->
      		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      		<!--Let browser know website is optimized for mobile-->
      		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	</head>
	<body>
	<div class="container">
<?php

$fd = fopen("file.csv",'r');
$row = 0;
	while(( $data = fgetcsv($fd, 1000, ";") ) !== FALSE) {
		$num = count($data);
		#echo "<p> $num fields in line $row</br></p>\n";
		if($row == 0)
		{
			echo "ENTETE DU TABLEAU\n";
			$header_url = $data[0];
			$header_sitename = $data[1];
			$header_student_login = $data[2];
			$header_student_pw = $data[3];
			$header_mail = $data[4];
			$header_admin_login = $data[5];
			$header_admin_pw= $data[6];
			
		echo "<table class='highlight'> 
		        <tr><th>$header_url 📌</th><th> $header_sitename 📍</th><th>$header_student_login 👩‍🎓 </th><th>$header_student_pw 🔑</th>
			<th>$header_mail 📧</th><th>$header_admin_login 👨‍🏫</th><th>$header_admin_pw 🔑</th></tr>";
			$row++;
			continue;	
		}	
		#echo "$header_url $header_sitename $header_student_login $header_student_pw $header_admin_login $header_admin_pw";		
		$row++;
		#print_r($data);


		$url = $data[0];
                $sitename = $data[1];
                $student_login = $data[2];
                $student_pw = $data[3];
                $mail = $data[4];
                $admin_login = $data[5];
                $admin_pw= $data[6];

		echo "<tr><td>$url</td><td>$sitename</td><td>$student_login</td><td>$student_pw</td><td>$mail</td><td>$admin_login</td><td>$admin_pw</td></tr>";
		
		

	}
echo "</table></div>";

?>

 <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>
