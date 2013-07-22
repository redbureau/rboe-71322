<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
$table_name = "form_ne108";
$form_name = "ne108";
$form_folder = "ne108";
formHeader("Form: ".$form_name);
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
/* load the saved record */
$record = formFetch($table_name, $_GET["id"]);
/* remove the time-of-day from the date fields */
if ($record['form_date'] != "") {
    $dateparts = split(" ", $record['form_date']);
    $record['form_date'] = $dateparts[0];
}
if ($record['dob'] != "") {
    $dateparts = split(" ", $record['dob']);
    $record['dob'] = $dateparts[0];
}
if ($record['sig_date'] != "") {
    $dateparts = split(" ", $record['sig_date']);
    $record['sig_date'] = $dateparts[0];
}
?>
<html>
<head>

<script type="text/javascript" src="<?php echo $GLOBALS['webroot'] ?>/library/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['webroot'] ?>/library/textformat.js"></script>
<script type="text/javascript" src="../../../library/jquery.js"></script>
<script type="text/javascript" src="../../../library/bootstrap-tab.js"></script>
<link rel="stylesheet" href="../../themes/bootstrap.css" type="text/css">
<script language="JavaScript">
var mypcc = '<?php echo $GLOBALS['phone_country_code'] ?>';
function PrintForm() {
    newwin = window.open("<?php echo "http://".$_SERVER['SERVER_NAME'].$rootdir."/forms/".$form_folder."/print.php?id=".$_GET["id"]; ?>","mywin");
}
</script>
</head>

<body>
<form class="form-horizontal" method=post action="<?php echo $rootdir;?>/forms/<?php echo $form_folder; ?>/save.php?mode=update&id=<?php echo $_GET["id"];?>" name="my_form">
<fieldset>
    <div class="tabbable">
    
        <ul class="nav nav-tabs" style="position:fixed;">   
          <li class="active"><a href="#hpi" data-toggle="tab">History of Present Illness</a></li>
          <li><a href="#ros" data-toggle="tab">Review of System</a></li>
          <li><a href="#pe" data-toggle="tab">Physical Exam</a></li>
          <li><a href="#ap" data-toggle="tab">Assessment and Plan</a></li>
          <li><button class="btn btn-small" style="margin-left:20px;" value="<?php xl('Save','e'); ?>">Save</button>
          <button class="btn btn-small" value="<?php xl('Don\'t Save','e'); ?>">Do NOT Save</button></li>
        </ul> 
        
     <div class="tab-content" style="margin-top:70px">
          <div class="tab-pane active" id="hpi">
            <?php include('hpi_view.php');?>
          </div>
          <div class="tab-pane" id="ros">
            <?php include('ros_view.php');?>
          </div>
          <div class="tab-pane" id="pe">
             <?php include('pe_view.php');?>
          </div> 
          <div class="tab-pane" id="ap">
             <?php include('ap_view.php');?>
          </div>
     </div>
    </div>
</fieldset>
</form> 

<script language="javascript">
	$(document).ready(function(){
		$(".save").click(function() { top.restoreSession(); document.my_form.submit(); });
		$(".dontsave").click(function() { location.href='<?php echo "$rootdir/patient_file/encounter/$returnurl";?>'; });
	});
</script>
</html>

