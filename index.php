<?php
    session_start();
    require_once "database.php";
    
    if (isset($_SESSION["user"])){
        header("Location: index.php");
        exit();
    } 

    if(isset ($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT id, password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            if(password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                echo "<script>alert('Successfully logged in.');</script>";
                header("Location: message.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not match </div>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_naigan.css">
    <link rel="stylesheet" href="login.css">
    <script src="js_naigan.js" defer></script>


    <title>JB Naigan - Personal Website</title>
</head>
<body>

    <nav>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">&#9776;</label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#resume">Resume/CV</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section id="home" class="active-section" style="background-image: url('background.jpg');">
            <div class="home-content">
                <h1>Hi! My name is JB Naigan</h1>
                <p>Welcome to my personal website. Explore and learn more about me and my journey in Information Technology.</p>
            </div>
        </section>
        

        <section id="about">
            <h2>About Me</h2>
            <p>Hello, I'm JB Naigan, a passionate Information Technology student based in Manila. As the eldest in my family, I balance my studies with family responsibilities, considering that my parents reside in Visayas. I'm also a pet lover, particularly fond of dogs, and I enjoy spending my free time playing digital games and watching movies.</p>
            <p>Currently, I am pursuing a degree in BSIT-MI at National University Fairview. Coding is one of my major interests.</p>
            <p>Below is my photo:</p>
            <img src="IMG_0170.JPG" alt="Your Photo" style="width: 300px; max-width: 100%;">
        </section>

        <section id="resume">
            <h2>Resume/CV</h2>
            <p>Below is a summary of my professional experience, education, skills, and achievements. You can also view my resume directly:</p>
            <a href="JB-NAIGAN-RESUME.pdf" target="_blank">View Resume</a>
            <p>Download the PDF version of my resume: <a href="JB-NAIGAN-RESUME.pdf" download>Download Resume</a></p>
        </section>

        <section id="skills">
            <h2>Skills</h2>
            <ul class="skills-list">
                <li>Computer skills</li>
                <li>Time management skills</li>
                <li>Team Collaboration</li>
            </ul>
        </section>

<section id="contact" class="contact-section">
    <h2>Contact</h2>
    <p>Feel free to reach out to me via email, phone, or connect with me on social media:</p>
    <ul>
        <li>Email: <a href="mailto:jbnaigan7@gmail.com">jbnaigan7@gmail.com</a></li>
        <li>Phone: <a href="tel:+639282213370">0928-221-3370</a></li>
        <li>Facebook: <a href="https://www.facebook.com/naigan.jb.0504">Naigan JB</a></li>
    </ul>
    <footer>
        <div class="footer-content">
            <div class="social-links">
                <a href="https://steamcommunity.com/id/jbnaigan1/" target="_blank">Steam</a>
                <a href="https://www.instagram.com/ngn_jeb/" target="_blank">Instagram</a>
            </div>
            <div class="form-container">
    <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class= "form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class= "form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <div class="reg-btn">
                <a href="registration.php">Register</a>
            </div>
        </form>
    </div>  
            <div class="copyright">
                &copy; 2024 JB NAIGAN. All Rights Reserved.
            </div>
        </div>
    </footer>
</section>


    </main>

</body>
</html>
