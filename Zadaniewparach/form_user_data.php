
<?php

		$acctype = $_POST['AT'];
		$firstName = $_POST['first'];
		$lastName = $_POST['last'];
		$country = $_POST['country'];
		$street = $_POST['street1'];
		$street2 = $_POST['street2'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['code'];
		$phone = $_POST['phone'];

		if (empty($acctype) || $acctype=='' || empty($city) || $city=='' || empty($firstName) || $firstName=='' || empty($lastName) || $lastName=='' || empty($country) || $country=='' || empty($street) || $street=='' || empty($state) || $state=='S' || empty($zip) || $zip=='' || empty($phone) || $phone==''){
			echo <<< FORM1
		    <h4>Nie wypełniłeś wymaganych pól</h4>
			<button onclick="goBack()">Powrót do formularza</button>
			<script>
			function goBack() {
			window.history.back();
			}
			</script>
	FORM1;

		}

		else {
			switch($acctype)
			{
				case 'P': {
				$acctype = 'Personal Account';
				break;}
				case 'B':
				{
				$acctype = 'Business Account';
				break;}
			}

			$zip=substr($zip,0,2)."-".substr($zip,2,3);
			$phone=substr($phone,0,3)." ".substr($phone,3,3)." ".substr($phone,6,3);

			echo <<< DANE
			<h2>User Data:</h2>
			Account : $acctype <br>
			First Name and Last Name : $firstName $lastName <br>
			Country : $country <br>
			Address 1 : $street <br>
			Address 2 : $street2 <br>
			Postal Code and City : $zip $city <br>
			State : $state <br>
			Phone : $phone <br>
	DANE;
		}

?>
