<?php require("header.php"); ?>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade show active" id="home">
        <div class="container">
            <div class="row">
   <div class="col-sm-4">
       <div class="card border-danger mb-3" style="max-width:20rem">
           <div class="card-header CyTimerzdown"><span class="float-left">Countdown</span> <span class="float-right">Remaining</span></div>
           <div class="card-body CyTimerzdown">
  <h4 class="card-title CyTimerzdown">Example days</h4>
  <p id="two" class="mycountdnstyle">0d 0h 0m 0s</p>
           </div>
       </div>
   </div>
   <div class="col-sm-4">
       <div class="card bg-dark mb-3" style="max-width:20rem">
           <div class="card-header CyTimerzdemo"><span class="float-left">CyTimerz</span> <span class="float-right">Demo</span></div>
           <div class="card-body CyTimerzup">
  <form id="form" name="form" class="form-horizontal">
      <div class="form-group">
          <label class="mr-sm-2" for="id">Load from database</label>
          <select class="custom-select mr-sm-2" id="id">
 <option selected>Choose...</option>
 <?php echo filldb($connection,$table); ?>
          </select>
          <div id="show_db"></div>
      </div>
  </div>
           </div>
       </form>
   </div>
   <div class="col-sm-4">
       <div class="card border-success mb-3" style="max-width:20rem">
           <div class="card-header CyTimerzup"><span class="float-left">Countup</span> <span class="float-right">Ago</span></div>
           <div class="card-body CyTimerzup">
  <h4 class="card-title CyTimerzup">Example days</h4>
  <p id="twos" class="mycountupstyle">0d 0h 0m 0s</p>
           </div>
       </div>
   </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="create">
        <script type="text/javascript">
            /*<![CDATA[*/
            setdateformat = moment(localTime).format("MM/DD/YYYY");
            setimeformat = moment(localTime).format("HH:mm");
            sethourformat = moment(localTime).format("HH");
            $(document).ready(function() {
   $("#inlineFormCustomSelect").change(function() {
       switch (this.value) {
           case "Count Up":
           $(function() {
  $("#timepickercountup").val(setimeformat);
  $("#timepickercountup").timepicki({
      custom_classes: "myclass",
      start_time: setimeformat,
      show_meridian: false,
      min_hour_value: 0,
      max_hour_value: sethourformat,
      step_size_minutes: 0,
      overflow_minutes: true,
      disable_keyboard_mobile: true
  })
           });
           $("#badgesinfo").html('<br/><span class="badge badge-success">Count up</span> You can only pick the past of date/time');
           $("#divtimepicker").html('<label for="timepickercountup">From Time</label><input id="timepickercountup" name="enddate" type="text" class="form-control" value=""/>');
           $(function() {
  $("#datepickercountup").datepicker({
      weekStart: 1,
      autoclose: true,
      endDate: localTime,
      todayHighlight: true,
      maxViewMode: 4,
      todayBtn: true,
      format: "dd/mm/yyyy",
  });
  $("#datepickercountup").datepicker("setDate", new Date(setdateformat))
           });
           $("#divdatepicker").html('<label for="datepickercountup">From Date</label><input id="datepickercountup" name="startdate" type="text" class="form-control" value=""/>');
           $("#divindicatedate").html('<label for="divindicatedates">Indicate end date/time</label><input id="divindicatedates" name="indicatedate" type="text" class="form-control" readonly=""/>');
           $("#divindicatedates").val("Infinity");
           break;
           case "Count Down":
           $(function() {
  $("#timepickercountdown").val(setimeformat);
  $("#timepickercountdown").timepicki({
      custom_classes: "myclass",
      start_time: setimeformat,
      show_meridian: false,
      step_size_minutes: 0,
      min_hour_value: sethourformat,
      max_hour_value: 23,
      overflow_minutes: true,
      increase_direction: "up",
      disable_keyboard_mobile: true
  })
           });
           $("#badgesinfo").html('<br/><span class="badge badge-danger">Count down</span> You can only pick the future of date/time');
           $("#divtimepicker").html('<label for="timepickercountdown">To Time</label><input id="timepickercountdown" name="enddate" type="text" class="form-control" value=""/>');
           $(function() {
  $("#datepickercountdown").val(localTime);
  $("#datepickercountdown").datepicker({
      weekStart: 1,
      autoclose: true,
      todayHighlight: true,
      maxViewMode: 4,
      todayBtn: true,
      startDate: localTime,
      format: "dd/mm/yyyy",
  })
           });
           $("#divdatepicker").html('<label for="datepickercountdown">To Date</label><input id="datepickercountdown" name="startdate" type="text" class="form-control" value=""/>');
           $("#divindicatedate").html('<label for="divindicatedates">Indicate start date/time</label><input id="divindicatedates" name="indicatedate" type="text" class="form-control" readonly=""/>');
           $("#divindicatedates").val(moment(localTime).format("MM/DD/YYYY") + " " + setimeformat);
           break;
           break;
           default:
           $(function() {
  $("#timepickercountupandcountdown").val(setimeformat);
  $("#timepickercountupandcountdown").timepicki({
      custom_classes: "myclass",
      start_time: setimeformat,
      show_meridian: false,
      min_hour_value: sethourformat,
      max_hour_value: 23,
      step_size_minutes: 0,
      overflow_minutes: false,
      increase_direction: "up",
      disable_keyboard_mobile: true
  })
           });
           $("#badgesinfo").html('<br/><span class="badge badge-warning">Count up & Count down</span> Same as countdown you can, only pick the future of date/time');
           $("#divtimepicker").html('<label for="timepickercountupandcountdown">To Time</label><input id="timepickercountupandcountdown" name="enddate" type="text" class="form-control" value=""/>');
           $(function() {
  $("#datepickercountupandcountdown").val(localTime);
  $("#datepickercountupandcountdown").datepicker({
      weekStart: 1,
      autoclose: true,
      todayHighlight: true,
      maxViewMode: 4,
      todayBtn: true,
      startDate: localTime,
      format: "dd/mm/yyyy",
  })
           });
           $("#divdatepicker").html('<label for="datepickercountupandcountdown">To Date</label><input id="datepickercountupandcountdown" name="startdate" type="text" class="form-control" value=""/>');
           $("#divindicatedate").html('<label for="divindicatedates">Indicate start date/time</label><input id="divindicatedates" name="indicatedate" type="text" class="form-control" readonly=""/>');
           $("#divindicatedates").val(moment(localTime).format("MM/DD/YYYY") + " " + setimeformat)
       }
   });
list = ["Count Up", "Count Down", "Count Up & Count Down"];
$("#inlineFormCustomSelect").empty();
for (var a = 0; a < list.length; a++) {
    $("#inlineFormCustomSelect").append("<option>" + list[a] + "</option>")
}
$("#inlineFormCustomSelect").children(":eq(0)").attr("selected", "selected").change()
});
$(document).ready(function() {
    $("#id").change(function() {
        var a = $(this).val();
        $.ajax({
            url: "load_data.php",
            method: "POST",
            data: {
   id: a
            },
            success: function(b) {
   $("#show_db").html(b)
            }
        })
    })
});
$(document).ready(function() {
    jQuery.validator.addMethod("selectnic", function(b, a) {
        if (/^[^<,\"@/{}()*$%?=>:|;#]*$/.test(b)) {
            return true
        } else {
            return false
        }
    }, "Title name is not valid");
    $("#registration").validate({
        rules: {
            title: {
   required: true,
   minlength: 3,
   selectnic: true,
   maxlength: 31
            }
        },
        messages: {
            title: {
   required: "Title name is required"
            }
        },
        submitHandler: function(b) {
            $(".submitdate").html('<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
            var a = $(b).serialize();
            $.ajax({
   url: "action.php",
   type: "POST",
   data: a,
   success: function(c) {
       $(".submitdate").html('<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Your information has been submitted successfully.</div>');
       $("#badgesinfo").remove()
   }
            });
            return false
        }
    })
});
var divLocal = $("#divLocal");
divUtc = moment.utc().format("YYYY-MM-DD HH:mm:ss");
var localTime = moment.utc(divUtc).toDate();
localTime = moment(localTime).format("DD/MM/YYYY");
divLocal.text(localTime);
$(function() {
    $("#datetimepicker1").val(localTime);
    $("#datetimepicker1").datepicker({
        weekStart: 1,
        autoclose: true,
        todayHighlight: true,
        maxViewMode: 4,
        todayBtn: true,
        endDate: localTime,
        format: "dd/mm/yyyy",
    })
});
$(function() {
    $("#datetimepicker2").val(localTime);
    $("#datetimepicker2").datepicker({
        weekStart: 1,
        autoclose: true,
        todayHighlight: true,
        maxViewMode: 4,
        todayBtn: true,
        startDate: localTime,
        format: "dd/mm/yyyy",
    })
}); /*]]>*/
</script>
<div class="row align-self-center w-100">
    <div class="col-6 mx-auto">
        <div class="submitdate"></div>
        <div id="badgesinfo"></div>
        <br/></br>
        <form method="post" id="registration" class="form-usercccc">
            <div class="form-row">
   <div id="divindicatedate" class="col-md-6 mb-3"></div>
            </div>
            <div class="form-row">
   <div id="divdatepicker" class="col-md-5 mb-3"></div>
   <div id="divtimepicker" class="col-md-5 mb-3"></div>
            </div>
            <div class="form-row">
   <div class="col-md-5 mb-3">
       <label for="validationDefault01">Title Name</label>
       <input name="title" type="text" class="form-control" id="validationDefault01" placeholder="Title Name" value="" required>
   </div>
   <div class="col-md-5 mb-3">
       <label class="mr-sm-2" for="inlineFormCustomSelect">Count Type</label>
       <select name="countype" class="custom-select mr-sm-2" id="inlineFormCustomSelect"></select>
   </div>
            </div>
            <button id="csf" class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</div>
<br/>
<br/>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</div>
<div class="tab-pane fade" id="database">
    <div class="container">
        <table class="table table-hover table-bordered">
            <caption>list of database</caption>
            <thead>
   <tr>
       <th>Id</th>
       <th>Title Date</th>
       <th>Start Date</th>
       <th>End Date</th>
       <th>Count Type</th>
   </tr>
            </thead>
            <?php 

            if (!$data) {
printf("Error: %s\n", mysqli_error($connection));
exit();
         }
         while($d=mysqli_fetch_array($data)){
if (preg_match('/^Count Up$/', $d['countype'], $r))
{ 
   ?>
   <tbody>
       <tr class="table-success">
           <td>
  <?php echo $d['id'] ?>
           </td>
           <td>
  <?php echo $d['title'] ?>
           </td>
           <td>
  <?php echo $d['enddate'] ?>
           </td>
           <td>
  <?php echo $d['startdate'] ?>
           </td>
           <td>
  <?php echo $d['countype'] ?>
           </td>
       </tr>
   <?php } ?>
   <?php
   if (preg_match('/^Count Down$/', $d['countype']))
   {
      ?>
      <tr class="table-danger">
       <td>
           <?php echo $d['id'] ?>
       </td>
       <td>
           <?php echo $d['title'] ?>
       </td>
       <td>
           <?php echo $d['startdate'] ?>
       </td>
       <td>
           <?php echo $d['enddate'] ?>
       </td>
       <td>
           <?php echo $d['countype'] ?>
       </td>
   </tr>
            <?php } ?>
            <?php
            if (preg_match('/^Count Up & Count Down$/', $d['countype'], $ok))
            {

  ?>
  <tr class="table-warning">
   <td>
       <?php echo $d['id'] ?>
   </td>
   <td>
       <?php echo $d['title'] ?>
   </td>
   <td>
       <?php echo $d['startdate'] ?>
   </td>
   <td>
       <?php echo $d['enddate'] ?>
   </td>
   <td>
       <?php echo $d['countype'] ?>
   </td>
            </tr>
        </tbody>
    <?php } } ?>
</table>
</div>
</div>
<div class="tab-pane fade" id="countdown">
</div>
<?php require("footer.php"); ?>