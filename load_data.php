<?php  
// Connecting to database
include 'dbconnect.php';
echo "<script>$(document).ready(function(){
$('#countdownc').on('click', function(e){
  $(this).addClass('btn btn-danger disabled');
    $(this).prop('onclick',null).off('click');
}); 
$('#countupc').on('click', function(e){
  $(this).addClass('btn btn-success disabled');
    $(this).prop('onclick',null).off('click');
}); 
$('#countupdownc').on('click', function(e){
  $(this).addClass('btn btn-warning disabled');
    $(this).prop('onclick',null).off('click');
}); 
});</script>";
 //load_data.php  
 //connect = mysqli_connect("localhost", "root", "", "cybercnt");  
 $output = '';  
 //$type = ''; 
 //$row = ''; 
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM $table WHERE id = '".$_POST["id"]."'";  
      }  
     else  
      {  
           $sql = "SELECT * FROM $table";  
      } 
      $result = mysqli_query($connection, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
      if (preg_match('/^Count Up$/', $row['countype']))
{
  $output .= '<script>
  $(document).ready(function(){
localTimeup  = moment.utc(divUtc).toDate();
localTiming = moment(localTimeup).format("YYYY/MM/DD HH:mm:ss");
timestampnow = moment(localTiming).format("X");
var argendate = $("#strdate").val();
endte = moment(argendate, "DD/MM/YYYY HH:mm:ss").format("YYYY/MM/DD HH:mm:ss");
timestampendate = moment(endte).format("X");

}); 
</script>
<br/>
         <label for="endate">Start Date</label>
        <input id="strdate" name="strdate" type="text" class="form-control" value="'.$row["enddate"].'"/>
         <br/>
         <label for="datetimepicker1">End Date</label>
        <input id="endate" name="endate" type="text" class="form-control" value="'.$row["startdate"].'"/>
 <br/>
<label for="endate">Count Type</label>
        <input id="strdate" name="strdate" type="text" class="form-control" value="'.$row["countype"].'"/>
         <br/>
<button id="countupc" type="button" class="btn btn-success" onclick="startcountup()">Apply</button>
        ';
}
 if (preg_match('/^Count Down$/', $row['countype']))
{
  $output .= '<script>
  $(document).ready(function(){
localTimeup  = moment.utc(divUtc).toDate();
localTiming = moment(localTimeup).format("YYYY/MM/DD HH:mm:ss");
timestampnow = moment(localTiming).format("X");
var argendate = $("#endate").val();
endte = moment(argendate, "DD/MM/YYYY HH:mm:ss").format("YYYY/MM/DD HH:mm:ss");
timestampendate = moment(endte).format("X");

}); 
</script>

<br/>
         <label for="endate">Start Date</label>
        <input id="strdate" name="strdate" type="text" class="form-control" value="'.$row["startdate"].'"/>
         <br/>
         <label for="datetimepicker1">End Date</label>
        <input id="endate" name="endate" type="text" class="form-control" value="'.$row["enddate"].'"/>
 <br/>
<label for="endate">Count Type</label>
        <input id="strdate" name="strdate" type="text" class="form-control" value="'.$row['countype'].'"/>
         <br/>
<button id="countdownc" type="button" class="btn btn-danger" onclick="startcountdown()">Apply</button>
        ';
}
 if (preg_match('/^Count Up & Count Down$/', $row['countype']))
{
  echo '<script>
  $(document).ready(function(){
localTimeup  = moment.utc(divUtc).toDate();
localTiming = moment(localTimeup).format("YYYY/MM/DD HH:mm:ss");
timestampnow = moment(localTiming).format("X");
var argendate = $("#endate").val();
endte = moment(argendate, "DD/MM/YYYY HH:mm:ss").format("YYYY/MM/DD HH:mm:ss");
timestampendatefordown = moment(endte).format("X");

var stargendate = $("#strdate").val();
strendte = moment(stargendate, "DD/MM/YYYY HH:mm:ss").format("YYYY/MM/DD HH:mm:ss");
timestampendateforup = moment(strendte).format("X");


}); 
</script>

<br/>
         <label for="endate">Start Date</label>
        <input id="strdate" name="strdate" type="text" class="form-control" value="'.$row["startdate"].'"/>
         <br/>
         <label for="endate">End Date</label>
        <input id="endate" name="endate" type="text" class="form-control" value="'.$row["enddate"].'"/>
 <br/>
<label for="endate">Count Type</label>
        <input id="strdate" name="strdate" type="text" class="form-control" value="'.$row['countype'].'"/>
         <br/>
<button id="countupdownc" type="button" class="btn btn-warning" onclick="startcybercount()">Apply</button>';
}
      
       

      
      }  
     echo $output;

 }  
 ?>  