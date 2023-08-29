<!-- Excavation Options -->
<fieldset class="excavation-options">
    <legend>Excavation Options</legend>
    <i class="w3-text-red small">*This does not include cost if soil is expansive or a 'hard dig' additional fees may be applied. </i>
    <div class="excavation-option">
        <span class="excavation-label">Select Excavation Option:</span>
        <select id="excavationOption" onchange="updateExcavationCost('excavationOption')">
            <option value="0">Choose an option</option>
            <option value="1">Standard Excavation (S/A up to 400 sq. ft.)</option>
            <option value="2">Standard Bobcat (access 6'8" min, up to 400 sf/6' deep)</option>
            <option value="3">Small Bobcat (access 6'7" to 5'2" min, up to 400 sf/6' deep)</option>
            <option value="4">Triple Mini Bobcat (access 5'1" to 3'6" min, up to 350 sf/6' deep)</option>
            <option value="5">Hand dug (Access to small to fit equipment)</option>
        </select>
        <span class="excavation-cost">$0.00</span>
    </div>
    <div class="excavation-option">
        <span class="excavation-label">Select Dump Fee:</span>
        <select id="excavationOptionDUMPFEE" onchange="updateExcavationCost('dumpfee')">
            <option value="0">Greater Phoenix Metro Area</option>
            <option value="1">Outside Phoenix Metro Area</option>
           
        </select>
        <span id="dumpfee" class="excavation-cost">$0.00</span>
    </div>

 

    <div class="excavation-option w3-half">
        <div class="w3-margin">
    <input type="checkbox" id="stumpRemoval">
        <label for="stumpRemoval">Stump Removal (QTY):</label><br>
        <input type="number" id="stumpRemovals" name="stumpRemovals" required maxlength="5">
    </div>
    </div>

    <div class="excavation-option w3-half">
    <div class="w3-margin">
    <input type="checkbox" id="rockRemoval">
        <label for="rockRemoval">Rock Removal (SQ FT):</label><br>
        <input type="number" id="rockRemovals" name="rockRemovals" required maxlength="5">
    </div></div>

    <div class="excavation-option w3-half">
    <div class="w3-margin">
    <input type="checkbox" id="grassRemoval">
        <label for="grassRemoval">Grass Removal (SQ FT):</label><br>
        <input type="number" id="grassRemovals" name="grassemovals" required maxlength="5">
    </div></div>

    <div class="excavation-option w3-half ">
    <div class="w3-margin">
    <input type="checkbox" id="concreteRemoval">
        <label for="concreteRemoval">Concrete Removal (SQ FT):</label><br>
        <input type="number" id="concreteRemovals" name="concreteRemovals" required maxlength="5">
    </div></div>
<br>
<div class="w3-half ">
<div class="w3-margin">
    <input type="checkbox" id="TripFeeST">
        <label for="TripFeeST">Trip Fee (San Tan Valley, Apache Junction, Gold Canyon):</label>
        <input type="number" id="TripFeeSTAMOUNT" name="TripFeeSTAMOUNT" required maxlength="5">
    </div></div>
    <div class="w3-half">
    <div class="w3-margin">
    <input type="checkbox" id="TripFeeMR">
        <label for="TripFeeMR">Trip Fee (Maricopa, Casa Grande):</label>
        <input type="number" id="TripFeeMRAMOUNT" name="TripFeeMRAMOUNT" required maxlength="5">
    </div></div>
   
    
    <!-- Rest of the excavation options will be added here -->
</fieldset>

