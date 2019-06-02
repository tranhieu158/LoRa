<head>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>

<body>
    <div class="dashboard">

        <div class="circle-container">
            <div class="circle">

                <div class="circle__content">


<?php
$abc=mysqli_connect('localhost','root','tranhieu123','phpmyadmin');
if(!$abc)
{
	                    echo "ket noi khong thanh cong";
}
else
	                {
				                                mysqli_set_charset($abc,'utf-8');



}
?>

<?php
$sql = mysqli_query($abc,"SELECT * FROM sensor_data_2 ORDER by id DESC LIMIT 1");

 $row = mysqli_fetch_row($sql);

//echo $row[0];
////echo "\n";
echo $row[5]."°C";
?>

                 </div>
                <div class="circle__lower-text">
                    Temperature
                </div>
            </div>
        </div>

        <div class="circle-container">
            <div class="circle">
                <div class="circle__content">
<?php

if($row[5]>32)
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
        curl_close ($ch);

sleep(10);
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



}
//else
//
////{
////echo "ok";
////}
$sql = mysqli_query($abc,"SELECT * FROM sensor_data_2 ORDER by id DESC LIMIT 1");

 $row = mysqli_fetch_row($sql);

//echo $row[0];
////echo "\n";
echo $row[6]."%";
?>

                </div>
                                <div class="circle__lower-text">
	 
					    Humidity
                                    </div>
                                 </div>
                                    </div>
                                       </div>
                        </body>
                                                                                            
