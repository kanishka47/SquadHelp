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


            <div class="banner-image4">
                <h1 class="heading"><strong class="hh1">Metallurgical & Materials Engineering</strong></h1>
            <img src="img/meta.jpg" class="image" alt="responsive image">
            <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
                <div class="panel">
                   <div class="container">
                       <p style="color:#fee9e9; font-family: 'Crimson Text', serif; font-size: 30px;">
                          Metallurgical and Materials Engineering is a peer-reviewed Open Access scientific journal,
                          published by the Association of Metallurgical Engineers of Serbia. The first name of the journal was Metalurgija,
                          published in 1995. The new name was adopted in 2012. The journal publishes contributions on fundamental and engineering
                          aspects in the area of metallurgy and materials.
                       </p>
                   </div>
            </div> 

               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="meta2nd.php"> <button class="accordion heading1"><h3 class="hh" style="color:#fed4d4; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="meta4th.php"><button class="accordion heading1"><h3 class="hh" style="color:#fed4d4; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="meta6th.php"><button class="accordion heading1"><h3 class="hh"style="color:#fed4d4; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="meta8th.php"><button class="accordion heading1"><h3 class="hh"style="color:#fed4d4; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                               <div class="panel">
                                   <ul class="hh2" style="color:#fdbfbf;">
                                       <li>Physical and Mechanical Metallurgy</li>
                                       <li>Foundry Technology </li>
                                       <li>Nano Technology</li>
                                       <li>Hydrometallurgy</li>
                                   </ul>
            </div> 
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
                <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color:#fda9a9">
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
                    <ul class="hh2"style="color:#fff0f0;"><li>Head of the Department: Dr. Ranjit Prasad</li><li>
                            Phone(HOD Office): 0657-237-4207 </li><li>
                            Phone(HOD): 0657-237-4035 </li><li>
                            Email: hod.met@nitjsr.ac.in</li></ul>
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