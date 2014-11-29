<?php
require('includes/include.Settings.php');
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
if(!isset($_SESSION['HYPER'])){
    User::build_login();
}else{
    if($_SESSION['HYPER'] == 'Yes'){
        //admin content
        $user->whois();
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