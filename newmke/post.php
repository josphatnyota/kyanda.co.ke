<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	function get_data() {
		$name = $_POST['PhoneNo'];
		$file_name='reg'. '.json';

		if(file_exists("$file_name")) {
			$current_data=file_get_contents("$file_name");
			$array_data=json_decode($current_data, true);
							
			$extra=array(
				'PhoneNo' => $_POST['PhoneNo'],
                'Email' => $_POST['Email'],
				'SuperMerchantCode' => $_POST['SuperMerchantCode'],
				'BusinessName' => $_POST['BusinessName'],
				'Street' => $_POST['Street'],
				'BusinessProvince' => $_POST['BusinessProvince'],
				'BusinessMunicipality' => $_POST['BusinessMunicipality'],
				'BusinessLocalMunicipality' => $_POST['BusinessLocalMunicipality'],
				'RegNo' => $_POST['RegNo'],
				'BusinessType' => $_POST['BusinessType'],
				'Industry' => $_POST['Industry'],
				'BusinessNature' => $_POST['BusinessNature'],
				'BankName' => $_POST['BankName'],
				'Branch' => $_POST['Branch'],
				'AccName' => $_POST['AccName'],
				'AccNo' => $_POST['AccNo'],
				'Surname' => $_POST['Surname'],
				'OtherNames' => $_POST['OtherNames'],
				'Telephone' => $_POST['Telephone'],
				'BusinessEmail' => $_POST['BusinessEmail'],
				'IdType' => $_POST['IdType'],
				'IdNo' => $_POST['IdNo'],
				
			);
			$array_data[]=$extra;
			echo "file exist<br/>";
			return json_encode($array_data);
		}
		else {
			$datae=array();
			$datae[]=array(
				'PhoneNo' => $_POST['PhoneNo'],
				'Email' => $_POST['Email'],
			);
			echo "file not exist<br/>";
			return json_encode($datae);
		}
	}

	$file_name='reg'. '.json';
	
	if(file_put_contents("$file_name", get_data())) {
		header("Location: success.html");
	}				
	else {
		header("Location: 404.html");			
	}

    if (isset($_POST['submit']) != "") {
        $name = $_FILES['tax']['name'];
        $name2 = $_FILES['extra']['name'];
        $name4 = $_FILES['photo']['name'];
        $name3 = $_FILES['cert']['name'];
        $temp = $_FILES['tax']['tmp_name'];
        $temp2 = $_FILES['extra']['tmp_name'];
        $temp3 = $_FILES['cert']['tmp_name'];
        $temp4 = $_FILES['photo']['tmp_name'];

        move_uploaded_file($temp, "files/" . $name);
        move_uploaded_file($temp2, "files/" . $name2);
        move_uploaded_file($temp3, "files/" . $name3);
        move_uploaded_file($temp4, "files/" . $name4);


    }


}

	
?>
