<div class="index">
	<table>
		<tr>
			<th>Name</th>
		</tr>
		<?php foreach ($publishers as $publisher): ?>
		<tr>
			<td><?= $publisher['Publisher']['name']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

