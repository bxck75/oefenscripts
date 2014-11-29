<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- The container is a centered 960px -->
<div class="container">
<!-- Give column value in word form (one, two..., twelve) -->
<div class="sixteen columns">
<h1>Full Width Column</h1>
</div>
<!-- Sweet nested columns cleared with a clearfix class -->
<div class="six columns clearfix">
<!-- In nested columns give the first column a class of alpha
and the second a class of omega -->
<div class="three columns alpha">...</div>
<div class="three columns omega">...</div>
</div>
 
<!-- Sweet nested columns cleared by wrapping a .row -->
<div class="five columns">
<div class="row">
<div class="three columns alpha">...</div>
<div class="two columns omega">...</div>
</div>
</div>
 
<!-- Sweet nested columns cleared by <br class="clear"> -->
<div class="five columns">
<div class="three columns alpha">...</div>
<div class="two columns omega">...</div>
<br class="clear" />
</div>
 
<!-- Can push over by columns -->
<div class="five columns offset-by-one"></div>
 
</div>
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
 
<!-- Interested in a 12 column grid? There is an unofficial project on Github here: https://github.com/offshoot/Skeleton --> 

