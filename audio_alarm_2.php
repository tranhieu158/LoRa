 <?php

 $mode=$_POST['mode'];

 if ($mode=='true') //mode is true when button is enabled 
 {
	 $ch = curl_init();

	 curl_setopt($ch, CURLOPT_URL, 'https://integrations.thethingsnetwork.org/ttn-asia-se/api/v2/down/devicecontrol/test?key=ttn-account-v2.u1DWDTC1tI_0RHj_k_LaOYa63AVQhHp6ohfllvoesHg');
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"dev_id\":\"device_control\",\"payload_raw\":\"AQ==\"}");
	 curl_setopt($ch, CURLOPT_POST, 1);

	 $headers = array();
	 $headers[] = 'Content-Type: application/x-www-form-urlencoded';
	 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	 $result = curl_exec($ch);
	 if (curl_errno($ch)) {
		     echo 'Error:' . curl_error($ch);
	 }
	// sleep(2);
	 curl_close ($ch);
	 sleep(1);
	 $ch = curl_init();

	 curl_setopt($ch, CURLOPT_URL, 'https://integrations.thethingsnetwork.org/ttn-asia-se/api/v2/down/esp32oled_lora/esp32_oled?key=ttn-account-v2.dj8ivMSffxg_uvhfMdGqfI0oK-vqXEouNRLQ_dny7gg');
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"dev_id\":\"esp32_oled_dht11\",\"payload_raw\":\"Ag==\"}");
	 curl_setopt($ch, CURLOPT_POST, 1);

	 $headers = array();
	 $headers[] = 'Content-Type: application/x-www-form-urlencoded';
	 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	 $result = curl_exec($ch);
	 if (curl_errno($ch)) {
		     echo 'Error:' . curl_error($ch);
	 }
	 curl_close ($ch);



 }
	  else if ($mode=='false')  //mode is false when button is disabled
	                 {
	 $ch = curl_init();

	 curl_setopt($ch, CURLOPT_URL, 'https://integrations.thethingsnetwork.org/ttn-asia-se/api/v2/down/devicecontrol/test?key=ttn-account-v2.u1DWDTC1tI_0RHj_k_LaOYa63AVQhHp6ohfllvoesHg');
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"dev_id\":\"device_control\",\"payload_raw\":\"AA==\"}");
	 curl_setopt($ch, CURLOPT_POST, 1);

	 $headers = array();
	 $headers[] = 'Content-Type: application/x-www-form-urlencoded';
	 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
 	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}

	curl_close ($ch);

	 curl_close ($ch);
	sleep(1);       
	$ch = curl_init();

	 curl_setopt($ch, CURLOPT_URL, 'https://integrations.thethingsnetwork.org/ttn-asia-se/api/v2/down/esp32oled_lora/esp32_oled?key=ttn-account-v2.dj8ivMSffxg_uvhfMdGqfI0oK-vqXEouNRLQ_dny7gg');
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"dev_id\":\"esp32_oled_dht11\",\"payload_raw\":\"Aw==\"}");
	 curl_setopt($ch, CURLOPT_POST, 1);

	 $headers = array();
	 $headers[] = 'Content-Type: application/x-www-form-urlencoded';
	 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	 $result = curl_exec($ch);
	 if (curl_errno($ch)) {
		     echo 'Error:' . curl_error($ch);
	 }
	 curl_close ($ch);
	     } 
      ?>
	 
