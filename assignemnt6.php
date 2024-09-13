<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="author" content="Shafqat Mashrakey" />
  <title>Presentation Template</title>
  <link rel="stylesheet" type="text/css" media="screen, projection, print"
    href="scripts/slidy.css" /> <!-- http://www.w3.org/Talks/Tools/Slidy2/styles/slidy.css -->
  <script src="scripts/slidy.js"
    charset="utf-8" type="text/javascript"></script> <!-- http://www.w3.org/Talks/Tools/Slidy2/scripts/slidy.js-->
  <script src="scripts/jquery-3.3.1.min.js"
    charset="utf-8" type="text/javascript"></script> <!-- https://code.jquery.com/jquery-3.3.1.min.js -->
  <script type="text/javascript" src="scripts/qrcode.js"></script>
</head>
<style>
  

  /* two-colomn layout */
  * {
    box-sizing: border-box;
  }

  /* Create two equal columns that floats next to each other */
  .column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .right-side-image {
    float: right;
    width: 300px;
    border: 0px solid #004480;
    padding: 10px;
  }

  /* global properties to apply to all images */
  .img {
    float: left;
  }

  /* qrcode generator image size */
  #qrcode {
    width:160px;
    height:160px;
    margin-top:15px;
  }
  .three_images
  {
    display: flex;
  }
  .image1
  {
    border: flex solid#004480;
  
  }
  .image2
  {
    border: flex solid rebeccapurple;

  }
  .image3
  {
    border: flex solid black;

  }
  .image4
  {
    backdrop-filter: flex solid rgba(128, 126, 126, 0.466) ;
  }
  .column
  {
    flex: 33.33%;
    padding: 5px;
  }
  /* email link */
  a.email:link {color:#eeff00;}
  a.email:hover {color:#ff00ee; background:#66ff66;}
</style>
<body>
<div class="slide titlepage">
  <h1 class="title"><center> Presentation </center><br><font color = "#000080"> <center>Assignment 6 </center></font></h1>
  <p class="author"><center>Shafqat Mashrakey</center></p>
  <p class="date"><center>Computer Science Department</center> <br><font color = "#8080FF" style="text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Southern Connecticut State University</font></p>
  <button id="view-fullscreen"><center>[Fullscreen]</button>
  <div class="three_images">
    <div class="image1 column">
      <img src="./images/scsu-logo-compact-blue.png" alt="scsu logo" style="width: 100%">
      <p>this is scsu image</p>
      <p>
        to find more about this <a href="https://www.stcloudstate.edu/its/services/web-app/default.aspx" target="_blank"> click here</a>
      </p>
    </div>
    <div class="image2 column">
      <p>computer logo</p>
      <img src="./images/computer-repair-logo-template-computer-pixels-logo-software-development-design-free-vector.png" alt="computer logo" style="width: 50%"></div>
    <div class="image3 column">
      <p>hacker man logo</p>
      <img src="./images/istockphoto-911660906-612x612.png" alt="hacker man" style="width: 50%"></div>
  </div>
  <script type="text/javascript">
    (function () {
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
<div class="section slide level1" id="alternatives">
   <center> <h1><i><u>Structured Query language</u></i></h1></center>
    <ol class="incremental" style="list-style-type: decimal">
      <li> 
        <center><img src="./images/Screenshot 2023-03-13 211800.png" alt="Result"></center>
      </li>  
</div>
<div class="section slide level1" id="alternatives">
  <h1><center>CSC 235 Spring 2023 Profiles</center></h1>
    <li>
    <?php
        // debugging
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require('db.php');
        $sql = "SELECT firstName, lastName, major, email FROM mashrakeys1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           echo "<center><table id='database-results'><th>First Names\t</th><th>\tLast Names</th><th>Major</th><th>Email ID</th>";
           // output data of each row
           while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td>
            <td>" . $row["major"] . "</td><td>" . $row["email"] . "</td>
              </tr>";
           }
        } else {
           echo "Difficulty finding results";
        }
        $conn->close();
          echo "</table></center>";
    ?>
    </li>
  </ul>
</div>
<div class="section slide level1" id="alternatives">
  <h1><b><u>DDL (Data Definition Language) and DML (Data Manipulation Language) </u></b></h1>
  <ul>    
    <li>
      DDL statements are used to define and manage the structure of the database. These statements include CREATE, ALTER, and DROP statements, which are used to create tables, modify table structures, and delete tables, respectively.
    </li>
    <li>
      In assignment 5 we created table in SQL workbench by using this code <br> CREATE TABLE SCSU_NetID(
      entryID INT(11) AUTO_INCREMENT PRIMARY KEY, <br>
      lastName VARCHAR(50), <br>
      firstName VARCHAR(50),<br>
      major VARCHAR(100),<br>
      email VARCHAR(100));<br>
    </li>
    <li>
      DML statements, on the other hand, are used to manipulate the data in the database. These statements include SELECT, INSERT, UPDATE, and DELETE statements, which are used to retrieve data from the database, insert new data into the database, modify existing data in the database, and delete data from the database, respectively. DML statements are used to query and modify the data stored in the database.
    </li>
    <li>
      In here I retrieved the data by connecting through my database first then selecting my table by using this code
      $sql = "SELECT firstName, lastName, major, email FROM mashrakeys1";
    </li>

  </ul> 
  <h1><b><u>The normal form of database</u></b></h1>
  <li>entryID(primary key)<br>
      lastName(foreign key)<br>
      firstName(foreign key)<br>
      major(foreign key)<br>
      email(foreign key)<br>
  </li> 

</div>
<div class="section slide" id="alternatives">
  <h1><b><title> Entity Relationship Diagram of the database table</title></b></h1>
  <img src="./images/ER-table-student.png" alt="ER diagram of the database">
</div>
</body>
</html>