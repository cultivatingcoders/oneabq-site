<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=.7, minimum-scale=.7, maximum-scale=.7">
  <title>oneabq</title>
  <PHP><link rel="stylesheet" type="text/css" href="newsletter.css"><PHP>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="aboutabq.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="navBar">
    <header>
      <nav> 
  <div class="menu-icon">
    <i class="fa fa-bars fa-2x"></i>
  </div>
  <div class="oneabqlogo">
    <a href="oneabqhome.php"><img src="abqhoriz.png" class="logo"></a>
  </div>
  <div class="menu">
    <ul>
      <li><font color="red"><a style=font-size:15px;>About</font></li>
      <li><a href="priorities.php" style=font-size:15px;>Initiatives</a></li>
      <li><a href="sponsorspage.php" style=font-size:15px;>Sponsors</a></li>
      <li><a href="outcomes.php" style=font-size:15px;>Outcomes</a></li>
      <a href="donate.php"><button class="buttonDonate">Donate</button></a>
      <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>
    </ul>
  </div>
      </nav>
    </header>
  </div>
  <div class= "aboutVid">
    <video src="aboutVid.mp4" type="video/mp4" controls width="100%" poster="about-video-thumbnail.png"></video>
  </div>
  <div class="aboutABQ">
    <img src="logofund.png" class="vertLogo">
  <div class="text">
    <?php perch_content('aboutAbq'); ?>
  </div>
  </div>
  <div class="board">
    <?php perch_content('boardHeading'); ?>
  <div class="charles container-fluid"> 
    <div class="row">
      <div class="col-md-4">
        <?php perch_content('firstBoardPic'); ?>
      </div>
      <div class="col-md-8">
        <div class="info">
          <?php perch_content('firstBoardName'); ?>
              <?php perch_content('firstBoardTItle'); ?>
        </div>
      <div class="pSpace">
        <?php perch_content('firstBoardInfo'); ?> 
      </div>
      </div>
    </div>
  </div>
  <div class="drew container-fluid">
    <div class="row">
      <div class="col-md-4">
        <?php perch_content('secondBoardPic'); ?>
      </div>
      <div class="col-md-8">
        <?php perch_content('secondBoardName'); ?>
        <?php perch_content('secondBoardTItle'); ?>
      <div class="pSpace2">
       <?php perch_content('secondBoardInfo'); ?>
      </div>
      </div>
    </div>
  </div>
  <div class="pilar container-fluid">
    <div class="row">
      <div class="col-md-4">
        <?php perch_content('thirdBoardPic'); ?>
      </div>
      <div class="col-md-8">
        <?php perch_content('thirdBoardName'); ?>
        <?php perch_content('thirdBoardTItle'); ?>
      <div class="pSpace3">
        <?php perch_content('thirdBoardInfo'); ?>
      </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class="fill">
    <div><br><br><br><br><br><br></div>
  </div>
  <div class="footer">
    <div style="border-left: solid black; height: 81.5%; margin-left: -10px;">
      <div class="row">
        <div class="col-md-4">
          <div class="contactUs">
            <p><b>CONTACT US</b></p>
          </div>
        <div class="contactUs2">
          <p style="line-height:1.2"><b>Steve Fitzer, Development Director<br></b>
          <pre>+1.505.633.6813</pre>
          stevefitzer@onealbuquerque.org<br>
          PO BOX 25125
          Albuquerque NM 87125-5125</p>
        </div>
        </div>
        <div class="col-md-4 , footerLogo" >
          <img src="abqhoriz2.png" class="footerLogo"> 
        </div>
        <div class="col-md-4 , links">
          <a href="oneabqhome.php"><p><b>Home</b></p></a>
          <p><b>About</b></p>
          <a href="priorities.php"><p><b>Initiatives</b></p></a>
          <a href="contactpage.php"><p><b>Sponsors</b></p></a>
          <a href="contactpage.php"><p><b>Outcomes</b></p></a>
          <a href="donate.php"><p><b>Donate</b></p></a>
          <a href="contactpage.php"><p><b>Contact</b></p></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
           <div class="col-md-8 , rights">
            <p>2019 City of Albuquerque Foundation| All Rights Reserved | The offical website for the One Albuquerque Fund</p>
          </div> 
        <div class="col-md-2"></div>
        </div>
        </div>
  <script src="oneabq.js"></script>
</body>
</html>     
