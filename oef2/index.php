<?php
require('includes/include.Settings.php');
?>

        <head>
            	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Oef 2 :)</title>
	<meta name="oef2" content="oefening 2 lol ">
	<meta name="author" content="bxck">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
            <link rel="stylesheet" href="css/base.css">
            <link rel="stylesheet" href="css/skeleton.css">
            <link rel="stylesheet" href="css/layout.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/slicknav.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
        <!-- js scripts -->
            <script src="js/jquery-1.11.1.min.js"></script>
            <script src="js/jquery.slicknav.js"></script>
            <script src="js/own.popup.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
            
            <script>
                $(document).ready(function(){
                  $("input").focus(function(){
                    $(this).css("background-color","#cccccc");
                  });
                  $("input").blur(function(){
                    $(this).css("background-color","#ddd");
                  });
                });
            </script>  
        </head>


<?php
//trigger session destroy
if(isset($_GET['des'])){ 
    User::logout(); 
    ?>
    <script type="text/javascript">
    //go back one page
    window.location.href = 'index.php'
    </script>
    <?php 
}
//trigger login
if(isset($_POST['login'])){
    $user = User::system_user($_POST['username'],$_POST['password']);
}
?>
<div id="main-wrapper" class="container nine columns">
    <div id="msg"><?php echo $msg ?></div> 
<?php
//trigger content on session HYPER
if(!isset($_SESSION['HYPER'])){
    //no session HYPER so showlogin screen
    User::build_login();
}else{
    //Session HYPER set...knock knock Whois()
    if($_SESSION['HYPER'] == 'Yes'){
        //admin content
        //$user->whois();
        //include 'templates/template.toplinks.php';
        echo '<span class="four columns" id="navigatie"></span>';
        include 'includes/include.admincontent.php';
    }else{
        //user content
        //$user->whois();
        //include 'templates/template.toplinks.php';
        echo '<span class="sixteen columns" id="navigatie"></span>';
        include 'includes/include.gebruikercontent.php';
    
    }    
//unlogged content        
?>

    
<?php       
    
}


?>