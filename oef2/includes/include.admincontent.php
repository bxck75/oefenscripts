<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
$nav = new Nav(1,0);
if(isset($_GET['CID'])){
    $cid = addslashes($_GET['CID']);
    $content = datahandler::allecontenthalen($cid);
    //HeFu::vardrop($content);
    if(is_array($content)){
        foreach($content as $c_item){
        //HeFu::vardrop($c_item);
        extract($c_item,EXTR_PREFIX_ALL,'Content');
        //echo $Content_Titel;
        datahandler::naviteminschieten('css',7,6,0,1);
        ?>
        <div class='six columns admin-content'>
            <table id="t01">
                <tr>
                    <th><span class='six columns content-title'><h3><?=$Content_Titel;?></h3></span></th>
                </tr>
                <tr>
                    <td class=' five columns'>
                        <span class='six columns content-inhoud'><pre><code><?php echo addslashes($Content_Inhoud); ?></code></pre></span>
                    </td>
                </tr>
            </table>
        </div>


        <?php
        }
    }else{
        ?>
        <div class='six columns admin-content'>
            <span class='six columns content-title'>Er is geen inhoud gevonden!</span>
        </div>
        <?php
    }
}
