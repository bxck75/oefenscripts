<?php
require('includes/include.Settings.php');
?>

        <head>
            <link rel="stylesheet" href="css/style.css">
            <script src="js/jquery-1.11.1.min.js"></script>
            
            <script>
                $(document).ready(function(){
                  $("input").focus(function(){
                    $(this).css("background-color","#cccccc");
                  });
                  $("input").blur(function(){
                    $(this).css("background-color","#ddd");
                  });
                });
                $(document).ready(function(){
                  $("login-form").focus(function(){
                    $(this).css("background-color","#fff");
                  });
                });
            </script>  
        </head>


<?php
if(isset($_GET['des'])){ 
    User::logout(); 
    ?>
    <script type="text/javascript">
    //go back one page
    window.location.href = 'index.php'
    </script>
    <?php 
}
if(isset($_POST['login'])){
    $user = User::system_user($_POST['username'],$_POST['password']);
}
?>
<div id="msg"><?php echo $msg ?></div> 
<?php
if(!isset($_SESSION['HYPER'])){
    User::build_login();
}else{
    if($_SESSION['HYPER'] == 'Yes'){
        //admin content
        //
        //
        //
        //$user->whois();
    }else{
    //user content
    $user->whois();
    }    
//unlogged content        
?>
<a href="<?php DOCUMENTROOT; ?>">HOME</a>
<a href="index.php?des">Destroy</a>
<?php       
    
}


?>