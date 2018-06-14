<!DOCTYPE html>
<html>
<head>
<title>College Management</title>
<?php include('head.php'); ?>
</head>
<body>
    
     <?php 
  include 'navbar.php';
?>    
 <div id="main"></div>


            <div class="banner-image2">
                <h1 class="heading"><strong class="hh1">Production and Industrial Engineering</strong></h1>
            <img src="img/pie.jpg" class="image" alt="responsive image"> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
               <div class="panel">
                   <div class="container">
                       <p style="color:#b53232; font-family: 'Crimson Text', serif; font-size: 30px;">
                           Industrial and Production Engineering,(IPE) is a combination of mechanical engineering and 
                           industrial engineering and management science. It is a branch of engineering concerned with the development,
                           improvement, implementation and evaluation of integrated systems of people, money, knowledge, information, equipment, 
                           energy, materials and processes. It is very necessary for any manufacturing 
                           company and service providing enterprise to implement this concept of engineering and principles of management science.
                       </p> 
                   </div>
            </div> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="pie2nd.php"> <button class="accordion heading1"><h3 class="hh" style="color:#be4c4c; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="pie4th.php"> <button class="accordion heading1"><h3 class="hh" style="color:#be4c4c; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="pie6th.php"> <button class="accordion heading1"><h3 class="hh"style="color:#be4c4c; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="pie8th.php"> <button class="accordion heading1"><h3 class="hh"style="color:#be4c4c; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                 <div class="panel">
                     <ul class="hh2" style="color:#be4c4c">
                         <li>
                             IC Engines</li><li>
 Automobile Engineering</li><li>
Industrial Engg- Forecasting</li><li>
Inventory Mgmt.</li><li>
 Ergonomics</li><li>
Maintenance Mgmt.</li><li>
 Modern Industrial Engg concepts (JIT, Kaisen, Jishu Hozen, MOST, etc.)</li><li>
 Wages and Incentives </li><li>
Job evaluation</li><li>
Operations Research
                         </li>
                     </ul>
            </div> 
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
                <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color:#c76666">
                            <li>Ikshwaku Dwivedi (4th Year)</li>
                            <p>Contact No : +918051377895</p>
                            <li>Wasim Ahmed (4th Year)</li>
                            <p> Contact No : +9199031115841</p>
                            <li>Amritesh Singh (4th Year)</li>
                            <p>Contact No : +917654439678</p>
                        </ol>
                    </div>
                </div>
                <button class="accordion heading1"> <h2 class="hh" style="font-family: 'Special Elite', cursive;">HOD Contacts</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color:#d17f7f">
                        <li>  Head of the Department: Dr. Amaresh Kumar </li>
                        <li> Phone(HOD Office): +91-657-2374129 </li>
                        <li> Phone(HOD): 0657-237-4131 </li>
                            <li>  Email: hod.prod@nitjsr.ac.in</li>
                    </ul>  
                </div>
            </div>

 <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

<?php
      include 'footer.php';
   ?>

</body>
</html>
