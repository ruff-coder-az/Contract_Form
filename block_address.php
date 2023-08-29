<?php 

if (isset($_GET['MAIL']) and $_GET['MAIL'] == "NOTSAME") { ?>
<fieldset>
  <legend>Mailing Address</legend>
  <div id="ADDRESS_BLOCK" class="w3-section">
    <div class="w3-row-padding">
      <div class="w3-twothird">
        <label for="maddress">Address:</label>
        <input type="text" id="maddress" name="maddress" class="w3-input w3-border" required>
      </div>

      <div class="w3-third">
        <label for="mgcode">Gate Code:</label>
        <input type="text" id="mgcode" name="mgcode" class="w3-input w3-border" required>
      </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-third">
        <label for="mcity">City:</label>
        <input type="text" id="mcity" name="mcity" class="w3-input w3-border" required>
      </div>
      <div class="w3-third">
        <label for="mstate">State:</label>
        <input type="text" id="mstate" name="mstate" class="w3-input w3-border" required>
      </div>
      <div class="w3-third">
        <label for="mzip">Zip:</label>
        <input type="text" id="mzip" name="mzip" class="w3-input w3-border" required>
      </div>
    </div>
  </div>
  
</fieldset>


<?php 
} 
?>









<fieldset>
  <legend>Project Address</legend>
  <div id="ADDRESS_BLOCK" class="w3-section">
    <div class="w3-row-padding">
      <div class="w3-twothird">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="w3-input w3-border" required autocomplete="off" >
      </div>

      <div class="w3-third">
        <label for="gcode">Gate Code:</label>
        <input type="text" id="gcode" name="gcode" class="w3-input w3-border" required>
      </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-third">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" class="w3-input w3-border" required>
      </div>
      <div class="w3-third">
        <label for="state">State:</label>
        <input type="text" id="state" name="state" class="w3-input w3-border" required>
      </div>
      <div class="w3-third">
        <label for="zip">Zip:</label>
        <input type="text" id="zip" name="zip" class="w3-input w3-border" required>
      </div>
    </div>
  </div>
  <div id="ADDRESS_LEGAL_BLOCK" class="w3-section">
  <div class="w3-row-padding">
      <div class="w3-half">
        <label for="APN">APN:</label>
        <input type="text" id="APN" name="APN" class="w3-input w3-border" required>
      </div>
 
  
      <div class="w3-half">
        <label for="TAX_LOC">Tax Location:</label>
        <input type="text" id="TAX_LOC" name="TAX_LOC" class="w3-input w3-border" required>
      </div>
</div>
  </div>
</fieldset>
