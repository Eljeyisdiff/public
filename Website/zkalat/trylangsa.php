<?php
$title = "BINAN INTEGRATED NATIONAL HIGH SCHOOL";
$welcomeMessage = "We are excited to welcome you to our online community. Whether";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./Trytry.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="logo1">
    <div class="title">
      <h1><?php echo $title; ?></h1>
      <img src="../Web Portal/images/binhslogo-removebg-preview.png" alt="BINHS Logo" />
      <a href="../Web Portal/PURTALET/RolePick.php"><button id="Log-In-Button">Log In</button></a>
      <a href="../Web Portal/PURTALET/RolepickRegister.php"><button id="Register-Button">Register</button></a>
    </div>
    <div class="welcome">
      <h1>Welcome!</h1><br>
      <div class="introduction">
        <p>
          <?php echo $welcomeMessage; ?><br />
          you're a current student, a parent, or a prospective family, we invite<br />
          you to explore our website to discover everything that makes<br /> BINHS special.<br />
          <br>Here, you’ll find important updates, school news, resources, and<br />
          information about our academic programs, extracurricular activities,<br />
          and events. We are committed to providing a supportive and<br />
          inspiring environment where students can grow and thrive.<br />
          <br>
          Thank you for visiting, and we look forward to a fantastic year ahead!<br />
          <br />
          Sincerely,<br />
          The BNHS's Team
        </p>
      </div>
    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>