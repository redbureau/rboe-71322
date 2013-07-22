<div class="control-group">
        <label class="control-label" for="GA">General Appearance</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="GA" value="No apparent distress." <?php if ($record["GA"] == 'No apparent distress.') echo "checked"; ?>>
             No apparent distress</label>
             <label class="radio inline"><input type="radio" name="GA" value="+Apparent distress." <?php if ($record["GA"] == '+Apparent distress.') echo "checked";?>>
             Apparent distress</label><br>
             <label class="radio inline"><input type="radio" name="GA" value="+Ill appearing." <?php if ($record["GA"] == '+Ill appearing.') echo "checked";?>>
             Ill appearing</label>
             <label class="radio inline"><input type="radio" name="GA" value="+Malnourished." <?php if ($record["GA"] == '+Malnourished.') echo "checked";?>>
             Malnourished</label>
             <label class="radio inline"><input type="radio" name="GA" value="+Respiratory distress." <?php if ($record["GA"] == '+Respiratory distress.') echo "checked";?>>
             Respiratory distress</label>
             <label class="radio inline"><input type="radio" name="GA" value="+Dehydrated." <?php if ($record["GA"] == '+Dehydrated.') echo "checked";?>>
             Dehydrated</label>
             <label class="radio inline"><input type="radio" name="GA" value="+Obtunded." <?php if ($record["GA"] == '+Obtunded.') echo "checked";?>>
             Obtunded</label>
             <label class="radio inline"><input type="radio" name="GA" value="+Lethargic." <?php if ($record["GA"] == '+Lethargic.') echo "checked";?>>
             Lethargic</label>
        </div>
   </div>     
   <div class="control-group">
        <label class="control-label" for="vs">Vital Signs</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="vs" value="Afebrile vital signs stable." <?php if ($record["vs"] == 'Afebrile vital signs stable.') echo "checked";?>>
             Afebrile vital signs stable</label><br>
             <label class="radio inline"><input type="radio" name="vs" value="+Vital signs abnormal." <?php if ($record["vs"] == '+Vital signs abnormal.') echo "checked";?>>
             Vital signs abnormal</label><br>
             Temp
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['temptext']);?>" style="width:40px; height:30px;" name="temptext">&#8451;
             BP
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['bptext']);?>" style="width:70px; height:30px;" name="bptext">
             HR
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['hrtext']);?>" style="width:30px; height:30px;" name="hrtext">
             RR
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['rrtext']);?>" style="width:30px; height:30px;" name="rrtext">
             Saturation
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['sattext']);?>" style="width:50px; height:30px;" name="sattext">&nbsp;%
        </div>
   </div>          
   <div class="control-group">
        <label class="control-label" for="lymphadenopathype">Skin/Lymphatics</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="lymphadenopathype" value="No lymphadenopathy." <?php if ($record["lymphadenopathype"] == 'No lymphadenopathy.') echo "checked";?>>
             No lymphadenopathy</label><br />
             <label class="radio inline"><input type="radio" name="lymphadenopathype" value="+Lymphadenopathy:" <?php if ($record["lymphadenopathype"] == '+Lymphadenopathy:') echo "checked";?>>
             +Lymphadenopathy:</label><br />
             <label class="radio inline"><textarea class="input-xxlarge" name="lymphtext" id="lymphtext" cols="40" rows="3"><?php echo stripslashes($record['lymphtext']);?></textarea></label>
             <br><br>
             
             <label class="radio inline"><input type="radio" name="locationscarspe" value="No scars." <?php if ($record["locationscarspe"] == 'No scars.') echo "checked";?>>
             No scars</label><br />
             <label class="radio inline"><input type="radio" name="locationscarspe" value="+Scars:" <?php if ($record["locationscarspe"] == '+Scars:') echo "checked";?>>
             +Scars:</label><br>
             <label class="radio inline"><textarea class="input-xxlarge" name="scartext" id="scartext" cols="40" rows="3"><?php echo stripslashes($record['scartext']);?></textarea></label>
             <br><br>
 
             <label class="radio inline"><input type="radio" name="locationrashespe" value="No rashes." <?php if ($record["locationrashespe"] == 'No rashes.') echo "checked";?>>
             No rashes</label><br />
             <label class="radio inline"><input type="radio" name="locationrashespe" value="+Rashes:" <?php if ($record["locationrashespe"] == '+Rashes:') echo "checked";?>>
             +Rashes:</label><br>
             <label class="radio inline"><textarea class="input-xxlarge" name="rashtext" id="rashtext" cols="40" rows="3"><?php echo stripslashes($record['rashtext']);?></textarea></label>
             <br><br>
            
             <label class="radio inline"><input type="radio" name="locationmolespe" value="No moles." <?php if ($record["locationmolespe"] == 'No moles.') echo "checked";?>>
             No moles</label><br />
             <label class="radio inline"><input type="radio" name="locationmolespe" value="+Moles:" <?php if ($record["locationmolespe"] == '+Moles:') echo "checked";?>>
             +Moles:</label><br>
             <label class="radio inline"><textarea class="input-xxlarge" name="moletext" id="moletext" cols="40" rows="3"><?php echo stripslashes($record['moletext']);?></textarea></label>
             <br><br>
          
             <label class="radio inline"><input type="radio" name="softtissuepe" value="No soft tissue masses." <?php if ($record["softtissuepe"] == 'No soft tissue masses.') echo "checked";?>>
             No soft tissue masses</label><br />
             <label class="radio inline"><input type="radio" name="softtissuepe" value="+Soft tissue mass." <?php if ($record["softtissuepe"] == '+Soft tissue mass.') echo "checked";?>>
             +Soft tissue mass:</label><br>
              <label class="radio inline"><textarea class="input-xxlarge" name="softtext" id="softtext" cols="40" rows="3"><?php echo stripslashes($record['softtext']);?></textarea></label>
             <br><br>
             
             <label class="radio inline"><input type="radio" name="ulcerspe" value="No decubitus, arterial, or venous ulcers." <?php if ($record["ulcerspe"] == 'No soft tissue masses.') echo "checked";?>>
             No decubitus, arterial, or venous ulcers</label><br />
             <label class="radio inline"><input type="radio" name="ulcerspe" value="+Ulcers." <?php if ($record["ulcerspe"] == 'No soft tissue masses.') echo "checked";?>>
             +Ulcers:</label><br>
             <label class="radio inline"><textarea class="input-xxlarge" name="ulcerstext" id="ulcerstext" cols="40" rows="3"><?php echo stripslashes($record['ulcerstext']);?></textarea></label>
             <br><br>
             
             <label class="radio inline"><input type="radio" name="bruisingpe" value="No ecchymosis/hematoma." <?php if ($record["bruisingpe"] == 'No ecchymosis/hematoma.') echo "checked";?>>
             No ecchymosis/hematoma</label><br />
             <label class="radio inline"><input type="radio" name="bruisingpe" value="+Ecchymosis/hematoma." <?php if ($record["bruisingpe"] == '+Ecchymosis/hematoma.') echo "checked";?>>
             +Ecchymosis/hematoma:</label><br>
             <label class="radio inline"><textarea class="input-xxlarge" name="ecchymosistext" id="ecchymosistext" cols="40" rows="3"><?php echo stripslashes($record['ecchymosistext']);?></textarea></label>
        </div>
   </div>          
   <div class="control-group">
        <label class="control-label" for="head1">Head</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="head1" value="Normocephalic and nontraumatic." <?php if ($record["head1"] == 'Normocephalic and nontraumatic.') echo "checked";?>>
             Normocephalic and nontraumatic</label><br>
             <label class="radio inline"><input type="radio" name="head1" value="Cranial abnormal:" <?php if ($record["head1"] == 'Cranial abnormal:') echo "checked";?>>
             Abnormal:</label>&nbsp;&nbsp;
             c name="bruise" value="+Hematoma." <?php if ($record["bruise"] == '+Hematoma.') echo "checked";?>>
             Hematoma</label>
             <label class="checkbox inline"><input type="hidden" name="stepoff" value=""><input type="checkbox" name="stepoff" value="+Step off." <?php if ($record["stepoff"] == '+Step off.') echo "checked";?>>
             Step off</label>
             <label class="checkbox inline"><input type="hidden" name="scalpmass" value=""><input type="checkbox" name="scalpmass" value="+Scalp mass." <?php if ($record["scalpmass"] == '+Scalp mass.') echo "checked";?>>
             Scalp mass</label>
             <label class="checkbox inline"><input type="hidden" name="facialmass" value=""><input type="checkbox" name="facialmass" value="+Facial mass." <?php if ($record["facialmass"] == '+Facial mass.') echo "checked";?>>
             Facial mass</label> 
        </div>
   </div>     
   <div class="control-group">
        <label class="control-label" for="eyes1">Eyes</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="eyes1" value="PERRLA EOMI." <?php if ($record["eyes1"] == 'PERRLA EOMI.') echo "checked";?>>
             PERRLA EOMI</label><br>
             <label class="radio inline"><input type="radio" name="eyes1" value="Ocular abnormal:" <?php if ($record["eyes1"] == 'Ocular abnormal:') echo "checked";?>>
             Abnormal:</label>&nbsp;&nbsp;
             <label class="checkbox inline"><input type="hidden" name="papilledema" value=""><input type="checkbox" name="papilledema" value="+Papilledema." <?php if ($record["papilledema"] == '+Papilledema.') echo "checked";?>>
             Papilledema</label>
             <label class="checkbox inline"><input type="hidden" name="hemorrhages" value=""><input type="checkbox" name="hemorrhages" value="+Hemorrhages." <?php if ($record["hemorrhages"] == '+Hemorrhages.') echo "checked";?>>
             Hemorrhages</label>
             <label class="checkbox inline"><input type="hidden" name="exudates" value=""><input type="checkbox" name="exudates" value="+Exudates." <?php if ($record["exudates"] == '+Exudates.') echo "checked";?>>
             Exudates</label>
             <label class="checkbox inline"><input type="hidden" name="scleralicterus" value=""><input type="checkbox" name="scleralicterus" value="+Scleral icterus." <?php if ($record["scleralicterus"] == '+Scleral icterus.') echo "checked";?>>
             Scleral icterus</label>
             <label class="checkbox inline"><input type="hidden" name="ptosis" value=""><input type="checkbox" name="ptosis" value="+Ptosis." <?php if ($record["ptosis"] == '+Ptosis.') echo "checked";?>>
             Ptosis</label>
        </div>
   </div>     
   <div class="control-group">
        <label class="control-label" for="ears1">Ears</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="ears1" value="No ear physical deformities, lesions, or masses." <?php if ($record["ears1"] == 'No ear physical deformities, lesions, or masses.') echo "checked";?>>
             No ear physical deformities, lesions, or masses</label><br>
             <label class="radio inline"><input type="radio" name="ears1" value="+Ear physical deformities, lesions, or masses." <?php if ($record["ears1"] == '+Ear physical deformities, lesions, or masses.') echo "checked";?>>
             Ear physical deformity/lesion/mass:</label>&nbsp;&nbsp;
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['eartext']);?>" style="width:300px; height:30px;" name="eartext"><br>
             <label class="radio inline"><input type="radio" name="acuity" value="Acuity normal." <?php if ($record["acuity"] == 'Acuity normal.') echo "checked";?>>
             Acuity normal</label>&nbsp;&nbsp;
             <label class="radio inline"><input type="radio" name="acuity" value="Left decreased acuity." <?php if ($record["acuity"] == 'Left decreased acuity.') echo "checked";?>>
             Left decreased acuity</label>
             <label class="radio inline"><input type="radio" name="acuity" value="Right decreased acuity." <?php if ($record["acuity"] == 'Right decreased acuity.') echo "checked";?>>
             Right decreased acuity</label>
             <label class="radio inline"><input type="radio" name="acuity" value="Bilateral decreased acuity." <?php if ($record["acuity"] == 'Bilateral decreased acuity.') echo "checked";?>>
             Bilateral decreased acuity</label><br />
             <label class="radio inline"><input type="radio" name="eardischarge" value="No ear discharge." <?php if ($record["eardischarge"] == 'No ear discharge.') echo "checked";?>>
             No ear discharge</label>&nbsp;&nbsp;
             <label class="radio inline"><input type="radio" name="eardischarge" value="Left ear discharge." <?php if ($record["eardischarge"] == 'Left ear discharge.') echo "checked";?>>
             Left ear discharge</label>
             <label class="radio inline"><input type="radio" name="eardischarge" value="Right ear discharge." <?php if ($record["eardischarge"] == 'Right ear discharge.') echo "checked";?>>
             Right ear discharge</label>
             <label class="radio inline"><input type="radio" name="eardischarge" value="Bilateral ear discharge." <?php if ($record["eardischarge"] == 'Bilateral ear discharge.') echo "checked";?>>
             Bilateral ear discharge</label><br />
             <label class="radio inline"><input type="radio" name="ears2" value="Tympanic membrane intact and shiny." <?php if ($record["ears2"] == 'Tympanic membrane intact and shiny.') echo "checked";?>>
             Tympanic membrane intact and shiny</label><br>
             <label class="radio inline"><input type="radio" name="ears2" value="Tympanic membrane abnormal:" <?php if ($record["ears2"] == 'Tympanic membrane abnormal:') echo "checked";?>>
             Tympanic membrane abnormal:</label>&nbsp;&nbsp;
             <label class="checkbox inline"><input type="hidden" name="tmdull" value=""><input type="checkbox" name="tmdull" value="TM dull." <?php if ($record["tmdull"] == 'TM dull.') echo "checked";?>>
             Dull</label>
             <label class="checkbox inline"><input type="hidden" name="tminjected" value=""><input type="checkbox" name="tminjected" value="TM injected." <?php if ($record["tminjected"] == 'TM injected.') echo "checked";?>>
             Injected</label>
             <label class="checkbox inline"><input type="hidden" name="tmbulging" value=""><input type="checkbox" name="tmbulging" value="TM bulging." <?php if ($record["tmbulging"] == 'TM bulging.') echo "checked";?>>
             Bulging</label>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="nose1">Nose</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="nose1" value="No nose physical deformities, lesions, or masses." <?php if ($record["nose1"] == 'No nose physical deformities, lesions, or masses.') echo "checked";?>>
             No ear physical deformities, lesions, or masses</label><br>
             <label class="radio inline"><input type="radio" name="nose1" value="+Nose physical deformities, lesions, or masses." <?php if ($record["nose1"] == '+Nose physical deformities, lesions, or masses.') echo "checked";?>>
             Ear physical deformity/lesion/mass:</label>&nbsp;&nbsp;
             <input class="input-xxlarge" type="text" value="<?php echo stripslashes($record['nosetext']);?>" style="width:300px; height:30px;" name="nosetext"><br>
            
             <label class="radio inline"><input type="radio" name="epistaxispe" value="No epistaxis." <?php if ($record["epistaxispe"] == 'No epistaxis.') echo "checked";?>>
             No epistaxis</label>
             <label class="radio inline"><input type="radio" name="epistaxispe" value="+Epistaxis." <?php if ($record["epistaxispe"] == '+Epistaxis.') echo "checked";?>>
             Epistaxis</label><br />
             <label class="radio inline"><input type="radio" name="nasaldischarge" value="No nasal discharge." <?php if ($record["nasaldischarge"] == 'No nasal discharge.') echo "checked";?>>
             No nasal discharge</label>
             <label class="radio inline"><input type="radio" name="nasaldischarge" value="+Purulent nasal discharge." <?php if ($record["nasaldischarge"] == '+Purulent nasal discharge.') echo "checked";?>>
             Purulent nasal discharge</label>
             <label class="radio inline"><input type="radio" name="nasaldischarge" value="+Clear nasal discharge." <?php if ($record["nasaldischarge"] == '+Clear nasal discharge.') echo "checked";?>>
             Clear nasal discharge</label>
        </div>
   </div> 
   <div class="control-group">
        <label class="control-label" for="mt1">Mouth/Throat</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="mt1" value="Oropharyneal mucosa normal, no inflammation, lesions, or discharge." <?php if ($record["mt1"] == 'Oropharyneal mucosa normal, no inflammation, lesions, or discharge.') echo "checked";?>>
             Oropharyneal mucosa normal, no inflammation, lesions, or discharge</label><br>
             <label class="radio inline"><input type="radio" name="mt1" value="Mouth and throat abnormal." <?php if ($record["mt1"] == 'Mouth and throat abnormal.') echo "checked";?>>
             Abnormal:</label><br />
             <label class="checkbox inline"><input type="hidden" name="mttonsils" value=""><input type="checkbox" name="mttonsils" value="+Tonsils inflammed." <?php if ($record["mttonsils"] == '+Tonsils inflammed.') echo "checked";?>>
             Tonsils inflammed</label>
             <label class="checkbox inline"><input type="hidden" name="mtdentition" value=""><input type="checkbox" name="mtdentition" value="+Poor dentition." <?php if ($record["mtdentition"] == '+Poor dentition.') echo "checked";?>>
             Poor dentition</label>
             <label class="checkbox inline"><input type="hidden" name="mtdentures" value=""><input type="checkbox" name="mtdentures" value="+Dentures." <?php if ($record["mtdentures"] == '+Dentures.') echo "checked";?>>
             Dentures</label>
             <label class="checkbox inline"><input type="hidden" name="mtfb" value=""><input type="checkbox" name="mtfb" value="+Piercing with foreign body present." <?php if ($record["mtfb"] == '+Piercing with foreign body present.') echo "checked";?>>
             Piercing with foreign body present</label><br />
             <label class="checkbox inline"><input type="hidden" name="mtdry" value=""><input type="checkbox" name="mtdry" value="+Oropharyngeal mucoas dry." <?php if ($record["mtdry"] == '+Oropharyngeal mucoas dry.') echo "checked";?>>
             Oropharyngeal mucosa dry</label>
             <label class="checkbox inline"><input type="hidden" name="mtlesion" value=""><input type="checkbox" name="mtlesion" value="+Oropharynx lesion." <?php if ($record["mtlesion"] == '+Oropharynx lesion.') echo "checked";?>>
             Oropharynx lesion</label>
             <label class="checkbox inline"><input type="hidden" name="mtlesion2" value=""><input type="checkbox" name="mtlesion2" value="+Tongue lesion." <?php if ($record["mtlesion2"] == '+Tongue lesion.') echo "checked";?>>
             Tongue lesion</label><br /><br />
             <input type="text" value="<?php echo stripslashes($record['mttext']);?>" style="width:300px; height:30px;" name="mttext"><br>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="mt1">Neck</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="jvd" value="No jugular venous distension." <?php if ($record["jvd"] == 'No jugular venous distension.') echo "checked";?>>
             No jugular venous distension</label>
             <label class="radio inline"><input type="radio" name="jvd" value="+Jugular venous distension @ 45 degree incline." <?php if ($record["jvd"] == '+Jugular venous distension @ 45 degree incline.') echo "checked";?>>
             Jugular venous distension @ 45 degree incline</label><br>
             <label class="radio inline"><input type="radio" name="thyromegaly" value="No thyromegaly." <?php if ($record["thyromegaly"] == 'No thyromegaly.') echo "checked";?>>
             No thyromegaly</label>
             <label class="radio inline"><input type="radio" name="thyromegaly" value="+Thyromegaly." <?php if ($record["thyromegaly"] == '+Thyromegaly.') echo "checked";?>>
             Thyromegaly</label><br>
             <label class="radio inline"><input type="radio" name="necklymph" value="No lymphadenopathy." <?php if ($record["necklymph"] == 'No lymphadenopathy.') echo "checked";?>>
             No lymphadenopathy</label>
             <label class="radio inline"><input type="radio" name="necklymph" value="+Lymphadenopathy." <?php if ($record["necklymph"] == '+Lymphadenopathy.') echo "checked";?>>
             Lymphadenopathy</label><br> 
             <label class="radio inline"><input type="radio" name="neckmass" value="No neck mass." <?php if ($record["neckmass"] == 'No neck mass.') echo "checked";?>>
             No neck mass</label>
             <label class="radio inline"><input type="radio" name="neckmass" value="+Neck mass." <?php if ($record["neckmass"] == '+Neck mass.') echo "checked";?>>
             Neck mass</label><br>
             <label class="radio inline"><input type="radio" name="bruit" value="No bruit." <?php if ($record["bruit"] == 'No bruit.') echo "checked";?>>
             No bruit</label>
             <label class="radio inline"><input type="radio" name="bruit" value="+Bruit." <?php if ($record["bruit"] == '+Bruit.') echo "checked";?>>
             Bruit</label><br>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="ausc">Chest</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="ausc" value="Clear to auscultation bilaterally." <?php if ($record["ausc"] == 'Clear to auscultation bilaterally.') echo "checked";?>>
             Clear to auscultation bilaterally</label><br />
             <label class="radio inline"><input type="radio" name="ausc" value="+Abnormal breath sounds." <?php if ($record["ausc"] == '+Abnormal breath sounds.') echo "checked";?>>
             Abnormal breath sounds:</label><br />
             
             <label class="radio inline"><input type="radio" name="chestrales" value="+Left rales." <?php if ($record["chestrales"] == '+Left rales.') echo "checked";?>>
             Left rales</label>
             <label class="radio inline"><input type="radio" name="chestrales" value="+Right rales." <?php if ($record["chestrales"] == '+Right rales.') echo "checked";?>>
             Right rales</label>
             <label class="radio inline"><input type="radio" name="chestrales" value="+Bilateral rales." <?php if ($record["chestrales"] == '+Bilateral rales.') echo "checked";?>>
             Bilateral rales</label><br />
             <label class="radio inline"><input type="radio" name="chestrhonchi" value="+Left rhonchi." <?php if ($record["chestrhonchi"] == '+Left rhonchi.') echo "checked";?>>
             Left rhonchi</label>
             <label class="radio inline"><input type="radio" name="chestrhonchi" value="+Right rhonchi." <?php if ($record["chestrhonchi"] == '+Right rhonchi.') echo "checked";?>>
             Right rhonchi</label>
             <label class="radio inline"><input type="radio" name="chestrhonchi" value="+Bilateral rhonchi." <?php if ($record["chestrhonchi"] == '+Bilateral rhonchi.') echo "checked";?>>
             Bilateral rhonchi</label><br />
             <label class="radio inline"><input type="radio" name="chestbs" value="+Left decreased breath sounds." <?php if ($record["chestbs"] == '+Left decreased breath sounds.') echo "checked";?>>
             Left decreased breath sounds</label>
             <label class="radio inline"><input type="radio" name="chestbs" value="+Right decreased breath sounds." <?php if ($record["chestbs"] == '+Right decreased breath sounds.') echo "checked";?>>
             Right decreased breath sounds</label>
             <label class="radio inline"><input type="radio" name="chestbs" value="+Bilateral decreased breath sounds." <?php if ($record["chestbs"] == '+Bilateral decreased breath sounds.') echo "checked";?>>
             Bilateral decreased breath sounds</label><br />
             
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="ausc">Heart</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="heartsounds" value="S1, S2." <?php if ($record["heartsounds"] == 'S1, S2.') echo "checked";?>>
             S1, S2</label>
             <label class="radio inline"><input type="radio" name="heartsounds" value="+Gallops:" <?php if ($record["heartsounds"] == '+Gallops:') echo "checked";?>>
             +Gallops</label>
             <select name="heartextra2">
                  <option value=" " <?php if ($record["heartextra2"] == ' ') echo "selected";?>> </option>
                  <option value="S3." <?php if ($record["heartextra2"] == 'S3.') echo "selected";?>>S3</option>
                  <option value="S4." <?php if ($record["heartextra2"] == 'S4.') echo "selected";?>>S4</option>
                  <option value="S3 and S4." <?php if ($record["heartextra2"] == 'S3 and S4.') echo "selected";?>>S3 and S4</option>
             </select><br>
             <label class="radio inline"><input type="radio" name="heartmurmurs" value="No murmurs." <?php if ($record["heartmurmurs"] == 'No murmurs.') echo "checked";?>>
             No murmurs</label>
             <label class="radio inline"><input type="radio" name="heartmurmurs" value="+Murmurs:" <?php if ($record["heartmurmurs"] == '+Murmurs:') echo "checked";?>>
             +Murmurs</label>
             <select name="heartmurmurs2" style="width:75px">
                  <option value=" " <?php if ($record["heartmurmurs2"] == ' ') echo "selected";?>> </option>
                  <option value="1." <?php if ($record["heartmurmurs2"] == '1.') echo "selected";?>>1</option>
                  <option value="2." <?php if ($record["heartmurmurs2"] == '2.') echo "selected";?>>2</option>
                  <option value="3." <?php if ($record["heartmurmurs2"] == '3.') echo "selected";?>>3</option>
                  <option value="4." <?php if ($record["heartmurmurs2"] == '4.') echo "selected";?>>4</option>
                  <option value="5." <?php if ($record["heartmurmurs2"] == '5.') echo "selected";?>>5</option>
                  <option value="6." <?php if ($record["heartmurmurs2"] == '6.') echo "selected";?>>6</option>
             </select><br>
             <label class="radio inline"><input type="radio" name="heartrubs" value="No rubs." <?php if ($record["heartrubs"] == 'No rubs.') echo "checked";?>>
             No rubs</label>
             <label class="radio inline"><input type="radio" name="heartrubs" value="+Rubs." <?php if ($record["heartrubs"] == '+Rubs.') echo "checked";?>>
             +Rubs</label><br>
             <label class="radio inline"><input type="radio" name="heartrate" value="Regular rate and rhythm." <?php if ($record["heartrate"] == 'Regular rate and rhythm.') echo "checked";?>>
             Regular rate and rhythm</label>
             <label class="radio inline"><input type="radio" name="heartrate" value="Tachycardic." <?php if ($record["heartrate"] == 'Tachycardic.') echo "checked";?>>
             Tachycardic</label>
             <label class="radio inline"><input type="radio" name="heartrate" value="Bradycardic." <?php if ($record["heartrate"] == 'Bradycardic.') echo "checked";?>>
             Bradycardic</label>
        </div>
   </div>   
   <div class="control-group">
        <label class="control-label" for="breastdimp">Left Breast </label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="breastdimp" value="No dimpling." <?php if ($record["breastdimp"] == 'No dimpling.') echo "checked";?>>
             No dimpling</label>
             <label class="radio inline"><input type="radio" name="breastdimp" value="+Dimpling:" <?php if ($record["breastdimp"] == '+Dimpling:') echo "checked";?>>
             Dimpling</label>
             <select name="breastdimpling1">
                  <option value=" " <?php if ($record["breastdimpling1"] == ' ') echo "checked";?>> </option>
                  <option value="Upper lateral quadrant." <?php if ($record["breastdimpling1"] == 'Upper lateral quadrant.') echo "selected";?>>Upper lateral quadrant</option>
                  <option value="Upper medial quadrant." <?php if ($record["breastdimpling1"] == 'Upper medial quadrant.') echo "selected";?>>Upper medial quadrant</option>
                  <option value="Lower lateral quadrant." <?php if ($record["breastdimpling1"] == 'Lower lateral quadrant.') echo "selected";?>>Lower lateral quadrant</option>
                  <option value="Lower medial quadrant." <?php if ($record["breastdimpling1"] == 'Lower medial quadrant.') echo "selected";?>>Lower medial quadrant</option>
             </select><br>
             
             <label class="radio inline"><input type="radio" name="breasttender" value="No tenderness." <?php if ($record["breasttender"] == 'No tenderness.') echo "checked";?>>
             No tenderness</label>
             <label class="radio inline"><input type="radio" name="breasttender" value="+Tenderness:" <?php if ($record["breasttender"] == '+Tenderness:') echo "checked";?>>
             Tenderness</label>
             <select name="breasttender1">
                  <option value=" " <?php if ($record["breasttender1"] == ' ') echo "checked";?>> </option>
                  <option value="Upper lateral quadrant." <?php if ($record["breasttender1"] == 'Upper lateral quadrant.') echo "selected";?>>Upper lateral quadrant</option>
                  <option value="Upper medial quadrant." <?php if ($record["breasttender1"] == 'Upper medial quadrant.') echo "selected";?>>Upper medial quadrant</option>
                  <option value="Lower lateral quadrant." <?php if ($record["breasttender1"] == 'Lower lateral quadrant.') echo "selected";?>>Lower lateral quadrant</option>
                  <option value="Lower medial quadrant." <?php if ($record["breasttender1"] == 'Lower medial quadrant.') echo "selected";?>>Lower medial quadrant</option>
             </select><br>
           
             <label class="radio inline"><input type="radio" name="breastdischarge" value="No breast discharge." <?php if ($record["breastdischarge"] == 'No breast discharge.') echo "checked";?>>
             No breast discharge</label>
             <label class="radio inline"><input type="radio" name="breastdischarge" value="+Discharge:" <?php if ($record["breastdischarge"] == '+Discharge:') echo "checked";?>>
             Discharge</label>
 
             <select name="breastdischarge1">
                  <option value=" " <?php if ($record["breastdischarge1"] == ' ') echo "selected";?>> </option>
                  <option value="+Bloody." <?php if ($record["breastdischarge1"] == '+Bloody.') echo "selected";?>>Bloody</option>
                  <option value="+Clear." <?php if ($record["breastdischarge1"] == '+Clear.') echo "selected";?>>Clear</option>
                  <option value="+Green." <?php if ($record["breastdischarge1"] == '+Green.') echo "selected";?>>Green</option>
             </select><br>
             
             <label class="radio inline"><input type="radio" name="breastaxmass" value="No breast mass." <?php if ($record["breastaxmass"] == 'No breast mass.') echo "checked";?>>
             No breast mass</label>
             <label class="radio inline"><input type="radio" name="breastaxmass" value="+Breast mass:" <?php if ($record["breastaxmass"] == '+Breast mass:') echo "checked";?>>
             Breast mass</label>&nbsp;&nbsp;
             <select name="breastaxmass1" style="width:100px">
                  <option value=" " <?php if ($record["breastaxmass1"] == ' ') echo "selected";?>> </option>
                  <option value="1''O Clock." <?php if ($record["breastaxmass1"] == "1''O Clock.") echo "selected";?>>1'O Clock</option>
                  <option value="2''O Clock." <?php if ($record["breastaxmass1"] == "2''O Clock.") echo "selected";?>>2'O Clock</option>
                  <option value="3''O Clock." <?php if ($record["breastaxmass1"] == "3''O Clock.") echo "selected";?>>3'O Clock</option>
                  <option value="4''O Clock." <?php if ($record["breastaxmass1"] == "4''O Clock.") echo "selected";?>>4'O Clock</option>
                  <option value="5''O Clock." <?php if ($record["breastaxmass1"] == "5''O Clock.") echo "selected";?>>5'O Clock</option>
                  <option value="6''O Clock." <?php if ($record["breastaxmass1"] == "6''O Clock.") echo "selected";?>>6'O Clock</option>
                  <option value="7''O Clock." <?php if ($record["breastaxmass1"] == "7''O Clock.") echo "selected";?>>7'O Clock</option>
                  <option value="8''O Clock." <?php if ($record["breastaxmass1"] == "8''O Clock.") echo "selected";?>>8'O Clock</option>
                  <option value="9''O Clock." <?php if ($record["breastaxmass1"] == "9''O Clock.") echo "selected";?>>9'O Clock</option>
                  <option value="10''O Clock." <?php if ($record["breastaxmass1"] == "10''O Clock.") echo "selected";?>>10'O Clock</option>
                  <option value="11''O Clock." <?php if ($record["breastaxmass1"] == "11''O Clock.") echo "selected";?>>11'O Clock</option>
                  <option value="12''O Clock." <?php if ($record["breastaxmass1"] == "12''O Clock.") echo "selected";?>>12'O Clock</option>
             </select>
              <select name="breastaxmass2" style="width:75px">
                  <option value=" " <?php if ($record["breastaxmass2"] == ' ') echo "selected";?>> </option>
                  <option value="+Soft." <?php if ($record["breastaxmass2"] == '+Soft.') echo "selected";?>>Soft</option>
                  <option value="+Hard." <?php if ($record["breastaxmass2"] == '+Hard.') echo "selected";?>>Hard</option>
             </select>
             <select name="breastaxmass3" style="width:75px">
                  <option value=" " <?php if ($record["breastaxmass3"] == ' ') echo "selected";?>> </option>
                  <option value="+Mobile." <?php if ($record["breastaxmass3"] == '+Mobile.') echo "selected";?>>Mobile</option>
                  <option value="+Fixed." <?php if ($record["breastaxmass3"] == '+Fixed.') echo "selected";?>>Fixed</option>
             </select>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="rbreastdimp">Right Breast </label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="rbreastdimp" value="No dimpling." <?php if ($record["rbreastdimp"] == 'No dimpling.') echo "checked";?>>
             No dimpling</label>
             <label class="radio inline"><input type="radio" name="rbreastdimp" value="+Dimpling:" <?php if ($record["rbreastdimp"] == '+Dimpling:') echo "checked";?>>
             Dimpling</label>
             <select name="rbreastdimpling1">
                  <option value=" " <?php if ($record["rbreastdimpling1"] == ' ') echo "checked";?>> </option>
                  <option value="Upper lateral quadrant." <?php if ($record["rbreastdimpling1"] == 'Upper lateral quadrant.') echo "selected";?>>Upper lateral quadrant</option>
                  <option value="Upper medial quadrant." <?php if ($record["rbreastdimpling1"] == 'Upper medial quadrant.') echo "selected";?>>Upper medial quadrant</option>
                  <option value="Lower lateral quadrant." <?php if ($record["rbreastdimpling1"] == 'Lower lateral quadrant.') echo "selected";?>>Lower lateral quadrant</option>
                  <option value="Lower medial quadrant." <?php if ($record["rbreastdimpling1"] == 'Lower medial quadrant.') echo "selected";?>>Lower medial quadrant</option>
             </select><br>
             
             <label class="radio inline"><input type="radio" name="rbreasttender" value="No tenderness." <?php if ($record["rbreasttender"] == 'No tenderness.') echo "checked";?>>
             No tenderness</label>
             <label class="radio inline"><input type="radio" name="rbreasttender" value="+Tenderness:" <?php if ($record["rbreasttender"] == '+Tenderness:') echo "checked";?>>
             Tenderness</label>
             <select name="rbreasttender1">
                  <option value=" " <?php if ($record["rbreasttender1"] == ' ') echo "checked";?>> </option>
                  <option value="Upper lateral quadrant." <?php if ($record["rbreasttender1"] == 'Upper lateral quadrant.') echo "selected";?>>Upper lateral quadrant</option>
                  <option value="Upper medial quadrant." <?php if ($record["rbreasttender1"] == 'Upper medial quadrant.') echo "selected";?>>Upper medial quadrant</option>
                  <option value="Lower lateral quadrant." <?php if ($record["rbreasttender1"] == 'Lower lateral quadrant.') echo "selected";?>>Lower lateral quadrant</option>
                  <option value="Lower medial quadrant." <?php if ($record["rbreasttender1"] == 'Lower medial quadrant.') echo "selected";?>>Lower medial quadrant</option>
             </select><br>
           
             <label class="radio inline"><input type="radio" name="rbreastdischarge" value="No breast discharge." <?php if ($record["rbreastdischarge"] == 'No breast discharge.') echo "checked";?>>
             No breast discharge</label>
             <label class="radio inline"><input type="radio" name="rbreastdischarge" value="+Discharge:" <?php if ($record["rbreastdischarge"] == '+Discharge:') echo "checked";?>>
             Discharge</label>
 
             <select name="rbreastdischarge1">
                  <option value=" " <?php if ($record["rbreastdischarge1"] == ' ') echo "selected";?>> </option>
                  <option value="+Bloody." <?php if ($record["rbreastdischarge1"] == '+Bloody.') echo "selected";?>>Bloody</option>
                  <option value="+Clear." <?php if ($record["rbreastdischarge1"] == '+Clear.') echo "selected";?>>Clear</option>
                  <option value="+Green." <?php if ($record["rbreastdischarge1"] == '+Green.') echo "selected";?>>Green</option>
             </select><br>
             
             <label class="radio inline"><input type="radio" name="rbreastaxmass" value="No breast mass." <?php if ($record["rbreastaxmass"] == 'No breast mass.') echo "checked";?>>
             No breast mass</label>
             <label class="radio inline"><input type="radio" name="rbreastaxmass" value="+Breast mass:" <?php if ($record["rbreastaxmass"] == '+Breast mass:') echo "checked";?>>
             Breast mass</label>&nbsp;&nbsp;
             <select name="rbreastaxmass1" style="width:100px">
                  <option value=" " <?php if ($record["rbreastaxmass1"] == ' ') echo "selected";?>> </option>
                  <option value="1''O Clock." <?php if ($record["rbreastaxmass1"] == "1''O Clock.") echo "selected";?>>1'O Clock</option>
                  <option value="2''O Clock." <?php if ($record["rbreastaxmass1"] == "2''O Clock.") echo "selected";?>>2'O Clock</option>
                  <option value="3''O Clock." <?php if ($record["rbreastaxmass1"] == "3''O Clock.") echo "selected";?>>3'O Clock</option>
                  <option value="4''O Clock." <?php if ($record["rbreastaxmass1"] == "4''O Clock.") echo "selected";?>>4'O Clock</option>
                  <option value="5''O Clock." <?php if ($record["rbreastaxmass1"] == "5''O Clock.") echo "selected";?>>5'O Clock</option>
                  <option value="6''O Clock." <?php if ($record["rbreastaxmass1"] == "6''O Clock.") echo "selected";?>>6'O Clock</option>
                  <option value="7''O Clock." <?php if ($record["rbreastaxmass1"] == "7''O Clock.") echo "selected";?>>7'O Clock</option>
                  <option value="8''O Clock." <?php if ($record["rbreastaxmass1"] == "8''O Clock.") echo "selected";?>>8'O Clock</option>
                  <option value="9''O Clock." <?php if ($record["rbreastaxmass1"] == "9''O Clock.") echo "selected";?>>9'O Clock</option>
                  <option value="10''O Clock." <?php if ($record["rbreastaxmass1"] == "10''O Clock.") echo "selected";?>>10'O Clock</option>
                  <option value="11''O Clock." <?php if ($record["rbreastaxmass1"] == "11''O Clock.") echo "selected";?>>11'O Clock</option>
                  <option value="12''O Clock." <?php if ($record["rbreastaxmass1"] == "12''O Clock.") echo "selected";?>>12'O Clock</option>
             </select>
              <select name="rbreastaxmass2" style="width:75px">
                  <option value=" " <?php if ($record["rbreastaxmass2"] == ' ') echo "selected";?>> </option>
                  <option value="+Soft." <?php if ($record["rbreastaxmass2"] == '+Soft.') echo "selected";?>>Soft</option>
                  <option value="+Hard." <?php if ($record["rbreastaxmass2"] == '+Hard.') echo "selected";?>>Hard</option>
             </select>
             <select name="rbreastaxmass3" style="width:75px">
                  <option value=" " <?php if ($record["rbreastaxmass3"] == ' ') echo "selected";?>> </option>
                  <option value="+Mobile." <?php if ($record["rbreastaxmass3"] == '+Mobile.') echo "selected";?>>Mobile</option>
                  <option value="+Fixed." <?php if ($record["rbreastaxmass3"] == '+Fixed.') echo "selected";?>>Fixed</option>
             </select>
        </div>
   </div>   
   <div class="control-group">
        <label class="control-label" for="abdcontour">Abdomen</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="abdcontour" value="Flat." <?php if ($record["abdcontour"] == 'Flat.') echo "checked";?>>
             Flat</label>
             <label class="radio inline"><input type="radio" name="abdcontour" value="Scaphoid." <?php if ($record["abdcontour"] == 'Scaphoid.') echo "checked";?>>
             Scaphoid</label>
             <label class="radio inline"><input type="radio" name="abdcontour" value="Obese." <?php if ($record["abdcontour"] == 'Obese.') echo "checked";?>>
             Obese</label>
             <label class="radio inline"><input type="radio" name="abdcontour" value="Distended." <?php if ($record["abdcontour"] == 'Distended.') echo "checked";?>>
             Distended</label><br>
             <label class="radio inline"><input type="radio" name="abdtender" value="No adominal ternderness." <?php if ($record["abdtender"] == 'No adominal ternderness.') echo "checked";?>>
             No abdominal tenderness</label><br>
             <label class="radio inline"><input type="radio" name="abdtender" value="+Abdominal tenderness:" <?php if ($record["abdtender"] == '+Abdominal tenderness:') echo "checked";?>>
             Abdominal tenderness:</label>&nbsp;&nbsp;
             <label class="checkbox inline"><input type="hidden" name="abdtender2" value=""><input type="checkbox" name="abdtender2" value="RUQ." <?php if ($record["abdtender2"] == 'RUQ.') echo "checked";?>>
             RUQ</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender3" value=""><input type="checkbox" name="abdtender3" value="RLQ." <?php if ($record["abdtender3"] == 'RLQ.') echo "checked";?>>
             RLQ</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender4" value=""><input type="checkbox" name="abdtender4" value="LUQ." <?php if ($record["abdtender4"] == 'LUQ.') echo "checked";?>>
             LUQ</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender4" value=""><input type="checkbox" name="abdtender5" value="LLQ." <?php if ($record["abdtender5"] == 'LLQ.') echo "checked";?>>
             LLQ</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender5" value=""><input type="checkbox" name="abdtender6" value="Suprapubic." <?php if ($record["abdtender6"] == 'Suprapubic.') echo "checked";?>>
             Suprapubic</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender6" value=""><input type="checkbox" name="abdtender7" value="Costovertebral angle." <?php if ($record["abdtender7"] == 'Costovertebral angle.') echo "checked";?>>
             Costovertebral angle</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender7" value=""><input type="checkbox" name="abdtender8" value="Epigastric." <?php if ($record["abdtender8"] == 'Suprapubic.') echo "checked";?>>
             Epigastric</label>
             <label class="checkbox inline"><input type="hidden" name="abdtender8" value=""><input type="checkbox" name="abdtender9" value="Umbilical." <?php if ($record["abdtender9"] == 'Suprapubic.') echo "checked";?>>
             Umbilical</label><br>
             
             <label class="radio inline"><input type="radio" name="abdhernia" value="No hernia." <?php if ($record["abdhernia"] == 'No hernia.') echo "checked";?>>
             No hernia	</label><br />
              <label class="radio inline"><input type="radio" name="abdhernia" value="Reducible hernia:" <?php if ($record["abdhernia"] == 'Reducible hernia:') echo "checked";?>>
             Reducible hernia</label>
             <label class="radio inline"><input type="radio" name="abdhernia" value="Non-reducible hernia:" <?php if ($record["abdhernia"] == 'Non-reducible hernia:') echo "checked";?>>
             Non-reducible hernia</label><br />
             <label class="checkbox inline"><input type="hidden" name="abdhernia2" value=""><input type="checkbox" name="abdhernia2" value="Right groin." <?php if ($record["abdhernia2"] == 'Right groin.') echo "checked";?>>
             Right groin</label>
             <label class="checkbox inline"><input type="hidden" name="abdhernia3" value=""><input type="checkbox" name="abdhernia3" value="Left groin." <?php if ($record["abdhernia3"] == 'Left groin.') echo "checked";?>>
             Left groin</label>
             <label class="checkbox inline"><input type="hidden" name="abdhernia4" value=""><input type="checkbox" name="abdhernia4" value="Umbilical." <?php if ($record["abdhernia4"] == 'Umbilical.') echo "checked";?>>
             Umbilical</label>
             <label class="checkbox inline"><input type="hidden" name="abdhernia5" value=""><input type="checkbox" name="abdhernia5" value="Ventral." <?php if ($record["abdhernia5"] == 'Ventral.') echo "checked";?>>
             Ventral</label6
             <label class="checkbox inline"><input type="hidden" name="abdhernia5" value=""><input type="checkbox" name="abdhernia6" value="Incisional." <?php if ($record["abdhernia6"] == 'Incisional.') echo "checked";?>>
             Incisional</label>
             <label class="checkbox inline"><input type="hidden" name="abdhernia7" value=""><input type="checkbox" name="abdhernia7" value="Spigellian." <?php if ($record["abdhernia7"] == 'Spigellian.') echo "checked";?>>
             Spigellian</label><br>
             
             <label class="radio inline"><input type="radio" name="abdhsm" value="No hepatosplenomegaly." <?php if ($record["abdhsm"] == 'No hepatosplenomegaly.') echo "checked";?>>
             No hepatosplenomegaly</label>
             <label class="radio inline"><input type="radio" name="abdhsm" value="+Hepatosplenomegaly." <?php if ($record["abdhsm"] == '+Hepatosplenomegaly.') echo "checked";?>>
             Hepatosplenomegaly</label>
             <label class="radio inline"><input type="radio" name="abdhsm" value="+Hepatomegaly." <?php if ($record["abdhsm"] == '+Hepatomegaly.') echo "checked";?>>
             Hepatomegaly</label>
             <label class="radio inline"><input type="radio" name="abdhsm" value="+Splenomegaly." <?php if ($record["abdhsm"] == '+Splenomegaly.') echo "checked";?>>
             Splenomegaly</label><br>
             <label class="radio inline"><input type="radio" name="abdguard" value="No guarding." <?php if ($record["abdguard"] == 'No guarding.') echo "checked";?>>
             No guarding</label>
             <label class="radio inline"><input type="radio" name="abdguard" value="+Guarding." <?php if ($record["abdguard"] == '+Guarding.') echo "checked";?>>
             Guarding</label><br>
             <label class="radio inline"><input type="radio" name="abdrebound" value="No rebound." <?php if ($record["abdrebound"] == 'No rebound.') echo "checked";?>>
             No rebound</label>
             <label class="radio inline"><input type="radio" name="abdrebound" value="+Rebound." <?php if ($record["abdrebound"] == '+Rebound.') echo "checked";?>>
             Rebound</label><br>
             <label class="radio inline"><input type="radio" name="abdscar" value="No scars." <?php if ($record["abdscar"] == 'No scars.') echo "checked";?>>
             No scars</label>
             <label class="radio inline"><input type="radio" name="abdscar" value="+Scars." <?php if ($record["abdscar"] == '+Scars.') echo "checked";?>>
             Scars</label><br>
             <label class="radio inline"><input type="radio" name="abdbs" value="Bowel sounds present." <?php if ($record["abdbs"] == 'Bowel sounds present.') echo "checked";?>>
             Bowel sounds present </label>
             <label class="radio inline"><input type="radio" name="abdbs" value="No bowel sounds." <?php if ($record["abdbs"] == 'No bowel sounds.') echo "checked";?>>
             No bowel sounds</label><br>
             <label class="radio inline"><input type="radio" name="abdbruit" value="No bruit." <?php if ($record["abdbruit"] == 'No bruit.') echo "checked";?>>
             No bruit</label>
             <label class="radio inline"><input type="radio" name="abdbruit" value="+Bruit." <?php if ($record["abdbruit"] == '+Bruit.') echo "checked";?>>
             Bruit</label><br>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="guaiac">Rectum</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="guaiac" value="Guaiac negative." <?php if ($record["guaiac"] == 'Guaiac negative.') echo "checked";?>>
             Guaiac negative</label>           
             <label class="radio inline"><input type="radio" name="guaiac" value="Guaiac positive." <?php if ($record["guaiac"] == 'Guaiac positive.') echo "checked";?>>
             Guaiac positive</label><br>
             <label class="radio inline"><input type="radio" name="rectalmass" value="No rectal mass." <?php if ($record["rectalmass"] == 'No rectal mass.') echo "checked";?>>
             No rectal mass</label><br />
             <label class="radio inline"><input type="radio" name="rectalmass" value="+Rectal mass:" <?php if ($record["rectalmass"] == '+Rectal mass:') echo "checked";?>>
             Rectal mass:</label>&nbsp;&nbsp;
            <input type="text" value="<?php echo stripslashes($record['rectalmass2']);?>" style="width:300px; height:30px;" name="rectalmass2"><br />
            
             
             <label class="radio inline"><input type="radio" name="rectalfissure" value="No rectal fissure." <?php if ($record["rectalfissure"] == 'No rectal fissure.') echo "checked";?>>
             No rectal fissure</label><br />
             <label class="radio inline"><input type="radio" name="rectalfissure" value="+Rectal fissure:" <?php if ($record["rectalfissure"] == '+Rectal fissure:') echo "checked";?>>
             Rectal fissure:</label>&nbsp;&nbsp;
             <input type="text" value="<?php echo stripslashes($record['rectalfissure2']);?>" style="width:300px; height:30px;" name="rectalfissure2"><br />
             
             <label class="radio inline"><input type="radio" name="rectalhemor" value="No hemorrhoids." <?php if ($record["rectalhemor"] == 'No hemorrhoids.') echo "checked";?>>
             No hemorrhoids</label><br />
             <label class="radio inline"><input type="radio" name="rectalhemor" value="+Hemorrhoids:" <?php if ($record["rectalhemor"] == '+Hemorrhoids:') echo "checked";?>>
             Hemorrhoids:</label>&nbsp;&nbsp;
             <input type="text" value="<?php echo stripslashes($record['rectalhemor2']);?>" style="width:300px; height:30px;" name="rectalhemor2"><br />
             
             <label class="radio inline"><input type="radio" name="rectalsph" value="Normal sphincter tone." <?php if ($record["rectalsph"] == 'Normal sphincter tone.') echo "checked";?>>
             Normal sphincter tone</label>
             <label class="radio inline"><input type="radio" name="rectalsph" value="+Decreased sphincter tone." <?php if ($record["rectalsph"] == '+Decreased sphincter tone.') echo "checked";?>>
             Decreased sphincter tone</label>
             <label class="radio inline"><input type="radio" name="rectalsph" value="+Increased sphincter tone." <?php if ($record["rectalsph"] == '+Increased sphincter tone.') echo "checked";?>>
             Increased sphincter tone</label>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="ausc">Genitourinary</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="guingmass" value="No inguinal mass." <?php if ($record["guingmass"] == 'No inguinal mass.') echo "checked";?>>
             No inguinal mass</label>
             <label class="radio inline"><input type="radio" name="guingmass" value="+Inguinal mass:" <?php if ($record["guingmass"] == '+Inguinal mass:') echo "checked";?>>
             Inguinal mass:</label>&nbsp;&nbsp;
             <select name="guingmass2" style="width:75px">
                  <option value=" " <?php if ($record["guingmass2"] == ' ') echo "selected";?>> </option>
                  <option value="left." <?php if ($record["guingmass2"] == 'left.') echo "selected";?>>Left</option>
                  <option value="right." <?php if ($record["guingmass2"] == 'right.') echo "selected";?>>Right</option>
                  <option value="bilateral." <?php if ($record["guingmass2"] == 'bilateral.') echo "selected";?>>Bilateral</option>
             </select><br>
             
             <label class="radio inline"><input type="radio" name="guscromass" value="No scrotal mass." <?php if ($record["guscromass"] == 'No scrotal mass.') echo "checked";?>>
             No scrotal mass</label>
             <label class="radio inline"><input type="radio" name="guscromass" value="+Scrotal mass:" <?php if ($record["guscromass"] == '+Scrotal mass:') echo "checked";?>>
             Scrotal mass:</label>&nbsp;&nbsp;
             <select name="guscromass2" style="width:75px">
                  <option value=" " <?php if ($record["guscromass2"] == ' ') echo "selected";?>> </option>
                  <option value="left." <?php if ($record["guscromass2"] == 'left.') echo "selected";?>>Left</option>
                  <option value="right." <?php if ($record["guscromass2"] == 'right.') echo "selected";?>>Right</option>
                  <option value="bilateral." <?php if ($record["guscromass2"] == 'bilateral.') echo "selected";?>>Bilateral</option>
             </select><br>
             <label class="radio inline"><input type="radio" name="guvarico" value="No varicoceles." <?php if ($record["guvarico"] == 'No varicoceles.') echo "checked";?>>
             No varicoceles</label>
             <label class="radio inline"><input type="radio" name="guvarico" value="+Varicoceles." <?php if ($record["guvarico"] == '+Varicoceles.') echo "checked";?>>
             Varicoceles</label>
        </div>
   </div> 
   <div class="control-group">
        <label class="control-label" for="extcya">Extremities</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="extcya" value="No cyanosis." <?php if ($record["extcya"] == 'No cyanosis.') echo "checked";?>>
             No cyanosis</label>
             <label class="radio inline"><input type="radio" name="extcya" value="+Cyanosis." <?php if ($record["extcya"] == '+Cyanosis.') echo "checked";?>>
             Cyanosis</label><br>
             <label class="radio inline"><input type="radio" name="extclub" value="No clubbing." <?php if ($record["extclub"] == 'No clubbing.') echo "checked";?>>
             No clubbing</label>
             <label class="radio inline"><input type="radio" name="extclub" value="+Clubbing." <?php if ($record["extclub"] == '+Clubbing.') echo "checked";?>>
             Clubbing</label><br>
             <label class="radio inline"><input type="radio" name="extedem" value="No edema." <?php if ($record["extedem"] == 'No edema.') echo "checked";?>>
             No edema</label>
             <label class="radio inline"><input type="radio" name="extedem" value="+Edema: " <?php if ($record["extedem"] == '+Edema: ') echo "checked";?>>
             Edema</label>
             <select name="extedem2" style="width:50px">
                  <option value=" " <?php if ($record["extedem2"] == ' ') echo "selected";?>> </option>
                  <option value="1+" <?php if ($record["extedem2"] == '1+') echo "selected";?>>1+</option>
                  <option value="2+" <?php if ($record["extedem2"] == '2+') echo "selected";?>>2+</option>
                  <option value="3+" <?php if ($record["extedem2"] == '3+') echo "selected";?>>3+</option>
                  <option value="4+" <?php if ($record["extedem2"] == '4+') echo "selected";?>>4+</option>
             </select><br>
             <label class="radio inline"><input type="radio" name="extrom" value="Good range of motion throughout." <?php if ($record["extrom"] == 'Good range of motion throughout.') echo "checked";?>>
             Good range of motion throughout</label><br>
             <label class="radio inline"><input type="radio" name="extrom" value="Limited range of motion." <?php if ($record["extrom"] == 'Limited range of motion.') echo "checked";?>>
             Limited range of motion:</label>&nbsp;&nbsp;
             <label class="checkbox inline"><input type="hidden" name="extlue" value=""><input type="checkbox" name="extlue" value="Left upper extremity." <?php if ($record["extlue"] == 'Left upper extremity.') echo "checked";?>>
             LUE</label>
             <label class="checkbox inline"><input type="hidden" name="extrue" value=""><input type="checkbox" name="extrue" value="Right upper extremity." <?php if ($record["extrue"] == 'Right upper extremity.') echo "checked";?>>
             RUE</label>
             <label class="checkbox inline"><input type="hidden" name="extlle" value=""><input type="checkbox" name="extlle" value="Left lower extremity." <?php if ($record["extlle"] == 'Left lower extremity.') echo "checked";?>>
             LLE</label>
             <label class="checkbox inline"><input type="hidden" name="extrle" value=""><input type="checkbox" name="extrle" value="Right lower extremity." <?php if ($record["extrle"] == 'Right lower extremity.') echo "checked";?>>
             RLE</label><br>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="extcya">Vascular</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="vascaaa" value="No abdominal pulsatile mass." <?php if ($record["vascaaa"] == 'No abdominal pulsatile mass.') echo "checked";?>>
             No abdominal pulsatile mass</label>
             <label class="radio inline"><input type="radio" name="vascaaa" value="Abdominal pulsatile mass, >3 cm in diameter." <?php if ($record["vascaaa"] == 'Abdominal pulsatile mass, >3 cm in diameter.') echo "checked";?>>
             Abdominal pulsatile mass, >3 cm in diameter</label><br>
             
             <label class="radio inline">Left radial artery:</label>     
             <label class="radio inline"><input type="radio" name="vascradL" value="0+" <?php if ($record["vascradL"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascradL" value="1+" <?php if ($record["vascradL"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascradL" value="2+" <?php if ($record["vascradL"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascradL" value="3+" <?php if ($record["vascradL"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascradL" value="4+" <?php if ($record["vascradL"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Right radial artery:</label>
             <label class="radio inline"><input type="radio" name="vascradR" value="0+" <?php if ($record["vascradR"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascradR" value="1+" <?php if ($record["vascradR"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascradR" value="2+" <?php if ($record["vascradR"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascradR" value="3+" <?php if ($record["vascradR"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascradR" value="4+" <?php if ($record["vascradR"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Left femoral artery:</label>
             <label class="radio inline"><input type="radio" name="vascfemL" value="0+" <?php if ($record["vascfemL"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascfemL" value="1+" <?php if ($record["vascfemL"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascfemL" value="2+" <?php if ($record["vascfemL"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascfemL" value="3+" <?php if ($record["vascfemL"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascfemL" value="4+" <?php if ($record["vascfemL"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Right femoral artery:</label>
             <label class="radio inline"><input type="radio" name="vascfemR" value="0+" <?php if ($record["vascfemR"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascfemR" value="1+" <?php if ($record["vascfemR"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascfemR" value="2+" <?php if ($record["vascfemR"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascfemR" value="3+" <?php if ($record["vascfemR"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascfemR" value="4+" <?php if ($record["vascfemR"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
            <label class="radio inline">Left popliteal artery:</label>
             <label class="radio inline"><input type="radio" name="vascpopL" value="0+" <?php if ($record["vascpopL"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascpopL" value="1+" <?php if ($record["vascpopL"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascpopL" value="2+" <?php if ($record["vascpopL"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascpopL" value="3+" <?php if ($record["vascpopL"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascpopL" value="4+" <?php if ($record["vascpopL"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Right popliteal artery:</label>
             <label class="radio inline"><input type="radio" name="vascpopR" value="0+" <?php if ($record["vascpopR"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascpopR" value="1+" <?php if ($record["vascpopR"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascpopR" value="2+" <?php if ($record["vascpopR"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascpopR" value="3+" <?php if ($record["vascpopR"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascpopR" value="4+" <?php if ($record["vascpopR"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Left DP artery:</label>
             <label class="radio inline"><input type="radio" name="vascdpL" value="0+" <?php if ($record["vascdpL"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascdpL" value="1+" <?php if ($record["vascdpL"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascdpL" value="2+" <?php if ($record["vascdpL"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascdpL" value="3+" <?php if ($record["vascdpL"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascdpL" value="4+" <?php if ($record["vascdpL"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Right DP artery:</label>
             <label class="radio inline"><input type="radio" name="vascdpR" value="0+" <?php if ($record["vascdpR"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascdpR" value="1+" <?php if ($record["vascdpR"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascdpR" value="2+" <?php if ($record["vascdpR"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascdpR" value="3+" <?php if ($record["vascdpR"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascdpR" value="4+" <?php if ($record["vascdpR"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Left PT artery:</label>
             <label class="radio inline"><input type="radio" name="vascptL" value="0+" <?php if ($record["vascptL"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascptL" value="1+" <?php if ($record["vascptL"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascptL" value="2+" <?php if ($record["vascptL"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascptL" value="3+" <?php if ($record["vascptL"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascptL" value="4+" <?php if ($record["vascptL"] == '4+') echo "checked";?>>
             4+</label>
            <br>
             
             <label class="radio inline">Right PT artery:</label>
             <label class="radio inline"><input type="radio" name="vascptR" value="0+" <?php if ($record["vascptR"] == '0+') echo "checked";?>>
             0+</label>
             <label class="radio inline"><input type="radio" name="vascptR" value="1+" <?php if ($record["vascptR"] == '1+') echo "checked";?>>
             1+</label>
             <label class="radio inline"><input type="radio" name="vascptR" value="2+" <?php if ($record["vascptR"] == '2+') echo "checked";?>>
             2+</label>
             <label class="radio inline"><input type="radio" name="vascptR" value="3+" <?php if ($record["vascptR"] == '3+') echo "checked";?>>
             3+</label>
             <label class="radio inline"><input type="radio" name="vascptR" value="4+" <?php if ($record["vascptR"] == '4+') echo "checked";?>>
             4+</label>
            <br>
        </div>
   </div>  
   <div class="control-group">
        <label class="control-label" for="neurolat">Neurological</label>
        <div class="controls">
             <label class="radio inline"><input type="radio" name="neurolat" value="No neurological lateralization." <?php if ($record["neurolat"] == 'No neurological lateralization.') echo "checked";?>>
             No neurological lateralization</label>
             <label class="radio inline"><input type="radio" name="neurolat" value="+Right neurological lateralization." <?php if ($record["neurolat"] == '+Right neurological lateralization.') echo "checked";?>>
             Right neurological lateralization</label>
             <label class="radio inline"><input type="radio" name="neurolat" value="+Left neurological lateralization." <?php if ($record["neurolat"] == '+Left neurological lateralization.') echo "checked";?>>
             Left neurological lateralization</label><br />
             <label class="checkbox inline"><input type="hidden" name="neuronumb" value=""><input type="checkbox" name="neuronumb" value="Numbness." <?php if ($record["neuronumb"] == 'Numbness.') echo "checked";?>>
             Numbness</label>
             <label class="checkbox inline"><input type="hidden" name="neuroweak" value=""><input type="checkbox" name="neuroweak" value="Weakness." <?php if ($record["neuroweak"] == 'Weakness.') echo "checked";?>>
             Weakness</label><br>
             
             <label class="checkbox inline"><input type="hidden" name="neuroRUE" value=""><input type="checkbox" name="neuroRUE" value="R upper ext." <?php if ($record["neuroRUE"] == 'R upper ext.') echo "checked";?>>
             R upper ext</label>
             <label class="checkbox inline"><input type="hidden" name="neuroRLE" value=""><input type="checkbox" name="neuroRLE" value="R lower ext." <?php if ($record["neuroRLE"] == 'R lower ext.') echo "checked";?>>
             R lower ext</label>
             <label class="checkbox inline"><input type="hidden" name="neuroLUE" value=""><input type="checkbox" name="neuroLUE" value="L upper ext." <?php if ($record["neuroLUE"] == 'L upper ext.') echo "checked";?>>
             L upper ext</label>
             <label class="checkbox inline"><input type="hidden" name="neuroLLE" value=""><input type="checkbox" name="neuroLLE" value="L lower ext." <?php if ($record["neuroLLE"] == 'L lower ext.') echo "checked";?>>
             L lower ext</label>
        </div>
   </div>  
