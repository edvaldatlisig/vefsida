<?php
//ini_set('session.save_path', 'tmp');
session_start();
//$id = $_REQUEST['id'];
include "include/config.php"; 
// if (isset($_SESSION['adminid'])) {
// 	header("Location: profile.php?id=$id");
// }     
if (isset($_SESSION['id'])) {
    header("Location: post.php");
}
if (isset($_POST['username'])) {
    
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    
    $sql = "SELECT id, username, password, userrank FROM users WHERE username = '$username' LIMIT 1";

    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($query);
    $id = $row[0];
    $dbusername = $row[1];
    $dbPassword = $row[2];
    $userrank = $row[3];
    
    if ($username == $dbusername && $password == $dbPassword) {

        // if ($userrank == 2) {
        //     $_SESSION['username'] = $username;
        //     $_SESSION['adminid'] = $id;
        //     header("Location: profile.php?id=$id");
        // } else 
        if($userrank == 1){
	        $_SESSION['username'] = $username;
	        $_SESSION['id'] = $id;
	        header("Location: post.php");
         }    
    } else {
        echo '<script type="text/javascript">alert("Vitlaust Notendanafn eða Lykilorð")</script>';
    }
   





// REGISTER 

    // if (isset($_POST['Nigga'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    $email = strip_tags($_POST['email']);


    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    $email = mysqli_real_escape_string($db, $email);

    // Byrjar að athuga með register kröfur
    $sql = ("SELECT username FROM `users` WHERE 'username' = '$username'"); 
    $query = mysqli_query($db,$sql);
    if ($query == $username) {
        echo '<script type="text/javascript">alert("Notendanafn er tekið")</script>';
    }elseif (empty($username) || empty($password)) {
        echo '<script type="text/javascript">alert("Notendanafn eða Lykilorð er autt.")</script>';
    }elseif($_POST['password'] != $_POST['password2']){
        echo '<script type="text/javascript">alert("Lykilorðin eru ekki eins.")</script>';
    }elseif (!empty($username) && !empty($password) && $_POST['password'] == $_POST['password2']){
        $query = "INSERT INTO users (username, password, email)VALUES('$username', '$password', '$email')";
        $result=mysqli_query($db, $query);
        header('Location: login.php');
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo($all['titill']); ?></title>
    <?php style(); ?>
</head>
<style type="text/css">
#map_canvas{
    width:100%;
    height:40em !important;
}

</style>


<body>
<div id="preloader">
    <div id="status"></div>
</div>
<div>

    <?php nav(); ?>
    <body>
    
    
        <div class="main">

        <!-- Header section start -->
        <section class="module-small bg-dark bg-dark-60 login-bg">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <h1 class="module-title font-alt">Login</h1>
                        <div class="module-subtitle font-serif mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        </div>

                    </div>

                </div><!-- .row -->

            </div>
        </section>
        <!-- Header section end -->

        <!-- Pricing start -->
        <section class="module">
            <div class="container">

                <div class="row mb-60">

                   

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">

                        <div role="tabpanel">

                            <!-- Nav tabs start-->
                            <ul class="nav nav-tabs font-alt" role="tablist">
                                <li class="active">
                                    <a href="#support" data-toggle="tab"><span class="icon-tools-2"></span> Login</a>
                                </li>
                                <li>
                                    <a href="#sales" data-toggle="tab"><span class="icon-basket"></span> Register</a>
                                </li>
                            </ul>
                            <!-- Nav tabs end -->

                            <!-- Tab panes start-->
                            <div class="tab-content">

                                <!-- Tab start -->
                                <div class="tab-pane active" id="support">

                                   <form method="POST" action="login.php">
                                       <label>Username:</label>
                                       <input type="text" class="form-control" name="username">
                                       <label>Password:</label>
                                       <input type="password" class="form-control" name="password">
                                       <div class="bil"></div>
                                       <input type="submit" value="Submit" class="btn btn-danger btn-lg" required/>
                                   </form>


                                </div>
                                <!-- Tab end -->

                                <!-- Tab start -->
                                <div class="tab-pane" id="sales">

                                    <form method="POST" action="login.php">

                                       <label>Username:</label>
                                       <input type="text" class="form-control" name="username" required>
                                       <label>Email:</label>
                                       <input type="email" class="form-control" name="email" required>
                                       <label>Password:</label>
                                       <input type="password" class="form-control" name="password" required>
                                       <div class="bil"></div>
                                       <input type="submit" value="Submit" class="btn btn-danger btn-lg" required/>
                                   </form>
                                </div>
                                <!-- Tab end -->

                            </div>
                            <!-- Tab panes end-->

                        </div>

                    </div>

                </div><!-- .row -->

            </div>
        </section>
        <!-- Pricing end -->

      <!-- Widgets start -->

        <div class="module-small bg-dark">
            <div class="container">
    
                <div class="row">
    
                    <div class="col-sm-3">
    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">About BMW</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                            <p>Email: <a href="mailto:bmw@bmw.com">bmw@bmw.com</a></p>
                        </div>
                        <!-- Widget end -->
    
                    </div>
    
                    <div class="col-sm-3">
    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Reviews</h5>
                            <ul class="icon-list">
                                <li>Aron on <a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li>Eddi on <a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li>Oliver on <a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li>Aron on <a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li>Eddi on <a href="#">Lorem ipsum dolor sit amet</a></li>
                            </ul>
                        </div>
                        <!-- Widget end -->
    
                    </div>
    
                    <div class="col-sm-3">
    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Categories</h5>
                            <ul class="icon-list">
                                <li><a href="#">Design - 5</a></li>
                                <li><a href="#">Marketing - 100</a></li>
                                <li><a href="#">Feelings - 16</a></li>
                            </ul>
                        </div>
                        <!-- Widget end -->
    
                    </div>
    
                    <div class="col-sm-3">
    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular Pictures</h5>
                            <ul class="widget-posts">
    
                                <li class="clearfix">
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="http://i.imgur.com/D6LRmhi.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title">
                                            <a href="#">Black BMW</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            7 April
                                        </div>
                                    </div>
                                </li>
    
                                <li class="clearfix">
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="http://i.imgur.com/7LWDCXa.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title">
                                            <a href="#">Blue BMW</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            7 April
                                        </div>
                                    </div>
                                </li>
    
                            </ul>
                        </div>
                        <!-- Widget end -->
      
</div>
<div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
    </div>
<?php script(); ?>
</body>
</html>