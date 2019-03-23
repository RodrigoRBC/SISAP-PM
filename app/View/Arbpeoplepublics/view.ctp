<div class="arbpeoplepublics view">
<h2><?php echo __('Arbpeoplepublic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appaterno'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['appaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apmaterno'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['apmaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arbubigeo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($arbpeoplepublic['Arbubigeo']['id'], array('controller' => 'arbubigeos', 'action' => 'view', $arbpeoplepublic['Arbubigeo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creationdate'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['creationdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepublic['Arbpeoplepublic']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arbpeoplepublic'), array('action' => 'edit', $arbpeoplepublic['Arbpeoplepublic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arbpeoplepublic'), array('action' => 'delete', $arbpeoplepublic['Arbpeoplepublic']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepublic['Arbpeoplepublic']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbubigeos'), array('controller' => 'arbubigeos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbubigeo'), array('controller' => 'arbubigeos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Arbpeoplepulic Arbrates'); ?></h3>
	<?php if (!empty($arbpeoplepublic['ArbpeoplepulicArbrate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Arbpeoplepublic Id'); ?></th>
		<th><?php echo __('Arbrate Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Period'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Creationdate'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($arbpeoplepublic['ArbpeoplepulicArbrate'] as $arbpeoplepulicArbrate): ?>
		<tr>
			<td><?php echo $arbpeoplepulicArbrate['id']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['arbpeoplepublic_id']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['arbrate_id']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['fecha']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['period']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['description']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['creationdate']; ?></td>
			<td><?php echo $arbpeoplepulicArbrate['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'view', $arbpeoplepulicArbrate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'edit', $arbpeoplepulicArbrate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'delete', $arbpeoplepulicArbrate['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepulicArbrate['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
