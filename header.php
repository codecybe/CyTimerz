<?php   
 include 'dbconnect.php';
 
 
 function filldb($connection,$table)  
 {  
      $output = '';  
      $sqlw = "SELECT * FROM $table";  
      $results = mysqli_query($connection, $sqlw);     
      while($rows = mysqli_fetch_array($results))  
      {  
           $output .= '<option value="'.$rows["id"].'">'.$rows["title"].'</option>';  
      }  
      return $output;  
 }  
 
 ?>
 
<!DOCTYPE html>
<html>

<head>
    <title>CyTimerz</title>
    <link rel=stylesheet type=text/css href=css/cyborg.css>
    <link rel=stylesheet type=text/css href=css/datepicker.css>
    <link rel=stylesheet type=text/css href=css/timepicki.css>
    <link rel=stylesheet type=text/css href="css/CyTimerz.css">
    <script type=text/javascript src=js/jquery.min.js></script>
    <script type=text/javascript src=js/datepickers.js></script>
    <script type=text/javascript src=js/CyTimerz.js></script>
    <script src=js/momentjs/moment.js></script>
    <script src=js/timepicki.js></script>
    <script type=text/javascript>
        $(function() {
            $("#divLocaletime").html('<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
            setInterval(function() {
                var a = $("#divLocaletime");
                utctime = moment.utc().format("YYYY-MM-DD HH:mm:ss");
                var b = moment.utc(utctime).toDate();
                localTime = moment(b).format("DD/MM/YYYY");
                a.text(b)
            }, 1000)
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"><a class=navbar-brand href=#>CyTimerz</a>
        <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbarColor02 aria-controls=navbarColor02 aria-expanded=false aria-label="Toggle navigation" style><span class=navbar-toggler-icon></span></button>
        <div class="collapse navbar-collapse" id=navbarColor02>
            <ul class="nav nav-pills" id=myTab>
                <li class=nav-item><a class="nav-link active" data-toggle=tab href=#home>Home</a></li>
                <li class=nav-item><a class=nav-link data-toggle=tab href=#create>Create</a></li>
                <li class=nav-item><a class=nav-link data-toggle=tab href=#database>Database</a></li>
            </ul>
        </div>
    </nav>
    </div>
    <div class="jumbotron text-center">
        <h1 class=display-3>CyTimerz</h1>
        <p class=lead>Is a simple tool which allows you to calculate forward or backward between two dates based on your current local time , you can also calculate both simultaneously!!</p>
        <div id=divLocaletime></div>
    </div>