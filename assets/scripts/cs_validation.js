function changeColor(id){
    //console.log(id);
    document.getElementById(id).style.backgroundColor = "white";
            
}
function $(ele){
    return document.getElementById(ele);
}

function validate(){
   var errMsg = "";
   document.getElementById("chat-box-area").value = "validate triggered";
   //name
   if(!$("name").value){ 
       errMsg += "Name<br/>";
       $("name").style.backgroundColor = "red";
   }
   
   //subject
   if(!$("subject").value){
       errMsg += "Subject<br/>";
       $("subject").style.backgroundColor = "red";
   }
   //comment
   if(!$("comment").value){
       errMsg += "Comment<br/>";
       $("comment").style.backgroundColor = "red";
   }
   
   
   if (errMsg){
       $("chat-box-area").innerHTML = "Please complete these fields: <br/>" + errMsg;
       return false;
   }
   
   return true;
}

