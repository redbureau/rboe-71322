  <div class="control-group">
        <label class="control-label" for="endassess">Assessment</label>
        <div class="controls">
             <textarea class="input-xxlarge" name="endassess" id="endassess"><?php echo stripslashes($record['endassess']);?></textarea>
        </div>
  </div>  
  <div class="control-group">
        <label class="control-label" for="endplan">Plan</label>
        <div class="controls">
             <textarea class="input-xxlarge" style="height:150px;" name="endplan" id="endplan"><?php echo stripslashes($record['endplan']);?></textarea>
        </div>
  </div>
  <div class="control-group">
        <label class="control-label" for="endplan">Surgery Risk</label>
        <div class="controls">
             <label class="checkbox inline"><input type="hidden" name="risks2" value=""><input type="checkbox" name="risks2" value="Bleeding, infection, and scar formation." <?php if ($record["risks2"] == 'Bleeding, infection, and scar formation.') echo "checked";?>>
             bleeding/infection/scar formation</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks3" value=""><input type="checkbox" name="risks3" value="Bowel injury." <?php if ($record["risks3"] == 'Bowel injury.') echo "checked";?>>
             bowel injury</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks4" value=""><input type="checkbox" name="risks4" value="Solid organ injury." <?php if ($record["risks4"] == 'Solid organ injury.') echo "checked";?>>
             solid organ injury</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks5" value=""><input type="checkbox" name="risks5" value="Abscess formation." <?php if ($record["risks5"] == 'Abscess formation.') echo "checked";?>>
             abscess formation</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks6" value=""><input type="checkbox" name="risks6" value="Fistula formation." <?php if ($record["risks6"] == 'Fistula formation.') echo "checked";?>>
             fistula formation</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks7" value=""><input type="checkbox" name="risks7" value="Chronic pain and numbness." <?php if ($record["risks7"] == 'Chronic pain and numbness.') echo "checked";?>>
             chronic pain and numbness</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks8" value=""><input type="checkbox" name="risks8" value="Bowel perforation." <?php if ($record["risks8"] == 'Bowel perforation.') echo "checked";?>>
             bowel perforation</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks9" value=""><input type="checkbox" name="risks9" value="Mesh infection." <?php if ($record["risks9"] == 'Mesh infection.') echo "checked";?>>
             mesh infection</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks10" value=""><input type="checkbox" name="risks10" value="Re-operation." <?php if ($record["risks10"] == 'Re-operation.') echo "checked";?>>
             re-operation</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks11" value=""><input type="checkbox" name="risks11" value="Anastamosis leak." <?php if ($record["risks11"] == 'Anastamosis leak.') echo "checked";?>>
             anastamosis leak</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks12" value=""><input type="checkbox" name="risks12" value="Cystic duct leak." <?php if ($record["risks12"] == 'Cystic duct leak.') echo "checked";?>>
             cystic duct leak</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks13" value=""><input type="checkbox" name="risks13" value="Common bile duct injury." <?php if ($record["risks13"] == 'Common bile duct injury.') echo "checked";?>>
             common bile duct injury</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks14" value=""><input type="checkbox" name="risks14" value="Hepatic duct injury." <?php if ($record["risks14"] == 'Hepatic duct injury.') echo "checked";?>>
             hepatic duct injury</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks15" value=""><input type="checkbox" name="risks15" value="Ureter injury." <?php if ($record["risks15"] == 'Ureter injury.') echo "checked";?>>
             ureter injury</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks16" value=""><input type="checkbox" name="risks16" value="Positive margins." <?php if ($record["risks16"] == 'Positive margins.') echo "checked";?>>
             positive margins</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks17" value=""><input type="checkbox" name="risks17" value="Reoccurrence." <?php if ($record["risks17"] == 'Reoccurrence.') echo "checked";?>>
             reoccurrence</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks18" value=""><input type="checkbox" name="risks18" value="Hematoma/ecchymosis." <?php if ($record["risks18"] == 'Hematoma/ecchymosis.') echo "checked";?>>
             hematoma/ecchymosis</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks19" value=""><input type="checkbox" name="risks19" value="Adhesions/bowel obstruction." <?php if ($record["risks19"] == 'Adhesions/bowel obstruction.') echo "checked";?>>
             adhesions/bowel obstruction</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks20" value=""><input type="checkbox" name="risks20" value="Other intra-abdominal pathologies." <?php if ($record["risks20"] == 'Other intra-abdominal pathologies.') echo "checked";?>>
             other intra-abdominal pathologies</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks21" value=""><input type="checkbox" name="risks21" value="Persistent pain, numbness, or both." <?php if ($record["risks21"] == 'Persistent pain, numbness, or both.') echo "checked";?>>
             persistent pain/numbness/both</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks22" value=""><input type="checkbox" name="risks22" value="Paralysis." <?php if ($record["risks22"] == 'Paralysis.') echo "checked";?>>
             paralysis</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks23" value=""><input type="checkbox" name="risks23" value="Fecal incontinence." <?php if ($record["risks23"] == 'Fecal incontinence.') echo "checked";?>>
             fecal incontinence</label><br>
             <label class="checkbox inline"><input type="hidden" name="risks24" value=""><input type="checkbox" name="risks24" value="Hemothorax and pneumothorax." <?php if ($record["risks24"] == 'Hemothorax and pneumothorax.') echo "checked";?>>
             hemothorax and pneumothorax</label><br>
             <label class="checkbox inline"><input type="checkbox" name="risks25" value="Spermatic cord injury and sterility." <?php if ($record["risks25"] == 'Spermatic cord injury and sterility.') echo "checked";?>>
             spermatic cord injury and sterility</label><br>
         </div>         
  </div>
  
  <div class="control-group">
        <label class="control-label" for="risksanes">Anesthesia Risk</label>
        <div class="controls">
             <label class="checkbox inline"><input type="hidden" name="risksanes" value=""><input type="checkbox" name="risksanes" value="Anesthesia risks discussed and understood by patient and family members to be: Myocardial infarct, pulmonary embolism, cerebral vascular accident, allergic reactions, and death." <?php if ($record["risksanes"] == 'Anesthesia risks discussed and understood by patient and family members to be: Myocardial infarct, pulmonary embolism, cerebral vascular accident, allergic reactions, and death.') echo "checked";?>>
             Risks of anesthesia discussed</label>
        </div>
  </div>
  <div class="control-group">
        <label class="control-label" for="lasertx">Laser</label>
        <div class="controls">
             <label class="checkbox inline"><input type="hidden" name="lasertx1" value=""><input type="checkbox" name="lasertx1" value="Muscle stimulation and manual lymphatic therapy." <?php if ($record["lasertx1"] == 'Muscle stimulation and manual lymphatic therapy.') echo "checked";?>>
             Laser therapy</label><br>
             <label class="checkbox inline"><input type="hidden" name="lasertx2" value=""><input type="checkbox" name="lasertx2" value="Patient understands that worsening of pain requires evaluation by a neurologist or neurosurgeon with further radiographic/diagnositic tests. Options for chronic pain treatment discussed. Education about physical therapy discussed. Patient understands that laser therapy is an adjunct and not the main therapy for chronic pain. Risks of laser discussed and understood: thermal tissue damage, retinal injuries, worsening pain, photochemical reaction/damage, and other radiation related damage." <?php if ($record["lasertx2"] == 'Patient understands that worsening of pain requires evaluation by a neurologist or neurosurgeon with further radiographic/diagnositic tests. Options for chronic pain treatment discussed. Education about physical therapy discussed. Patient understands that laser therapy is an adjunct and not the main therapy for chronic pain. Risks of laser discussed and understood: thermal tissue damage, retinal injuries, worsening pain, photochemical reaction/damage, and other radiation related damage.') echo "checked";?>>
             Risks of laser therapy discussed</label>
        </div>
  </div>
  <div class="control-group">        
        <label class="control-label" for="weighthm">Health Counseling</label>
        <div class="controls">
            <label class="checkbox inline"><input type="hidden" name="weighthm" value=""><input type="checkbox" name="weighthm" value="Dietary and exercise counseling was performed. Morbid obesity risks, morbidity, mortality, therapy options, and medications discussed and understood." <?php if ($record["weighthm"] == 'Dietary and exercise counseling was performed. Morbid obesity risks, morbidity, mortality, therapy options, and medications discussed and understood.') echo "checked";?>>
            Dietary counseling</label>&nbsp;&nbsp;
             <select name="weighthmtime" style="width:75px">
                  <option value=" "> </option>
                  <option value="15 mins spent in discussing this option." <?php if ($record["weighthmtime"] == '15 mins spent in discussing this option.') echo "selected";?>>15 mins</option>
                  <option value="30 mins spent in discussing this option." <?php if ($record["weighthmtime"] == '30 mins spent in discussing this option.') echo "selected";?>>30 mins</option>
                  <option value="45 mins spent in discussing this option." <?php if ($record["weighthmtime"] == '45 mins spent in discussing this option.') echo "selected";?>>45 mins</option>
                  <option value="60 mins spent in discussing this option." <?php if ($record["weighthmtime"] == '60 mins spent in discussing this option.') echo "selected";?>>60 mins</option>
             </select><br>
             <label class="checkbox inline"><input type="hidden" name="smokinghm" value=""><input type="checkbox" name="smokinghm" value="Smoking cessation counseling was performed. Smoking risks, therapy options, and medications discussed and understood." <?php if ($record["smokinghm"] == 'Smoking cessation counseling was performed. Smoking risks, therapy options, and medications discussed and understood.') echo "checked";?>>
             Smoking counseling</label>&nbsp;&nbsp;
             <select name="smokinghmtime" style="width:75px">
                  <option value=" "> </option>
                  <option value="15 mins spent in discussing this option." <?php if ($record["smokinghmtime"] == '15 mins spent in discussing this option.') echo "selected";?>>15 mins</option>
                  <option value="30 mins spent in discussing this option." <?php if ($record["smokinghmtime"] == '30 mins spent in discussing this option.') echo "selected";?>>30 mins</option>
                  <option value="45 mins spent in discussing this option." <?php if ($record["smokinghmtime"] == '45 mins spent in discussing this option.') echo "selected";?>>45 mins</option>
                  <option value="60 mins spent in discussing this option." <?php if ($record["smokinghmtime"] == '60 mins spent in discussing this option.') echo "selected";?>>60 mins</option>
             </select>
         </div>
  </div>
  <div class="control-group">        
        <label class="control-label" for="followup">Follow up</label>
        <div class="controls">
            <label class="checkbox inline"><input type="hidden" name="followup" value=""><input type="checkbox" name="followup" value="Follow up:" <?php if ($record["followup"] == 'Follow up in') echo "checked";?>>
            Follow up:</label>&nbsp;&nbsp;
             <select name="followup1" style="width:350px">
                  <option value=" " <?php if ($record["followup1"] == ' ') echo "selected";?>> </option>
                  <option value="1" <?php if ($record["followup1"] == '1') echo "selected";?>>1</option>
                  <option value="2" <?php if ($record["followup1"] == '2') echo "selected";?>>2</option>
                  <option value="3" <?php if ($record["followup1"] == '3') echo "selected";?>>3</option>
                  <option value="4" <?php if ($record["followup1"] == '4') echo "selected";?>>4</option>
                  <option value="5" <?php if ($record["followup1"] == '5') echo "selected";?>>5</option>
                  <option value="6" <?php if ($record["followup1"] == '6') echo "selected";?>>6</option>
                  <option value="7" <?php if ($record["followup1"] == '7') echo "selected";?>>7</option>
                  <option value="8" <?php if ($record["followup1"] == '8') echo "selected";?>>8</option>
                  <option value="9" <?php if ($record["followup1"] == '9') echo "selected";?>>9</option>
                  <option value="10" <?php if ($record["followup1"] == '10') echo "selected";?>>10</option>
                   <option value="After completion of radiological or laboratory tests." <?php if ($record["followup1"] == 'After completion of radiological or laboratory tests.') echo "selected";?>>After completion of radiological or laboratory tests</option>
                  <option value="As needed." <?php if ($record["followup1"] == 'As needed.') echo "selected";?>>As needed</option>
             </select>
             <select name="followup2" style="width:80px">   
                  <option value=" "> </option>
                  <option value="hour(s)" <?php if ($record["followup2"] == 'hour(s)') echo "selected";?>>Hour(s)</option>
                  <option value="day(s)" <?php if ($record["followup2"] == 'day(s)') echo "selected";?>>Day(s)</option>
                  <option value="week(s)" <?php if ($record["followup2"] == 'week(s)') echo "selected";?>>Week(s)</option>
                  <option value="month(s)" <?php if ($record["followup2"] == 'month(s)') echo "selected";?>>Month(s)</option>
                  <option value="year(s)" <?php if ($record["followup2"] == 'year(s)') echo "selected";?>>Year(s)</option>
            </select><br>
         </div>
  </div> 
