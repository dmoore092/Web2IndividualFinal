
<header>
    <div id="navheader">
        <nav>
            <ul>
                <li><a <?php if($page == 'home'){
                        echo 'class="active"';}?> href="http://serenity.ist.rit.edu/~dwmdis/240/project1/index.php">Home</a></li>
                <li><a <?php if($page == 'rincon' || $page == 'rincon-food' || $page == 'rincon-bars'){
                        echo 'class="active"';}?> href="http://serenity.ist.rit.edu/~dwmdis/240/project1/rincon/rincon.php">Rincon</a></li>
                <li><a <?php if($page == 'sanjuan' || $page == 'sanjuan-food' || $page == 'sanjuan-old'){
                        echo 'class="active"';}?> href="http://serenity.ist.rit.edu/~dwmdis/240/project1/sanjuan/sanjuan.php">San Juan</a></li>
                <li><a <?php if($page == 'laparguera' || $page == 'laparguera-boating' || $page == 'laparguera-scuba'){
                        echo 'class="active"';}?> href="http://serenity.ist.rit.edu/~dwmdis/240/project1/laparguera/laparguera.php">La Parguera</a></li>
                <li><a <?php if($page == 'about'){
                        echo 'class="active"';}?> href="http://serenity.ist.rit.edu/~dwmdis/240/project1/about.php">About</a></li>
            </ul>
        </nav>
        <img src="http://serenity.ist.rit.edu/~dwmdis/240/project1/assets/media/images/prpanoheader800.png"
             alt="pano of puerto rico" id="prpano" />
    </div>
</header>
