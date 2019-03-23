<div class="arbpeoplepublics index">
	<h2><?php echo __('Arbpeoplepublics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('appaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apmaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('arbubigeo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creationdate'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($arbpeoplepublics as $arbpeoplepublic): ?>
	<tr>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['id']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['dni']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['appaterno']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['apmaterno']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['address']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($arbpeoplepublic['Arbubigeo']['id'], array('controller' => 'arbubigeos', 'action' => 'view', $arbpeoplepublic['Arbubigeo']['id'])); ?>
		</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['creationdate']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arbpeoplepublic['Arbpeoplepublic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arbpeoplepublic['Arbpeoplepublic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $arbpeoplepublic['Arbpeoplepublic']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepublic['Arbpeoplepublic']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbubigeos'), array('controller' => 'arbubigeos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbubigeo'), array('controller' => 'arbubigeos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
	</ul>
</div>
