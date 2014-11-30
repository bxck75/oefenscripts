<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul id="menu">
<!--            <li>Parent 1
            <ul>
            <li><a href="#">item 3</a></li>
            <li>Parent 3
            <ul>
            <li><a href="#">item 8</a></li>
            <li><a href="#">item 9</a></li>
            <li><a href="#">item 10</a></li>
            </ul>
            </li>
            <li><a href="#">item 4</a></li>
            </ul>
            </li>
            <li><a href="#">item 1</a></li>
            <li>non-link item</li>-->
            <li>Parent 2
            <ul>
            <li><a href="#">item 5</a></li>
            <li><a href="#">item 6</a></li>
            <li><a href="#">item 7</a></li>
            </ul>
            </li>
        </ul>

        <script type="text/javascript">
        $(document).ready(function(){
        $('#menu').slicknav({
            prependTo:'#navigatie'
        });
        });
        </script>

