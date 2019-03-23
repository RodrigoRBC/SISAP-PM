<div class="arbpeoplepulicArbratesSecpeople view">
<h2><?php echo __('Arbpeoplepulic Arbrates Secperson'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arbpeoplepulic Arbrate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbrate']['id'], array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'view', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbrate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secperson'); ?></dt>
		<dd>
			<?php echo $this->Html->link($arbpeoplepulicArbratesSecperson['Secperson']['username'], array('controller' => 'secpeople', 'action' => 'view', $arbpeoplepulicArbratesSecperson['Secperson']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situation'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['situation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creationdate'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['creationdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arbpeoplepulic Arbrates Secperson'), array('action' => 'edit', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arbpeoplepulic Arbrates Secperson'), array('action' => 'delete', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $arbpeoplepulicArbratesSecperson['ArbpeoplepulicArbratesSecperson']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates Secpeople'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrates Secperson'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arbpeoplepulic Arbrate'), array('controller' => 'arbpeoplepulic_arbrates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secpeople'), array('controller' => 'secpeople', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>
