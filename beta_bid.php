<!DOCTYPE html>
<html>
<head>
    <title>New Pool/Spa Contract</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php 
 $doc_root = "/var/www/html/new_pool_bid/sections/";
 require_once($doc_root."css.php"); // CSS section
 ?>

</head>
<body>



<?php
    $doc_root = "/var/www/html/new_pool_bid/sections/";
    
    require_once($doc_root."block_header.php"); // CSS section

?>
<div class="w3-container w3-mobile">
<div class="form-container">
<form class="w3-container" action="?SUBMIT=NPCF" id="new_contract" name="new_contract" method="post">
<?php




    

    require_once($doc_root."block_buyer.php"); // buyer section

    require_once($doc_root."block_address.php"); // Location section

    require_once($doc_root."block_pool_spec.php"); // Pool Specs section
    

    require_once($doc_root."block_planning_development.php"); // Planning & Development section

    
    require_once($doc_root."block_excavation.php"); // Excavation section
    
    
    
    require_once($doc_root."block_construction_phase1.php"); // Construction Phase 1 section Plumbing , Steel , Electrical 

    
    require_once($doc_root."block_shotcrete.php"); // Shotcrete section

    
    require_once($doc_root."block_construction_phase2.php"); // Construction Phase 2 section Tile, Coping, Deck , Misc Matri
    
    require_once($doc_root."block_equipment.php"); // Equipment section Lights, Filters, Pumps, Heaters, Water Purefaction Systems , Automation, Misc
    
    require_once($doc_root."block_barrier.php"); // Barrier section

    require_once($doc_root."block_covers.php"); // Covers section
    
    require_once($doc_root."block_walls.php"); // Walls section

    require_once($doc_root."block_cleanup.php"); // Cleanup section
    
    
    
    require_once($doc_root."block_interior_finish.php"); // Interior Finish Options section
    
    require_once($doc_root."block_startup.php"); // Startup section


    require_once($doc_root."block_tripfee.php"); // Trip Fees section

    require_once($doc_root."block_misc_cost.php"); // Misc Cost Fees section

    require_once($doc_root."block_upgrades_options.php"); // Upgrade Options section

    require_once($doc_root."block_cost.php"); // Cost totals section
    
    require_once($doc_root."block_signature.php"); // Signature block (Legal Jargin)

    require_once($doc_root."block_cancellation.php"); // NOTICE OF CANCELLATION block (Legal Jargin)
    

    

?>


<input class="w3-button w3-blue w3-right" type="submit" value="Submit">
</form>
</div>
</div>
</div>
<?php 
require_once($doc_root."sidebar.php"); // Sidebar

require_once($doc_root."javascript.php"); // Javascript

?>

</body>
</html>