<div class="control-group">
    <label class="control-label" for="health">Constitutional</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="health" value="Usual state of health." <?php if ($record["health"] == 'Usual state of health.') echo "checked"; ?>>
         Usual state of health</label>
         <label class="radio inline"><input type="radio" name="health" value="Abnormal state of health." <?php if ($record["health"] == 'Abnormal state of health.') echo "checked"; ?>>
         Abnormal state of health</label><br>
         <label class="radio inline"><input type="radio" name="weight" value="Weight unchanged." <?php if ($record["weight"] == 'Weight unchanged.') echo "checked"; ?>>
         Weight unchanged</label>
         <label class="radio inline"><input type="radio" name="weight" value="+Weight Loss." <?php if ($record["weight"] == '+Weight Loss.') echo "checked"; ?>>
         Weight loss</label>
         <label class="radio inline"><input type="radio" name="weight" value="+Weight gain." <?php if ($record["weight"] == '+Weight gain.') echo "checked"; ?>>
         Weight gain</label><br>
         
         <label class="radio inline"><input type="radio" name="fever" value="Afebrile." <?php if ($record["fever"] == 'Afebrile.') echo "checked"; ?>>
         Afebrile</label>
         <label class="radio inline"><input type="radio" name="fever" value="+Fever." <?php if ($record["fever"] == '+Fever.') echo "checked"; ?>>
         Febrile</label><br>
         
         <label class="radio inline"><input type="radio" name="chill" value="No chills." <?php if ($record["chill"] == 'No chills.') echo "checked"; ?>>
         No chills</label>
         <label class="radio inline"><input type="radio" name="chill" value="+Chills." <?php if ($record["chill"] == '+Chills.') echo "checked"; ?>>
         Chills</label><br>
        
         <label class="radio inline"><input type="radio" name="mental" value="+Euthymic." <?php if ($record["mental"] == '+Euthymic.') echo "checked"; ?>>
         Euthymic</label>
         <label class="radio inline"><input type="radio" name="mental" value="+Dysphoric." <?php if ($record["mental"] == '+Dysphoric.') echo "checked"; ?>>
         Dysphoric</label>
         <label class="radio inline"><input type="radio" name="mental" value="+Dysthymic." <?php if ($record["mental"] == '+Dysthymic.') echo "checked"; ?>>
         Dysthymic</label>
         <label class="radio inline"><input type="radio" name="mental" value="+Depressed." <?php if ($record["mental"] == '+Depressed.') echo "checked"; ?>>
         Depressed</label>
         <label class="radio inline"><input type="radio" name="mental" value="+Hypomanic." <?php if ($record["mental"] == '+Hypomanic.') echo "checked"; ?>>
         Hypomanic</label>
         <label class="radio inline"><input type="radio" name="mental" value="+Manic." <?php if ($record["mental"] == '+Manic.') echo "checked"; ?>>Manic</label>
         <br>
         <label class="radio inline"><input type="radio" name="appetite" value="Good appetite." <?php if ($record["appetite"] == 'Good appetite.') echo "checked"; ?>>
         Good appetite</label>
         <label class="radio inline"><input type="radio" name="appetite" value="Poor appetite." <?php if ($record["appetite"] == 'Poor appetite.') echo "checked"; ?>>
         Poor appetite</label><br>
         
         <label class="radio inline"><input type="radio" name="insomnia" value="No insomnia." <?php if ($record["insomnia"] == 'No insomnia.') echo "checked"; ?>>
         No insomnia</label>
         <label class="radio inline"><input type="radio" name="insomnia" value="+Insomnia." <?php if ($record["insomnia"] == '+Insomnia.') echo "checked"; ?>>
         Insomnia</label><br>

    </div>
</div>
<div class="control-group">
    <label class="control-label" for="vision">HEENT</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="vision" value="Vision unchanged." <?php if ($record["vision"] == 'Vision unchanged.') echo "checked"; ?>>
         Vision unchanged</label>
         <label class="radio inline"><input type="radio" name="vision" value="Vision normal." <?php if ($record["vision"] == 'Vision normal.') echo "checked"; ?>>
         Vision normal</label>
         <br />
         <label class="radio inline"><input type="radio" name="vision" value="Vision abnormal."<?php if ($record["vision"] == 'Vision abnormal.') echo "checked"; ?>>
         Vision abnormal:</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="diplopia" value=""><input type="checkbox" name="diplopia" value="+Diplopia." <?php if ($record["diplopia"] == '+Diplopia.') echo "checked"; ?>>
         Diplopia</label>
         <label class="checkbox inline"><input type="hidden" name="blurred" value=""><input type="checkbox" name="blurred" value="+Blurred vision." <?php if ($record["blurred"] == '+Blurred vision.') echo "checked"; ?>>
         Blurred vision</label>
         <label class="checkbox inline"><input type="hidden" name="fugax" value=""><input type="checkbox" name="fugax" value="+Amaurosis fugax." <?php if ($record["fugax"] == '+Amaurosis fugax.') echo "checked"; ?>>
         Amaurosis fugax</label>
         <br>
         <label class="radio inline"><input type="radio" name="hearing" value="Hearing unchanged." <?php if ($record["hearing"] == 'Hearing unchanged.') echo "checked"; ?>>
         Hearing unchanged</label>
         <label class="radio inline"><input type="radio" name="hearing" value="Hearing normal." <?php if ($record["hearing"] == 'Hearing normal.') echo "checked"; ?>>
         Hearing normal</label>
         <br />
         <label class="radio inline"><input type="radio" name="hearing" value="Hearing abnormal:" <?php if ($record["hearing"] == 'Hearing abnormal:') echo "checked"; ?>>
         Hearing abnormal:</label>&nbsp;&nbsp;
         
         <label class="checkbox inline"><input type="hidden" name="tinnitus" value=""><input type="checkbox" name="tinnitus" value="+Tinnitus." <?php if ($record["tinnitus"] == '+Tinnitus.') echo "checked"; ?>>
         Tinnitus</label>
         <label class="checkbox inline"><input type="hidden" name="otalgia" value=""><input type="checkbox" name="otalgia" value="+Otalgia." <?php if ($record["otalgia"] == '+Otalgia.') echo "checked"; ?>>
         Otalgia</label>
         <label class="checkbox inline"><input type="hidden" name="otorrhea" value=""><input type="checkbox" name="otorrhea" value="+Otorrhea." <?php if ($record["otalgia"] == '+Otorrhea.') echo "checked"; ?>>
         Otorrhea</label>
         <br>
         
         <label class="radio inline"><input type="radio" name="head" value="No headache." <?php if ($record["head"] == 'No headache.') echo "checked"; ?>>
         No headache</label>
         <label class="radio inline"><input type="radio" name="head" value="+Headache." <?php if ($record["head"] == '+Headache.') echo "checked"; ?>>
         Headache</label>
         <br>
         <label class="radio inline"><input type="radio" name="nose" value="No nasal discharge." <?php if ($record["nose"] == 'No nasal discharge.') echo "checked"; ?>>
         No nasal discharge</label>
         <br />
         <label class="radio inline"><input type="radio" name="nose" value="+Nasal discharge:" <?php if ($record["nose"] == '+Nasal discharge.') echo "checked"; ?>>
         Nasal discharge:</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="epistaxis" value=""><input type="checkbox" name="epistaxis" value="+Epistaxis." <?php if ($record["epistaxis"] == '+Epistaxis.') echo "checked"; ?>>
         Epistaxis</label>
         <label class="checkbox inline"><input type="hidden" name="rhinorrhea" value=""><input type="checkbox" name="rhinorrhea" value="+Rhinorrhea." <?php if ($record["rhinorrhea"] == '+Rhinorrhea.') echo "checked"; ?>>
         Rhinorrhea</label>
         <label class="checkbox inline"><input type="hidden" name="rhinitis" value=""><input type="checkbox" name="rhinitis" value="+Purulent rhinitis." <?php if ($record["rhinitis"] == '+Purulent rhinitis.') echo "checked"; ?>>
         Purulent rhinitis</label>
         <br>
         <label class="radio inline"><input type="radio" name="lymph" value="No lymphadenopathy." <?php if ($record["lymph"] == 'No lymphadenopathy.') echo "checked"; ?>>
         No lymphadenopathy</label>
         <label class="radio inline"><input type="radio" name="lymph" value="+Lymphadenopathy." <?php if ($record["lymph"] == '+Lymphadenopathy.') echo "checked"; ?>>
         Lymphadenopathy</label>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="cough">Respiratory</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="cough" value="No cough." <?php if ($record["cough"] == 'No cough.') echo "checked"; ?>>
         No cough</label>
         <label class="radio inline"><input type="radio" name="cough" value="+Cough:" <?php if ($record["cough"] == '+Cough:') echo "checked"; ?>>
         Cough</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="hemoptysis" value=""><input type="checkbox" name="hemoptysis" value="+Hemoptysis." <?php if ($record["hemoptysis"] == '+Hemoptysis.') echo "checked"; ?>>
         Hemoptysis</label>
         <label class="checkbox inline"><input type="hidden" name="purulentcough" value=""><input type="checkbox" name="purulentcough" value="+Purulent cough." <?php if ($record["purulentcough"] == '+Purulent cough.') echo "checked"; ?>>
         Purulent cough</label>
         <br>
         <label class="radio inline"><input type="radio" name="sob" value="No shortness of breath." <?php if ($record["sob"] == 'No shortness of breath.') echo "checked"; ?>>
         No SOB</label>
         <label class="radio inline"><input type="radio" name="sob" value="+Shortness of breath." <?php if ($record["sob"] == '+Shortness of breath.') echo "checked"; ?>>
         SOB</label><br>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="cp">Cardiovascular</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="cp" value="No chest pain." <?php if ($record["cp"] == 'No chest pain.') echo "checked"; ?>>
         No chest pain</label>
         <label class="radio inline"><input type="radio" name="cp" value="+Chestpain." <?php if ($record["cp"] == '+Chestpain.') echo "checked"; ?>>
         Chest pain</label>
         <br>
         <label class="radio inline"><input type="radio" name="orthopnea" value="No orthopnea." <?php if ($record["orthopnea"] == 'No orthopnea.') echo "checked"; ?>>
         No orthopnea</label>
         <label class="radio inline"><input type="radio" name="orthopnea" value="+Orthopnea" <?php if ($record["orthopnea"] == '+Orthopnea.') echo "checked"; ?>>
         Orthopnea</label>
         <br>
         <label class="radio inline"><input type="radio" name="pnd" value="No paroxysmal nocturnal dyspnea." <?php if ($record["pnd"] == 'No paroxysmal nocturnal dyspnea.') echo "checked"; ?>>
         No paroxysmal nocturnal dyspnea</label>
         <label class="radio inline"><input type="radio" name="pnd" value="+Paroxysmal nocturnal dyspnea." <?php if ($record["pnd"] == '+Paroxysmal nocturnal dyspnea.') echo "checked"; ?>>
         Paroxysmal nocturnal dyspnea</label>
         <br>
         <label class="radio inline"><input type="radio" name="doe" value="No dypnea on exertion." <?php if ($record["doe"] == 'No dypnea on exertion.') echo "checked"; ?>>
         No dyspnea on exertion</label>
         <label class="radio inline"><input type="radio" name="doe" value="+Dyspnea on exertion." <?php if ($record["doe"] == '+Dypnea on exertion.') echo "checked"; ?>>
         Dyspnea on exertion</label>
         <br>
         <label class="radio inline"><input type="radio" name="pvd" value="No peripheral vascular disease." <?php if ($record["pvd"] == 'No peripheral vascular disease.') echo "checked"; ?>>
         No peripheral vascular disease</label>
         <label class="radio inline"><input type="radio" name="pvd" value="+Peripheral vascular disease." <?php if ($record["pvd"] == '+Peripheral vascular disease.') echo "checked"; ?>>
         Peripheral vascular disease</label>
         <br>
         <label class="radio inline"><input type="radio" name="edema" value="No edema." <?php if ($record["edema"] == 'No edema.') echo "checked"; ?>>
         No edema</label>
         <label class="radio inline"><input type="radio" name="edema" value="+Edema." <?php if ($record["edema"] == '+Edema.') echo "checked"; ?>>
         Edema</label>
         <br>
         <label class="radio inline"><input type="radio" name="valve" value="No valvular disease." <?php if ($record["valve"] == 'No valvular disease.') echo "checked"; ?>>
         No valvular disease</label>
         <label class="radio inline"><input type="radio" name="valve" value="+Valvular disease." <?php if ($record["valve"] == '+Valvular disease.') echo "checked"; ?>>
         Valvular disease</label>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="abdpain">Gastrointestinal</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="abdpain" value="No abdominal pain." <?php if ($record["abdpain"] == 'No abdominal pain.') echo "checked"; ?>>
         No abdominal pain</label>
         <label class="radio inline"><input type="radio" name="abdpain" value="+Abdominal pain." <?php if ($record["abdpain"] == '+Abdominal pain.') echo "checked"; ?>>
         Abdominal pain</label>
         <br>
         <label class="radio inline"><input type="radio" name="nausea" value="No nausea." <?php if ($record["nausea"] == 'No nausea.') echo "checked"; ?>>
         No nausea</label>
         <label class="radio inline"><input type="radio" name="nausea" value="+Nausea." <?php if ($record["nausea"] == '+Nausea.') echo "checked"; ?>>
         Nausea</label>
         <br>
         <label class="radio inline"><input type="radio" name="vomiting" value="No vomiting." <?php if ($record["vomiting"] == 'No vomiting.') echo "checked"; ?>>
         No vomiting</label>
         <label class="radio inline"><input type="radio" name="vomiting" value="+Vomiting." <?php if ($record["vomiting"] == '+Vomiting.') echo "checked"; ?>>
         Vomiting</label>
         <br>
         <label class="radio inline"><input type="radio" name="dysphagia" value="No dysphagia." <?php if ($record["dysphagia"] == 'No dysphagia.') echo "checked"; ?>>
         No dysphagia</label>
         <label class="radio inline"><input type="radio" name="dysphagia" value="+Dysphagia." <?php if ($record["dysphagia"] == '+Dysphagia.') echo "checked"; ?>>
         Dysphagia</label>
         <br>
         <label class="radio inline"><input type="radio" name="hematemesis" value="No hematemesis." <?php if ($record["hematemesis"] == 'No hematemesis.') echo "checked"; ?>>
         No hematemesis</label>
         <label class="radio inline"><input type="radio" name="hematemesis" value="+Hematemesis." <?php if ($record["hematemesis"] == '+Hematemesis.') echo "checked"; ?>>
         Hematemesis</label>
         <br>
         <label class="radio inline"><input type="radio" name="diarrhea" value="No diarrhea." <?php if ($record["diarrhea"] == 'No diarrhea.') echo "checked"; ?>>
         No diarrhea</label>
         <label class="radio inline"><input type="radio" name="diarrhea" value="+Diarrhea." <?php if ($record["diarrhea"] == '+Diarrhea.') echo "checked"; ?>>
         Diarrhea</label>
         <br>
         <label class="radio inline"><input type="radio" name="constipation" value="No constipation." <?php if ($record["constipation"] == 'No constipation.') echo "checked"; ?>>
         No constipation</label>
         <label class="radio inline"><input type="radio" name="constipation" value="+Constipation." <?php if ($record["constipation"] == '+Constipation.') echo "checked"; ?>>
         Constipation</label><br>
         <label class="radio inline"><input type="radio" name="hematochezia" value="No hematochezia." <?php if ($record["hematochezia"] == 'No hematochezia.') echo "checked"; ?>>
         No hematochezia</label>
         <label class="radio inline"><input type="radio" name="hematochezia" value="+Hematochezia." <?php if ($record["hematochezia"] == '+Hematochezia.') echo "checked"; ?>>
         Hematochezia</label>
    </div>
</div> 
<div class="control-group">
    <label class="control-label" for="dysuria">Genitourinary</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="dysuria" value="No dysuria." <?php if ($record["dysuria"] == 'No dysuria.') echo "checked"; ?>>
         No dysuria</label>
         <label class="radio inline"><input type="radio" name="dysuria" value="+Dysuria." <?php if ($record["dysuria"] == '+Dysuria.') echo "checked"; ?>>
         Dysuria</label>
         <br>
         <label class="radio inline"><input type="radio" name="hematuria" value="No hematuria." <?php if ($record["hematuria"] == 'No hematuria.') echo "checked"; ?>>
         No hematuria</label>
         <label class="radio inline"><input type="radio" name="hematuria" value="+Hematuria." <?php if ($record["hematuria"] == '+Hematuria.') echo "checked"; ?>>
         Hematuria</label>
         <br>
         <label class="radio inline"><input type="radio" name="discharge" value="No discharge." <?php if ($record["discharge"] == 'No discharge.') echo "checked"; ?>>
         No discharge</label>
         <label class="radio inline"><input type="radio" name="discharge" value="+Discharge." <?php if ($record["discharge"] == '+Discharge.') echo "checked"; ?>>
         Discharge</label>
         <br>
         <label class="radio inline"><input type="radio" name="hesistancy" value="No hesistancy." <?php if ($record["hesistancy"] == 'No hesistancy.') echo "checked"; ?>>
         No hesistancy</label>
         <label class="radio inline"><input type="radio" name="hesistancy" value="+Hesistancy." <?php if ($record["hesistancy"] == '+Hesistancy.') echo "checked"; ?>>
         Hesistancy</label>
    </div>
</div> 
<div class="control-group">
    <label class="control-label" for="breastmass">Breast</label>
    <div class="controls">
        <label class="radio inline"><input type="radio" name="breastmass" value="No mass." <?php if ($record["breastmass"] == 'No mass.') echo "checked"; ?>>
        No breast mass</label>
        <label class="radio inline"><input type="radio" name="breastmass" value="Left breast mass." <?php if ($record["breastmass"] == 'Left breast mass.') echo "checked"; ?>>
         Left breast mass</label>
        <label class="radio inline"><input type="radio" name="breastmass" value="Right breast mass." <?php if ($record["breastmass"] == 'Right breast mass.') echo "checked"; ?>>
         Right breast mass</label>
        <label class="radio inline"><input type="radio" name="breastmass" value="Bilateral breast mass." <?php if ($record["breastmass"] == 'Bilateral mass.') echo "checked"; ?>>
         Bilateral breast mass</label>     
         <br>
         <label class="radio inline"><input type="radio" name="nippledischarge" value="No discharge." <?php if ($record["nippledischarge"] == 'No discharge.') echo "checked"; ?>>
         No nipple discharge</label>
         <br />
         <label class="radio inline"><input type="radio" name="nippledischarge" value="+Nipple discharge." <?php if ($record["nippledischarge"] == '+Nipple discharge.') echo "checked"; ?>>
         +Nipple discharge:</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="bloodynipple" value=""><input type="checkbox" name="bloodynipple" value="+Bloody." <?php if ($record["bloodynipple"] == '+Bloody.') echo "checked"; ?>>
         Bloody</label>
         <label class="checkbox inline"><input type="hidden" name="clearnipple" value=""><input type="checkbox" name="clearnipple" value="+Clear." <?php if ($record["clearnipple"] == '+Clear.') echo "checked"; ?>>
         Clear</label>
         <label class="checkbox inline"><input type="hidden" name="greennipple" value=""><input type="checkbox" name="greennipple" value="+Green." <?php if ($record["greennipple"] == '+Green.') echo "checked"; ?>>
         Green</label>
         <br />   
         <label class="radio inline"><input type="radio" name="breastpain" value="No breast pain." <?php if ($record["breastpain"] == 'No breast pain.') echo "checked"; ?>>
         No breast pain</label>
         <label class="radio inline"><input type="radio" name="breastpain" value="+Breast pain." <?php if ($record["breastpain"] == '+Breast pain.') echo "checked"; ?>>
         Breast pain</label>
    </div>
</div>   
<div class="control-group">
    <label class="control-label" for="urine">Endocrine</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="urine" value="No polyuria." <?php if ($record["urine"] == 'No polyuria.') echo "checked"; ?>>
         No polyuria</label>
         <label class="radio inline"><input type="radio" name="urine" value="+Polyria." <?php if ($record["urine"] == '+Polyria.') echo "checked"; ?>>
         Polyuria</label>
         <br>
         <label class="radio inline"><input type="radio" name="drink" value="No polydipsia." <?php if ($record["drink"] == 'No polydipsia.') echo "checked"; ?>>
         No polydipsia</label>
         <label class="radio inline"><input type="radio" name="drink" value="+Polydipsia." <?php if ($record["drink"] == '+Polydipsia.') echo "checked"; ?>>
         Polydipsia</label>
         <br>
         <label class="radio inline"><input type="radio" name="skinhair" value="No skin/hair changes." <?php if ($record["skinhair"] == 'No skin/hair changes.') echo "checked"; ?>>
         No skin/hair changes</label>
         <label class="radio inline"><input type="radio" name="skinhair" value="+Skin/hair changes." <?php if ($record["skinhair"] == '+Skin/hair changes.') echo "checked"; ?>>
         Skin/hair changes</label>
         <br>
         <label class="radio inline"><input type="radio" name="heat" value="No heat intolerance." <?php if ($record["heat"] == 'No heat intolerance.') echo "checked"; ?>>
         No heat intolerance</label>
         <label class="radio inline"><input type="radio" name="heat" value="+Heat intolerance." <?php if ($record["heat"] == '+Heat intolerance.') echo "checked"; ?>>
         Heat intolerance</label>
    </div>
</div>  
<div class="control-group">
    <label class="control-label" for="jtpain">Musculoskeletal</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="jtpain" value="No joint pain." <?php if ($record["jtpain"] == 'No joint pain.') echo "checked"; ?>>
         No joint pain</label>
         <label class="radio inline"><input type="radio" name="jtpain" value="+Joint pain." <?php if ($record["jtpain"] == '+Joint pain.') echo "checked"; ?>>
         Joint pain</label>
         <br>
         <label class="radio inline"><input type="radio" name="jtswelling" value="No joint swelling." <?php if ($record["jtswelling"] == 'No joint swelling.') echo "checked"; ?>>
         No joint swelling</label>
         <label class="radio inline"><input type="radio" name="jtswelling" value="+Joint swelling." <?php if ($record["jtswelling"] == '+Joint swelling.') echo "checked"; ?>>
         Joint swelling</label>
         <br>
         <label class="radio inline"><input type="radio" name="arthritis" value="No arthritis." <?php if ($record["arthritis"] == 'No arthritis.') echo "checked"; ?>>
         No arthritis</label>
         <label class="radio inline"><input type="radio" name="arthritis" value="+Arthritis." <?php if ($record["arthritis"] == '+Arthritis.') echo "checked"; ?>>
         Arthritis</label>
         <br>
         <label class="radio inline"><input type="radio" name="myalgia" value="No myalgia." <?php if ($record["myalgia"] == 'No myalgia.') echo "checked"; ?>>
         No myalgia</label>
         <br />
         <label class="radio inline"><input type="radio" name="myalgia" value="+Myalgia." <?php if ($record["myalgia"] == '+Myalgia.') echo "checked"; ?>>
         Myalgia:</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="neckms" value=""><input type="checkbox" name="neckms" value="Neck" <?php if ($record["neckms"] == 'Neck') echo "checked"; ?>>
         Neck</label>
         <label class="checkbox inline"><input type="hidden" name="upperbackms" value=""><input type="checkbox" name="upperbackms" value="Upper back" <?php if ($record["upperbackms"] == 'Upper back') echo "checked"; ?>>
         Upper back</label>
         <label class="checkbox inline"><input type="hidden" name="lowerbackms" value=""><input type="checkbox" name="lowerbackms" value="Lower back" <?php if ($record["lowerbackms"] == 'Lower back') echo "checked"; ?>>
         Lower back</label><br />
         <label class="checkbox inline"><input type="hidden" name="shouldersms" value=""><input type="checkbox" name="shouldersms" value="Shoulders" <?php if ($record["shouldersms"] == 'Shoulders') echo "checked"; ?>>
         Shoulders</label>
         <label class="checkbox inline"><input type="hidden" name="armsms" value=""><input type="checkbox" name="armsms" value="Arms" <?php if ($record["armsms"] == 'Arms') echo "checked"; ?>>
         Arms</label>
         <label class="checkbox inline"><input type="hidden" name="elbowms" value=""><input type="checkbox" name="elbowms" value="Elbows" <?php if ($record["elbowms"] == 'Elbows') echo "checked"; ?>>
         Elbows</label>
         <label class="checkbox inline"><input type="hidden" name="wristms" value=""><input type="checkbox" name="wristms" value="Wrists" <?php if ($record["wristms"] == 'Wrists') echo "checked"; ?>>
         Wrists</label>
         <label class="checkbox inline"><input type="hidden" name="handsms" value=""><input type="checkbox" name="handsms" value="Hands" <?php if ($record["handsms"] == 'Hands') echo "checked"; ?>>
         Hands</label>
         <label class="checkbox inline"><input type="hidden" name="fingersms" value=""><input type="checkbox" name="fingersms" value="Fingers" <?php if ($record["fingersms"] == 'Fingers') echo "checked"; ?>>
         Fingers</label>
         <label class="checkbox inline"><input type="hidden" name="hipsms" value=""><input type="checkbox" name="hipsms" value="Hips" <?php if ($record["hipsms"] == 'Hips') echo "checked"; ?>>
         Hips</label>
         <label class="checkbox inline"><input type="hidden" name="legsms" value=""><input type="checkbox" name="legsms" value="Legs" <?php if ($record["legsms"] == 'Legs') echo "checked"; ?>>
         Legs</label>
         <label class="checkbox inline"><input type="hidden" name="kneems" value=""><input type="checkbox" name="kneems" value="Knees" <?php if ($record["kneems"] == 'Knees') echo "checked"; ?>>
         Knees</label>
         <label class="checkbox inline"><input type="hidden" name="anklems" value=""><input type="checkbox" name="anklems" value="Ankles" <?php if ($record["anklems"] == 'Ankles') echo "checked"; ?>>
         Ankles</label>
         <label class="checkbox inline"><input type="hidden" name="feetms" value=""><input type="checkbox" name="feetms" value="Feet" <?php if ($record["feetms"] == 'Feet') echo "checked"; ?>>
         Feet</label>
         <label class="checkbox inline"><input type="hidden" name="toems" value=""><input type="checkbox" name="toems" value="Toes" <?php if ($record["toems"] == 'Toes') echo "checked"; ?>>
         Toes</label><br />
         <label class="radio inline"><input type="radio" name="weakms" value="No weakness." <?php if ($record["weakms"] == 'No weakness.') echo "checked"; ?>>
         No weakness</label><br />
         <label class="radio inline"><input type="radio" name="weakms" value="+Weakness." <?php if ($record["weakms"] == '+Weakness.') echo "checked"; ?>>
         +Weakness:</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="weakneckms" value=""><input type="checkbox" name="weakneckms" value="Neck" <?php if ($record["weakneckms"] == 'Neck') echo "checked"; ?>>
         Neck</label>
         <label class="checkbox inline"><input type="hidden" name="weakupperbackms" value=""><input type="checkbox" name="weakupperbackms" value="Upper back" <?php if ($record["weakupperbackms"] == 'Upper back') echo "checked"; ?>>
         Upper back</label>
         <label class="checkbox inline"><input type="hidden" name="weaklowerbackms" value=""><input type="checkbox" name="weaklowerbackms" value="Lower back" <?php if ($record["weaklowerbackms"] == 'Lower back') echo "checked"; ?>>
         Lower back</label><br />
         <label class="checkbox inline"><input type="hidden" name="weakshouldersms" value=""><input type="checkbox" name="weakshouldersms" value="Shoulders" <?php if ($record["weakshouldersms"] == 'Shoulders') echo "checked"; ?>>
         Shoulders</label>
         <label class="checkbox inline"><input type="hidden" name="weakarmsms" value=""><input type="checkbox" name="weakarmsms" value="Arms" <?php if ($record["weakarmsms"] == 'Arms') echo "checked"; ?>>
         Arms</label>
         <label class="checkbox inline"><input type="hidden" name="weakelbowms" value=""><input type="checkbox" name="weakelbowms" value="Elbows"<?php if ($record["weakelbowms"] == 'Elbows') echo "checked"; ?>>
         Elbows</label>
         <label class="checkbox inline"><input type="hidden" name="weakwristms" value=""><input type="checkbox" name="weakwristms" value="Wrists" Elbows <?php if ($record["weakwristms"] == 'Wrists') echo "checked"; ?>>
         Wrists</label>
         <label class="checkbox inline"><input type="hidden" name="weakhandsms" value=""><input type="checkbox" name="weakhandsms" value="Hands" <?php if ($record["weakhandsms"] == 'Hands') echo "checked"; ?>>
         Hands</label>
         <label class="checkbox inline"><input type="hidden" name="weakfingersms" value=""><input type="checkbox" name="weakfingersms" value="Fingers" <?php if ($record["weakfingersms"] == 'Fingers') echo "checked"; ?>>
         Fingers</label><br />
         <label class="checkbox inline"><input type="hidden" name="weakhipsms" value=""><input type="checkbox" name="weakhipsms" value="Hips" <?php if ($record["weakhipsms"] == 'Hips') echo "checked"; ?>>
         Hips</label>
         <label class="checkbox inline"><input type="hidden" name="weaklegsms" value=""><input type="checkbox" name="weaklegsms" value="Legs" <?php if ($record["weaklegsms"] == 'Legs') echo "checked"; ?>>
         Legs</label>
         <label class="checkbox inline"><input type="hidden" name="weakkneems" value=""><input type="checkbox" name="weakkneems" value="Knees" <?php if ($record["weakkneems"] == 'Knees') echo "checked"; ?>>
         Knees</label>
         <label class="checkbox inline"><input type="hidden" name="weakanklems" value=""><input type="checkbox" name="weakanklems" value="Ankles" <?php if ($record["weakanklems"] == 'Ankles') echo "checked"; ?>>
         Ankles</label>
         <label class="checkbox inline"><input type="hidden" name="weakfeetms" value=""><input type="checkbox" name="weakfeetms" value="Feet" <?php if ($record["weakfeetms"] == 'Feet') echo "checked"; ?>>
         Feet</label>
         <label class="checkbox inline"><input type="hidden" name="weaktoems" value=""><input type="checkbox" name="weaktoems" value="Toes" <?php if ($record["weaktoems"] == 'Toes') echo "checked"; ?>>
         Toes</label><br />
         <label class="radio inline"><input type="radio" name="numbms" value="No numbness." <?php if ($record["numbms"] == 'No numbness.') echo "checked"; ?>>
         No numbness</label><br />
        <label class="radio inline"><input type="radio" name="numbms" value="+Numbness." <?php if ($record["numbms"] == '+Numbness.') echo "checked"; ?>>
         +Numbness:</label>&nbsp;&nbsp;
         <label class="checkbox inline"><input type="hidden" name="numbneckms" value=""><input type="checkbox" name="numbneckms" value="Neck" <?php if ($record["numbneckms"] == 'Neck') echo "checked"; ?>>
         Neck</label>
         <label class="checkbox inline"><input type="hidden" name="numbupperbackms" value=""><input type="checkbox" name="numbupperbackms" value="Upper back" <?php if ($record["numbupperbackms"] == 'Upper back') echo "checked"; ?>>
         Upper back</label>
         <label class="checkbox inline"><input type="hidden" name="numblowerbackms" value=""><input type="checkbox" name="numblowerbackms" value="Lower back" <?php if ($record["numblowerbackms"] == 'Lower back') echo "checked"; ?>>
         Lower back</label><br />
         <label class="checkbox inline"><input type="hidden" name="numbshouldersms" value=""><input type="checkbox" name="numbshouldersms" value="Shoulders" <?php if ($record["numbshouldersms"] == 'Shoulders') echo "checked"; ?>>
         Shoulders</label>
         <label class="checkbox inline"><input type="hidden" name="numbarmsms" value=""><input type="checkbox" name="numbarmsms" value="Arms" <?php if ($record["numbarmsms"] == 'Arms') echo "checked"; ?>>
         Arms</label>
         <label class="checkbox inline"><input type="hidden" name="numbelbowms" value=""><input type="checkbox" name="numbelbowms" value="Elbows"<?php if ($record["numbelbowms"] == 'Elbows') echo "checked"; ?>>
         Elbows</label>
         <label class="checkbox inline"><input type="hidden" name="numbwristms" value=""><input type="checkbox" name="numbwristms" value="Wrists" Elbows <?php if ($record["numbwristms"] == 'Wrists') echo "checked"; ?>>
         Wrists</label>
         <label class="checkbox inline"><input type="hidden" name="numbhandsms" value=""><input type="checkbox" name="numbhandsms" value="Hands" <?php if ($record["numbhandsms"] == 'Hands') echo "checked"; ?>>
         Hands</label>
         <label class="checkbox inline"><input type="hidden" name="numbfingersms" value=""><input type="checkbox" name="numbfingersms" value="Fingers" <?php if ($record["numbfingersms"] == 'Fingers') echo "checked"; ?>>
         Fingers</label><br />
         <label class="checkbox inline"><input type="hidden" name="numbhipsms" value=""><input type="checkbox" name="numbhipsms" value="Hips" <?php if ($record["numbhipsms"] == 'Hips') echo "checked"; ?>>
         Hips</label>
         <label class="checkbox inline"><input type="hidden" name="numblegsms" value=""><input type="checkbox" name="numblegsms" value="Legs" <?php if ($record["numblegsms"] == 'Legs') echo "checked"; ?>>
         Legs</label>
         <label class="checkbox inline"><input type="hidden" name="numbkneems" value=""><input type="checkbox" name="numbkneems" value="Knees" <?php if ($record["numbkneems"] == 'Knees') echo "checked"; ?>>
         Knees</label>
         <label class="checkbox inline"><input type="hidden" name="numbanklems" value=""><input type="checkbox" name="numbanklems" value="Ankles" <?php if ($record["numbanklems"] == 'Ankles') echo "checked"; ?>>
         Ankles</label>
         <label class="checkbox inline"><input type="hidden" name="numbfeetms" value=""><input type="checkbox" name="numbfeetms" value="Feet" <?php if ($record["numbfeetms"] == 'Feet') echo "checked"; ?>>
         Feet</label>
         <label class="checkbox inline"><input type="hidden" name="numbtoems" value=""><input type="checkbox" name="numbtoems" value="Toes" <?php if ($record["numbtoems"] == 'Toes') echo "checked"; ?>>
         Toes</label><br /><br />
         <textarea class="input-xxlarge" name="otherms" id="otherms" ><?php echo stripslashes($record['otherms']);?></textarea>
    </div>
</div>   
<div class="control-group">
    <label class="control-label" for="bruising">Skin/Lymphatics</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="bruising" value="No easy bruising." <?php if ($record["bruising"] == 'No easy bruising.') echo "checked"; ?>>
         No easy bruising</label>
         <label class="radio inline"><input type="radio" name="bruising" value="+Easy bruising." <?php if ($record["bruising"] == '+Easy bruising.') echo "checked"; ?>>
         Easy bruising</label><br>
         <label class="radio inline"><input type="radio" name="lymphadenopathy" value="No lymphadenopathy." <?php if ($record["lymphadenopathy"] == 'No lymphadenopathy.') echo "checked"; ?>>
         No lymphadenopathy</label>
         <label class="radio inline"><input type="radio" name="lymphadenopathy" value="+Lymphadenopathy." <?php if ($record["lymphadenopathy"] == '+Lymphadenopathy.') echo "checked"; ?>>
         +Lymphadenopathy</label><br>
         <label class="radio inline"><input type="radio" name="locationrashes" value="No rashes." <?php if ($record["locationrashes"] == 'No rashes.') echo "checked"; ?>>
         No rashes</label>
         <label class="radio inline"><input type="radio" name="locationrashes" value="+Rashes." <?php if ($record["locationrashes"] == '+Rashes.') echo "checked"; ?>>
         +Rashes</label>
         <br>
         <label class="radio inline"><input type="radio" name="locationmoles" value="No moles." <?php if ($record["locationmoles"] == 'No moles.') echo "checked"; ?>>
         No moles</label>
         <label class="radio inline"><input type="radio" name="locationmoles" value="+Moles." <?php if ($record["locationmoles"] == '+Moles.') echo "checked"; ?>>
         +Moles</label>
         <br>
         <label class="radio inline"><input type="radio" name="locationulcers" value="No skin ulcers." <?php if ($record["locationulcers"] == 'No skin ulcers.') echo "checked"; ?>>
         No skin ulcers</label>
         <label class="radio inline"><input type="radio" name="locationulcers" value="+Skin ulcers." <?php if ($record["locationulcers"] == '+Skin ulcers.') echo "checked"; ?>>
         +Skin ulcers</label>
         <br>
         <label class="radio inline"><input type="radio" name="softtissue" value="No soft tissue masses." <?php if ($record["softtissue"] == 'No soft tissue masses.') echo "checked"; ?>>
         No soft tissue masses</label>
         <label class="radio inline"><input type="radio" name="softtissue" value="+Soft tissue mass:" <?php if ($record["softtissue"] == '+Soft tissue mass:') echo "checked"; ?>>
         +Soft tissue mass</label>
         <br>
         <label class="radio inline"><input type="radio" name="massmobile" value="+Mobile." <?php if ($record["massmobile"] == '+Mobile.') echo "checked"; ?>>
         Mobile</label>
         <label class="radio inline"><input type="radio" name="massmobile" value="+Immobile." <?php if ($record["massmobile"] == '+Immobile.') echo "checked"; ?>>
         Immobile</label>
         <label class="radio inline"><input type="radio" name="masshard" value="+Hard." <?php if ($record["masshard"] == '+Hard.') echo "checked"; ?>>
         Hard</label>
         <label class="radio inline"><input type="radio" name="masshard" value="+Soft." <?php if ($record["masshard"] == '+Soft.') echo "checked"; ?>>
         Soft</label>
         <br><br />
         <textarea class="input-xxlarge" name="skinlymph" id="skinlymph" ><?php echo stripslashes($record['skinlymph']);?></textarea>
    </div>
</div>   
<div class="control-group">
    <label class="control-label" for="weakness">Neuropsychiatric</label>
    <div class="controls">
         <label class="radio inline"><input type="radio" name="weakness" value="No weakness." <?php if ($record["weakness"] == 'No weakness.') echo "checked"; ?>>
         No weakness</label>
         <label class="radio inline"><input type="radio" name="weakness" value="+Weakness." <?php if ($record["weakness"] == '+Weakness.') echo "checked"; ?>>
         Weakness</label>
         <br>
         <label class="radio inline"><input type="radio" name="seizures" value="No seizures." <?php if ($record["seizures"] == 'No seizures.') echo "checked"; ?>>
         No seizures</label>
         <label class="radio inline"><input type="radio" name="seizures" value="+Seizures." <?php if ($record["seizures"] == '+Seizures.') echo "checked"; ?>>
         Seizures</label>
         <br>
         <label class="radio inline"><input type="radio" name="memorychange" value="No memory changes." <?php if ($record["memorychange"] == 'No memory changes.') echo "checked"; ?>>
         No memory changes</label>
         <label class="radio inline"><input type="radio" name="memorychange" value="+Memory change." <?php if ($record["memorychange"] == '+Memory change.') echo "checked"; ?>>
         Memory changes</label>
         <br>
         <label class="radio inline"><input type="radio" name="depression" value="No depression." <?php if ($record["depression"] == 'No depression.') echo "checked"; ?>>
         No depression</label>
         <label class="radio inline"><input type="radio" name="depression" value="+Depression." <?php if ($record["depression"] == '+Depression.') echo "checked"; ?>>
         Depression</label>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="rosfinal"></label>
    <div class="controls">
         <input type="checkbox" name="rosfinal" value="All unchecked options were reviewed and within normal limits." checked>
         All unchecked options were reviewed and within normal limits.<br>
         <input type="checkbox" name="rosfinal2" value="Except as listed above, all systems reviewed and documented." checked>
         Except as listed above, all systems reviewed and documented.
    </div>
</div>