<div class="arbubigeos index">
	<h2><?php echo __('Arbubigeos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('distrito'); ?></th>
			<th><?php echo $this->Paginator->sort('provincia'); ?></th>
			<th><?php echo $this->Paginator->sort('dpto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($arbubigeos as $arbubigeo): ?>
	<tr>
		<td><?php echo h($arbubigeo['Arbubigeo']['id']); ?>&nbsp;</td>
		<td><?php echo h($arbubigeo['Arbubigeo']['code']); ?>&nbsp;</td>
		<td><?php echo h($arbubigeo['Arbubigeo']['distrito']); ?>&nbsp;</td>
		<td><?php echo h($arbubigeo['Arbubigeo']['provincia']); ?>&nbsp;</td>
		<td><?php echo h($arbubigeo['Arbubigeo']['dpto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arbubigeo['Arbubigeo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arbubigeo['Arbubigeo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $arbubigeo['Arbubigeo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbubigeo['Arbubigeo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Arbubigeo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('controller' => 'arbpeoplepublics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
	</ul>
</div>
