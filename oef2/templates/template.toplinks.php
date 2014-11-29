<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="sixteen columns header">
    <div style="float:right;" class="offset-by-one fourteen columns">
        <span class="button home" ><a href="<?php DOCUMENTROOT; ?>">Home</a></span>
        <span class="button logout" ><a href="index.php?des">Logout</a></span>
        <span class="welkom-txt" >hallo, <?php echo $_SESSION['username']; ?></span>
    </div>
</div> 
