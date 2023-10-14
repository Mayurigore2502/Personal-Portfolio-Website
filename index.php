<?php
$conn = mysqli_connect('localhost', 'root', '' , 'portfolio') or die("Could not connect to database");

$showAlert = false;
$showError = false;

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    $insert = mysqli_query($conn, "INSERT INTO portfolioContactForm(name, email, phone, text)
     VALUES('$name', '$email', '$phone', '$text')") or die('Query failed');

    if ($insert) {
        $showAlert = true;
    } else {
        $showError = "Oops!! Sending failed";
    }
}
?>


 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
 integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
 crossorigin="anonymous">
</head>

<body >
<?php
if ($showAlert) {
 echo ' <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> Your Contact form has been submitted successfully.
</div> ';
}
if ($showError) {
 echo ' <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error!</strong> ' . $showError . '
</div> ';
}
?>

<!-- Your form and other HTML content here -->

<!-- Bootstrap JS (Optional, for Bootstrap features like dismissing alerts) -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYlT"
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
 integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Add this JavaScript code at the bottom of your HTML, just before the closing </body> tag -->
<script>
// Function to close the alert after a specified time (e.g., 5 seconds)
function closeAlert() {
 var alert = document.getElementById("alert");
 if (alert) {
     alert.style.display = "none";
 }
}

// Set a timer to close the alert after 5 seconds (adjust the time as needed)
setTimeout(closeAlert, 5000);
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mayuri Gore - Frontend Web Developer </title>
    <link rel="icon" type="image/x-icon" href="./Images/favicon.png">
    <link rel="stylesheet" href="stylez.css">
    <link rel="stylesheet" media="screen and (max-width: 821px)" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

    <!-- Navbar Section -->
    <nav id="navbar" class="flex s-around bg-color">
        <div class="left-nav">
            <h2 class="t-white">Mayuri Gore</h2>
        </div>
        <div class="right-nav">
            <ul class="flex">
                <li><a href="#home" class="t-white roboto">Home</a></li>
                <li><a href="#about" class="t-white roboto">About Me</a></li>
                <li><a href="#skills" class="t-white roboto">Skills</a></li>
                <li><a href="#services" class="t-white roboto">services</a></li>
                <li><a href="#projects" class="t-white roboto">Projects</a></li>
            </ul>
        </div>
    </nav>

    <!-- Bottom Navigator -->
    <section id="bottom">
        <div class="bottom-nav flex s-center items-center">
            <ul class="flex s-around items-center">
                <a href="#home">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-house"></i></li>
                </a>
                <a href="#about">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-user"></i></li>
                </a>
                <a href="#skills">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-code"></i></li>
                </a>
                <a href="#services">
                    <li class="bottomo-hover flex s-center items-center">
                        <i class="fa-solid fa-rocket"></i>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <!-- Home Section -->
    <section id="home" class="flex s-around sw-80 m-auto">
        <div class="home-left flex items-center">
            <div class="home-content">
                <h6 class="poppinss">Hi, I'm</h6>
                <h1 class="t-white">Mayuri Gore</h1>
                <h4 class="poppinss">Frontend Web Developer</h4>
                <a href="#" target="_blank"><button
                        class="btn poppins">Resume</button></a>
                <a class="btn live poppins" id="hireme" href="https://www.linkedin.com/in/mayuri-gore-511b32199" 
                 target="_blank">Let's Talk</a>
            </div>
        </div>
        <div class="home-right flex s-center items-center">
            <div class="circle flex s-center items-center" id="mainImage">
                <!-- Here in src replace the given link with your image link -->
                <img src="./Images/.jpg" alt="">
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h1 class="t-center my-2 t-white f-2">About Me</h1>
        <div class="about-container flex s-around ">
            <div class=" about-left flex s-center items-center">
                <!-- Here in src replade the given link with your secondary image link 
                <img src="./Images/secondary.jpg" alt="" style="width: 50%;">-->
            </div>

            <div class="about-right flex">
                <div class="about-content">
                    <h1 class="t-white m-b-1 poppins">Mayuri Gore</h1>
                    <p class="t-white poppins">A self-tought Frontend Web Developer MCA student looking for
                        an opportunity in Web Development. <br>
                        Who is committed to study web development. Mindset to fullfill the life with
                        wonderful memories and knowledge.</p>
                    <a class="btn live poppins" id="hireme"
                        href="https://www.linkedin.com/in/mayuri-gore-511b32199">Hire Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h1 class="t-center my-2 t-white f-2">Skills</h1>
        <div class="services-container flex s-around h-50"">
        <div class=" skills-left flex s-center items-center">
          <!-- <img src="/Images/skills.png" alt="">-->
        </div>

        <div class="skills-right flex items-center">
            <div class="skillss-container">
                <div class="html bar p-relative"><span class="bar-content left t-white">HTML</span><span
                        class="bar-content right-skills t-white">80%</span></div>
                <div class="css bar p-relative"><span class="bar-content left t-white">CSS</span><span
                        class="bar-content right-skills t-white">70%</span></div>
                <div class="js bar p-relative"><span class="bar-content left t-white">JavaScript</span><span
                        class="bar-content right-skills t-white">60%</span></div>
                <div class="bootstrap bar p-relative"><span class="bar-content left t-white">Bootstrap</span><span
                        class="bar-content right-skills t-white">40%</span></div>
                <div class="reactjs bar p-relative"><span class="bar-content left t-white">ReactJs</span><span
                        class="bar-content right-skills t-white">30%</span></div>
            </div>
        </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <h1 class=" t-center my-2 t-white f-2">Services</h1>
        <div class="services-container flex s-center">
            <div class="test-item flex f-col items-center">
               <!-- <img src="./Images//developer.png" alt="">-->
                <h1 class="t-white poppins">Web Development</h1>
                <p class="t-white poppins">Web Development is envolving everywhere. Every startup and every bussines
                    have their own websites. As my passion I will help you to build your clean and fast website for your
                    startup or your bussines.</p>
            </div>
            <div class="test-item flex f-col items-center">
               <!-- <img src="./Images//social-media-management.png" alt="">-->
                <h1 class="t-white poppins">Social Media Management</h1>
                <p class="t-white poppins">Social Media is the power of future. So I'll help in developing brand
                    awareness thow managing your social media handles and will to increase customer loyalty.</p>
            </div>
            <div class="test-item flex f-col items-center">
                <!--<img src="./Images//startup.png" alt="">-->
                <h1 class="t-white poppins">Growth Strategies</h1>
                <p class="t-white poppins">As a web developer also I will help your brand to grow up . I will provide
                    the growth strategies for your brand. And also help in searching techniques for your brand.</p>
            </div>

        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h1 class=" t-center my-2 t-white f-2">Projects</h1>
        <div class="projects-container flex s-center">
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-one">
                    <img src="./Images/weatherApp.png" alt="">
                </div>
                <h1 class="t-white poppins">Weather App</h1>
                <p class="t-white poppins"> A weather app using HTML, CSS and JavaScript. Fetch the weather from the
                    openweather app using fetch api.</p>
                <div class="buttons flex s-around">
                    <a href="#"
                        target="_blanks" class="btn mx-1 m-top">GitHub</a>
                    <a href="#" target="_blanks" class="btn m-top live">Live
                        Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-one">
                    <img src="./Images/burgerKing.png" alt="">
                </div>
                <h1 class="t-white poppins">Burger King</h1>
                <p class="t-white poppins">A simple landing page using HTML and CSS. This webiste is for burger shop who
                    provides all the information of thir services at this landing page.</p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blanks"
                        class="btn mx-1 m-top">GitHub</a>
                    <a href="#" target="_blanks" class="btn m-top live">Live
                        Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-two">
                    <img src="./Images/MBA.png" alt="">
                </div>

                <h1 class="t-white poppins">MBA Chai Wala</h1>
                <p class="t-white poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic obcaecati cum
                    nemo
                    recusandae voluptas ipsum.s</sp>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top">GitHub</a>
                    <a href="#" target="_blank"
                        class="btn m-top live">Live Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-three">
                    <img src="./Images/magicNotes.png" alt="">
                </div>

                <h1 class="t-white poppins">Magic Notes App</h1>
                <p class="t-white poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic obcaecati cum
                    nemo
                    recusandae voluptas ipsum.s</p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top">GitHub</a>
                    <a href="#" target="_blank" class="btn m-top live">Live
                        Link</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-three">
                    <img src="./Images/login.png" alt="">
                </div>

                <h1 class="t-white poppins">Login Form</h1>
                <p class="t-white poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic obcaecati cum
                    nemo
                    recusandae voluptas ipsum.s</p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top">GitHub</a>
                    <a href="#" target="_blank" class="btn m-top live">Live
                        Link</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Me Section -->
    <section id="contact" class="m-b-1">
        <h1 class=" t-center my-2 t-white f-2">Contact Me</h1>
        <div class="contact-container flex s-around items-centers">
            <div class="form" id="contactForm">
                <form action="#" method="post">
                    <div class="name form-div">
                        <input type="text" name="name" id="name" class="poppins" placeholder="Enter Your Name">
                    </div>
                    <div class="email form-div">
                        <input type="email" name="email" id="email" class="poppins" placeholder="Enter Your Email"
                            required>
                    </div>
                    <div class="phone form-div">
                        <input type="phone" name="phone" id="phone" class="poppins" placeholder="Enter Your Phone"
                            required>
                    </div>
                    <div class="textarea form-div">
                        <textarea name="text" id="textarea" cols="30" rows="10" class="poppins"
                            placeholder="Enter Messages"></textarea>
                    </div>
                    <button type="submit" class="btn poppins"  name="submit" value="submit" id="submit">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="footer">
        <ul class="flex s-center w-80 m-auto my-2 res">
            <li><a href="#home" class="poppinss">Home</a></li>
            <li><a href="#about" class="poppinss">About</a></li>
            <li><a href="#skills" class="poppinss">Skills</a></li>
            <li><a href="#projects" class="poppinss">Projects</a></li>
            <li><a href="#portfolio" class="poppinss">Portfolio</a></li>
        </ul>
        <ul class="flex s-center w-80 font-awesome ">
            <a href="https://www.linkedin.com/in/mayuri-gore-511b32199" target="_blank">
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </a>
            <a href="https://github.com/Mayurigore2502" target="_blank">
                <li><i class="fa-brands fa-github"></i></li>
            </a>
            <a href="https://instagram.com/mayurigore02?igshid=MzNlNGNkZWQ4Mg==" target="_blank">
                <li><i class="fa-brands fa-instagram"></i></li>
            </a>
            <a href="https://www.youtube.com/channel/UC6ScgVJbFPpHAnRdrOSJMlg" target="_blank">
                <li><i class="fa-brands fa-youtube"></i></li>
            </a>
        </ul>
        <p class="t-center my-2 poppins">&copy; All Rights Reserved - <span class="cpy-white poppins">Mayuri Gore
        </span></p>

    </footer>

    <div id="scroll-top" onclick="scrolltop()">
        <span><i class="fa-solid fa-arrow-up"></i></span>
    </div> 


</body>
<script src="/script.js"></script>

</html>

