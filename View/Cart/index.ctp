<div class="index">
	<table>
		<tr>
			<th>Title</th>
			<th>Released</th>
			<th>ISBN</th>
			<th>Price</th>
			<th>Amount</th>
			<th>Total</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($books as $book): ?>
		<tr>
			<td><?= $book['Book']['title']; ?></td>
			<td><?= $book['Book']['released']; ?></td>
			<td><?= $book['Book']['isbn13']; ?></td>
			<td><?= $book['Book']['price']; ?></td>
			<td><?= $book['Book']['amount']; ?></td>
			<td><?= $book['Book']['total']; ?></td>
			<td><?= $this->Html->link('Remove', array('action' => 'removeBook', $book['Book']['id'])); ?></td>
		</tr>
		<?php endforeach; ?>
		<tr>
			<th colspan="4">Summary</th>
			<th><?= $summary['amount']; ?></th>
			<th><?= $summary['total']; ?></th>
		</tr>
	</table>
</div>
