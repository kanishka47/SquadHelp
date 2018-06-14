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
    <div id="main" ></div>
    

            <div class="banner-image">
                <h1 class="heading"><strong class="hh1">Computer Science Engineering</strong></h1>
                <img src="img/cs1.jpg" class="image" alt="responsive image">
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">About</h2></button>
               <div class="panel">
                   <div class="container">
                   <p style="color:#daf9ff; font-family: 'Crimson Text', serif; font-size: 30px;">
                       Computer Science and Engineering is an interdisciplinary academic program at some universities that
                       combines aspects of both computer science and computer engineering programs.Computer Science and Engineering  is an 
                       interdisciplinary academic program at some universities that combines aspects of both 
                       computer science and computer engineering programs.It also covers the digital aspects of electronics engineering,
                       with added courses like computer architecture, processor design and parallel computing. It focuses more
                       on hardware-software integration, considering the machine as a system.
                   </p></div>
            </div> 
               <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Semester</h2></button>
                <div class="panel">
                    <a href="cse2nd.php"><button class="accordion heading1"><h3 class="hh" style="color:#66cccc; font-family: 'Amaranth', sans-serif;">2nd Semester</h3></button></a>
                    <a href="cse4th.php"><button class="accordion heading1"><h3 class="hh" style="color:#66cccc; font-family: 'Amaranth', sans-serif;">4th Semester</h3></button></a>
                    <a href="cse6th.php"><button class="accordion heading1"><h3 class="hh"style="color:#66cccc; font-family: 'Amaranth', sans-serif;">6th Semester</h3></button></a>
                    <a href="cse8th.php"><button class="accordion heading1"><h3 class="hh"style="color:#66cccc; font-family: 'Amaranth', sans-serif;">8th Semester</h3></button></a>
                </div>
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Additional Study Topics</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color:#afeeee;">
                       <li> Software and Programming Language Courses</li>
                       <li>Web Designing</li>
                       <li>Hardware and Networking Courses</li>
                       <li>Tally</li>
                       <li>VFX and Animation</li>
                       <li>Cyber Security Courses</li>
                       <li>Microsoft Office and Typing Courses</li>
                       <li>Android Development</li>
                   </ul>
               </div> 
                <button class="accordion heading1"><h2 class="hh" style="font-family: 'Special Elite', cursive;">Seniors Contacts</h2></button>
                <div class="panel">
                    <div class="container">
                        <ol class="hh2" style="color: #7ec9f6">
                            <li>Kanishka (2nd Year)</li>
                            <p>Contact No : +917488605041</p>
                            <li>Tanisha Majumdar (3rd Year)</li>
                            <p> Contact No : +919122369515</p>
                            <li>Shikhar Kunal (4th Year)</li>
                            <p>Contact No : +918210109982</p>
                        </ol>
                    </div>
                </div>
                <button class="accordion heading1"> <h2 class="hh" style="font-family: 'Special Elite', cursive;">HOD Contacts</h2></button>
                <div class="panel">
                    <ul class="hh2" style="color: #00ffff;"><li>Head of the Department: Dr. Binod Kumar Singh</li>
                        <li>Phone(HOD Office): 0657-237-4097/4099/4104 </li>
                        <li>Phone(HOD): 0657-237-4097/99 </li>
                        <li>Email: hod.cse@nitjsr.ac.in</li></ul>
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

</body></html>
