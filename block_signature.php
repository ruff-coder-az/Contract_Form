<fieldset>
    <?php 
      require_once($doc_root."block_legal.php"); // Signature block (Legal Jargin)
      ?>
</fieldset>

<!-- Signature Area -->
<fieldset>

    <legend>Signature</legend>
    <p class="w3-text-red">Signing acknowledges that you have read this entire document, undstand the terms of this contract, agree to the terms of this contract, and confirm that you are legally allowed to sign this contract.</p>

    <div class="signature-area" id="signatureArea">
        <canvas id="signatureCanvas" width="800" height="100"></canvas>
        <span id="signedby">Gabriel Ruff</span>
        <button id="clearCanvas">Clear Signature</button>
    </div>
              
</fieldset>
