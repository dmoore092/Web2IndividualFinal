<!DOCTYPE html>
<html lang="en">
<?php $relpath= ""; $title="PR|Home"; $page="home";
$imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
$linkpath = "http://serenity.ist.rit.edu/~dwmdis/240/project2/";
$templinkpath = "http://localhost:8888/Web%20and%20Mobile%202/individualfinal/Web2IndividualFinal/";
?>
<?php include "assets/inc/head.php" ?>

<body>
<div id="bodymain">

    <?php include "assets/inc/header.php" ?>


    <main id="bodycopy">
        <h1>
            <span id="tagline">Leave Your Comments Here!</span>
        </h1>
        <form id="comments-form"
              method = "post"
              action= "comments.php"
              onsubmit = "" />
 <!-- name --><p>
                <span>Name:*</span>
                <input type = "text"
                       id = "name"
                       size = "25"
                       maxlength = "25"
                       value="<?= $_POST['name'] ?>" /> 
              </p>
 <!-- email --><p>
                <span>Email:</span>
                <input type = "text"
                       id = "email"
                       size = "25"
                       maxlength = "25"
                       value="<?= $_POST['email'] ?>" />
               </p>
<!-- subject --><p>
                <span>Subject:</span>
                <input type = "text"
                       id = "subject"
                       size = "50"
                       maxlength = "50"
                       value="<?= $_POST['subject'] ?>" />
               </p>
<!-- comment--><p>
                <span></span>
                <textarea rows = "10"
                          cols = "60"
                          name = "comments"
                          id = "comments"
                          placeholder = "Leave a comment here...">
                </textarea>
               </p>
                <p>
                    <input type="submit"
                           value="Contact Me"
                           class="btn btn-submit" />
        </form>
        <p id="hidden">.</p>
    </main>
</div><!-- end bodymain -->
<?php include "assets/inc/footer.html" ?>
</body>
</html>