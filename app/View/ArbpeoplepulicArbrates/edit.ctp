<div class="arbpeoplepulicArbrates form">
<?php echo $this->Form->create('ArbpeoplepulicArbrate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Arbpeoplepulic Arbrate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('arbpeoplepublic_id');
		echo $this->Form->input('arbrate_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('period');
		echo $this->Form->input('description');
		echo $this->Form->input('creationdate');
		echo $this->Form->input('status');
		echo $this->Form->input('Secperson');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArbpeoplepulicArbrate.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ArbpeoplepulicArbrate.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepublics'), array('controller' => 'arbpeoplepublics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbrates'), array('controller' => 'arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbrate'), array('controller' => 'arbrates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secpeople'), array('controller' => 'secpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
