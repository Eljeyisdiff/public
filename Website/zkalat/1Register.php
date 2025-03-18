<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./1Register.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>

<body>
    <!--NAVIGATION-->
    <div class="logo1">
        <div class="title">
            <h1>BINAN INTEGRATED NATIONAL HIGH SCHOOL</h1>
            <img src="../Web Portal/images/binhslogo-removebg-preview.png" alt="BINHS Logo" />
        </div>
    </div>
    <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="navbar__menu">
        <li class="navbar__item">
            <a href="/2.0HomePage.html" class="navbar__links">
                Home
            </a>
        </li>
        <li class="navbar__item">
            <a href="/2.1StudentProfile.html" class="navbar__links">
                Profile
            </a>
        </li>
        <li class="navbar__item">
            <a href="/2.1Schedule.html" class="navbar__links">
                Schedule
            </a>
        </li>
        <li class="navbar__item">
            <a href="/2.1Grades.html" class="navbar__links">
                Grades
            </a>
        </li>
        <li class="navbar__item">
            <a href="/2.1Registrar.html" class="navbar__links">
                Registrar
            </a>
        </li>
        <li class="navbar__btn">
            <a href="/2.1Logout.html" class="button" id="Logout">
                Log Out
            </a>
        </li>
    </ul>
    </nav>
    </div>
    <script src="app.js"></script>

    <!--FORM-->
    <div class="Form">
        <h1>REGISTER-STUDENT</h1>
        <form action="incphp/signup.inc.php" method="post">
            <div class="user-info">
                <div>
                    <input type="text" id="fname" name="fname" placeholder=" First Name:" required autocomplete="off">
                </div>

                <div>
                    <input type="text" id="cname" name="mname" placeholder=" Middle Name:" required autocomplete="off">
                </div>

                <div>
                    <input type="text" id="lname" name="lname" placeholder=" Last Name:" required autocomplete="off">
                </div>
            </div>
            <div class="user-personal">

                <div>
                    <label id="label-bday">Birthday:</label>
                    <input type="date" id="bdate" name="bdate" placeholder=" Birth date:" required>
                </div>

                <div>
                    <input type="email" id="ename" name="ename" placeholder=" Email:" required>
                </div>
            </div>

            <div class="user-input">
                <div>
                    <label id="label-num">Phone Num:</label>
                    <input type="tel" id="pnum" name="pnum" placeholder=" Cellphone number:" required>
                </div>

                <div>
                    <input type="text" id="lrnname" name="lrnname" placeholder=" LRN: " required maxlength="12">
                </div>
            </div>

            <div class="gender">
                <label for="Gender">Gender:</label>

                <label for="Male">Male</label>
                <input type="radio" id="Male" name="Gender" value="Male">

                <label for="Female">Female</label>
                <input type="radio" id="Female" name="Gender" value="Female">

                <label for="PNTS">Prefer not to say</label>
                <input type="radio" id="PNTS" name="Gender" value="PNTS">
            </div>
            <input id="submit" type="submit" value="Submit">
        </form>
    </div>
    <script src="/Web Portal/app.js"></script>
</body>

</html>