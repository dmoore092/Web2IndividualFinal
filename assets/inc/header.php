
<header>
    <script src="<?php echo $relpath ?>assets/scripts/navigation.js"></script>
    <span id="click-here" onclick="openNav()"><img src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/icons/hamburger25x21.png"></a></span>
        <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <div class="sub-navlist">
                <div><a <?php if($page == 'home'){  echo 'class="active"';}?> href="#">Home</a></div>
                <a onclick="getId(this); openOrClose();" id="rincon-section" <?php if($page == 'rincon'){  echo 'class="active"';}?> href="#">Rincon</a>
                <div class="float-container">    
                    <a class="subnav1" href="<?php echo $linkpath ?>/rincon/rincon.php">Rincon Home</a>
                    <a class="subnav1" href="<?php echo $linkpath ?>/rincon/food.php">Rincon Food</a>
                    <a class="subnav1" href="<?php echo $linkpath ?>/rincon/bars.php">Rincon Bars</a>
                </div>
            </div><!-- end <div class="sub-navlist"> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="sanjuan-section" <?php if($page == 'sanjuan'){  
                echo 'class="active"';}?> href="#">San Juan</a>
                <div class="float-container">
                    <a class="subnav2" href="<?php echo $linkpath ?>/sanjuan/sanjuan.php">San Juan Home</a>
                    <a class="subnav2" href="<?php echo $linkpath ?>/sanjuan/food.php">San Juan Food</a>
                    <a class="subnav2" href="<?php echo $linkpath ?>/sanjuan/oldsanjuan.php">Old San Juan</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="laparguera-section" <?php if($page == 'laparguera'){ 
                echo 'class="active"';}?> href="#">La Parguera</a>
                <div class="float-container">
                    <a class="subnav3" href="<?php echo $linkpath ?>/laparguera/laparguera.php">La Parguera Home</a>
                    <a class="subnav3" href="<?php echo $linkpath ?>/laparguera/boating.php">La Parguera Boating</a>
                    <a class="subnav3" href="<?php echo $linkpath ?>/laparguera/scuba.php">La Parguera Scuba</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <a <?php if($page == 'about'){ 
                echo 'class="active"';}?> href="#">About</a>
    </nav>
        <img src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader400.png"
             alt="pano of puerto rico" id="prpano" />
    </div>
</header>
