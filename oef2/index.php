<?php
require('includes/include.Settings.php');
?>

        <head>
            <link rel="stylesheet" href="css/style.css">
            <script src="js/jquery-1.11.1.min.js"></script>
        </head>
        <script>
$(document).ready(function(){
  $("#login-form").fadeIn();
  //$("#msg").fadeIn("slow");
  $("#login-form").fadeIn(3000);
});
</script>
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