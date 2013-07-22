<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
$form_name = "ne108";
$form_folder = "ne108";
formHeader("Form: ".$form_name);
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
$result = getPatientData($pid, "fname,lname,pid,pubpid,phone_home,sex,pharmacy_id,DOB,DATE_FORMAT(DOB,'%Y%m%d') as DOB_YMD");
$age = getPatientAge($result["DOB_YMD"]);
$sex = $result["sex"];
?>

<html>
<head>
<?php //html_header_show();?>
<link rel="stylesheet" href="../../themes/bootstrap.css" type="text/css">
<script type="text/javascript" src="<?php echo $GLOBALS['webroot'] ?>/library/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['webroot'] ?>/library/textformat.js"></script>
<script type="text/javascript" src="../../../library/jquery.js"></script>
<script type="text/javascript" src="../../../library/bootstrap-tab.js"></script>

</head>

<body style="background-color:#FFF">
<form class="form-horizontal" method=post action="<?php echo $rootdir;?>/forms/<?php echo $form_folder; ?>/save.php?mode=new" id="my_form" name="my_form">
    <fieldset>
    <div class="tabbable">
        <!------------------------>
        <ul class="nav nav-tabs" style="position:fixed; margin-left:20px; background-color:#FFF;">   
          <li class="active"><a href="#hpi" data-toggle="tab">History of Present Illness</a></li>
          <li><a href="#ros" data-toggle="tab">Review of System</a></li>
          <li><a href="#pe" data-toggle="tab">Physical Exam</a></li>
          <li><a href="#ap" data-toggle="tab">Assessment and Plan</a></li>
          <li><button class="btn btn-small" style="margin-left:20px;" value="<?php xl('Save','e'); ?>">Save</button>
          <button class="btn btn-small" value="<?php xl('Don\'t Save','e'); ?>">Do NOT Save</button></li>
        </ul> 
        <!------------------------>
        <div class="tab-content" style="margin-top:70px; margin-left:20px;">
          <div class="tab-pane active" id="hpi">
           <?php include('hpi.php');?>
          </div>
          <div class="tab-pane" id="ros">
            <?php include('ros.php');?>
          </div>
          <div class="tab-pane" id="pe">
            <?php include('pe.php');?>
          </div> 
          <div class="tab-pane" id="ap">
            <?php include('ap.php');?>
          </div>
        </div>
    </div>
    </fieldset>
</form>
<script language="javascript">

	$(document).ready(function() {
		$('.breastdimptag input').change(function(){updatebreastdimp();});
		$('.breasttendertag input').change(function(){updatebreasttender();});
		$('.breastdischargetag input').change(function(){updatebreastdischarge();});
    });
	
	
	function updatebreastdimp() {
		if ($('#breastdimp1').is(':checked') || $('#breastdimp2').is(':checked') || $('#breastdimp3').is(':checked') || $('#breastdimp4').is(':checked') || $('#breastdimp5').is(':checked')) { 
			$('#breastdimp').removeAttr('checked');
		}
	}
	function updatebreasttender() {
		if ($('#breasttender1').is(':checked') || $('#breasttender2').is(':checked') || $('#breasttender3').is(':checked') || $('#breasttender4').is(':checked') || $('#breasttender5').is(':checked')) { 
			$('#breasttender').removeAttr('checked');
		}
		
	}
	function updatebreastdischarge() {
		if ($('#breastdischarge1').is(':checked') || $('#breastdischarge2').is(':checked') || $('#breastdischarge3').is(':checked')) { 
			$('#breastdischarge').removeAttr('checked');
		}
		
	} 
</script>

<script language="javascript">
	$(document).ready(function(){
		$(".save").click(function() { top.restoreSession(); document.my_form.submit(); });
		$(".dontsave").click(function() { location.href='<?php echo "$rootdir/patient_file/encounter/$returnurl";?>'; });
	});
</script>
</body>
</html>