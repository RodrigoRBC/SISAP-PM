<div class="arbrates view">
<h2><?php echo __('Arbrate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arbrate['Arbrate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Cost'); ?></dt>
		<dd>
			<?php echo h($arbrate['Arbrate']['total_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numper People'); ?></dt>
		<dd>
			<?php echo h($arbrate['Arbrate']['numper_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calculate Rate'); ?></dt>
		<dd>
			<?php echo h($arbrate['Arbrate']['calculate_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creationdate'); ?></dt>
		<dd>
			<?php echo h($arbrate['Arbrate']['creationdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($arbrate['Arbrate']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arbrate'), array('action' => 'edit', $arbrate['Arbrate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arbrate'), array('action' => 'delete', $arbrate['Arbrate']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbrate['Arbrate']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbrates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbrate'), array('action' => 'add')); ?> </li>
	</ul>
</div>
