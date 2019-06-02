<div style="background-color: rgba(255, 255, 255, 0.5); padding: 5px 5px 5px 5px">
                        <div id="header">
                                <center><h1>CONTROL DEVICE MONITOR SYSTEM</h1></center>
                        </div>
                </div>
<div style="background-color: rgba(79, 79, 79, 0.5); padding: 5px 40px 5px 40px ">
</html>
<div class="container">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <a href="index.php"><button type="button" class="btn btn-info">HOME</button></a>

  <a href="chart2_2.php"><button type="button" class="btn btn-success">Temperature</button></a>


  <a href="chart_2.php "><button type="button" class="btn btn-default">Humidity</button></a>
  <a href="databases_2.php"><button type="button" class="btn btn-primary">Database</button></a>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-link">Link</button>
</div>

<div style="background-color: rgba(0, 0, 0, 0)">
                        <div id="footer">
                                <div id="time">
                                        <script>
                                        function dongho()
                                        {
                                                var time = new Date();
                                                var gio = time.getHours();
                                                var phut = time.getMinutes();
                                                var giay = time.getSeconds();
                                                if (gio < 10)
                                                        gio = "0" + gio;
                                                if (phut < 10)
                                                        phut = "0" + phut;
                                                if (giay < 10)
                                                        giay = "0" + giay;       
                                                document.getElementById('time').innerHTML= "TIME: "+gio+":"+phut+":"+giay;
                                                setTimeout("dongho()",1000);
                                        }
                                        Time: dongho();


</script>

</div>
</div>
</div>
<!--

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        
</head>
<body>
        <div id="show"></div>

        <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function() {
                        setInterval(function () {
                                $('#show').load('ajax_jquery_2.php')
                        }, 3000);
                });
        </script>
</body>
</html>
-->
<?php include 'index5_2.php'; ?>
