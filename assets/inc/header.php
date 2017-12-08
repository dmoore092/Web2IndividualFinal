
<header id="mobile-header">
    <script src="<?php echo $relpath ?>assets/scripts/navigation.js"></script>
    <span id="click-here" onclick="openNav()"><img src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/icons/hamburger25x21.png" alt="hamburger icon"></span>
        <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <div class="sub-navlist">
                <p><a <?php if($page == 'home'){  echo 'class="active"';}?> href="<?php echo $linkpath ?>index.php">Home</a></p>
                <a onclick="getId(this); openOrClose();" id="rincon-section" <?php if($page == 'rincon'){  echo 'class="active"';}?> href="#">Rincon</a>
                <div class="float-container">    
                    <a class="subnav1" href="<?= $linkpath ?>rincon/rincon.php">Rincon Home</a>
                    <a class="subnav1" href="<?= $linkpath ?>rincon/food.php">Rincon Food</a>
                    <a class="subnav1" href="<?= $linkpath ?>rincon/bars.php">Rincon Bars</a>
                </div>
            </div><!-- end <div class="sub-navlist"> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="sanjuan-section" <?php if($page == 'sanjuan'){  
                echo 'class="active"';}?> href="#">San Juan</a>
                <div class="float-container">
                    <a class="subnav2" href="<?= $linkpath ?>sanjuan/sanjuan.php">San Juan Home</a>
                    <a class="subnav2" href="<?= $linkpath ?>sanjuan/food.php">San Juan Food</a>
                    <a class="subnav2" href="<?= $linkpath ?>sanjuan/oldsanjuan.php">Old San Juan</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="laparguera-section" <?php if($page == 'laparguera'){ 
                echo 'class="active"';}?> href="#">La Parguera</a>
                <div class="float-container">
                    <a class="subnav3" href="<?= $linkpath ?>laparguera/laparguera.php">La Parguera Home</a>
                    <a class="subnav3" href="<?= $linkpath ?>laparguera/boating.php">La Parguera Boating</a>
                    <a class="subnav3" href="<?= $linkpath ?>laparguera/scuba.php">La Parguera Scuba</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div><a <?php if($page == 'about'){ echo 'class="active"';}?> href="#">About</a></div>
            <div><a <?php if($page == 'comments'){ echo 'class="active"';}?> href="<?= $linkpath ?>comments.php">Comments</a></div>
    </nav>
        <img class="small prpano" src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader400.png"
             alt="pano of puerto rico" />
        <img class="medium prpano" src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader800.png"
             alt="pano of puerto rico" />
        <img class="big prpano" src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader1300.png"
             alt="pano of puerto rico" />
</header>
<header id="web-header">
    <nav>
        <a <?php if($page == 'home' ){  echo 'class="active"';}?> href="<?php echo $linkpath ?>index.php">Home</a>
        <a <?php if($page == 'rincon' || $page == "rincon-food" ||  $page == "rincon-bars"){  echo 'class="active"';}?> href="<?php echo $linkpath ?>rincon/rincon.php">Rincon</a>
        <a <?php if($page == 'sanjuan' || $page == "sanjuan-food" ||  $page == "sanjuan-old"){  echo 'class="active"';}?> href="<?php echo $linkpath ?>sanjuan/sanjuan.php">San Juan</a>
        <a <?php if($page == 'laparguera' || $page == "laparguera-boating" ||  $page == "laparguera-scuba"){ echo 'class="active"';}?> href="<?php echo $linkpath ?>laparguera/laparguera.php">La Parguera</a>
        <a <?php if($page == 'comments' ){  echo 'class="active"';}?> href="<?php echo $linkpath ?>comments.php">Comments</a>
        <a <?php if($page == 'about' ){  echo 'class="active"';}?> href="<?php echo $linkpath ?>about.php">About</a>
    </nav>
    <img class="small" src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader400.png"
             alt="pano of puerto rico" />
    <img class="medium" src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader800.png"
             alt="pano of puerto rico" />
    <img class="big" src="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/prpanoheader1300.png"
             alt="pano of puerto rico" />
</header>
