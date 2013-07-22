   <div class="control-group">
   	<label class="control-label" for="cctext">CC</label>
    <div class="controls">
    	<textarea class="input-medium" name="cctext" id="cctext" ><?php echo stripslashes($record['cctext']);?></textarea>
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="hpi">HPI</label>
    <div class="controls">
    	<textarea class="input-xxlarge" rows="5" name="hpi" id="hpi"><?php echo stripslashes($record['hpi']);?></textarea>
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="duration">Duration</label>
    <div class="controls">
    	<select style="width:75px" name="duration">
            <option value=" "> </option>
            <option value="1" <?php if ($record["duration"] == '1') echo "selected"; ?>>1</option>
            <option value="2" <?php if ($record["duration"] == '2') echo "selected"; ?>>2</option>
            <option value="3" <?php if ($record["duration"] == '3') echo "selected"; ?>>3</option>
            <option value="4" <?php if ($record["duration"] == '4') echo "selected"; ?>>4</option>
            <option value="5" <?php if ($record["duration"] == '5') echo "selected"; ?>>5</option>
            <option value="6" <?php if ($record["duration"] == '6') echo "selected"; ?>>6</option>
            <option value="7" <?php if ($record["duration"] == '7') echo "selected"; ?>>7</option>
            <option value="8" <?php if ($record["duration"] == '8') echo "selected"; ?>>8</option>
            <option value="9" <?php if ($record["duration"] == '9') echo "selected"; ?>>9</option>
            <option value="10" <?php if ($record["duration"] == '10') echo "selected"; ?>>10</option>
            <option value=">10" <?php if ($record["duration"] == '>10') echo "selected"; ?>>>10</option>
    	</select>
        <select style="width:100px"name="duration2">
            <option value=" "> </option>
            <option value="hours" <?php if ($record["duration2"] == 'hours') echo "selected"; ?>>hour(s)</option>
            <option value="days" <?php if ($record["duration2"] == 'days') echo "selected"; ?>>day(s)</option>
            <option value="weeks" <?php if ($record["duration2"] == 'weeks') echo "selected"; ?>>week(s)</option>
            <option value="months" <?php if ($record["duration2"] == 'months') echo "selected"; ?>>month(s)</option>
            <option value="years" <?php if ($record["duration2"] == 'years') echo "selected"; ?>>year(s)</option>
            <option value="decades" <?php if ($record["duration2"] == 'decades') echo "selected"; ?>>decade(s)</option>
        </select>
        <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="durtext" id="durtext" value="<?php echo stripslashes($record['durtext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="quality">Quality</label>
    <div class="controls">
    	<select style="width:100px" name="quality">
            <option value=" "> </option>
            <option value="None" <?php if ($record["quality"] == 'None') echo "selected"; ?>>None</option>
            <option value="Dull" <?php if ($record["quality"] == 'Dull') echo "selected"; ?>>Dull</option>
            <option value="Sharp" <?php if ($record["quality"] == 'Sharp') echo "selected"; ?>>Sharp</option>
            <option value="Radiating" <?php if ($record["quality"] == 'Radiating') echo "selected"; ?>>Radiating</option>
            <option value="Mobile" <?php if ($record["quality"] == 'Mobile') echo "selected"; ?>>Mobile</option>
            <option value="Non-mobile" <?php if ($record["quality"] == 'Non-mobile') echo "selected"; ?>>Non-mobile</option>
            <option value="Compressible" <?php if ($record["quality"] == 'Compressible') echo "selected"; ?>>Compressible</option>
            <option value="Non-compressible" <?php if ($record["quality"] == 'Non-compressible') echo "selected"; ?>>Non-compressible</option>
            <option value="Reducible" <?php if ($record["quality"] == 'Reducible') echo "selected"; ?>>Reducible</option>
        	<option value="Non-reducible" <?php if ($record["quality"] == 'Non-reducible') echo "selected"; ?>>Non-reducible</option>
        </select>
   		<input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="quatext" id="quatext" value="<?php echo stripslashes($record['quatext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="severity">Severity</label>
    <div class="controls">
    	<select style="width:75px"name="severity">
            <option value=" "> </option>
            <option value="1/10" <?php if ($record["severity"] == '1/10') echo "selected"; ?>>1/10</option>
            <option value="2/10" <?php if ($record["severity"] == '2/10') echo "selected"; ?>>2/10</option>
            <option value="3/10" <?php if ($record["severity"] == '3/10') echo "selected"; ?>>3/10</option>
            <option value="4/10" <?php if ($record["severity"] == '4/10') echo "selected"; ?>>4/10</option>
            <option value="5/10" <?php if ($record["severity"] == '5/10') echo "selected"; ?>>5/10</option>
            <option value="6/10" <?php if ($record["severity"] == '6/10') echo "selected"; ?>>6/10</option>
            <option value="7/10" <?php if ($record["severity"] == '7/10') echo "selected"; ?>>7/10</option>
            <option value="8/10" <?php if ($record["severity"] == '8/10') echo "selected"; ?>>8/10</option>
            <option value="9/10" <?php if ($record["severity"] == '9/10') echo "selected"; ?>>9/10</option>
            <option value="10/10" <?php if ($record["severity"] == '10/10') echo "selected"; ?>>10/10</option> 
        </select>
        <br /><br />
        <input class="input-xxlarge" style="height:30px; width:30px;" type="text" name="sizetext" id="sizetext" value="<?php echo stripslashes($record['sizetext']);?>">&nbsp;cm (length)
        <input class="input-xxlarge" style="height:30px; width:30px;" type="text" name="sizetext2" id="sizetext2" value="<?php echo stripslashes($record['sizetext2']);?>">&nbsp;cm (width)
        <input class="input-xxlarge" style="height:30px; width:30px;" type="text" name="sizetext3" id="sizetext3" value="<?php echo stripslashes($record['sizetext3']);?>">&nbsp;cm (depth)
    	<br /><br />
   		<input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="sevtext" id="sevtext" value="<?php echo stripslashes($record['sevtext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="orientation">Location</label>
    <div class="controls">
    	<select style="width:75px" name="orientation">
            <option value=" "> </option>
            <option value="Right" <?php if ($record["orientation"] == 'Right') echo "selected"; ?>>Right</option>
            <option value="Left" <?php if ($record["orientation"] == 'Left') echo "selected"; ?>>Left</option>
        	<option value="Bilateral" <?php if ($record["orientation"] == 'Bilateral') echo "selected"; ?>>Bilateral</option>
        </select>
        <select style="width:75px" name="orientation2">
            <option value=" "> </option>
            <option value="upper" <?php if ($record["orientation2"] == 'upper') echo "selected"; ?>>upper</option>
            <option value="lower" <?php if ($record["orientation2"] == 'lower') echo "selected"; ?>>lower</option>
        </select>
        <select style="width:75px" name="orientation3">
            <option value=" "> </option>
            <option value="superior" <?php if ($record["orientation3"] == 'superior') echo "selected"; ?>>superior</option>
            <option value="inferior" <?php if ($record["orientation3"] == 'inferior') echo "selected"; ?>>inferior</option>
    	</select>
        <select style="width:90px" name="orientation4">
            <option value=" "> </option>
            <option value="anterior" <?php if ($record["orientation4"] == 'anterior') echo "selected"; ?>>anterior</option>
            <option value="posterior" <?php if ($record["orientation4"] == 'posterior') echo "selected"; ?>>posterior</option>
        </select>
        <select style="width:75px" name="orientation5">
            <option value=" "> </option>
            <option value="dorsal" <?php if ($record["orientation5"] == 'dorsal') echo "selected"; ?>>dorsal</option>
            <option value="volar" <?php if ($record["orientation5"] == 'volar') echo "selected"; ?>>volar</option>
    	</select>
        <select style="width:75px" name="physicallocation">
            <option value=" "> </option>
            <option value="face" <?php if ($record["physicallocation"] == 'face') echo "selected"; ?>>face</option>
            <option value="scalp" <?php if ($record["physicallocation"] == 'scalp') echo "selected"; ?>>scalp</option>
            <option value="neck" <?php if ($record["physicallocation"] == 'neck') echo "selected"; ?>>neck</option>
            <option value="chest" <?php if ($record["physicallocation"] == 'chest') echo "selected"; ?>>chest</option>
            <option value="breast" <?php if ($record["physicallocation"] == 'breast') echo "selected";?>>breast</option>
            <option value="back" <?php if ($record["physicallocation"] == 'back') echo "selected"; ?>>back</option>
            <option value="abdomen" <?php if ($record["physicallocation"] == 'abdomen') echo "selected"; ?>>abdomen</option>
            <option value="extremity"<?php if ($record["physicallocation"] == 'extremity') echo "selected"; ?>>extremity</option>
        </select>
   		<input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="loctext" id="loctext" value="<?php echo stripslashes($record['loctext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="timing">Timing</label>
    <div class="controls">
        <select style="width:75px" name="timing">
          	<option value=" "> </option>
              <option value="Constant" <?php if ($record["timing"] == 'Constant') echo "selected"; ?>>Constant</option>
              <option value="Occasional" <?php if ($record["timing"] == 'Occasional') echo "selected"; ?>>Occasional</option>
              <option value="Intermittent" <?php if ($record["timing"] == 'Intermittent') echo "selected"; ?>>Intermittent</option>
              <option value="Nighttime" <?php if ($record["timing"] == 'Nighttime') echo "selected"; ?>>Nighttime</option>
              <option value="Daytime" <?php if ($record["timing"] == 'Daytime') echo "selected"; ?>>Daytime</option>
        </select>
   		<input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="timtext" id="timtext" value="<?php echo stripslashes($record['timtext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="modifyingfactors">Modifying Factors</label>
    <div class="controls">
    	<select name="modifyingfactors">
             <option value="None" <?php if ($record["modifyingfactors"] == 'None') echo "selected"; ?>>None</option>
             <option value="Worsens with PO intake" <?php if ($record["modifyingfactors"] == 'Worsens with PO intake') echo "selected"; ?>>Worsens with PO intake</option>
             <option value="Better with PO intake" <?php if ($record["modifyingfactors"] == 'Better with PO intake') echo "selected"; ?>>Better with PO intake</option>
             <option value="Worsens with movement" <?php if ($record["modifyingfactors"] == 'Worsens with movement') echo "selected"; ?>>Worsens with movement</option>
             <option value="Better with movement" <?php if ($record["modifyingfactors"] == 'Better with movement') echo "selected"; ?>>Better with movement</option>
         </select>
   		<input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="modtext" id="modtext" value="<?php echo stripslashes($record['modtext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="associatedsigns">Assoc. Symptoms</label>
    <div class="controls">
    	<select style="width:75px" name="associatedsigns">
            <option value=" "> </option>
            <option value="None" <?php if ($record["associatedsigns"] == 'None') echo "selected"; ?>>None</option>
            <option value="+Fever and chills" <?php if ($record["associatedsigns"] == '+Fever and chills') echo "selected"; ?>>+F/C</option>
            <option value="-Fever and chills" <?php if ($record["associatedsigns"] == '-Fever and chills') echo "selected"; ?>>-F/C</option>
        </select>
        <select style="width:75px" name="associatedsigns2">
            <option value=" "> </option>
            <option value="+Nausea and vomiting" <?php if ($record["associatedsigns2"] == '+Nausea and vomiting') echo "selected"; ?>>+N/V</option>
            <option value="-Nausea and vomiting" <?php if ($record["associatedsigns2"] == '-Nausea and vomiting') echo "selected"; ?>>-N/V</option>
        </select>
   		<input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="assoctext" id="assoctext" value="<?php echo stripslashes($record['assoctext']);?>">
    </div>
   </div>
   <div class="control-group">
   	<label class="control-label" for="contexthpi">Context</label>
    <div class="controls">
    	<textarea class="input-xxlarge" name="contexthpi" id="contexthpi"><?php echo stripslashes($record['contexthpi']);?></textarea>  
    </div>
   </div>