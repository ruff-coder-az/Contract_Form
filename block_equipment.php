

<fieldset>
    <legend>Equipment</legend>

    
    

    
    <div class="w3-half w3-padding">
    <legend><b>Filters</b></legend>

   
<select id="filterType" name="filterType" class="w3-round w3-input" >
  <option value="150">150 sq.ft. Pentair Clean & Clear Cartridge Filter</option>
  <option value="240">240 sq.ft. Pentair Clean & Clear Plus Cartridge Filter</option>
  <option value="320">320 sq.ft. Pentair Clean & Clear Plus Cartridge Filter</option>
  <option value="420" selected>420 sq. ft. Pentair Clean & Clear Plus Cartridge Filter</option>
  <option value="520">520 sq.ft. Pentair Clean & Clear Plus Cartridge Filter</option>
</select>

        <input type="number" id="filterQuantity" name="filterQuantity" value="1" placeholder="Quantity">
    </div>
  

    
    <div class="w3-half w3-padding">
    <legend><b>Pumps</b></legend>

   
<select id="pumpType" name="pumpType" class="w3-round w3-input">
  <option value="0.5HP">1/2 HP Pentair Whisperflo Pump (deck jets)</option>
  <option value="0.75HP">3/4 HP Pentair Whisperflo Pump</option>
  <option value="1HP230V">1HP 230V Intelliflo I1 Variable Speed Pump</option>
  <option value="1.5HP115/208-230V">1.5HP 115/208-230V SuperFlo VS Variable Speed Pump</option>
  <option value="2HP">2 HP Pentair Whisperflo Pump</option>
  <option value="3HP230VVSF">3HP 230V Intelliflo VSF Variable Speed & Flow Pump</option>
  <option value="3HP230VVS">3HP 230V Intelliflo Variable Speed Pump</option>
  <option value="3HP230VVS+SVRS">3HP 230V Intelliflo VS+SVRS Variable Speed Pump</option>
</select>

        <input type="number" id="pumpQuantity" name="pumpQuantity" value="1" placeholder="Quantity">

        
    <legend><b>Additional Pumps</b></legend>
    <select id="addpumpType" name="addpumpType" class="w3-round w3-input">
    <option value="NONE">(None)</option>
  <option value="0.5HP">1/2 HP Pentair Whisperflo Pump (deck jets)</option>
  <option value="0.75HP">3/4 HP Pentair Whisperflo Pump</option>
  <option value="1HP230V">1HP 230V Intelliflo I1 Variable Speed Pump</option>
  <option value="1.5HP115/208-230V">1.5HP 115/208-230V SuperFlo VS Variable Speed Pump</option>
  <option value="2HP">2 HP Pentair Whisperflo Pump</option>
  <option value="3HP230VVSF">3HP 230V Intelliflo VSF Variable Speed & Flow Pump</option>
  <option value="3HP230VVS">3HP 230V Intelliflo Variable Speed Pump</option>
  <option value="3HP230VVS+SVRS">3HP 230V Intelliflo VS+SVRS Variable Speed Pump</option>
</select>
    <input type="number" id="addpumpQuantity" name="addpumpQuantity" value="0" placeholder="Quantity">
    </div>

    
    <div class="w3-half w3-padding">
    <legend><b>Cleaning</b></legend>

    <label for="SectionCleaner">Kreepy Krusier Section Cleaner</label>
        <input type="number" id="SectionCleaner" name="SectionCleaner" value="1" placeholder="Quantity">
  
<br>
    <label for="inFloorSystem">Select In-Floor Cleaning System:</label>
<select id="inFloorSystem" name="inFloorSystem" class="w3-round w3-input">
  <option value="InFloor">In Floor System</option>
  <option value="InFloorSpa">In Floor System (Spa only)</option>
  <option value="InFloorStepClean">In Floor System (Step-clean)</option>
</select>
<label for="INFLOORQuantity">Infloor heads</label>
        <input type="number" id="INFLOORQuantity" name="INFLOORQuantity" value="0" placeholder="Quantity">
</div>

<div class="w3-half w3-padding">
    <legend><b>Heat Pumps / Heaters</b></legend>

   
<select id="heaterType" name="heaterType" class="w3-round w3-input">
  <option value="250KBtu">250K BTU Pentair Mastertemp Heater</option>
  <option value="400KBtu">400K BTU Pentair Mastertemp Heater</option>
  <option value="VentKit">Pentair Mastertemp Heater 250 - 400 K Vent Kit</option>
  <option value="120KBtu">120K BTU Pentair Ultratemp 120 Heat Pump</option>
  <option value="127KBtu">127K BTU Pentair Ultratemp 120R H/C Heat Pump</option>
  <option value="143KBtu">143K BTU Pentair Ultratemp 140 Heat Pump</option>
  <option value="140KBtu">140K BTU Pentair Ultratemp 140R H/C Heat Pump</option>
  <!-- Add new options here as needed -->
</select>

        <input type="number" id="heatpumpQuantity" name="heatpumpQuantity" value="0" placeholder="Quantity">
        <legend><b>Additional Pumps</b></legend>
        <select id="addheaterType" name="addheaterType" class="w3-round w3-input">
        <option value="None">(None)</option>
  <option value="250KBtu">250K BTU Pentair Mastertemp Heater</option>
  <option value="400KBtu">400K BTU Pentair Mastertemp Heater</option>
  <option value="VentKit">Pentair Mastertemp Heater 250 - 400 K Vent Kit</option>
  <option value="120KBtu">120K BTU Pentair Ultratemp 120 Heat Pump</option>
  <option value="127KBtu">127K BTU Pentair Ultratemp 120R H/C Heat Pump</option>
  <option value="143KBtu">143K BTU Pentair Ultratemp 140 Heat Pump</option>
  <option value="140KBtu">140K BTU Pentair Ultratemp 140R H/C Heat Pump</option>
  <!-- Add new options here as needed -->
</select>

        <input type="number" id="addheatpumpQuantity" name="addheatpumpQuantity" value="0" placeholder="Quantity">
    </div>

    <div class="w3-half w3-padding">
    <legend><b>Automation</b></legend>

    <label for="controllerType">
<select id="controllerType" name="controllerType" class="w3-round w3-input">
  <option value="PL4PoolOnly">Easytouch - PL4 (pool only) Controller w/Screen Logic</option>
  <option value="PSL4PoolSpa">Easytouch - PSL4 (pool - spa) Controller w/Screen Logic</option>
  <option value="PL4PSL4Wireless">Easytouch - PL4/PSL4 Wireless Controller Kit</option>
  <option value="PL4PSL4Wired">Easytouch - PL4/PSL4 Wired In-house Control Panel</option>
  <option value="Easytouch4Pool">Easytouch - 4 (pool) Control</option>
  <option value="Easytouch4PoolSpa">Easytouch - 4 (pool - spa) Control</option>
  <option value="ScreenLogic2">ScreenLogic2 Wireless Interface Bundle</option>
  <option value="Easytouch8PoolSpa">Easytouch - 8 (pool - spa) Control</option>
  <option value="IntellicenterI5PS">Intellicenter I5PS Pool/Spa Control w/o SCG</option>
  <option value="IntellicenterI8PS">Intellicenter I8PS Pool/Spa Control w/o SCG</option>
  <!-- Add new options here as needed -->
</select>
</label>
        <input type="number" id="Automation" name="Automation" value="0" placeholder="Quantity">
    </div>

   

  




    <div class="w3-half w3-padding">
    <legend><b>Lights</b></legend>

    <label for="poolLightType">Select Pool Light Type:</label>
<select id="poolLightType" name="poolLightType" class="w3-round w3-input">
  <option value="Intellibrite5GLED50">Intellibrite 5G LED Color Pool Light (50ft cord)</option>
  <option value="Intellibrite5GLED100">Intellibrite 5G LED Color Pool Light (100ft cord)</option>
  <option value="Intellibrite5GLED150">Intellibrite 5G LED Color Pool Light (150ft cord)</option>
  <option value="Intellibrite5GLEDSpa50">Intellibrite 5G LED Spa Light (50ft cord)</option>
  <option value="Intellibrite5GLEDSpa100">Intellibrite 5G LED Spa Light (100ft cord)</option>
  <option value="Intellibrite5GLEDSpa150">Intellibrite 5G LED Spa Light (150ft cord)</option>
  <option value="MicrobriteLEDWhite50">Microbrite LED White Light (50ft cord)</option>
  <option value="MicrobriteLEDColor50">Microbrite LED Color Light (50ft cord)</option>
  <option value="MicrobriteLEDWhite100">Microbrite LED White Light (100ft cord)</option>
  <option value="MicrobriteLEDColor100">Microbrite LED Color Light (100ft cord)</option>
  <option value="MicrobriteLEDWhite150">Microbrite LED White Light (150ft cord)</option>
  <option value="MicrobriteLEDColor150">Microbrite LED Color Light (150ft cord)</option>
  <option value="GlobriteLEDColor50">Globrite LED Color Light (50ft cord)</option>
  <option value="GlobriteLED100">Globrite LED Light (100ft cord)</option>
  <option value="GlobriteLED150">Globrite LED Light (150ft cord)</option>
  <option value="AdditionalLights">Additional light(s)</option>
  <option value="400WIncandescentPool50">400W Incandescent Pool Light (50ft cord)</option>
  <option value="400WIncandescentPool100">400W Incandescent Pool Light (100ft cord)</option>
  <option value="400WIncandescentPool150">400W Incandescent Pool Light (150ft cord)</option>
  <option value="100WIncandescentSpa50">100W Incandescent Spa Light (50ft cord)</option>
  <option value="100WIncandescentSpa100">100W Incandescent Spa Light (100ft cord)</option>
  <option value="100WIncandescentSpa150">100W Incandescent Spa Light (150ft cord)</option>
</select>

<input type="number" id="LightsQuantity" name="LightsQuantity" value="1" placeholder="Quantity">
</fieldset>
