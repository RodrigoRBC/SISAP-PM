<div class="arbubigeos view">
<h2><?php echo __('Arbubigeo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arbubigeo['Arbubigeo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($arbubigeo['Arbubigeo']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distrito'); ?></dt>
		<dd>
			<?php echo h($arbubigeo['Arbubigeo']['distrito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia'); ?></dt>
		<dd>
			<?php echo h($arbubigeo['Arbubigeo']['provincia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dpto'); ?></dt>
		<dd>
			<?php echo h($arbubigeo['Arbubigeo']['dpto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arbubigeo'), array('action' => 'edit', $arbubigeo['Arbubigeo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arbubigeo'), array('action' => 'delete', $arbubigeo['Arbubigeo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbubigeo['Arbubigeo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbubigeos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbubigeo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('controller' => 'arbpeoplepublics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Arbpeoplepublics'); ?></h3>
	<?php if (!empty($arbubigeo['Arbpeoplepublic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Appaterno'); ?></th>
		<th><?php echo __('Apmaterno'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Arbubigeo Id'); ?></th>
		<th><?php echo __('Creationdate'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($arbubigeo['Arbpeoplepublic'] as $arbpeoplepublic): ?>
		<tr>
			<td><?php echo $arbpeoplepublic['id']; ?></td>
			<td><?php echo $arbpeoplepublic['dni']; ?></td>
			<td><?php echo $arbpeoplepublic['firstname']; ?></td>
			<td><?php echo $arbpeoplepublic['appaterno']; ?></td>
			<td><?php echo $arbpeoplepublic['apmaterno']; ?></td>
			<td><?php echo $arbpeoplepublic['address']; ?></td>
			<td><?php echo $arbpeoplepublic['email']; ?></td>
			<td><?php echo $arbpeoplepublic['arbubigeo_id']; ?></td>
			<td><?php echo $arbpeoplepublic['creationdate']; ?></td>
			<td><?php echo $arbpeoplepublic['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'arbpeoplepublics', 'action' => 'view', $arbpeoplepublic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'arbpeoplepublics', 'action' => 'edit', $arbpeoplepublic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'arbpeoplepublics', 'action' => 'delete', $arbpeoplepublic['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepublic['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
