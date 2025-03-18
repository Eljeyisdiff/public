<?php
    include_once 'header.php';
?>

    <!--FORM-->
    <div class="Form">
        <h1>STUDENT REGISTRATION</h1>
        <form action="gg.php" method="post">
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
                    <input type="tel" id="pnum" name="pnum" placeholder=" Cellphone number:" required>
                </div>

                <div>
                    <input type="text" id="lrnname" name="lrnname" placeholder=" LRN: " required maxlength="12">
                </div>

                <div>
                    <input type="text" id="pname" name="pname" placeholder=" password: " required maxlength="12">
                </div>
            </div>

            <div class="gender">

                <label for="Male">Male</label>
                <input type="radio" id="Male" name="Gender" value="Male">

                <label for="Female">Female</label>
                <input type="radio" id="Female" name="Gender" value="Female">

            </div> 
            <br><input id="submit" type="submit" value="Submit">
        </form>
    </div>
</body>

</html>