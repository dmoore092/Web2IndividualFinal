<!DOCTYPE html>
<html lang="en">
<?php $relpath= ""; $title="PR|About"; $page="about"; ?>
<?php include "assets/inc/head.php" ?>

<body>
<div id="bodymain">

    <?php include "assets/inc/header.php" ?>

    <main id="bodycopy">
        <h3>How I satisified the requirements of the project:</h3>
        <h4>1. Basic Design</h4>
        <div class="fig-move">
            <p>I chose a consistent design across each of the pages. First the color scheme and basic design of a blue main
                background with a white content background is consistent across every page.</p>
            <p>Then there is the global navigation in the upper left corner that is consistent across all pages.
                Next is the logo/main image
                that includes the destination(Puerto Rico) for the site.</p>
            <p>Fourth is the title for each individual page, located in the same place on each page, which tells the
            user the topic for that specific page.</p>
            <p>Lastly, there is a consistent footer for each page, with links to restaurants, bars, and places to see.</p>
        </div>
        <h4>2. Organization of Information</h4>
        <div class="fig-move">
            <p>The information for the site is organized based on the places
            that I have personally visited in Puerto Rico and the things I have personally done. The landing page for the site is an
            introduction to who I and my girlfriend are, and our interest in the island. From there, the user is free
            to navigate to any of the 3 areas they are interested in seeing. The site is not organized linearly, so any of the
            links is appropriate.</p>
            <p>Once they land in any of the 3 areas, they have 2 more options to get more details about specific food,
            drinks or activities that I have had/done in each area. The user still has access to the global nav in
            order to jump to another section at any time.</p>
        </div>
        <h4>3. Content</h4>
        <div class="fig-move">
            <p>The content is from the first person perspective, and references my girlfriend Sam. It's chunked so as
            to not read like a novel, and talks about our personal experiences and our opinions. Since
            I was not taking pictures with the intent of putting them on a website, they are not exactly the pictures
            that I would have taken if I was. I had to use some pictures that I had not taken myself for this reason
             as well.</p>
        </div>
        <h4>4. Navigation</h4>
        <div class="fig-move">
            <p>The global navigation is consistent across all pages, in both order and location. The local nav
                changes based on the top level page you are on, however they are consistent with other sibling pages.
                There is a right facing arrow to indicate the current page that the user is on. This notifier appears
                for both the global nav element as well as the local nav element at the same time, so that the users
                knows where they are in relation to the global nav. There is a link in the local nav to take the user
                back to the index page for the child section pages.</p>
        </div>
        <h4>5. Use of HTML5 and CSS(both text and positioning)</h4>
        <div class="fig-move">
            <p>I used HTML5 semantic tags such as &lt;header&gt;, &lt;nav&gt;, &lt;main&gt;, &lt;figure&gt;,
                &lt;figcaption&gt;, and &lt;footer&gt;. The entire site
            is styled with an external style sheet that uses both ID's and Classes, as well as CSS Selectors, psuedo
            elements, pseudo classes and an nth-child selector. I used a CSS content injection to add the arrow to the
                navigation to show the current page. I made extensive use of Flexbox and Flexbox elements as well as
            floating images. For the footer, based on the colors I chose, I decided to remove the default underlines
            for the links and only show the links when the user hovers over them. However, there is an &lt;h3&gt;
                tag telling the user that there are links following.</p>
        </div>
        <h3>Citations:</h3>
        <div class="fig-move">
            <p>All content and code was written by me, and all pictures were taken by me, unless they have a citation in the
            figcaption under the image. Those citations are listed below.</p>
            <p><a href="https://annexx51.wordpress.com/pr-101/puerto-rico-maps/" target="_blank">
                    Map of Puerto Rico(resized and added the circles) - annex51.wordpress.com</a></p>
            <p><a href="https://www.tripadvisor.com/LocationPhotoDirectLink-g147320-d2445117-i132797334-La_B_de_Burro-San_Juan_Puerto_Rico.html#132797334" target="_blank">
                    La B del Burro Restaurant Image(unmodified per tripadvisor request to direct link) - Trip Advisor</a></p>
            <p><a href="https://www.tripadvisor.com/Attraction_Review-g672292-d302464-Reviews-Paradise_Scuba_and_Snorkeling_Center-La_Parguera_Puerto_Rico.html#photos;geo=147319&detail=302464&aggregationId=101" target="_blank">
                    Paradise scuba boat(resized) - Trip Advisor</a></p>
            <p><a href="https://i.pinimg.com/564x/5b/30/c1/5b30c13f5d76940ee0d2d3d5c0d57dd8.jpg" target="_blank">
                    Picture of people scuba diving(resized) - Pinterest</a></p>
        </div>
        <p id="hidden">.</p>
    </main>
</div><!-- end bodymain -->
<?php include "assets/inc/footer.html" ?>
</body>
</html>