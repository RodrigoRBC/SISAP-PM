<div class="arbpeoplepublics form">
<?php echo $this->Form->create('Arbpeoplepublic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Arbpeoplepublic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dni');
		echo $this->Form->input('firstname');
		echo $this->Form->input('appaterno');
		echo $this->Form->input('apmaterno');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('arbubigeo_id');
		echo $this->Form->input('creationdate');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Arbpeoplepublic.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Arbpeoplepublic.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbubigeos'), array('controller' => 'arbubigeos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbubigeo'), array('controller' => 'arbubigeos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
	</ul>
</div>
