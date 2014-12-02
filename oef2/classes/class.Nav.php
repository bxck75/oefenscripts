<?php
/**
 * Description of class
 * class voor de navigatie
 * @author bxck
 */
class Nav {
    function __construct($hyper,$ouder){
        
        echo "<li><a href='index.php'>Home</a></li>";
        echo "<li><a href='index.php?des'>Logout</a></li>";
    $this->build_menu($hyper,$ouder);    
    }
    public function build_menu($hyper,$ouder){
        echo'<ul id="menu">';
        $items = new datahandler;
        $itemcounter = new datahandler;
        $itemarray = $items ->alleitemshalen($hyper,$ouder);
        $counter = count($itemcounter ->alleitemshalen($hyper,$ouder));
        if(is_array($itemarray)){
            foreach($itemarray as $item){
                //HeFu::vardrop($item);
                extract($item, EXTR_PREFIX_ALL, "hoofd");
                echo "<li><a href='?CID=".$hoofd_cont_id."'>".$hoofd_naam."</a>";
                //echo "hallo ";
                if($counter >= 1 ){
                    echo "<ul>";
                    $last = $items->get_maxid();
                    echo $last[0];
                    $subitemarray = self::build_menu($hyper,$hoofd_id);
                    echo'</ul>';
                    //if($subitemarray == null){echo "end van het menu";}
                }
                echo '</li>';
            }
        }else{
            HeFu::schrijf($itemarray);

//                echo "<li><a href='?CID=".$hoofd_cont_id."'>".$hoofd_naam."</a><ul>";
//                $subitemarray = self::build_menu($hyper,$hoofd_id);
//                echo'</ul></li>';
            
        }
        //HeFu::vardrop($itemarray[0]);
        echo'</ul>';
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#menu').slicknav({
                    prependTo:'#navigatie'
                });
            });
        </script>
        <?php
        //include 'templates/template.menu.php';
    }
    function countcontent($CID){
        $data = new datahandler();
        $content= $data->allecontenthalen(addslashes($CID));
        HeFu::vardrop($content); 
        
    }
    

}
