<?php
 include_once("../globals.php");
 require_once("$srcdir/formdata.inc.php");
 $_SESSION["encounter"] = "";

 // Fetching the password expiration date
 $is_expired=false;
 if($GLOBALS['password_expiration_days'] != 0){
 $is_expired = false;
 $q=formData('authUser','P');
 $result = sqlStatement("select pwd_expiration_date from users where username = '".$q."'");
 $current_date = date("Y-m-d");
 $pwd_expires_date = $current_date;
 if($row = sqlFetchArray($result)) {
  $pwd_expires_date = $row['pwd_expiration_date'];
 }

// Displaying the password expiration message (starting from 7 days before the password gets expired)
 $pwd_alert_date = date("Y-m-d", strtotime($pwd_expires_date . "-7 days"));

 if (strtotime($pwd_alert_date) != "" && strtotime($current_date) >= strtotime($pwd_alert_date) && 
     (!isset($_SESSION['expiration_msg']) or $_SESSION['expiration_msg'] == 0)) {

  $is_expired = true;
  $_SESSION['expiration_msg'] = 1; // only show the expired message once
 }
}

if ($is_expired) {
  $frame1url = "pwd_expires_alert.php"; //php file which display's password expiration message.
}
else if (!empty($_POST['patientID'])) {
  $patientID = 0 + $_POST['patientID'];
  $frame1url = "../patient_file/summary/demographics.php?set_pid=$patientID";
}

else if (isset($_GET['mode']) && $_GET['mode'] == "loadcalendar") {
  $frame1url = "calendar/index.php?pid=" . $_GET['pid'];
  if (isset($_GET['date'])) $frame1url .= "&date=" . $_GET['date'];
}

// this allows us to keep our viewtype between screens -- JRM
$viewtype = 'day';
if (isset($_SESSION['viewtype'])) { $viewtype = $_SESSION['viewtype']; }

// this allows us to keep our selected providers between screens -- JRM
$pcuStr = "pc_username=".$_SESSION['authUser'];
if (isset($_SESSION['pc_username'])) {
    $pcuStr = "";
    if (count($_SESSION['pc_username']) > 1) {
        // loop over the array of values in pc_username to build
        // a list of pc_username HTTP vars
        foreach ($_SESSION['pc_username'] as $pcu) {
            $pcuStr .= "&pc_username[]=".$pcu;
        }
    }
    else {
        // two possibilities here
        // 1) pc_username is an array with a single element
        // 2) pc_username is just a string, not an array
        if (is_string($_SESSION['pc_username'])) {
            $pcuStr .= "&pc_username[]=".$_SESSION['pc_username'];
        }
        else {
            $pcuStr .= "&pc_username[]=".$_SESSION['pc_username'][0];
        }
    }
}


if ($_SESSION['userauthorized'] && $GLOBALS['docs_see_entire_calendar']) {
    $framesrc = "calendar/index.php?module=PostCalendar&viewtype=".$viewtype."&func=view";
}
else if ($_SESSION['userauthorized']) {
    $frame1url = "calendar/index.php?module=PostCalendar&viewtype=".$viewtype."&func=view&".$pcuStr;
}
else {
    $frame1url = "calendar/index.php?module=PostCalendar&func=view&viewtype=".$viewtype;
}

?>

<html>
<head>
<title>
<?php echo $openemr_name ?>
</title>

<script type="text/javascript" src="../../library/topdialog.js"></script>

<script language='JavaScript'>
<?php require($GLOBALS['srcdir'] . "/restoreSession.php"); ?>

function loadContent() {
	document.getElementById("main_window").innerHTML="loadContent does not work yet and this is a test";	
	
}

</script>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" type="text/css">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
        <div class="container">
        <?php include ('main_title.php')?>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding-left:0px">
	<div class="row-fluid">
    	<div class="span2" style="width:10%; position:fixed;">
        <?php include ('left_nav.php')?>
        </div>
        <div id="main_window" class="span10" style="margin-top:50px; margin-left:180px; width:87%">
      
        </div>
    </div>
</div>
         
</body>

<script language="javascript">
$(document).ready(function() {
 
	$('#main_window').load('<?php echo $frame1url; ?>');

});
</script>
</html>
