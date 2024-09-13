<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="author" content="Shafqat Mashrakey" />
  <!-- HTML slidy was developed by Dave Raggett  -->
  <title>SCSU CSC 235: Spring 2023</title>

  <!--  external Cascading Style Sheets for styling all slides -->
  <link rel="stylesheet" type="text/css" media="screen, projection, print" href="scripts/slidy.css" /> <!-- http://www.w3.org/Talks/Tools/Slidy2/styles/slidy.css -->
  <link rel="stylesheet" type="text/css" href="scripts/www-presentation.css"/>
  <link rel="stylesheet" type="text/css" href="scripts/image-transition.css"/>

  <!--  external JavaScript functions for slideshow behavior (slidy) and simplified JavaScript library (jQuery)
        for a variety of uses ("write less. do more."; see jquery.com )-->
  <script src="scripts/slidy.js" charset="utf-8" type="text/javascript"></script> <!-- http://www.w3.org/Talks/Tools/Slidy2/scripts/slidy.js-->
  <script src="scripts/jquery-3.3.1.min.js" charset="utf-8" type="text/javascript"></script> <!-- https://code.jquery.com/jquery-3.3.1.min.js -->
  <script src="scripts/www-presentation.js" charset="utf-8" type="text/javascript"></script>

</head>
<body>
<div class="www-presentation-header"><img src="images/scsu-logo-compact-blue.png" style="height: 70px;"/><div class="www-presentation-header-text"></div></div>
<div class="slide titlepage">
  <h1 class="title"><br><font color = "#000080"></font></h1>
  <p class="date">CSC 235: Web and Database Development</p>
  <p class="author"><a href="mailto:mashrakeys1@southernct.edu?subject=CSC235">Shafqat Mashrakey</a><br>
  Computer Science Department <br><font color = "#8080FF" style="text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Southern Connecticut State University</font></p>
  <button id="view-fullscreen" onclick="goFullscreen">*</button>
  <!-- https://developer.mozilla.org/en-US/docs/Web/API/Fullscreen_API/Guide -->
  <script type="text/javascript">
    (function goFullscreen() {
        var viewFullScreen = document.getElementById("view-fullscreen");
        if (viewFullScreen) {
            viewFullScreen.addEventListener("click", function () {
                var docElm = document.documentElement;
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                }
                else if (docElm.msRequestFullscreen) {
                    docElm = document.body; //overwrite the element (for IE)
                    docElm.msRequestFullscreen();
                }
                else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                }
                else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                }
            }, false);
        }

        var cancelFullScreen = document.getElementById("cancel-fullscreen");
        if (cancelFullScreen) {
            cancelFullScreen.addEventListener("click", function () {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
                else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
                else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                }
                else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }, false);
        }

        var fullscreenState = document.getElementById("fullscreen-state");
        if (fullscreenState) {
            document.addEventListener("fullscreenchange", function () {
                fullscreenState.innerHTML = (document.fullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("msfullscreenchange", function () {
                fullscreenState.innerHTML = (document.msFullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("mozfullscreenchange", function () {
                fullscreenState.innerHTML = (document.mozFullScreen)? "" : "not ";
            }, false);

            document.addEventListener("webkitfullscreenchange", function () {
                fullscreenState.innerHTML = (document.webkitIsFullScreen)? "" : "not ";
            }, false);
        }
    })();
    </script>
</div>

</body>
</html>
