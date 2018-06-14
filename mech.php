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


            <div class="banner-image1">
                <h1 class="heading"><strong class="hh1">Mechanical Engineering</strong></h1>
                <img src="img/mech.jpg" class="image"alt="responsive image"> 
            <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
               <div class="panel">
                   <div class="container">
                       <p style="color:#ababab; font-family: 'Crimson Text', serif; font-size: 30px;">
                          Mechanical Engineering is the discipline that applies engineering, physics, and materials science
                          principles to design, analyze, manufacture, and maintain mechanical systems. 
                          It is one of the oldest and broadest of the engineering disciplines. The mechanical engineering field requires an 
                          understanding of core areas including mechanics, dynamics, thermodynamics, materials science, structural analysis, 
                          and electricity. In addition to these core principles, mechanical engineers use tools such as computer-aided design (CAD), 
                          computer-aided manufacturing (CAM), and product life cycle management to design and analyze manufacturing plants, industrial
                          equipment and machinery, heating and cooling systems, transport systems, aircraft, watercraft, robotics, medical devices, weapons, and others. 
                          It is the branch of engineering that involves the design, production, and operation of machinery.
                       </p>
                   </div>
            </div> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="mech2nd.php"><button class="accordion heading1"><h3 class="hh" style="color:#696969; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="mech4th.php"><button class="accordion heading1"><h3 class="hh" style="color:#696969; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="mech6th.php"><button class="accordion heading1"><h3 class="hh"style="color:#696969; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="mech8th.php"><button class="accordion heading1"><h3 class="hh"style="color:#696969; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                <div class="panel">
                    <ul class="hh2"style="color:#e1e1e1;">
                        <li> Operation Research</li><li>
                          Heat Exchanger Design</li><li>Automobile Engineering</li><li>  Applied Thermodynamics</li>
                        <li>Foreign Language: French / German / Japanese</li><li>Computation Fluid Dynamics</li><li>Value Engineering</li><li>
 Machinery Fault Diagnosis & Signal Processing</li><li> Advanced Energy Conversion Systems</li><li>Fuel Combustion & Pollution</li>
                        <li> Robotics & its Applications</li><li>
 Gas Dynamics & Jet Propulsion
 </li><li>Polymer & Composite Materials
</li><li> Tribology</li>
                    </ul>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
                <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color:#d6d6d6">
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
                    <ul class="hh2" style="color: #9c9c9c"><li>Head of the Department: Dr. Prabha Chand </li>
                    <li>
                        Phone(HOD Office): 0657-237-4150 </li><li>
                            Phone(HOD): 0657-237-4024</li><li>Email: hod.me@nitjsr.ac.in</li>
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