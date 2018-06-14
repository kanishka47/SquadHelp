<!DOCTYPE html>
<html>
<head>
<title>College Management</title>
<?php include('head.php'); ?>

  <style>
.imgage-responsive{display: block;width: auto;height: auto;}
.row{margin-left: -15px;margin-right: -15px;
    margin-bottom: 5px;
}
.image{
    width: auto;
    background-size: cover;
    height: 40%;
    width: 40%;
    padding-bottom: 50px;
}
.banner-image{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/cb2.jpg) no-repeat center center; 
    background-size: cover; 
}
.banner-image1{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/mech1.jpg) no-repeat center center; 
    background-size: cover; 
}
.banner-image2{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/pie1.jpg) no-repeat center center; 
    background-size: cover; 
}
.banner-image3{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/civil1.jpg) no-repeat center center; 
    background-size: cover; 
}
.banner-image4{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/meta1.jpg) no-repeat center center; 
    background-size: cover; 
}
.banner-image5{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/ece1.jpg) no-repeat center center; 
    background-size: cover; 
}
.banner-image6{padding-top: 75px;
    padding-bottom: 50px; 
    text-align: center; 
    color: #f8f8f8; width: auto;
    background: url(img/eee.jpg) no-repeat center center; 
    background-size: cover; 
}

.heading{
    font-family: 'Bree Serif', serif;
    color: white;
    padding-bottom: 50px;
    font-size: 70px;
}
.heading1{
   font-family: 'Crete Round', serif;
    font-size: 60px;
}

@media screen and (max-height: 768px) 
{
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .container {width: auto;}
    .hh{
       font-family: 'Crete Round', serif;
       font-size:25px;
        }
.hh1{
    font-family: 'Bree Serif', serif;
     padding-bottom: 50px;
    font-size: 50px;
    font-size: 28px;
}
.abt2{
    font-family: 'Black Han Sans', sans-serif;
    font-size: 30px;
    color: white;;
}
.abt4{font-size: 18px;
}
}


.hh2{
    font-size: 23px;
    font-family: 'Open Sans', sans-serif;
}
.inner-banner-image{
    padding-top: 12%;
    width:80%;
    margin:auto;
}
.banner-content{ overflow: hidden; 
    position: relative; 
    padding-top: 6%;
    padding-bottom: 6%; 
    overflow:hidden; 
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 660px;
}
.banner-image7{
    padding-bottom: 50px; 
    margin-bottom: 20px; 
    text-align: center; 
    color: #f8f8f8;
    background: url("bg.jpg") no-repeat center; 
    background-size: cover; 
}
.abt1{
    font-family: 'Black Han Sans', sans-serif;
    font-size: 70px;
    color: white;;
}
.thumbnail{
    display: block;width: 100%;
    padding: 6px;margin-top: 20px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 5px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
         -o-transition: border .2s ease-in-out;
            transition: border .2s ease-in-out;

}
.row1{margin-left: -15px;margin-right: -15px;
    margin-bottom: 5px;}
.caption{text-align: center;padding-bottom: 10px;}
.abt3{
    font-family: 'Merriweather', serif;
    font-size: 30px;
}
.container{
    transition: 0.4s;
     background-color: rgba(0, 0, 0, 0.7);
}
  </style>
</head>
<body>

  <?php 
  include 'navbar.php';
?>    

    <div id="main"></div>
    <div class="content">
        <div class="banner-image7"><center>
            <div class="inner-banner-image">
                <div class="banner-content">
                    <h1 class="abt1"><strong class="abt2">SQUAD HELP</strong></h1>
                    <h1 class="abt1"><strong class="abt2">ABOUT US</strong></h1>
                </div>
            </div></center>
        </div>
        <div class="container1">
            <div class="row1">
                <div class="col-sm- col-lg-12">
                    <div class="thumbnail">
                        
                        <div class="caption">
                            .
                            <p class="abt3"><b class="abt4">To help students at NIT JAMSHEDPUR get their time tables,subjects of the respective semester and 
                                also to know more information regarding the semester,we also provide senior contacts,faculty details in the website.<br>
                                Based on the requirements specified by our customers the respective team is formed to build the website.</b></p>
                        </div>
                    </div>
                </div>
    </div>

</body>
<?php
      include 'footer.php';
   ?>


</html>