

<?php

function decoder($bytes)
{
if(strlen($bytes) == 1)
       	{
 	    if(ord($bytes[0]) == 1)
	    {
               return "{'button': 'activated'}";
	    } else
	    {
	            return "{'error': 'button action unknown'}";
            }
}   
	    else if(strlen($bytes) == 4) 
	{
   	 $humidity = hexdec(bin2hex($bytes[2].$bytes[3])) ;
  	 $temperature = hexdec(bin2hex($bytes[0].$bytes[1])) ;
  	 return "humidity: $humidity, temperature: $temperature ";
	} else 
	{
           return "{'error': 'payload unknown'}";
	}
}


$abc=mysqli_connect('localhost','root','tranhieu123','phpmyadmin');
if(!$abc)
{
    echo "ket noi khong thanh cong";
}
else
{
    mysqli_set_charset($abc,'utf-8');


//echo "ok";
}

?>
<h1>READ TABLE SENSOR DATA </h1>
<?php
echo $humidity;
  $query = "SELECT * FROM sensor_data_2";
  $result = mysqli_query($abc, $query);
   if(mysqli_num_rows($result)>=0){
?>
<table border="1px";align="center">
        <thead>
       <tr>
                  <td bgcolor="#E6E6FA">ID</td>
	          <td bgcolor="#E6E6FA">hardware_serial</td>
	          <td bgcolor="#E6E6FA">port</td>
                  <td bgcolor="#E6E6FA">counter</td>
		  <td bgcolor="#E6E6FA">payload_raw</td>
                  <td bgcolor="#E6E6FA">temperature</td>
		  <td bgcolor="#E6E6FA">humidity</td>
 		  <td bgcolor="#E6E6FA">time</td>
 		  <td bgcolor="#E6E6FA">frequency</td>
		  <td bgcolor="#E6E6FA">modulation</td>
		  <td bgcolor="#E6E6FA">data_rate</td>
		  <td bgcolor="#E6E6FA">airtime</td>
		  <td bgcolor="#E6E6FA">coding_rate</td>
  		  <td bgcolor="#E6E6FA">gateways</td>

        <tr>

        <thead>
<tbody>
<?php
	  // echo $humidity;

	            while ($row = mysqli_fetch_assoc($result)) {
			             $i = 0;

				      //     echo " $row['id'] ."<br>";
				          ?>
				               <thead>
				                        <tr>
				                        <td><?php echo  $row['id'] ?></td>
							<td><?php echo  $row['hardware_serial'] ?></td>
							<td><?php echo  $row['port'] ?></td>
							<td><?php echo  $row['counter'] ?></td>

							<td><?php echo decoder($row['payload_raw']) ?></td>
			 				<td><?php echo $row['temperature'] ?></td>
							<td><?php echo $row['humidity'] ?></td>

							<td><?php echo  $row['time'] ?></td>
							<td><?php echo  $row['frequency'] ?></td>
							<td><?php echo  $row['modulation'] ?></td>
							<td><?php echo  $row['data_rate'] ?></td>
							<td><?php echo  $row['airtime'] ?></td>
							<td><?php echo  $row['coding_rate'] ?></td>
							<td><?php echo  $row['gateways'] ?></td>
						
							<tr>
				        <thead>
				        <?php
				     
				        $i++;
				     
				     
				     
				     
				        }
				        ?>
				        </tbody>
				        </table>
				        <?php
				        } else {
				                echo "khong co bang nao";
				                }
				     
?>
<?php 
 //   $sql= " INSERT INTO sensor_data_2 (temperature)
   //    VALUES ('20')";
     //  if ($abc->query($sql) === TRUE) {
//	           echo "New record created successfully";
  //     } else {
//	           echo "Error: " . $sql . "<br>" . $abc->error;
  //     }

 // $abc->close();
 ?> 
