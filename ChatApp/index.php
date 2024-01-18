 <?php
    session_start();
    if(isset($_SESSION['unique_id'])) {
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>

<body class="body">
    <div class="wrapper">
        <div class="nav">
            <div class="nav-logo">
                <p>CanTalk</p>
            </div>
            <nav class="nav-menu" id="navMenu">
                <a href="index.php">Home</a>
                <a href="help.php">Help</a>
            </nav>
            <div class="nav-button">
                <a href="login.php"><button class="btn white-btn" id="loginBtn">Log In</button></a>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </div>

        <div class="two-form">
            <div class="form-box">
                <div class="form signup">
                    <div class="link">Already have an account? <a href="login.php">Log In</a></div>
                    <header>Sign Up</header>
                    <form action="#">
                        <div class="error-txt"></div>
                        <div class="two-form">
                            <div class="name-details">
                                <div class="field input">
                                    <input type="text" name="fname" placeholder="First Name" required>
                                </div>
                                <div class="field input">
                                    <input type="text" name="lname" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="field input">
                                <input type="text" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="field input">
                                <input type="password" name="password" placeholder="Password" required>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="image">
                                <input type="file" name="image" required>
                            </div>
                            <div class="button">
                                <input type="submit" value="Sign Up">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="javascript/nav.js"></script>
    <script src="javascript/pass.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>