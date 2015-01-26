<div>
<?php if($this->error_msg != ''){ ?>
    <div class="error"><?php echo $this->error_msg; ?></div>	
<?php } ?>

<form class="add-artist-form" method="post" action="index.php?route=artist/insertArtist">
    <table  class=" list">
                <thead>
            <tr cellpadding="10">
                <td>Artist</td>
                <td>Startdatum</td>
                <td>Einddatum</td>
                <td>Toegangsprijs</td>


            </tr>
        </thead>
        <tr>
            <td><p><input type="text" name="name" value="" /></p></td>

            <td><p><input id="datepicker1" type="text" name="start_date" value="" /></p></td>

            <td><p><p><input id="datepicker2" type="text" name="end_date" value="" /></p></td>
 
            <td><p><input type="text" name="price" value="" /></p></td>


        </tr>
        <tr>
            <td>
                <p><input type="submit" id="button-upload" name="submit" value="Toevoegen" /></p>
            </td>
        </tr>
    </table>
</form>
</div>

