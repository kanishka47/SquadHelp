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


            <div class="banner-image5">
                <h1 class="heading"><strong class="hh1">Electronics and Communication Engineering</strong></h1>
                <img src="img/ece.jpg" class="image" alt="responsive image">
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
               <div class="panel">
                   <div class="container">
                       <p style="color:#daf9ff; font-family: 'Crimson Text', serif; font-size: 30px;">
                           Electronic engineering (also called electronics and communications engineering) is an electrical 
                           engineering discipline which utilizes nonlinear and active electrical components (such as semiconductor devices, 
                           especially transistors, diodes and integrated circuits) to design electronic circuits, devices, VLSI devices and their systems. The discipline 
                           typically also designs passive electrical components, usually based on printed circuit boards. See glossary of electrical and electronics engineering.
                       </p>
                   </div>
            </div> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="ece2nd.php"><button class="accordion heading1"><h3 class="hh" style="color:#66cccc; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="ece4th.php"><button class="accordion heading1"><h3 class="hh" style="color:#66cccc; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="ece6th.php"><button class="accordion heading1"><h3 class="hh"style="color:#66cccc; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="ece8th.php"><button class="accordion heading1"><h3 class="hh"style="color:#66cccc; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color:#afeeee;">
                        <li>Programming on-Arduino ,Raspberry pi,esp8266 </li>
                        <li>Robotics</li>
                        <li>VLSI</li>
                        <li>Embedded system</li>
                        <li>Node mcu </li>
                        <li>Networking servers </li>
                        <li>Cyber security </li>
                        <li>Internet of things</li>
                        <li>Verilog </li>
                        <li>DSP and signal system </li>
                        <li>Matlab</li>
                        <li>Multisim </li> 
                    </ul>
            </div> 
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
                <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color: #7ec9f6">
                            <li> Alisha(2nd Year)</li>
                            <p>Contact No : +918092418098</p>
                            <li>Rolee(3rd Year)</li>
                            <p> Contact No : +917280905777</p>
                            <li>Geetha(4th Year)</li>
                            <p>Contact No : +918092473899</p>
                        </ol>
                    </div>
                </div>

                <button class="accordion heading1"> <h2 class="hh" style="font-family: 'Special Elite', cursive;">HOD Contacts</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color: #00ffff;"><li>Head of the Department: Mrs. Rashmi Sinha</li>
                        <li>Phone(HOD Office): +91-657-2374077 </li>
                        <li>Phone(HOD): 0657-237-4084 </li>
                        <li>Email: hod.ece@nitjsr.ac.in</li></ul>
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