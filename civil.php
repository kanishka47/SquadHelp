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


            <div class="banner-image3">
                <h1 class="heading"><strong class="hh1">Civil Engineering</strong></h1>
                <img src="img/civil.jpg" class="image" alt="responsive image">
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
               <div class="panel">
                   <div class="container">
                       <p style="color:#ffebab; font-family: 'Crimson Text', serif; font-size: 30px;">
                           Civil engineering is a professional engineering discipline that deals with the design, 
                           construction, and maintenance of the physical and naturally built environment, including works like roads, 
                           bridges, canals, dams, airports, sewerage systems, pipelines and railways. Civil engineering is traditionally 
                           broken into a number of sub-disciplines. It is the second-oldest engineering discipline after military engineering,
                           and it is defined to distinguish non-military engineering from military engineering.Civil engineering takes place 
                           in the public sector from municipal through to national governments,
                           and in the private sector from individual homeowners through to international companies.
                       </p>
                   </div>
            </div> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="civil2nd.php"> <button class="accordion heading1"><h3 class="hh" style="color:#ffdab9; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="civil4th.php"> <button class="accordion heading1"><h3 class="hh" style="color:#ffdab9; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="civil6th.php"> <button class="accordion heading1"><h3 class="hh"style="color:#ffdab9; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="civil8th.php"><button class="accordion heading1"><h3 class="hh"style="color:#ffdab9; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color: #ffc7c7">
                    <li>SFDs and BMDs</li>
<li>Construction management</li>
<li> Concrete technology</li>
<li> Auto CAD</li>
<li>MS Project</li>
<li>MS-Excel</li>
<li> MSP</li>
 <li>Arc View</li>
<li>Primavira</li>
<li>ArcGIS</li>

<li>Hyraulic Simulatiom softwares </li>

<li>Stad Pro</li>
                </ul></div>
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
               <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color:#ffe0c1">
                            <li>Simran Kour (2nd Year)</li>
                            <p>Contact No : +919835330142</p>
                            <li>Akash (3rd Year)</li>
                            <p> Contact No : +917004549336</p>
                            <li>Nidhi (4th Year)</li>
                            <p>Contact No : +919973949841</p>
                        </ol>
                    </div>
                </div>
                <button class="accordion heading1"> <h2 class="hh" style="font-family: 'Special Elite', cursive;">HOD Contacts</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color:#fdb88a"> <li>Head of the Department: Dr. Brajkishore Prasad</li>
                        <li>Phone(HOD Office): + 91-657-2374123 </li>
                        <li>
                            Phone(HOD): 09430338986 </li>
                        <li>
                            Email: hod.civil@nitjsr.ac.in</li>
                        <li>
                            Fax: + 91-657-2373246</li></ul>
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