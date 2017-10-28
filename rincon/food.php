<!DOCTYPE html>
<html lang="en">
<?php $relpath= "../"; $title="PR|Rincon|Food"; $page="rincon-food";
      $imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project1/assets/media/images/";
      $linkpath="http://serenity.ist.rit.edu/~dwmdis/240/project1/";
?>
<?php include "../assets/inc/head.php" ?>

<body>
<div id="bodymain">

    <?php include "../assets/inc/header.php" ?>


    <main class="clearfix" id="bodycopy">
        <h1>Rincon Food!</h1>

        <?php include "../assets/inc/rinconnav.php" ?>

        <div class="body-copy-flex">
            <figure>
            <img src="<?php echo $imgpath ?>MoscowMule300x225.jpg"
                 alt="dale drinking a moscow mule"/>
                <figcaption>Drinking a Moscow Mule at The Green Thumb</figcaption>
            </figure>
            <h2>Celiac Concerns</h2>
            <p>
                Shortly before our trip to Puerto Rico in 2016, Sam was diagnosed as Celiac. So she had to strictly
                follow a gluten-free diet. We were more than a little concerned, as we had no experience traveling
                with a dietary restriction, especially to a place that speaks a different language(I speak a little
                Spanish, but not enough to have a conversation about wheat and gluten). Thankfully we found it VERY
                easy to get around in Rincon and nearby areas. Most of the food is naturally gluten-free, and we even
                found this place called <a href="https://www.tripadvisor.com/Restaurant_Review-g264369-d10041806-Reviews-Green_Thumb_Grill-Rincon_Puerto_Rico.html">
                    The Green Thumb Grill</a> that specialized in Vegan and Gluten-free food.
            </p>
        </div>
        <div class="body-copy-flex">
            <h2>The Green Thumb</h2>
            <p>
                What impressed us the most was the first time we found this place, they had a gluten-free Pad Thai
                on special that night. We were more than a little concerned that they might not know what they were
                doing, but we took a chance and it turned out to be one of the most delicious meals we've ever had, in
                any of our journeys. It was the first meal of many there, and set our minds at ease for the rest of
                the trip. The island turned out to be very accommodating. Along with many restaurants naturally having
                gluten free options due to the preference for corn tortillas over flour, there were also lots of taco
                trucks around that homemade their tortillas right there in the truck, so we could be guaranteed there
                wasn't any contamination.
            </p>
            <figure class="fig-move">
            <img src="<?php echo $imgpath ?>padThai300x225.jpg" alt="pad thai"/>
                <figcaption>Pad Thai at The Green Thumb</figcaption>
            </figure>
        </div>
    </main>
</div>
<?php include "../assets/inc/footer.html" ?>
</body>
</html>