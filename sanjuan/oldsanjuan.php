<!DOCTYPE html>
<html lang="en">
<?php $relpath= "../"; $title="PR|San Juan|Old San Juan"; $page="sanjuan-old";
      $imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
      $linkpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/";
?>
<?php include "../assets/inc/head.php" ?>

<body>
<div id="bodymain">

    <?php include "../assets/inc/header.php" ?>


    <main class="clearfix" id="bodycopy">
        <h1>Old San Juan!</h1>

        <?php include "../assets/inc/sanjuannav.php" ?>

        <figure>
        <img src="<?php echo $imgpath ?>oldsjstreet300x169.jpg"
             alt="old san juan street"/>
            <figcaption>Old Street in Old San Juan</figcaption>
        </figure>
        <h2>Cobblestone Streets</h2>
        <p>
            By far one of the coolest places in Puerto Rico is San Juan. It's full of narrow streets, old buildings,
            and tons of independent shops. It's a fantastic place to just walk around. There is a large port where
            cruise ships dock for tourists to get off and explore the Old City. You could really stay in Old San Juan
            for an entire trip, as there are really neat hotels and hostels in the area, along with great restaurants
            and bars, nightclubs and tons of shopping.
        </p>
        <div class="body-copy-flex">
            <h2>El Morro</h2>
            <p>
                It also houses two old forts from it's time under Spanish rule. El Morro is the
                big one that gets most of the attention. It's an old fort that you can wander around and has some great views.
                It also overlooks the Bacardi factory over the bay. Cruise ships pass right by
                El Morro on their way into San Juan as well. La Perla is also located in Old San Juan. La Perla is a very
                poor neighborhood but it was featured in the video for the song Despacito, which has made it into a tourist
                attraction of sorts. However, I don't recommend wandering around there.
                The people who live there live in extreme poverty and might not like people gawking at them.
            </p>
            <figure class="fig-move">
            <img src="<?php echo $imgpath ?>morroview300x169.jpg"
                alt="el morro" />
                <figcaption>El Morro</figcaption>
            </figure>
            </div>
        <p class="clearfix">

        </p>
    </main>
</div>
<?php include "../assets/inc/footer.html" ?>
</body>
</html>