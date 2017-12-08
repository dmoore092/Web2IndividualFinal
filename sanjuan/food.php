<!DOCTYPE html>
<html lang="en">
<?php $relpath= "../"; $title="PR|San Juan|Food"; $page="sanjuan-food";
      $imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
      $linkpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/";
?>
<?php include "../assets/inc/head.php" ?>

        <?php include "../assets/inc/header.php" ?>
        <div id="shifteverythingdown"></div>
        <h1>San Juan Food!</h1>

        <?php include "../assets/inc/sanjuannav.php" ?>
        
        <figure>
            <img id="TAShrink" alt="" src="https://media-cdn.tripadvisor.com/media/photo-s/07/ea/53/b4/la-b-de-burro.jpg"/>
            <figcaption>Courtesy of <a href="https://www.tripadvisor.com/LocationPhotoDirectLink-g147320-d2445117-i132797334-La_B_de_Burro-San_Juan_Puerto_Rico.html#132797334">
                    Trip Advisor</a></figcaption>
        </figure>
        <div class="foodtextspacing">
            <h2>La B del Burro</h2>
            <p>
                First up is <a href="http://labdeburro.com/" target="_blank">La B de Burro</a>. It's a funky taco shop in
                the middle of Ocean Park in San Juan. We went to this place daily for lunch, as they had some of the best
                tacos we could find in the entire area. The story is that La B de Burro was a well-known wrestler,
                hence the "ring-side" seating. They also have a side area where you can sit in the shade.
            </p>
        </div>
        <div class="foodtextspacing">
            <h2>Tacos</h2>
            <p>
                One of the cool things we found out about almost all of the taco places we went to, is that
                the majority of the tacos are made from corn tortillas. This turned out to be a huge boon for us
                as Sam was able to eat basically anywhere we went to, without fear of ingesting gluten and
                ruining her trip.
            </p>
        </div>
        <div class="clearfix">
            <figure class="fig-move">
                <img src="<?php echo $imgpath ?>lacuevadelmar300x300.jpg"
                    alt="la cueva del mar" />
                <figcaption>La Cueva del Mar</figcaption>
            </figure>
            <div class="cuevatextspacing">
            <h2>La Cueva del Mar</h2>
                <p>
                    Another of our favorite places to eat was La Cueva del Mar(The cave of the sea). They had some of the best
                    fish tacos around. They have two locations, one in Condado, near our apartment and the other was in Old San Juan
                    where we spent a lot of time walking around. The one in Old San Juan is located right on the main street
                    where lots of people pass by, especially when the cruise ships are in town, so it's fantastic for getting
                    some fish tacos, a beer and people watching.
                </p>
            </div>
        </div><!-- textflex -->
        <?php include "../assets/inc/footer.html" ?>
