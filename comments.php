<?php
    if(!empty($_POST)){
        
        $errors = [];
        $message = "";
        $feedback = "";
        
        if(strlen($_POST["name"]) == 0){
            $errors[] = "Please enter a name to post with.<br/>";
        }
        
        if(strlen($_POST["subject"]) == 0){
            $errors[] = "Please enter a subject.<br/>";
        }
        
        if(!empty($errors)){
            $feedback .= "There were some errors submitting the form:<br/>";
            
            for ($i = 0; $i < count($errors); $i++){
                $feedback .= $errors[$i];
            }
        }
        else{
            $message = $_POST["name"] . " is talking about " . $_POST["subject"] . "\r\n";
            $message .= "and says: " . $_POST["comments"] . "\r\n";
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php $relpath= ""; $title="PR|Home"; $page="home";
$imgpath="http://serenity.ist.rit.edu/~dwmdis/240/project2/assets/media/images/";
$linkpath = "http://serenity.ist.rit.edu/~dwmdis/240/project2/";
$templinkpath = "http://localhost:8888/Web%20and%20Mobile%202/individualfinal/Web2IndividualFinal/";
?>
<?php include "assets/inc/head.php" ?>

<body>
    <main id="bodycopy">
        <?php include "assets/inc/header.php" ?>
        <h1>
            <span id="tagline">Leave Your Comments Here!</span>
        </h1>
        <form id="comments-form"
              method = "post"
              action= "comments.php"
              onsubmit = "" />
 <!-- name --><p>
                <span class="span">Name:*</span>
                <input type = "text"
                       id = "name"
                       name= "name"
                       size = "25"
                       maxlength = "25"
                       value="" /> 
              </p>
<!-- subject --><p>
                <span class="span">Subject:*</span>
                <input type = "text"
                       id = "subject"
                       name = "subject"
                       size = "47"
                       maxlength = "47"
                       value="" />
               </p>
<!-- comment--><p>
                <textarea rows = "10"
                          cols = "47"
                          name = "comments"
                          id = "comments"
                          placeholder = "Leave a comment here..."></textarea>
               </p>
                <p>
                    <input type="submit"
                           value="Contact Me"
                           class="btn btn-submit" />
                </p>
        </form>
    <hr/>
    <div id="chat-box-area">
        <p>test chat box area</p>
        <?php 
            echo $message;
        ?>
        
    </div>
    </main>
<?php include "assets/inc/footer.html" ?>
</body>
</html>