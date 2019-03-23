<div class="arbpeoplepulicArbrates view">
<h2><?php echo __('Arbpeoplepulic Arbrate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arbpeoplepublic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($arbpeoplepulicArbrate['Arbpeoplepublic']['id'], array('controller' => 'arbpeoplepublics', 'action' => 'view', $arbpeoplepulicArbrate['Arbpeoplepublic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arbrate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($arbpeoplepulicArbrate['Arbrate']['id'], array('controller' => 'arbrates', 'action' => 'view', $arbpeoplepulicArbrate['Arbrate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creationdate'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['creationdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arbpeoplepulic Arbrate'), array('action' => 'edit', $arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arbpeoplepulic Arbrate'), array('action' => 'delete', $arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('controller' => 'arbpeoplepublics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbrates'), array('controller' => 'arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbrate'), array('controller' => 'arbrates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secpeople'), array('controller' => 'secpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Secpeople'); ?></h3>
	<?php if (!empty($arbpeoplepulicArbrate['Secperson'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Appaterno'); ?></th>
		<th><?php echo __('Apmaterno'); ?></th>
		<th><?php echo __('Privelege'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Language'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Creationdate'); ?></th>
		<th><?php echo __('Expirationdate'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Planificar'); ?></th>
		<th><?php echo __('Generated'); ?></th>
		<th><?php echo __('Secproject Id'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($arbpeoplepulicArbrate['Secperson'] as $secperson): ?>
		<tr>
			<td><?php echo $secperson['id']; ?></td>
			<td><?php echo $secperson['firstname']; ?></td>
			<td><?php echo $secperson['appaterno']; ?></td>
			<td><?php echo $secperson['apmaterno']; ?></td>
			<td><?php echo $secperson['privelege']; ?></td>
			<td><?php echo $secperson['username']; ?></td>
			<td><?php echo $secperson['language']; ?></td>
			<td><?php echo $secperson['status']; ?></td>
			<td><?php echo $secperson['creationdate']; ?></td>
			<td><?php echo $secperson['expirationdate']; ?></td>
			<td><?php echo $secperson['password']; ?></td>
			<td><?php echo $secperson['email']; ?></td>
			<td><?php echo $secperson['planificar']; ?></td>
			<td><?php echo $secperson['generated']; ?></td>
			<td><?php echo $secperson['secproject_id']; ?></td>
			<td><?php echo $secperson['regimen']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'secpeople', 'action' => 'view', $secperson['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'secpeople', 'action' => 'edit', $secperson['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'secpeople', 'action' => 'delete', $secperson['id']), array('confirm' => __('Are you sure you want to delete # %s?', $secperson['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
