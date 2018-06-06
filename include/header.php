<?php

function getHeader (){
  echo "
    <html>
    <head>
      <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet'>
      <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>Lifestyle + Personal</title>
      <link rel='stylesheet' href='style1.css'/>
    </head>

    <body>
    <a href='index.php' class='header'> Elly's Blog
      <hr>
      <h4 class='lifestyle'> Lifestyle + Personal </h4>
    </a>


  <div class='rightcolumn'>
    <div class='postme'>
      <h2 class='title'>About Me</h2><br>
      <img src='images/IMG_3101.jpg' alt='me' width='175px' height='225px'>

      <p>ATL | STL | WashU 2020<br>
          PreMed Student Withering Away<br>
          Hoping to one day get my life together and be a functioning human being!!</p>
      <a href= 'info.php'>More About Me</a>
    </div>

      <div class='postme'>
        <h2 class='title'>Connect With Me</h2><br>
          <a href='https://www.facebook.com/ellysim0429' target='_blank' class='fa fa-facebook'></a>
          <a href='https://www.snapchat.com/add/ellysim0429' target='_blank' class='fa fa-snapchat-ghost'></a>
          <a href='https://www.pinterest.com/ellysim0429/' target='_blank' class='fa fa-pinterest'></a>
          <a href='https://www.instagram.com/ellyysim/' target='_blank' class='fa fa-instagram'></a>
        </div>
      </div>
    </html>";
  }



  getHeader();


?>
