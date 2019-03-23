<div class="arbrates form">
<?php echo $this->Form->create('Arbrate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Arbrate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('total_cost');
		echo $this->Form->input('numper_people');
		echo $this->Form->input('calculate_rate');
		echo $this->Form->input('creationdate');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Arbrate.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Arbrate.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Arbrates'), array('action' => 'index')); ?></li>
	</ul>
</div>
