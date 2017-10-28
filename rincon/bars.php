<!DOCTYPE html>
<html lang="en">
<?php $relpath= "../"; $title="PR|Rincon|Bars"; $page="rincon-bars";
      $imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
      $linkpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/";
?>
<?php include "../assets/inc/head.php" ?>

<body>
<div id="bodymain">

    <?php include "../assets/inc/header.php" ?>


    <main class="clearfix" id="bodycopy">
        <h1>Rincon Bars!</h1>

        <?php include "../assets/inc/rinconnav.php" ?>

        <p>
            Rincon had a lot to offer in the way of places to get drinks. From many roadside bars where you can get
            fruity island drinks, to an American style microbrew pub, to a headbanging rocker bar. We are not big
            party animals, but we like going out to interesting bars and having a few drinks and chatting with locals
            and bartenders.
        </p>
        <div class="body-copy-flex">
            <figure>
            <img src="<?php echo $imgpath ?>rinconBeerCo300x200.jpg"
             alt="pic of Rincon Beer Company" />
                <figcaption>Front of Rincon Beer Co.</figcaption>
            </figure>
            <h2>Rincon Beer Company</h2>
            <p>
                Rincon Beer Company was a place we went back to again and again. It's an American style brew pub that
                always had a nice selection of microbrews from the mainland, a couple of local beers, and they always
                had ciders for Sam. There was usually a nice crowd of young people there hanging out and enjoying the
                evenings. It helps that it's located right in the heart of the town of Rincon so there was lots of
                people watching to do, and the main strip was a place for locals to show off their tricked out vehicles.
            </p>
        </div>
        <div class="body-copy-flex">
            <h2>La Estacion</h2>
            <p>
                While walking around downtown Rincon, my ears caught something that was wholly out of place in the land
                of Raggaeton and island music; it was the sound of heavy metal music. I've always been a fan of hard rock
                and heavy metal music, and it's quite rare to hear it in our travels. Upon further inspection, we found
                a bar that you could easily mistake for a mechanic's garage if it weren't for the rock music blasting
                out from the inside, the patrons moving in and out, and the tiny taco shop set up outside. It turns out
                we had found La Estación(The Station), which is run by mainlanders who moved to Puerto Rico generations
                ago, and they did their own take on a biker bar. We went in for some drinks and Sam went out to talk
                with the people in the taco shop. It turns out that it was run by a woman who had Celiac as well, so
                she made Sam some very delicious gluten free tacos. We ended up going back here several times as well.
            </p>
            <figure class="fig-move">
            <img src="<?php echo $imgpath ?>LaEstacion300x220.jpg"
                 alt="pic of Dale and Sam at La Estacion" />
                <figcaption>Inside of La Estación</figcaption>
            </figure>
        </div>
        <div class="body-copy-flex">
            <figure>
            <img src="<?php echo $imgpath ?>LaCambija300x225.jpg"
                alt="pic of two drinks overlooking the ocean" />
                <figcaption>Local bar overlooking the ocean</figcaption>
            </figure>
            <h2>Local Bars</h2>
            <p>
                This last place isn't a place, it's more of a type of bar. One of the things we love to do in Puerto
                Rico is just drive around and see what we can find. Often times, taking a road you would otherwise skip
                can lead to hidden treasures, such as where this was taken. We found this tiny local bar down by the
                ocean, in a place where you'd never need to go if you weren't looking to get lost. The people are always
                nice, the drinks always cold, and the views are always breathtaking.
            </p>
        </div>
    </main>
</div>
<?php include "../assets/inc/footer.html" ?>
</body>
</html>