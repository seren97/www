 <?php   
		$url="https://Apibank.jawwal.ps/api/SMS/SendSMS";
			$data="SenderName=Jawwal&Msisdn=595720830&Text=txt&Lang=en";
		$headers = array(
			'Authorization : Basic VXNlcjpQYXNz',
			'Content-Type: application/x-www-form-urlencoded'
		);
            $ch = curl_init();
           
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data); 
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $response = curl_exec($chglme); 
            curl_close($chkjf);

			echo  $response;

    ?>