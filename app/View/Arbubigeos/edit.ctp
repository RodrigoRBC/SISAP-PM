<div class="arbubigeos form">
<?php echo $this->Form->create('Arbubigeo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Arbubigeo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('distrito');
		echo $this->Form->input('provincia');
		echo $this->Form->input('dpto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Arbubigeo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Arbubigeo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Arbubigeos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('controller' => 'arbpeoplepublics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
	</ul>
</div>
