<div class="arbpeoplepulicArbratesSecpeople index">
	<h2><?php echo __('Arbpeoplepulic Arbrates Secpeople'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('arbpeoplepulic_arbrate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('secperson_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('situation'); ?></th>
			<th><?php echo $this->Paginator->sort('creationdate'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($arbpeoplepulicArbratesSecpeople as $arbpeoplepulicArbratesSecperson): ?>
	<tr>
		<td><?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbrate']['id'], array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'view', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbrate']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($arbpeoplepulicArbratesSecperson['Secperson']['username'], array('controller' => 'secpeople', 'action' => 'view', $arbpeoplepulicArbratesSecperson['Secperson']['id'])); ?>
		</td>
		<td><?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['description']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['situation']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['creationdate']); ?>&nbsp;</td>
		<td><?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrates Secperson'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secpeople'), array('controller' => 'secpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
