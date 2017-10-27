//opens the mobile navigation
function openNav() {
    "use strict";
    document.getElementById("myMobilenav").style.width = "280px";
}
/* closes the mobile navigation */
function closeNav() {
    "use strict";
    document.getElementById("myMobilenav").style.width = "0";
}
// --------------------------------------------------------------------
//THIS SECTION BELOW IS FOR THE SUBNAVIGATION ELEMENTS
var myId, openClose = true;
function getId(ele) {
    "use strict";
    myId = ele.id;
    window.console.log("getId() triggered ", myId);
}
function openSubNav() {
    "use strict";
    var navSection;
    if (myId === "rincon-section") {
        navSection = "subnav1";
    } else if (myId === "sanjuan-section") {
        navSection = "subnav2";
    } else if (myId === "laparguera-section") {
        navSection = "subnav3";
    }
    var elems = document.getElementsByClassName(navSection);
    for (var i = 0; i < elems.length; i++) {
        elems[i].style.display = "block";
    }
    openClose = false;
    window.console.log("openSubNav triggered, and myId is: ", myId);
}
function closeSubNav(){
    "use strict";
    var elems1 = document.getElementsByClassName("subnav1");
    var elems2 = document.getElementsByClassName("subnav2");
    var elems3 = document.getElementsByClassName("subnav3");
    for (var j = 0; j < elems1.length; j++) {
        elems1[j].style.display = "none";
        elems2[j].style.display = "none";
        elems3[j].style.display = "none";
    }
    openClose = false;
    window.console.log("closeSubNav triggered");
}
function openOrClose() {
    "use strict";
    if (openClose) {
        //closeSubNav()
        openSubNav();
        //openClose = false;
        console.log("openOrClose, open triggered");
    }
    else if (!openClose) {
        closeSubNav();
        openClose = true;
        console.log("openOrClose, close triggered.");
    }
}