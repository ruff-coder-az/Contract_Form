<?php 
$buyer = 1;
$buyers = 1;
if(isset($_GET['BUYERS'])) {
    $buyers = $_GET['BUYERS'];
    $buyer = $_GET['BUYERS'];
   
 }
 $buyers++;
 ?>
<div class="w3-sticky w3-top">
    <div class="w3-bar-block w3-card w3-display-topright w3-display-hover w3-padding w3-margin" id="sidebar_box" style=" display:block; width: 250px;">
        <button onclick="toggleSidebar()" class="w3-button w3-block w3-blue w3-round w3-margin-bottom">Toggle Sidebar</button>
      
            <a href="?BUYERS=<?php echo $buyers; ?>" class="w3-button w3-block w3-green w3-round w3-margin-bottom">Add more buyers</a>
            <a href="?BUYERS=<?php $buyers = $buyers - 2; echo $buyers; ?>" class="w3-button w3-block w3-red w3-round w3-margin-bottom">Remove buyers</a>
            <a href="?BUYERS=<?php echo $buyer; ?>&MAIL=NOTSAME" class="w3-button w3-block w3-yellow w3-round w3-margin-bottom">Add mailing Address</a>
            <a href="?BUYERS=<?php echo $buyer; ?>" class="w3-button w3-block w3-red w3-round w3-margin-bottom">Remove mailing Address</a>
        </div>
    </div>
</div>