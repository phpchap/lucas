<?php

$homeUrl    = action('HomeController@home');
$diamondUrl = action('HomeController@investInDiamonds');
$goldUrl    = action('HomeController@investInGold');
$germanUrl  = action('HomeController@investInGermanProperty');
$waterUrl   = action('HomeController@investInWaterRights');
$contactUrl = action('HomeController@contactUs');

?>
<div class="nav-collapse collapse">
    <ul class="nav pull-right" id="navigation">
        <li><a href="<?php echo $homeUrl; ?>" <?php echo ($page == $homeUrl) ? 'class="active"' : ''; ?>>HOME</a></li>
        <li><a href="<?php echo $diamondUrl; ?>" <?php echo ($page == $diamondUrl) ? 'class="active"' : ''; ?>>INVEST IN DIAMONDS</a></li>
        <li><a href="<?php echo $goldUrl; ?>" <?php echo ($page == $goldUrl) ? 'class="active"' : ''; ?>>INVEST IN GOLD</a></li>
        <li><a href="<?php echo $germanUrl; ?>" <?php echo ($page == $germanUrl) ? 'class="active"' : ''; ?>>INVEST IN GERMAN PROPERTY</a></li>
        <li><a href="<?php echo $waterUrl; ?>" <?php echo ($page == $waterUrl) ? 'class="active"' : ''; ?>>INVEST IN WATER RIGHTS</a></li>
        <li><a href="<?php echo $contactUrl; ?>" <?php echo ($page == $contactUrl) ? 'class="active"' : ''; ?>>CONTACT US</a></li>
    </ul>
</div>