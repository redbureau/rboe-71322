<div class="control-group">
    <label class="control-label" for="cctext">CC</label>
    <div class="controls">
        <textarea class="input-large" rows="4" name="cc" id="cc" ></textarea>
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
    <select style="width:75px;" name="hpi_dur_value">
        <option value="0"> </option>
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
        <option value="11">>10</option>
        <option value="38">Not applicable</option>
    </select>
    <select style="width:100px;"name="hpi_dur_type">
        <option value="0"> </option>
        <option value="12">hour(s)</option>
        <option value="13">day(s)</option>
        <option value="14">week(s)</option>
        <option value="15">month(s)</option>
        <option value="16">year(s)</option>
        <option value="17">decade(s)</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpi_dur_text" id="hpi_dur_text">
</div>
</div>
<div class="control-group">
<label class="control-label" for="quality">Quality</label>
<div class="controls">
    <label class="checkbox inline"><input type="checkbox" name="quality1" id="quality1" value="18">
    None</label>
    <label class="checkbox inline"><input type="checkbox" name="quality2" id="quality2" value="19">
    Dull</label>
    <label class="checkbox inline"><input type="checkbox" name="quality3" id="quality3" value="20">
    Sharp</label>
    <label class="checkbox inline"><input type="checkbox" name="quality4" id="quality4" value="21">
    Radiating</label>
    <label class="checkbox inline"><input type="checkbox" name="quality5" id="quality5" value="22">
    Mobile</label>
    <label class="checkbox inline"><input type="checkbox" name="quality6" id="quality6" value="23">
    Non-mobile</label><br />
    <label class="checkbox inline"><input type="checkbox" name="quality7" id="quality7" value="24">
    Compressible</label>
    <label class="checkbox inline"><input type="checkbox" name="quality8" id="quality8" value="25">
    Non-compressible</label>
    <label class="checkbox inline"><input type="checkbox" name="quality9" id="quality9" value="26">
    Reducible</label>
    <label class="checkbox inline"><input type="checkbox" name="quality10" id="quality10" value="27">
    Non-reducible</label>
    <label class="checkbox inline"><input type="checkbox" name="quality11" id="quality11" value="38">
    Not applicable</label><br /><br />
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpti_qua_text" id="hpi_qua_text">
</div>
</div>
<div class="control-group">
<label class="control-label" for="severity">Severity</label>
<div class="controls">
    <select style="width:75px"name="severity">
        <option value="0"> </option>
        <option value="28">1/10</option>
        <option value="29">2/10</option>
        <option value="30">3/10</option>
        <option value="31">4/10</option>
        <option value="32">5/10</option>
        <option value="33">6/10</option>
        <option value="34">7/10</option>
        <option value="35">8/10</option>
        <option value="36">9/10</option>
        <option value="37">10/10</option>
        <option value="38">Not applicable</option>
    </select>&nbsp;Pain scale.
    <br /><br />
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpi_sev_text" id="hpi_sev_text">
</div>
</div>
<div class="control-group">
<label class="control-label" for="orientation">Location</label>
<div class="controls">
    <select style="width:75px" name="orientation">
        <option value="0"> </option>
        <option value="39">right</option>
        <option value="40">left</option>
        <option value="41">bilateral</option>
    </select>
    <select style="width:75px" name="orientation2">
        <option value="0"> </option>
        <option value="42">upper</option>
        <option value="43">lower</option>
    </select>
    <select style="width:75px" name="orientation3">
        <option value="0"> </option>
        <option value="44">superior</option>
        <option value="45">inferior</option>
    </select>
    <select style="width:90px" name="orientation4">
        <option value="0"> </option>
        <option value="46">anterior</option>
        <option value="47">posterior</option>
    </select>
    <select style="width:75px" name="orientation5">
        <option value="0"> </option>
        <option value="48">dorsal</option>
        <option value="49">volar</option>
    </select>
    <select style="width:100px" name="physicallocation">
        <option value="0"> </option>
        <option value="50">face</option>
        <option value="51">scalp</option>
        <option value="52">ear</option>
        <option value="53">peri-auricular</option>
        <option value="54">peri-orbital</option>
        <option value="55">nose</option>
        <option value="56">peri-oral</option>
        <option value="57">neck</option>
        <option value="58">chest</option>
        <option value="59">breast</option>
        <option value="60">back</option>
        <option value="61">abdomen</option>
        <option value="62">extremity</option>
        <option value="63">hand</option>
        <option value="63">finger</option>
        <option value="64">feet</option>
        <option value="63">toe</option>
    </select>
    <br /><br />
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpi_loc_text" id="hpi_loc_text">
</div>
</div>
<div class="control-group">
<label class="control-label" class="control-label" for="timing">Timing</label>
<div class="controls">
    <select style="width:75px" name="timing">
        <option value="0"> </option>
        <option value="38">Not applicable</option>
        <option value="65">Constant</option>
        <option value="66">Occasional</option>
        <option value="67">Intermittent</option>
        <option value="68">Nighttime</option>
        <option value="69">Daytime</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpi_tim_text" id="hpi_tim_text">
</div>
</div>
<div class="control-group">
<label class="control-label" for="modifyingfactors">Modifying Factors</label>
<div class="controls">
    <select name="modifyingfactors">
         <option value="0"> </option>
         <option value="38">Not applicable</option>
         <option value="18">None</option>
         <option value="70">Worsens with PO intake</option>
         <option value="71">Better with PO intake</option>
         <option value="72">Worsens with movement</option>
         <option value="73">Better with movement</option>
     </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpi_mod_text" id="hpi_mod_text">
</div>
</div>
<div class="control-group">
<label class="control-label" for="associatedsigns">Associated Symptoms</label>
<div class="controls">
    <select style="width:75px" name="associatedsigns">
        <option value="0"> </option>
        <option value="38">Not applicable</option>
        <option value="18">None</option>
        <option value="74">+F/C</option>
        <option value="75">-F/C</option>
    </select>
    <select style="width:75px" name="associatedsigns2">
        <option value="0"> </option>
        <option value="76">+N/V</option>
        <option value="77">+N/-V</option>
        <option value="78">-N/V</option>
    </select>
    <input class="input-xxlarge" style="height:30px; width:200px;" type="text" name="hpi_assoc_text" id="hpi_assoc_text">
</div>
</div>
<div class="control-group">
<label class="control-label" for="contexthpi">Context</label>
<div class="controls">
    <textarea class="input-xxlarge" name="hpi_context" id="hpi_context" cols="50" rows="3"></textarea>  
</div>
</div>