<?php
/**
 * Description of class
 * class voor de navigatie
 * @author bxck
 */
class Nav {
    function __construct($hyper,$ouder){
    $this->build_menu($hyper,$ouder);    
    }
    public function build_menu($hyper,$ouder){
        echo'<ul id="menu">';
        $items = new datahandler;
        $itemarray = $items ->alleitemshalen($hyper,$ouder);
        echo "<li><a href='index.php'>Home</a></li>";
        echo "<li><a href='index.php?des'>Logout</a></li>";
        foreach($itemarray as $item){
            extract($item, EXTR_PREFIX_ALL, "hoofd");
            echo "<li><a href='?CID=".$hoofd_cont_id."'>".$hoofd_naam."</a><ul>";
            $subitems = new datahandler;
            $subitemarray = $subitems ->alleitemshalen($hyper,$hoofd_id);
            if(is_array($subitemarray)){
                foreach($subitemarray as $subitem){
                    extract($subitem, EXTR_PREFIX_ALL, "sub");
                    echo '<li><a href="?CID='.$sub_cont_id.'" >'.$sub_naam.'</a></li>';
                }
            }
            echo'</ul></li>';
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
    public function haalcotnent($CID){
        
    }

}
