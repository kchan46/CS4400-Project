<?php

include 'connect.php';

 ?>

<h1 style="text-align: center;"><span style="background-color: #ffffff;"><strong>New User Registration</strong></span></h1> <!-- Text input-->
<h2 style="text-align: center;"><img src="http://www.news.gatech.edu/sites/default/files/styles/740_x_scale/public/uploads/mercury_images/ta_dah_buzz_2_buld_copy_copy_1.jpg?itok=5OSOMKEo" alt="" width="118" height="139" /></h2>
<h2 style="text-align: center;"><span style="color: #ff0000;"><strong>Passwords do not match.</strong></span></h2>
<form action="checkRegister.php" method="POST">
    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Username">Username</label>
    <div class="col-md-4"><input id="Username" class="form-control input-md" name="Username" required="" type="text" placeholder="" /></div>
    </div>
    <!-- Text input-->
    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="EmailAddress">Email Address</label>
    <div class="col-md-4"><input id="EmailAddress" class="form-control input-md" name="EmailAddress" required="" type="text" placeholder="" /></div>
    </div>
    <!-- Password input-->
    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="Password">Password</label>
    <div class="col-md-4"><input id="Password" class="form-control input-md" name="Password" required="" type="password" placeholder="" /></div>
    </div>
    <!-- Password input-->
    <div class="form-group" style="text-align: center;"><label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
    <div class="col-md-4"><input id="ConfirmPassword" class="form-control input-md" name="ConfirmPassword" required="" type="password" placeholder="" /></div>
    <br
    </div>
    <!-- Select Basic -->
    <center>
<select id="opts" onchange="showForm()">
   <option value="0">City Scientists</option>
   <option value="1">City Officials</option>

</select>

<div id="f1" style="display:none">
   <form name="form1">
       <select id="opts" onchange="showForm()">

           <option value="0">Enter query here to get all cities</option>


       </select>
   </form>
</div>

<div id="f2" style="display:none">
   <form name="form2">
       <select id="opts" onchange="showForm()">

           <option value="0">Enter query here to get all states</option>


       </select>
   </form>
</div>

<script type="text/javascript">
   function showForm() {
       var selopt = document.getElementById("opts").value;
       if (selopt == 1) {
           document.getElementById("f1").style.display = "block";
           document.getElementById("f2").style.display = "block";
       }
       if (selopt == 0) {
           document.getElementById("f1").style.display = "none";
           document.getElementById("f2").style.display = "none";
       }

   }
</script>
<p style="text-align: center;"><input type="submit" value="Create" /> </p>
</form>
