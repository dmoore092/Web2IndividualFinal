
<header>
    <span id="click-here" onclick="openNav()"><img src="../media/icons/hamburger100x84.png"></a></span>
        <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <div class="sub-navlist">
                <div><a <?php if($page == 'home'){  echo 'class="active"';}?> href="#">Home</a></div>
                <a onclick="getId(this); openOrClose();" id="rincon-section" <?php if($page == 'rincon'){  echo 'class="active"';}?> href="#">Rincon</a>
                <div class="float-container">    
                    <a class="subnav1" href="#">Rincon Home</a>
                    <a class="subnav1" href="#">Rincon Food</a>
                    <a class="subnav1" href="#">Rincon Bars</a>
                </div>
            </div><!-- end <div class="sub-navlist"> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="sanjuan-section" <?php if($page == 'sanjuan'){  
                echo 'class="active"';}?> href="#">San Juan</a>
                <div class="float-container">
                    <a class="subnav2" href="#">San Juan Home</a>
                    <a class="subnav2" href="#">San Juan Food</a>
                    <a class="subnav2" href="#">Old San Juan</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="laparguera-section" <?php if($page == 'laparguera'){ 
                echo 'class="active"';}?> href="#">La Parguera</a>
                <div class="float-container">
                    <a class="subnav3" href="#">La Parguera Home</a>
                    <a class="subnav3" href="#">La Parguera Boating</a>
                    <a class="subnav3" href="#">La Parguera Scuba</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <a <?php if($page == 'about'){ 
                echo 'class="active"';}?> href="#">About</a>
    </nav>
        <img src="http://serenity.ist.rit.edu/~dwmdis/240/project1/assets/media/images/prpanoheader800.png"
             alt="pano of puerto rico" id="prpano" />
    </div>
    <script src="assets/scripts/navigation.js"></script>
</header>
