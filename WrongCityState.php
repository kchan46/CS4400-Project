<h1 style="text-align: center;"><span style="background-color: #ffffff;"><strong>New User Registration</strong></span></h1>
<h2 style="text-align: center;"><img src="http://www.news.gatech.edu/sites/default/files/styles/740_x_scale/public/uploads/mercury_images/ta_dah_buzz_2_buld_copy_copy_1.jpg?itok=5OSOMKEo" alt="" width="118" height="139" /></h2>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>

<h2 style="text-align: center;"><span style="color: #ff0000;"><strong>Wrong City/State combination!</strong></span></h2>
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

</form>

<script type='text/javascript' src='http://code.jquery.com/jquery-1.5.2.js'>
$(document).ready(function() {
   $('#City').hide();
   $('#State').hide();
     $('#Title').hide();
    $('#UserType').change(function () {
       if ($('#UserType option:selected').text() == "City Official"){
           $('#City').show();
           $('#State').show();
           $('#Title').show();
       }
        else ($('#UserType option:selected').text() == "City Scientist") {
             $('#City').hide();
             $('#State').hide();
              $('#Title').hide();
        }
   });
});
</script>

<select name="UserType" id="UserType">
    <option value="City Scientist">City Scientist</option>
    <option value="City Official">City Official<option>
</select>

<div id="City">
    <select name="City">
        <?php
        include 'connect.php';
        //trying to populate dropdown of cities and states
        mysql_select_db("cs4400_62", $conn);
        $query = mysql_query("SELECT City, State FROM `CITYSTATE`", $conn);
            if (mysql_num_rows($query)) {
                $select= '<select name=\"City\">';
                while ($result = mysql_fetch_array($query)) {
                    echo '<option value=\"City\">'.$result['City'] . '</option>';
                }
            }
        ?>
        <option value="City">Enter query to get cities</option>
    </select>
</div><br>

<div id="State">
    <select name="State">
        <?php
        include 'connect.php';
        //trying to populate dropdown of cities and states
        mysql_select_db("cs4400_62", $conn);
        $query = mysql_query("SELECT City, State FROM `CITYSTATE`", $conn);
            if (mysql_num_rows($query)) {
                $select= '<select name=\"State\">';
                while ($result = mysql_fetch_array($query)) {
                    echo '<option value=\"State\">'.$result['State'] . '</option>';
                }
            }
        ?>
        <option value="State">Enter query to get states</option>
    </select>
</div><br>

<div id="Title"
  First name:<br>
  <input type="text" name="Title" placeholder="Title">
</form>
</div>



<p style="text-align: center;"><input type="submit" value="Create" /> </p>

</form>