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
	<?= $this->Paginator->numbers(); ?>
	<div style="text-align:right;">
		Rendered in: <?= printf('%.3f', $spent); ?>s
	</div>
</div>
