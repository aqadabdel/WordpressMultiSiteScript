<?php

$fd = fopen("input.csv",'r');
$row = 0;
$output = "#!/bin/bash\n";

while(( $data = fgetcsv($fd, 1000, ";") ) !== FALSE) {
		$num = count($data);
		#echo "<p> $num fields in line $row</br></p>\n";
		if($row == 0)
		{
			$header_url = $data[0];
			$header_sitename = $data[1];
			$header_student_login = $data[2];
			$header_student_pw = $data[3];
			$header_mail = $data[4];
			$header_admin_login = $data[5];
			$header_admin_pw= $data[6];
			
			$output .= "# $header_url |$header_sitename | $header_student_login | $header_student_pw |
			 $header_mail | $header_admin_login | $header_admin_pw \n";
	 		$row++;
			continue;	
		}	
		#echo "$header_url $header_sitename $header_student_login $header_student_pw $header_admin_login $header_admin_pw";		
		$row++;
		#print_r($data);


		$url = $data[0];
        $suburl = $data[1];
        $student_login = str_replace('_','',$data[2]);
        $student_pw = $data[3];
                
		$mail = $student_login . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . '@etu.gea';
		$admin_login = $data[5];
                $admin_pw= $data[6];
		$admin_mail = $admin_login . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . '@admin.gea';

		$output .= "wp site create --slug=$suburl --allow-root\n";
		$output .= "wp user create $student_login $mail --role=author --allow-root\n";
		$output .= "wp user update $student_login $mail --user_pass=\"$student_pw\" --allow-root\n";
		$output .= "wp user update $student_login $mail --role=author --url=$url --allow-root\n"; 
		$output .= "wp user create $admin_login $admin_mail --role=administrator --url=$url --user_pass=$admin_pw --allow-root\n";
		$output .= "wp user update $admin_login $admin_mail --role=administrator --url=$url --user_pass=$admin_pw --allow-root\n";

	}
	fclose($fd);
	$fd =fopen('genusers.sh','w+');
	fwrite($fd, $output);
	fclose($fd);
	$output = "";

?>
