<div class="index">
	<table>
		<tr>
			<th>Title</th>
			<th>Released</th>
			<th>Author(s)</th>
			<th>Published by</th>
			<th>ISBN</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>
		<?php foreach ($books as $book): ?>
		<tr>
			<td><?= $book['Book']['title']; ?></td>
			<td><?= $book['Book']['released']; ?></td>
			<td><?php
				$authors = array();
				foreach ($book['Author'] as $author)
				{
					$authors[] = $author['name'];
				}
				echo implode(', ', $authors);
			?></td>
			<td><?= $book['Publisher']['name']; ?></td>
			<td><?= $book['Book']['isbn13']; ?></td>
			<td><?= $book['Book']['price']; ?></td>
			<td>
				<?= $this->Html->link('Add to Cart', array('controller' => 'cart', 'action' => 'addBook', $book['Book']['id'])); ?>
				<?= $this->Html->link('Edit', array('action' => 'edit', $book['Book']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $this->Paginator->numbers(); ?>
</div>
<?= $this->element('Books/actions'); ?>
