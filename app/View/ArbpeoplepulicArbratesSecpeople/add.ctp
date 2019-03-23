<div class="arbpeoplepulicArbratesSecpeople form">
<?php echo $this->Form->create('ArbpeoplepulicArbratesSecperson'); ?>
	<fieldset>
		<legend><?php echo __('Add Arbpeoplepulic Arbrates Secperson'); ?></legend>
	<?php
		echo $this->Form->input('arbpeoplepulic_arbrate_id');
		echo $this->Form->input('secperson_id');
		echo $this->Form->input('description');
		echo $this->Form->input('situation');
		echo $this->Form->input('creationdate');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates Secpeople'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secpeople'), array('controller' => 'secpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
