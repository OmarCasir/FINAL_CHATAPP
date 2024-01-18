<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head> 
<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: login.php");  
    }
?>


<?php include_once "header.php"; ?>

<body class="users-body">
    
    <div class="container">
            <a href="tutorial.php" class="ap"> Need Help?</a>
            <div class="random-box" id="randomBody">
                <section class="randomize"> 
                    <header>
                    <?php
                        include_once "php/config.php";
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                        if(mysqli_num_rows($sql) > 0) {
                            $row =mysqli_fetch_assoc($sql);
                        }
                    ?>

                    <div class="random-button">
                        <a><input type="submit" value="Random Users"></a>
                    </div> 
                    </header>
                        <div class="random-list">
                            
                        </div>
                </section>
            </div>
            
            <div class="users-wrapper">
                <section class="users"> 
                    <header>

                    <?php
                        include_once "php/config.php";
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                        if(mysqli_num_rows($sql) > 0) {
                            $row =mysqli_fetch_assoc($sql);
                        }
                    ?>

                        <div class="content">
                             <img src="php/images/<?php echo $row['img'] ?>" alt="">
                            <div class="details">
                                <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                                <p><?php echo $row['status'] ?></p>
                            </div>
                        </div>
                        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Logout</a>
                    </header>
                        <div class="search">
                            <span class="text">Search a user to start a chat.</span>
                            <input type="text" placeholder="Enter a name to search.">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                        <div class="users-list">
                            
                        </div>
                </section>
            </div>
                        
    </div>    

    <script src="javascript/users.js"></script>

</body>
</html>