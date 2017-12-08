<!DOCTYPE html>
<html lang="en">
<?php $relpath= ""; $title="PR|Home"; $page="home";
$imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
$linkpath = "http://serenity.ist.rit.edu/~dwmdis/240/project2/";
$templinkpath = "http://localhost:8888/Web%20and%20Mobile%202/individualfinal/Web2IndividualFinal/";
?>
<?php include "assets/inc/head.php" ?>


        <?php include "assets/inc/header.php" ?>
        <div id="shifteverythingdown"></div>
        <h1>
            <span id="tagline">Isla del Encanto</span>
        </h1>
        <img src="<?php echo $imgpath ?>samanddale400.jpg"
             id="samanddale" alt="pic of sam and dale in puerto rico"/>
        <div id="body-text">
        <h2>Who are We?</h2>
        <p>We are Dale and Sam. We are both Sign
            Language Interpreters in Western NY and we love visiting Puerto
            Rico! We have gone 3 times in the past 3 years and we love
            exploring the island. On the first two trips we
            stayed in San Juan since it is the Capital. However, on our most
            recent trip in 2016, we explored the western side of the island
            and fell in love with the other areas that the island has to offer.
            We've barely scratched the surface so we will continue to return.
        </p>
        <h2>Hurricane Maria</h2>
        <p>
            With the devastation that the island is experiencing,
            a lot of the places I will show in this site are either
            lost or forever changed. Many of the places I recommend
            may not exist anymore. So this website will be more of a show and tell. We'll
            talk about where we went, and what we did. Along the way we'll talk about our experiences
            in each of the areas.
        </p>
        <h2>Where we went</h2>
        <p class="clearfix">Here is a map of the island with circles around the places you will
            see in this website. La Parguera is a small town so it's not on the map, but it is
            located down on the bottom of the map near Guanica. For reference, it takes about 2.5
            to drive from San Juan to Rincon through the north of the island. Similarly it takes
            approximately 2 hours to get from San Juan to La Parguera through the south of the island,
            and about an hour and a half to get from Rincon to La Parguera, mostly due
            to the number of smaller roads needed to get there.

        </p>
        </div><!-- end body-text -->
        <figure class="clearfix">
            <img class= "small" src="<?php echo $imgpath ?>PRMap400.png"
                 alt="map of puerto rico" />
            <img class= "medium" src="assets/media/images/PRMap800.png"
                 alt="map of puerto rico" />
            <img style = "margin-left: -40px;" class="big" src="assets/media/images/PRMap1300.png"
                 alt="map of puerto rico" />
            <figcaption>Credit: <a href="https://annexx51.wordpress.com/pr-101/puerto-rico-maps/">
                    annex51.wordpress.com</a></figcaption>
        </figure>
        <?php include "assets/inc/footer.html" ?>
