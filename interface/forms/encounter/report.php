<?php
include_once("../../globals.php");
include_once($GLOBALS["srcdir"]."/api.inc");
include_once("./dbconnect.php");  //RB mod.

// RB mod.
$db_name = "openemr";
$tbl_key="tbl_encounter_key";
dbconnect($db_name); 
function mdata_id ($id) {
	$sql="SELECT * FROM $tbl_key WHERE mdata_id='$id'";
	$id_value=mysql_query($sql);
	return $id_value;
}
//RB mod.

function ne108_report( $pid, $encounter, $cols, $id) {
    
$table_name = "form_ne108";
$data = formFetch($table_name, $id);


if (($data["cctext"] != "")){
 print "<div class='span8'>";
	 print "<h5>Chief Complaint</h5>";
	 print "<span class=text>" . nl2br($data["cctext"]) . "</span>";
 print "</div>";
}

// Remember that for textboxes that "" is used instead of " " because the dropdowns have a " " as default selection

if (($data["hpi"] != "")){
 print "<div class='span8' style='margin-top:5px'>";
	 print "<h5>History of Present Illness</h5>";
	 print "<span class=text>" . nl2br($data["hpi"]) . "</span>";
 print "</div>";
} 
 
if (encounter_id($data["hpi_dur_value"] != "0") || encounter_id($data["hpi_dur_type"] != "0") || encounter_id($data["durtext"] != "")){
 print "<div class='span8'>";
	$dur_type = encounter_id($data["hpi_dur_type"]);
	if (encountery_id($data["hpi_dur_value"]) == "1") {
		$dur_type = substr($dur_type, 0, -1);
	}
	print "<span class=text>Duration: " . encounter_id($data["hpi_dur_value"]) . " " .  $dur_type . " " . $data["hpi_dur_text"] . "</span>";
 print "</div>";
}

if (($data["quality"] != " ") || ($data["quatext"] != "")){
 print "<div class='span8'>";
 	print "<span class=text>Quality: " . $data["quality"] . " " .  $data["quatext"] . "</span>";
 print "</div>";
}

if (($data["severity"] != " ") || ($data["sevtext"] != "")){
 print "<div class='span8'>";
 print "<span class=text>Severity: ". $data["severity"] . " " .  $data["sevtext"] . "</span>";
 print "</div>";
}

if (($data["sizetext"] != "") || ($data["sizetext2"] != "") || ($data["sizetext3"] != "")){
 print "<div class='span8'>";
 print "<span class=text>Size: ". $data["sizetext"] . " cm x " .  $data["sizetext2"] . " cm x " .  $data["sizetext3"] . " cm</span>";
 print "</div>";
}

if (($data["orientation"] != " ") || ($data["orientation2"] != " ")  || ($data["orientation3"] != " ") || ($data["orientation4"] != " ") || ($data["orientation5"] != " ")|| ($data["physicallocation"] != " ") || ($data["loctext"] != "") ){
 print "<div class='span8'>";
 print "<span class=text>Orientation:";
 print " " . $data["orientation"] . " " .  $data["orientation2"] . " " .  $data["orientation3"] . " " .  $data["orientation4"] . " " .  $data["orientation5"] . " " .  $data["physicallocation"] . " " .  $data["loctext"] . "</span>";
 print "</div>";
}

if (($data["timing"] != " ") || ($data["timtext"] != "")){
 print "<div class='span8'>";
 print "<span class=text>Timing:";
 print " " . $data["timing"] . " " .  $data["timtext"] . "</span>";
 print "</div>";
}

if (($data["modifyingfactors"] != " ") || ($data["modtext"] != "")){
 print "<div class='span8'>";
 print "<span class=text>Modifying factors:";
 print " " . $data["modifyingfactors"] . " " .  $data["modtext"] . "</span>";
 print "</div>";
}

if (($data["associatedsigns"] != " ") || ($data["associatedsigns2"] != " ") || ($data["assoctext"] != "")){
 print "<div class='span8'>";
 print "<span class=text>Associated signs:";
 print " " . $data["associatedsigns"] . " " . $data["associatedsigns2"] . " " . $data["assoctext"] . "</span>";
 print "</div>";
}

if ($data["contexthpi"] != ""){
 print "<div class='span8'>";
 print "<span class=text>Context: " . nl2br($data["contexthpi"]) . "</span>";
 print "</div>";
}

 
 print "<div class='span8' style='margin-top:5px'>";
 print "<h5>Review of System</h5>";
 
 print "<span class=text><i>Constitutional:</i>";
 print " " . $data["health"] . " " . $data["weight"] . " " . $data["fever"] . " " . $data["chill"] . " " . $data["mental"] . " " . $data["insomnia"] . " " . $data["appetite"] . "</span><br>";
 
 print "<span class=text><i>HEENT:</i>";
 print " " . $data["vision"] . " " . $data["diplopia"] . " " . $data["blurred"] . " " . $data["fugax"] . " " . $data["hearing"] . " " . $data["tinnitus"] . " " . $data["otalgia"] . " " . $data["otorrhea"] . " " . $data["head"] . " " . $data["nose"] . " " . $data["epistaxis"] . " " . $data["rhinorrhea"] . " " . $data["rhinitis"] . " " . $data["lymph"] ."</span><br>";

 print "<span class=text><i>Respiratory:</i>";
 print " " . $data["cough"] . " " . $data["hemoptysis"] . " " . $data["purulentcough"] . " " . $data["sob"] . "</span><br>";

 print "<span class=text><i>Cardiovascular:</i>";
 print " " . $data["cp"] . " " . $data["orthopnea"] . " " . $data["pnd"] . " " . $data["doe"] . " " . $data["pvd"] . " " . $data["edema"] . " " . $data["valve"] ."</span><br>";

 print "<span class=text><i>Gastrointestinal:</i>";
 print " " . $data["abdpain"] . " " . $data["nausea"] . " " . $data["vomiting"] . " " . $data["dysphagia"] . " " . $data["hematemesis"] . " " . $data["diarrhea"] . " " . $data["constipation"] . " " . $data["hematochezia"] . " " . $data["melena"] ."</span><br>";

 print "<span class=text><i>Genitourinary:</i>";
 print " " . $data["hematuria"] . " " . $data["discharge"] . " " . $data["hesistancy"] . "</span><br>";

 print "<span class=text><i>Breast:</i>";
 print " " . $data["breastmass"] . " " . $data["nippledischarge"] . " " . $data["bloodynipple"] . " " . $data["clearnipple"] . " " . $data["greennipple"] . " " . $data["breastpain"] ."</span><br>";

 print "<span class=text><i>Endocrine:</i>";
 print " " . $data["urine"] . " " . $data["drink"] . " " . $data["skinhair"] . " " . $data["heat"] ."</span><br>";

 print "<span class=text><i>Musculoskeletal:</i>";
 print " " . $data["jtpain"] . " " . $data["jtswelling"] . " " . $data["arthritis"] . " " . $data["myalgia"] . " " . $data["neckms"] . " " . $data["upperbackms"] . " " . $data["lowerbackms"] . " " . $data["shouldersms"] . " " . $data["armsms"] . " " . $data["elbowms"] . " " . $data["wristms"] . " " . $data["handsms"] . " " . $data["fingersms"] . " " . $data["hipsms"] . " " . $data["legsms"] . " " . $data["kneems"] . " " . $data["anklems"] . " " . $data["feetms"] . " " . $data["toems"] . " " . $data["weakms"] . " " . $data["weakneckms"] . " " . $data["weakupperbackms"] . " " . $data["weaklowerbackms"] . " " . $data["weakshouldersms"] . " " . $data["weakarmsms"] . " " . $data["weakelbowms"] . " " . $data["weakwristms"] . " " . $data["weakhandsms"] . " " . $data["weakfingersms"] . " " . $data["weakhipsms"] . " " . $data["weaklegsms"] . " " . $data["weakkneems"] . " " . $data["weakanklems"] . " " . $data["weakfeetms"] . " " . $data["weaktoems"] . " " . $data["numbms"] . " " . $data["numbneckms"] . " " . $data["numbupperbackms"] . " " . $data["numblowerbackms"] . " " . $data["numbshouldersms"] . " " . $data["numbarmsms"] . " " . $data["numbelbowms"] . " " . $data["numbwristms"] . " " . $data["numbhandsms"] . " " . $data["numbfingersms"] . " " . $data["numbhipsms"] . " " . $data["numblegsms"] . " " . $data["numbkneems"] . " " . $data["numbanklems"] . " " . $data["numbfeetms"] . " " . $data["numbtoems"] . " " . nl2br($data["otherms"]) ."</span><br>";

 print "<span class=text><i>Skin/Lymphatics:</i>";
 print " " . $data["bruising"] . " " .  $data["lymphadenopathy"] . " " . $data["locationrashes"] . " " . $data["locationmoles"] . " " . $data["locationulcers"] . " " . $data["softtissue"] . " " . $data["massmobile"] . " " . $data["masshard"] . " " . nl2br($data["skinlymph"]) . "</span><br>";
 
 print "<span class=text><i>Neuropsychiatric:</i>";
 print " " . $data["weakness"] . " " . $data["seizures"] . " " . $data["memorychange"] . " " . $data["depression"] ."</span><br>";
 
 print "<span class=text>" . $data["rosfinal"] . "</span><br>";
 print "<span class=text>" . $data["rosfinal2"] . "</span><br>";
 
 print "</div>";
 
 print "<div class='span8' style='margin-top:5px'>";
 print "<h5>Physical Exam</h5>";
 print "<span class=text><i>General appearance:</i>" . " " . $data["GA"] . "</span><br>";
 
 print "<span class=text><i>Vital Signs:</i>";
 print " " . $data["vs"];
 if ($data["temptext"] != null) {
  print " " . "Temp:" . " " . $data["temptext"] . " " . "&#8451;";
 }
 if ($data["bptext"] != null) {
  print " " . "BP:" . " " . $data["bptext"];
 }
 if ($data["hrtext"] != null) {
  print " " . "HR:" . " " . $data["hrtext"];
 }
 if ($data["rrtext"] != null) {
  print " " . "RR:" . " " . $data["rrtext"];
 } 
 if ($data["sattext"] != null) {
  print " " . "Sat:" . " " . $data["sattext"] . " " . "%";
 }
 print "</span><br>";
 
if (($data["lymphadenopathype"] != null) || ($data["locationscarpe"] != null) || ($data["locationrashespe"] != null) || ($data["locationmolespe"] != null) || ($data["softtissuepe"] != null) || ($data["bruisingpe"] != null)){
 print "<span class=text><i>Skin/Lymphatics:</i>";
 print " " . $data["lymphadenopathype"] . " " . $data["lymphtext"];
 
 print " " . $data["locationscarspe"] . " " . $data["scartext"];
 
 print " " . $data["locationrashespe"] . " " . $data["rashtext"];
 
 print " " . $data["locationmolespe"] . " " . $data["moletext"];

 print " " . $data["softtissuepe"] . " " . $data["softtext"];
 
 print " " . $data["ulcerspe"] . " " . $data["ulcerstext"];

 print " " . $data["bruisingpe"] . " " . $data["ecchymosistext"];
 print "</span><br>";
} 

if (($data["head1"] != null) || ($data["eyes1"] != null) || ($data["ears1"] != null) || ($data["acuity"] != null) || ($data["earsdischarge"] != null) || ($data["ears2"] != null) || ($data["nose1"] != null) || ($data["epistaxispe"] != null) || ($data["nasaldischarge"] != null) || ($data["mt1"] != null)){
 print "<span class=text><i>HEENT:</i>";
 print " " . $data["head1"];
 print " " . $data["bruise"];
 print " " . $data["stepoff"];
 print " " . $data["scalpmass"];
 print " " . $data["facialmass"];
 
 print " " . $data["eyes1"];
 print " " . $data["papilledema"];
 print " " . $data["hemorrhages"];
 print " " . $data["exudates"];
 print " " . $data["scleralicterus"];
 print " " . $data["ptosis"];
 
 print " " . $data["ears1"];
 print " " . $data["eartext"];
 print " " . $data["acuity"];
 print " " . $data["eardischarge"];
 
 print " " . $data["ears2"];
 print " " . $data["tmdull"];
 print " " . $data["tminjected"];
 print " " . $data["tmbulging"];
 
 print " " . $data["nose1"];
 print " " . $data["nosetext"];
 print " " . $data["epistaxispe"];
 print " " . $data["nasaldischarge"];
 
 print " " . $data["mt1"];
 print " " . $data["mtdry"];
 print " " . $data["mtlesion"];
 print " " . $data["mtlesion2"];
 print " " . $data["mttonsils"];
 print " " . $data["mtdentition"];
 print " " . $data["mtdentures"];
 print " " . $data["mtfb"];
 print " " . $data["mttext"];
 print "</span><br>";
}

if (($data["jvd"] != null) || ($data["thyromegaly"] != null) || ($data["necklymph"] != null) || ($data["neckmass"] != null) || ($data["bruit"] != null)){
 print "<span class=text><i>Neck:</i>";
 print " " . $data["jvd"];
 print " " . $data["thyromegaly"];
 print " " . $data["necklymph"];
 print " " . $data["neckmass"];
 print " " . $data["bruit"];
 print "</span><br>";
}

if ($data["ausc"] != null){
 print "<span class=text><i>Chest:</i>";
 print " " . $data["ausc"];
 print " " . $data["chestrales"];
 print " " . $data["chestrhonchi"];
 print " " . $data["chestbs"];
 print "</span><br>";
}

if ($data["heartsounds"] != null){
 print "<span class=text><i>CV:</i>";
 print " " . $data["heartsounds"];
 print " " . $data["heartextra2"];
 print " " . $data["heartmurmurs"];
 print " " . $data["heartmurmurs2"];
 print " " . $data["heartrubs"];
 print " " . $data["heartrate"];
 print "</span><br>";
}

if (($data["breastdimp"] != null) || ($data["breasttender"] != null) || ($data["breastdischarge"] != null) || ($data["breastaxmass"] != null)){
 print "<span class=text><i>Left breast:</i>";
 print " " . $data["breastdimp"];
 print " " . $data["breastdimpling1"];
 print " " . $data["breasttender"];
 print " " . $data["breasttender1"];
 print " " . $data["breastdischarge"];
 print " " . $data["breastdischarge1"];
 print " " . $data["breastaxmass"];
 print " " . $data["breastaxmass1"];
 print " " . $data["breastaxmass2"];
 print " " . $data["breastaxmass3"];
 print "</span><br>";
}

if (($data["rbreastdimp"] != null) || ($data["rbreasttender"] != null) || ($data["rbreastdischarge"] != null) || ($data["rbreastaxmass"] != null)){
 print "<span class=text><i>Right breast:</i>";
 print " " . $data["rbreastdimp"];
 print " " . $data["rbreastdimpling1"];
 print " " . $data["rbreasttender"];
 print " " . $data["rbreasttender1"];
 print " " . $data["rbreastdischarge"];
 print " " . $data["rbreastdischarge1"];
 print " " . $data["rbreastaxmass"];
 print " " . $data["rbreastaxmass1"];
 print " " . $data["rbreastaxmass2"];
 print " " . $data["rbreastaxmass3"];
 print "</span><br>";
}

 print "<span class=text><i>Abdomen:</i>";
 print " " . $data["abdcontour"];
 print " " . $data["abdtender"];
 print " " . $data["abdtender2"];
 print " " . $data["abdtender3"];
 print " " . $data["abdtender4"];
 print " " . $data["abdtender5"];
 print " " . $data["abdtender6"];
 print " " . $data["abdhernia"];
 print " " . $data["abdhernia2"];
 print " " . $data["abdhernia3"];
 print " " . $data["abdhernia4"];
 print " " . $data["abdhernia5"];
 print " " . $data["abdhernia6"];
 print " " . $data["abdhsm"];
 print " " . $data["abdguard"];
 print " " . $data["abdrebound"];
 print " " . $data["abdscar"];
 print " " . $data["abdbs"];
 print " " . $data["abdbruit"];
 print "</span><br>";

if (($data["guaiac"] != null) || ($data["rectalmass"] != null) || ($data["rectalfissure"] != null) || ($data["rectalhemor"] != null) || ($data["rectalsph"] != null)){
 print "<span class=text><i>Rectum:</i>";
 print " " . $data["guaiac"];
 print " " . $data["rectalmass"];
 print " " . $data["rectalmass2"];
 print " " . $data["rectalfissure"];
 print " " . $data["rectalfissure2"];
 print " " . $data["rectalhemor"];
 print " " . $data["rectalhemor2"];
 print " " . $data["rectalsph"];
 print "</span><br>";
}

if (($data["guingmass"] != null) || ($data["guscromass"] != null) || ($data["guvarico"] != null)){
 print "<span class=text><i>Genitourinary:</i>";
 print " " . $data["guingmass"];
 print " " . $data["guingmass2"];
 print " " . $data["guscromass"];
 print " " . $data["guscromass2"];
 print " " . $data["guvarico"];
 print "</span><br>";
}

 print "<span class=text><i>Extremities:</i>";
 print " " . $data["extcya"];
 print " " . $data["extclub"];
 print " " . $data["extedem"];
 print " " . $data["extedem2"];
 print " " . $data["extrom"];
 print " " . $data["extlue"];
 print " " . $data["extrue"];
 print " " . $data["extlle"];
 print " " . $data["extrle"];
 print "</span><br>";

 
if (($data["vascaaa"] != null) || ($data["vascradL"] != null) || ($data["vascradR"] != null) || ($data["vascfemL"] != null) || ($data["vascfemR"] != null) || ($data["vascpopL"] != null) || ($data["vascpopR"] != null) || ($data["vascdpL"] != null) || ($data["vascdpR"] != null) || ($data["vascptL"] != null) || ($data["vascptR"] != null)){
 
 print "<span class=text><i>Vascular:</i>" . " " . $data["vascaaa"] . " " . "</span><br>";
 

 if (($data["vascradL"] != null) || ($data["vascradR"] != null)) { 
 print "<span class=text>Left radial: " . $data["vascradL"] . " Right radial: " . $data["vascradR"] . "</span><br>";
}

 if (($data["vascfemL"] != null) || ($data["vascfemR"] != null)) { 
 print "<span class=text>Left femoral: " . $data["vascfemL"] . " Right femoral: " . $data["vascfemR"] . "</span><br>";
}

 if (($data["vascpopL"] != null)|| ($data["vascpopR"] != null)) { 
 print "<span class=text>Left popliteal: " . $data["vascpopL"] . " Right popliteal: " . $data["vascpopR"] . "</span><br>";
}

 if (($data["vascdpL"] != null) || ($data["vascdpR"] != null)) { 
 print "<span class=text>Left DP: " . $data["vascdpL"] . " Right DP: " . $data["vascdpR"] . "</span><br>";
}
 
 if (($data["vascptL"] != null) || ($data["vascptR"] != null)) {
 print "<span class=text>Left PT: " . $data["vascptL"] . " Right PT: " . $data["vascptR"] . "</span><br>";
}
}

 print "<span class=text><i>Neurological:</i>";
 print " " . $data["neurolat"];
 print " " . $data["neuronumb"];
 print " " . $data["neuroweak"];
 print " " . $data["neuroRUE"];
 print " " . $data["neuroRLE"];
 print " " . $data["neuroLUE"];
 print " " . $data["neuroLLE"];
 print "</span>";

 print "</div>";
 

 if (($data["endassess"] != null) || ($data["endplan"] != null) || ($data["riskanes"] != null) || ($data["lasertx1"] != null) || ($data["weighthm"] != null) || ($data["smokinghm"] != null) || ($data["followup"] != null)){
 print "<div class='span8' style='margin-top:5px'>";
 print "<h5>Assessment:</h5>" . "<span class=text>" . nl2br($data["endassess"]) . "</span>";
 print "</div>";
 
 print "<div class='span8' style='margin-top:5px'>";
 print "<h5>Plan:</h5>" . "<span class=text>" . nl2br($data["endplan"]) . "</span><br>";
 print "</div>";
 
 if (($data["risks2"] !=null) || ($data["risks3"] !=null) || ($data["risks4"] !=null) || ($data["risks5"] !=null) || ($data["risks6"] !=null) || ($data["risks7"] !=null) || ($data["risks8"] !=null) || ($data["risks9"] !=null) || ($data["risks10"] !=null) || ($data["risks11"] !=null) || ($data["risks12"] !=null) || ($data["risks13"] !=null) || ($data["risks14"] !=null) || ($data["risks15"] !=null) || ($data["risks16"] !=null) || ($data["risks17"] !=null) || ($data["risks18"] !=null) || ($data["risks19"] !=null) || ($data["risks20"] !=null) || ($data["risks21"] !=null) || ($data["risks22"] !=null) || ($data["risks23"] !=null) || ($data["risks24"] !=null)){
 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>All options discussed. All questions answered. Risks and benefits discussed and understood by patient and patient's family to be:";
 if (($data["risks2"]) != null){ print " " . $data["risks2"];}
 if (($data["risks3"]) != null){ print " " . $data["risks3"];}
 if (($data["risks4"]) != null){ print " " . $data["risks4"];}
 if (($data["risks5"]) != null){ print " " . $data["risks5"];}
 if (($data["risks6"]) != null){ print " " . $data["risks6"];}
 if (($data["risks7"]) != null){ print " " . $data["risks7"];}
 if (($data["risks8"]) != null){ print " " . $data["risks8"];}
 if (($data["risks9"]) != null){ print " " . $data["risks9"];}
 if (($data["risks10"]) != null){ print " " . $data["risks10"];}
 if (($data["risks11"]) != null){ print " " . $data["risks11"];}
 if (($data["risks12"]) != null){ print " " . $data["risks12"];}
 if (($data["risks13"]) != null){ print " " . $data["risks13"];}
 if (($data["risks14"]) != null){ print " " . $data["risks14"];}
 if (($data["risks15"]) != null){ print " " . $data["risks15"];}
 if (($data["risks16"]) != null){ print " " . $data["risks16"];}
 if (($data["risks17"]) != null){ print " " . $data["risks17"];}
 if (($data["risks18"]) != null){ print " " . $data["risks18"];}
 if (($data["risks19"]) != null){ print " " . $data["risks19"];}
 if (($data["risks20"]) != null){ print " " . $data["risks20"];}
 if (($data["risks21"]) != null){ print " " . $data["risks21"];}
 if (($data["risks22"]) != null){ print " " . $data["risks22"];}
 if (($data["risks23"]) != null){ print " " . $data["risks23"];}
 if (($data["risks24"]) != null){ print " " . $data["risks24"];}
 if (($data["risks25"]) != null){ print " " . $data["risks25"];}
 print "</span>";
 print "</div>";
 }
 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>" .  $data["risksanes"] . "</span>";
 print "</div>";

 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>" .  $data["lasertx1"] . "</span>";
 print "</div>";
 
 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>" .  $data["lasertx2"] . "</span>";
 print "</div>";
 
 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>" .  $data["weighthm"] . " " . $data["weighthmtime"] . "</span>";
 print "</div>";
 
 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>" .  $data["smokinghm"] . " " . $data["smokinghmtime"] . "</span>";
 print "</div>";
 
 print "<div class='span8' style='margin-top:5px'>";
 print "<span class=text>" .  $data["followup"] . " " . $data["followup1"] . " " . $data["followup2"] . "</span>";
 print "</div>";
} 
}
?>