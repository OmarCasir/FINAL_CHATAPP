<?php
    session_start();
    if(isset($_SESSION['unique_id'])) {
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>

<body class="body">
    <div class="wrapper">
        <div class="two-form">
            <div class="form-box"> 
                <section class="form login">
                    <div class="link">Don't have an account? <a href="index.php">Sign Up</a></div>
                    <header>Log In</header>
                    <form action="#">
                        <div class="error-txt"></div>
                        <div class="field input">
                            <input type="text" name="email" placeholder="Enter your Email Address">
                        </div>
                        <div class="field input">
                            <input type="password" name="password" placeholder="Enter your Password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="button">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                        
                </section>
            </div>
        </div>  
    </div>

    <script src="javascript/nav.js"></script>
    <script src="javascript/pass.js"></script>
    <script src="javascript/login.js"></script>

</body>
</html>