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


            <div class="banner-image6">
                <h1 class="heading"><strong class="hh1">Electrical and Electronics Engineering</strong></h1>
                <img src="img/eee1.jpg" class="image" alt="responsive image"> 
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
               <div class="panel">
                   <div class="container">
                       <p style="color:#b08c68; font-family: 'Crimson Text', serif; font-size: 30px;">
                           Electrical engineering is a professional engineering discipline that generally deals 
                           with the study and application of electricity, electronics, and electromagnetism. 
                           This field first became an identifiable occupation in the later half of the 19th century after commercialization 
                           of the electric telegraph, the telephone, and electric power distribution and use. Subsequently, broadcasting and
                           recording media made electronics part of daily life. The invention of the transistor,
                           and later the integrated circuit, brought down the cost of electronics to the point they can be used in almost any household object.</p>
                   </div>
            </div> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="eee2nd.php"><button class="accordion heading1"><h3 class="hh" style="color:#b78063; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="eee4th.php"><button class="accordion heading1"><h3 class="hh" style="color:#b78063; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="eee6th.php"><button class="accordion heading1"><h3 class="hh"style="color:#b78063; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="eee8th.php"><button class="accordion heading1"><h3 class="hh"style="color:#b78063; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                 <div class="panel">
                <ul class="hh2"style="color:#c87d5d;">
                    <li>
                        Matlab</li>
                    <li>Programmable Logic Controller (PLC)</li>
                    <li>High voltage circuit(HVC)</li>
                       <li>Circuit House
                    </li>
                </ul></div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
                <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color:#d3b2a1">
                            <li> Saumya Singh(2nd Year)</li>
                            <p>Contact No : +917739135255</p>
                            <li>Supriya(3rd Year)</li>
                            <p> Contact No : +91943013002</p>
                            <li>Sandeep Kss(4th Year)</li>
                            <p>Contact No : +918309971303</p>
                        </ol>
                    </div>
                </div>
                <button class="accordion heading1"> <h2 class="hh" style="font-family: 'Special Elite', cursive;">HOD Contacts</h2></button>
                <div class="panel">
                    <ul class="hh2"style="color:#c59982;">
                        <li> Head of the Department: Dr. Niranjan Kumar</li>
                        <li>Phone(HOD Office): +91-657-2374093 </li>
                        <li>Phone(HOD): 0657-237-4076 </li>
                        <li>Email: hod.eee@nitjsr.ac.in</li>
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