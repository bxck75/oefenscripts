<div>
    <table class="list">
        <thead>
            <tr>
                <td>Artist</td>
                <td>Startdatum</td>
                <td>Einddatum</td>
                <td class="right">Toegangsprijs</td>
                <td class="right">Bewerk</td>
                <td class="right">Verwijder</td>
            </tr>
        </thead>
        <?php foreach($this->artists as $artist){ ?>
            <tr id="tbody">
                <td><a  href="index.php?route=artist/oneArtist&artist_id=<?php echo $artist['artist_id']; ?>" ><?php echo $artist['name']; ?></a></td>
                <td><?php echo $artist['start_date']; ?></td>
                <td><?php echo $artist['end_date']; ?></td>
                <td class="right"><?php echo number_format($artist['price'], 2, ',', '.'); ?></td>
                <td class="right"><a class="button" href="index.php?route=artist/bewerkArtist&artist_id=<?php echo $artist['artist_id']; ?>">O</a></td>
                <td class="right"><a class="button" href="index.php?route=artist/deleteArtist&artist_id=<?php echo $artist['artist_id']; ?>">X</a></td>
            </tr>
        <?php } ?>
        <tfoot>
            <tr>
                <td>Artist</td>
                <td>Startdatum</td>
                <td>Einddatum</td>
                <td class="right">Toegangsprijs</td>
                <td class="right">Bewerk</td>
                <td class="right">Cancel</td>
            </tr>
        </tfoot>
    </table>
    <a class="button" href="index.php?route=artist/addArtist">Artist Toevoegen</a>
</div>