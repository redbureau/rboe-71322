<div class="control-group">
    <label class="control-label" for="cctext">CC</label>
    <div class="controls">
        <textarea class="input-medium" name="cctext" id="cctext" ></textarea>
    </div>
</div>
<div class="control-group">
<label class="control-label" for="hpi">HPI</label>
<div class="controls">
    <textarea class="input-xxlarge" rows="5" name="hpi" id="hpi">This is a <?php echo $age; ?> year old <?php echo strtolower($sex); ?> </textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="duration">Duration</label>
<div class="controls">
    <select style="width:75px;" name="duration">
        <option value=" "> </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value=">10">>10</option>
    </select>
    <select style="width:100px;"name="duration2">
        <option value=" "> </option>
        <option value="hours">hour(s)</option>
        <option value="days">day(s)</option>
        <option value="weeks">week(s)</option>
        <option value="months">month(s)</option>
        <option value="years">year(s)</option>
        <option value="decades">decade(s)</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="durtext" id="durtext">
</div>
</div>
<div class="control-group">
<label class="control-label" for="quality">Quality</label>
<div class="controls">
    <select style="width:100px" name="quality">
        <option value=" "> </option>
        <option value="None">None</option>
        <option value="Dull">Dull</option>
        <option value="Sharp">Sharp</option>
        <option value="Radiating">Radiating</option>
        <option value="Mobile">Mobile</option>
        <option value="Non-mobile">Non-mobile</option>
        <option value="Compressible">Compressible</option>
        <option value="Non-compressible">Non-compressible</option>
        <option value="Reducible">Reducible</option>
        <option value="Non-reducible">Non-reducible</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="quatext" id="quatext">
</div>
</div>
<div class="control-group">
<label class="control-label" for="severity">Severity</label>
<div class="controls">
    <select style="width:75px"name="severity">
        <option value=" "> </option>
        <option value="1/10">1/10</option>
        <option value="2/10">2/10</option>
        <option value="3/10">3/10</option>
        <option value="4/10">4/10</option>
        <option value="5/10">5/10</option>
        <option value="6/10">6/10</option>
        <option value="7/10">7/10</option>
        <option value="8/10">8/10</option>
        <option value="9/10">9/10</option>
        <option value="10/10">10/10</option> 
    </select>&nbsp;Pain scale.
    <br /><br />
    <input class="input-xxlarge" style="height:30px; width:30px;" type="text" name="sizetext" id="sizetext">&nbsp;cm (length)
    <input class="input-xxlarge" style="height:30px; width:30px;" type="text" name="sizetext2" id="sizetext2">&nbsp;cm (width)
    <input class="input-xxlarge" style="height:30px; width:30px;" type="text" name="sizetext3" id="sizetext3">&nbsp;cm (depth)
    <br /><br />
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="sevtext" id="sevtext">
</div>
</div>
<div class="control-group">
<label class="control-label" for="orientation">Location</label>
<div class="controls">
    <select style="width:75px" name="orientation">
        <option value=" "> </option>
        <option value="Right">Right</option>
        <option value="Left">Left</option>
        <option value="Bilateral">Bilateral</option>
    </select>
    <select style="width:75px" name="orientation2">
        <option value=" "> </option>
        <option value="upper">upper</option>
        <option value="lower">lower</option>
    </select>
    <select style="width:75px" name="orientation3">
        <option value=" "> </option>
        <option value="superior">superior</option>
        <option value="inferior">inferior</option>
    </select>
    <select style="width:90px" name="orientation4">
        <option value=" "> </option>
        <option value="anterior">anterior</option>
        <option value="posterior">posterior</option>
    </select>
    <select style="width:75px" name="orientation5">
        <option value=" "> </option>
        <option value="dorsal">dorsal</option>
        <option value="volar">volar</option>
    </select>
    <select style="width:100px" name="physicallocation">
        <option value=" "> </option>
        <option value="face">face</option>
        <option value="scalp">scalp</option>
        <option value="neck">neck</option>
        <option value="chest">chest</option>
        <option value="breast">breast</option>
        <option value="back">back</option>
        <option value="abdomen">abdomen</option>
        <option value="extremity">extremity</option>
    </select>
    <br /><br />
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="loctext" id="loctext">
</div>
</div>
<div class="control-group">
<label class="control-label" class="control-label" for="timing">Timing</label>
<div class="controls">
    <select style="width:75px" name="timing">
        <option value=" "> </option>
        <option value="Constant">Constant</option>
        <option value="Occasional">Occasional</option>
        <option value="Intermittent">Intermittent</option>
        <option value="Nighttime">Nighttime</option>
        <option value="Daytime">Daytime</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="timtext" id="timtext">
</div>
</div>
<div class="control-group">
<label class="control-label" for="modifyingfactors">Modifying Factors</label>
<div class="controls">
    <select name="modifyingfactors">
         <option value=" "> </option>
         <option value="None">None</option>
         <option value="Worsens with PO intake">Worsens with PO intake</option>
         <option value="Better with PO intake">Better with PO intake</option>
         <option value="Worsens with movement">Worsens with movement</option>
         <option value="Better with movement">Better with movement</option>
     </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="modtext" id="modtext">
</div>
</div>
<div class="control-group">
<label class="control-label" for="associatedsigns">Assoc. Symptoms</label>
<div class="controls">
    <select style="width:75px" name="associatedsigns">
        <option value=" "> </option>
        <option value="none">None</option>
        <option value="+Fever and chills">+F/C</option>
        <option value="-Fever and chills">-F/C</option>
    </select>
    <select style="width:75px" name="associatedsigns2">
        <option value=" "> </option>
        <option value="+Nausea and vomiting">+N/V</option>
        <option value="-Nausea and vomiting">-N/V</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="assoctext" id="assoctext">
</div>
</div>
<div class="control-group">
<label class="control-label" for="contexthpi">Context</label>
<div class="controls">
    <textarea class="input-xxlarge" name="contexthpi" id="contexthpi" cols="50" rows="3"></textarea>  
</div>
</div>