<div>
	<table class="list">
		<thead>
			<tr>
				<td>Event</td>
				<td>Startdatum</td>
				<td>Einddatum</td>
				<td class="right">Toegangsprijs</td>
			</tr>
		</thead>
		<?php foreach($this->events as $event){ ?>
			<tr>
				<td><?php echo $event['name']; ?></td>
				<td><?php echo $event['start_date']; ?></td>
				<td><?php echo $event['end_date']; ?></td>
				<td class="right"><?php echo number_format($event['price'], 2, ',', '.'); ?></td>
			</tr>
		<?php } ?>
	</table>
</div>