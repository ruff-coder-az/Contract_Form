<!-- Jobsite Location -->
<fieldset>
  <legend>Buyer(s)</legend>
  <?php
  $numBuyers = isset($_GET['BUYERS']) ? intval($_GET['BUYERS']) : 1;

  for ($i = 1; $i <= $numBuyers; $i++) {
    ?>
    <div class="w3-row-padding">
      <div class="w3-half w3-margin-bottom">
        <label class="w3-right-align" for="FIRST_NAME<?= $i ?>">First Name:</label>
        <input class="w3-input w3-border" type="text" id="FIRST_NAME<?= $i ?>" name="object_value[]" required>
        <input type="hidden" name="object_key[]" value="FIRST_NAME">
      </div>
      <div class="w3-half w3-margin-bottom">
        <label class="w3-right-align" for="LAST_NAME<?= $i ?>">Last Name:</label>
        <input class="w3-input w3-border" type="text" id="LAST_NAME<?= $i ?>" name="object_value[]" required>
        <input type="hidden" name="object_key[]" value="LAST_NAME">
      </div>
      <div class="w3-half w3-margin-bottom">
        <label class="w3-right-align" for="PHONE<?= $i ?>">Phone:</label>
        <input class="w3-input w3-border" type="tel" id="PHONE<?= $i ?>" name="object_value[]" required>
        <input type="hidden" name="object_key[]" value="PHONE">
      </div>
      <div class="w3-half w3-margin-bottom">
        <label class="w3-right-align" for="EMAIL<?= $i ?>">Email:</label>
        <input class="w3-input w3-border" type="email" id="EMAIL<?= $i ?>" name="object_value[]" required>
        <input type="hidden" name="object_key[]" value="EMAIL">
      </div>
    </div>
    <?php
  }
  ?>
</fieldset>