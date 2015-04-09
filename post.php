<?php
//ini_set('session.save_path', 'tmp');
session_start();
//$id = $_REQUEST['id'];
include "include/config.php"; 
// if (isset($_SESSION['adminid'])) {
//  header("Location: profile.php?id=$id");
// }     
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
if (isset($_POST['title'])) {
    $title = strip_tags($_POST['title']);
    $body = strip_tags($_POST['body']);
      if (empty($title) || empty($body)) {
         echo '<script type="text/javascript">alert("Titill eða Frétt er tóm.")</script>';
    }else {
        $title = mysqli_real_escape_string($db, $title);
        $body = mysqli_real_escape_string($db, $body);
        $query="INSERT INTO post(title, body)VALUES('$title', '$body')";
        $result=mysqli_query($db, $query);
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
                                <form method="POST" action="post.php">  
                                        <label>Title:</label>
                                        <input type="text" name="title" class="form-control">
                                        <label>Body:</label>
                                        <textarea name="body" class="form-control" rows="4" cols="50"></textarea>
                                        <div class="bil"></div>
                                        <input type="submit" value="Submit" class="btn btn-danger btn-lg" required/>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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