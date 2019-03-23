<?php echo $this->Session->flash();?>

<div class="row">
<div class="col s12 m12 112">
<h4 class="header2"><?php echo (__('Docentes',true));?></h4>		
			
	<?php echo $this->Element('agregardocente'); ?>
				
	<?php echo $this->Element('buscador', array('elementos'=>$elementos,'url' => 'indexdocente')); ?>

<table class="striped">
	<thead>
		<tr>	
			<th><?php echo $this->Paginator->sort('Secperson.appaterno',__('apellidoNombre', true));?></th>
			<th><?php echo $this->Paginator->sort('Secperson.username',__('usuario', true));?></th>		
			<th><?php echo $this->Paginator->sort('Secperson.status',__('status', true));?></th>
			<th class="actions"><?php echo __('acciones',true);?></th>
		</tr>		
	</thead>	
	<tbody>
		<?php foreach ($secpeople as $secperson):?>
		<tr>		
		<td>
			<?php echo $secperson['Secperson']['appaterno'].' '.$secperson['Secperson']['apmaterno'].', ',$secperson['Secperson']['firstname']; ?>		
		</td>
		<td class="textc">
			<?php echo $secperson['Secperson']['username']; ?>
		</td>
		<td class="textc">
			<?php echo $secperson['Secperson']['status'] == 'AC' ? 
							__('Enable',true)
						:
							($secperson['Secperson']['status'] == 'DE'?
								__('Disable',true)
							:
								__('Limited',true))
						; ?>
		</td>		
			<td class="actions" style="width: 100px">
				<?php echo $this->element('actiondocente', 
								array('id'=>$secperson['Secperson']['id'], 
										'name'=>$secperson['Secperson']['appaterno'],
										'estado'=>$secperson['Secperson']['status']));					
				?>										
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php //echo $this->Paginator->options(array('url' => 'buscador:'.isset($this->request->data['Buscar']['buscador']).'/valor:'.isset($this->request->data['Buscar']['valor'])).'/desactivo:'.isset($this->request->data['Buscar']['desactivo'])); ?>
<?php echo $this->element('paginador'); ?>
</div>
</div>
