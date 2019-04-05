

<?php echo $this->Session->flash();?>
<div class="row">
	<div class="col s12 m12 112">
		<h4 class="header2"><?php echo (__('Lista de Beneficiarios',true));?></h4>
		<?php echo $this->Element('agregar'); ?>
		<?php echo $this->Element('buscador', array('elementos'=>$elementos,'url' => 'index')); ?>
		<table class="striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.dni',__('N° D.N.I.', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.firstname',__('NOMBRES', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.appaterno',__('APELLIDO PATERNO', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.apmaterno',__('APELLIDO MATERNO', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.address',__('DIRECCIÓN', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.email',__('CORREO ELECTRONICO', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.arbubigeo_id',__('CÓDIGO UBIGEO', true)); ?></th>
					<th><?php echo $this->Paginator->sort('Arbpeoplepublic.status',__('ESTADO', true)); ?></th>
					<th class="actions"><?php echo __('ACCIONES',true); ?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($arbpeoplepublics as $arbpeoplepublic): ?>
			<tr>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['dni']); ?>&nbsp;</td>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['firstname']); ?>&nbsp;</td>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['appaterno']); ?>&nbsp;</td>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['apmaterno']); ?>&nbsp;</td>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['address']); ?>&nbsp;</td>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['email']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($arbpeoplepublic['Arbubigeo']['id'], array('controller' => 'arbubigeos', 'action' => 'view', $arbpeoplepublic['Arbubigeo']['id'])); ?>
				</td>
				<td><?php echo h($arbpeoplepublic['Arbpeoplepublic']['status']); ?>&nbsp;</td>
				<td class="actions" style="width: 100px">
					<?php
					$id = $arbpeoplepublic['Arbpeoplepublic']['id'];
					$name = $arbpeoplepublic['Arbpeoplepublic']['firstname'].' '.$arbpeoplepublic['Arbpeoplepublic']['appaterno'].' '.$arbpeoplepublic['Arbpeoplepublic']['apmaterno'] ;
					$status = $arbpeoplepublic['Arbpeoplepublic']['status'];
						echo $this->element('action', array('id'=>$id, 'name'=>$name,'estado'=>$status));
						echo $this->Html->link('<i class="mdi-action-print" title ="Imprimir Reporte"></i>', array('action' => 'generate_payment_report', $id), array('escape'=>false));
						?>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
		</table>
		<?php echo $this->element('paginador'); ?>
	</div>
</div>
