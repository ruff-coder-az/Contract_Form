<fieldset>
    <legend>Construction Phase 2</legend>
    
    <div class="w3-half">
    <h4>Water Line Tile</h4><br>
   

    <div class="form-field">
        <label for="tileOption">Select a tile option:</label>
        <select id="tileOption" name="tileOption">
            <option value="Group A Tile">Group A Tile</option>
            <option value="Group B Tile">Group B Tile</option>
            <option value="Group C Tile">Group C Tile</option>
            <option value="Group D Tile">Group D Tile</option>
            <option value="Group E Tile">Group E Tile</option>
            <option value="Upgrade to GA alternate">Upgrade to GA alternate (glass tile series)</option>
            <option value="additionalTile">Additional tile</option>
            <option value="Upgrade to GB alternate">Upgrade to GB alternate (glass tile series)</option>
        </select>
    </div>
    <div class="form-field">
        <label for="LNFTTILE">Lineal feet of tile:</label>
        <input type="number" id="LNFTTILE" name="LNFTTILE" placeholder="LN FT">
    </div>

    <div class="row">
    <div class="col-md-6">
        <!-- Side with the image that changes based on the selected tile option -->
       <center> <img id="tileImage" src="../logo.png" width="200px" alt="Tile Image" class="w3-padding"></center>
    </div>
    <div class="col-md-6">
        <!-- Side with the input field and search results -->
        <label for="tileSearch">Search for tile:</label>
        <input type="text" id="tileSearch" name="tileSearch" placeholder="Enter tile option">
        <div id="searchResults">
            <!-- Display search results here using AJAX -->
        </div>
    </div>
</div>

    </div>

    <div class="w3-half">
<h4>Coping</h4><br>
    <div class="form-field">
        <label for="coppingDays">Material Type:</label>
        <input type="number" id="coppingDays" name="coppingDays" placeholder="Days">
    </div>


    <div class="form-field">
        <label for="artisticPaverLength">Artistic Paver (70 LN FT):</label>
        <input type="number" id="artisticPaverLength" name="artisticPaverLength" placeholder="Length (LN FT)">
    </div>


 


    <div class="form-field">
        <h4>Deck</h4><br>
        <label for="deckingDays">Material Type:</label>
        <input type="text" id="deckingDays" name="deckingDays">
    </div>

    <div class="form-field">
        <label for="artisticPaverStepStonesQuantity">16&quot; X 16&quot; Artistic Paver Step Stones (10):</label>
        <input type="number" id="artisticPaverStepStonesQuantity" name="artisticPaverStepStonesQuantity" placeholder="Quantity">
    </div>

    </div>




    <div class="w3-half">

    <div class="form-field">
        <label for="thinsetQuantity">Thinset (Bag):</label>
        <input type="number" id="thinsetQuantity" name="thinsetQuantity" placeholder="Quantity">
    </div>

    <div class="form-field">
        <label for="mortarQuantity">Mortar (Bag):</label>
        <input type="number" id="mortarQuantity" name="mortarQuantity" placeholder="Quantity">
    </div>

    <div class="form-field">
        <label for="groutQuantity">Grout (Bag):</label>
        <input type="number" id="groutQuantity" name="groutQuantity" placeholder="Quantity">
    </div>

    </div>

</fieldset>
