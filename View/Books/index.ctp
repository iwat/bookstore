<div class="index">
	<table>
		<tr>
			<th>Title</th>
			<th>Released</th>
			<th>ISBN</th>
			<th>Price</th>
		</tr>
		<?php foreach ($books as $book): ?>
		<tr>
			<td><?= $book['Book']['title']; ?></td>
			<td><?= $book['Book']['released']; ?></td>
			<td><?= $book['Book']['isbn13']; ?></td>
			<td><?= $book['Book']['price']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
