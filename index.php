<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creative Commons Showcase">
    <meta name="keywords" content="Creative Commons, images, gallery">
    <meta name="author" content="Adam McPhail">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Creative Commons Showcase</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 

    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/simple-lightbox.css'>
    <link rel='stylesheet' href='css/gallery.css'>

    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/layout.css"> 
    <link rel="stylesheet" href='css/navigation.css'>

    <!-- link to JQuery -->
    <script src='js/j_query_min.js'></script>
    
</head>
    
<body>
    
    <div class="wrapper">
    
    <div  class='logo'>
            <a href='index.php'>'<img class='responsive' src='images/sphere_logo.png'
            alt='s'></a>
        </div> <!-- / Logo --> 

        <div class = 'top-title'>
            <h2>CC  Showcase</h2>
        </div>  <!-- / top title --> 
        

        <div class="header">
            <div class='menu-header'>

            <i class='fa fa-bars'></i>

            <div class='menu-content'>
                <ul>
                    <li><a class='nav' href='index.php'>Home</a></li>
                    <li><a class='nav dropbtn' href='#'>Gallery <i 
                    class='fa fa-chevron-down'></i></a>
                        <ul class='dropdown'>
                            <li><a class='nav' href='index.php?page=insects'>Insects</a></li>
                            <li><a class='nav' href='#'>Space</a></li>
                            <li><a class='nav' href='#'>People</a></li>
                        </ul>



                    </li> <!--  / Gallery Drop Down -->
                    <li><a href='#'>About</a></li>
                    <li><a href='index.php?page=links'>Links</a></li>
                    <li><a href='#'>Contact</a></li>
                </ul>

            </div>


            </div>
        </div>

        <?php
        if (!isset($_REQUEST['page']))  {
            include('home.php');
        }

        else {
            // preventsuser from navigating through file system
            $page=preg_replace('/[^0-9a-zA-Z]-/', '', $_REQUEST['page']); 
            include("$page.php");        
        }

        ?>

        <div class="box footer">
            CC Adam  McPhail 2024
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper -->

<!-- Add jquery to bottom of page!! --> 
<script> 
    $('.dropbtn').click(function()
    {
        $('.dropdown').toggleClass('display');
    }
    )

    // Make navigation bytton clickable 
    $('.fa-bars').click(function()
    {
        $('.menu-content').toggle();
    }
    )


</script>
<!-- Light  Box Javascript -->
<script src='js/simple-lightbox.min.js'></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
    
</body>        
