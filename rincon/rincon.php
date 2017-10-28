<!DOCTYPE html>
<html lang="en">
<?php $relpath= "../"; $title="PR|Rincon"; $page="rincon";
      $imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
      $linkpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/";
?>
<?php include "../assets/inc/head.php" ?>

<body>
<div id="bodymain">

    <?php include "../assets/inc/header.php" ?>


    <main class="clearfix" id="bodycopy">
        <h1><span>Rincon,</span>
            <span id="tagline">El mejor lugar para vivir</span>
        </h1>

        <?php include "../assets/inc/rinconnav.php" ?>

        <figure>
        <img src="<?php echo $imgpath ?>OurBeachSunset400x300.jpg"
             alt="rincon sunset"/>
            <figcaption>Sunset in Rincon</figcaption>
        </figure>
        <h2>Sunset</h2>
        <p>
            One of the best things about Ricon is the sunset. Since Rincon sits on the western edge of the island, it
            gets a spectacular view of the sun as it goes down over the ocean. Every night we spent in Ricon we would
            be on the beach at sunset just enjoying the breeze and watching the sun set.
        </p>
        <div class="body-copy-flex">
            <div id="textflex">
                <h2>World Famous</h2>
                <p>
                    In 1968, the World Surfing Championship came to Rincon, and put it on the map. Since then it has
                    been a destination for Americans who move to the island, living side by side with the locals. An
                    example of this that we witnessed, was a local art festival being held in the town square. There were
                    paintings, woodwork, and all other manner of art you could think of, being sold by locals to tourists
                    and anyone else who happened the wander by. On the next night, was a movie night in the square, where
                    they held a showing of the movie Moana, presented in spoken Spanish with English captions.
                 </p>
                <h2>AirBnB</h2>
                <p class="indextext">
                    This is pretty much how I spent my entire vacation there! We rented an apt on
                    AirBnB, which we do whenever we travel. It's great to have an entire apartment to ourselves, and we
                    can save a little money(and calories!) by cooking our own breakfast before we head out the door to
                    see the beach in the early morning. This beach was fantastic, and was less than a 30 second walk
                    from our apartment. It was almost always empty, save for local kids doing some beach fishing. It also
                    had a great view of <a href="http://villacofresi.com/">Villa Cofresi</a> down the beach, with its
                    patrons riding jet ski's, paragliding, and just generally enjoying the water.
                </p>
            </div><!-- textflex -->
            <figure class="fig-move">
            <img src="<?php echo $imgpath ?>daleBeach300x400.jpg"
             alt="dale on the beach" />
                <figcaption>Our personal private beach</figcaption>
            </figure>
        </div><!-- body-copy-flex -->
    </main>
</div>
<?php include "../assets/inc/footer.html" ?>
</body>
</html>