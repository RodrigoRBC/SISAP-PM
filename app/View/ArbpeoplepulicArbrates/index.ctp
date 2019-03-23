<?php echo $this->Session->flash();?>
<div class="row">
	<div class="col s12 m12 112">
		<h4 class="header2"><?php echo (__('Lista de Beneficiarios',true));?></h4>
		<?php echo $this->Element('agregar'); ?>
		<?php echo $this->Element('buscador', array('elementos'=>$elementos,'url' => 'index')); ?>
		<table class="striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('ArbpeoplepulicArbrate.arbpeoplepublic_id',__('Benficiario', true));?></th>
					<th><?php echo $this->Paginator->sort('ArbpeoplepulicArbrate.arbrate_id',__('Tasa', true));?></th>
					<th><?php echo $this->Paginator->sort('ArbpeoplepulicArbrate.fecha',__('Fecha', true));?></th>
					<th><?php echo $this->Paginator->sort('ArbpeoplepulicArbrate.description',__('Descripción', true));?></th>
					<th><?php echo $this->Paginator->sort('ArbpeoplepulicArbrate.status',__('Estado', true));?></th>
					<th><?php echo $this->Paginator->sort('Secperson.status',__('status', true));?></th>
					<th class="actions"><?php echo __('acciones',true);?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($arbpeoplepulicArbrates as $arbpeoplepulicArbrate):?>
				<tr>
					<td>
						<?php echo $this->Html->link($arbpeoplepulicArbrate['Arbpeoplepublic']['id'], array('controller' => 'arbpeoplepublics', 'action' => 'view', $arbpeoplepulicArbrate['Arbpeoplepublic']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($arbpeoplepulicArbrate['Arbrate']['id'], array('controller' => 'arbrates', 'action' => 'view', $arbpeoplepulicArbrate['Arbrate']['id'])); ?>
					</td>
					<td><?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['fecha']); ?>&nbsp;</td>
					<td><?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['period']); ?>&nbsp;</td>
					<td><?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['description']); ?>&nbsp;</td>
					<td><?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['creationdate']); ?>&nbsp;</td>
					<td><?php echo h($arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['status']); ?>&nbsp;</td>
					<td class="actions" style="width: 100px">
						<?php
						$id = $arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['id'];
							echo $this->element('action', array('id'=>$id, 'name'=>$arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['period'],'estado'=>$arbpeoplepulicArbrate['ArbpeoplepulicArbrate']['description']));
							echo $this->Html->link('<i class="mdi-notification-event-note picture_as_pdf" title ="Reporte"></i>', array('action' => 'generate_report_cost', $id), array('escape'=>false));
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?php echo $this->element('paginador'); ?>
	</div>
</div>
