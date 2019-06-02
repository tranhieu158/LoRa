<?php

$hostname = "localhost";
$username = "root";
$password = "tranhieu123";
$database = "phpmyadmin";
$tabel    = "sensor_data_2";

// Create connection
 $conn = mysqli_connect($hostname, $username, $password, $database);
// // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());     }
  
     //set array variable
      $results = array();

     //talk to the db
 $sql="SELECT * FROM sensor_data_2 ORDER BY id DESC limit 100";
 
     $result = mysqli_query($conn, $sql);

     //count the rows and fields
     $totalRows = mysqli_num_rows($result);
     $totalFields = mysqli_num_fields($result);
//
//     //start the loop
    for ( $i = 0; $i < $totalRows; ++$i ) {

//     //make it 2 dim in case you change your order
       $results[$i] = mysqli_fetch_array($result); 
        }

        ?>

        <html>
          <head>  
	    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
                  <script type="text/javascript">
     google.load( 'visualization', '1', { 'packages': [ 'corechart' ] } );
                                   google.setOnLoadCallback( drawChart );
                                 
     function drawChart() {
                                                  var data = new google.visualization.DataTable();
						  
                                               data.addColumn( 'string', 'time' );
                                                                  data.addColumn( 'number', 'temperature' );

                                                                          data.addRows(200);



<?php



     $i = 0;

     $numofloops = 200;



     while($i < $numofloops){



	     echo "data.setValue($i, 0, '" . $results[$i]["time"] . "');";


	     echo "data.setValue($i, 1,  " . $results[$i]["temperature"] . ");";



	     $i++; 

     }


?>
var options = {title: 'Temperature',
                       vAxis: {title: "Temperature"},
                       hAxis: {title: "Date"},
		       colors: ['blue','#004411'] 
			};
 var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
 chart.draw( data, options);

}







   																									      
                                                                                           	  	  	            	  	  	                                                                             		    
                                                                                           	  	  	            	  	  	                                                                                                                                                 	  	  	            	  	  	                  </script>
                                                                                           	  	  	            	  	  	                                     </head>



																						
 <body>
																						
 <div id="chart_div" style="width: 1500px; height: 800px;"></div>
                                                                                           	  	  	            	  	  	                                      </body>
                                                                                           	  	  	            	  	  	                                      </html>

