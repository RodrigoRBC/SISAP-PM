<?php
	echo $this->Html->script('plugins/jquery.min.js');
	echo $this->Html->script('materialize.min.js');
?>
<?php $this->Session->flash();?>
<div class="row">

	<div class="col s12 m12 112">
		<div class="card-panel">
			<div class="row">
				<!-- {Start-Form} -->
				<?php echo $this->Form->create('DNI',array('class'=>'col s12'));?>
				<div class="row">
					<!-- {Start-Field} -->
					<!-- ***init-1***   -->
					<div class="input-field col s7" >
					</div>
					<!-- ***Off-1***   -->
						<!-- ***init-2***   -->
						<div class="input-field col s3" >
							<!-- {Input-Type} -->
							<?php echo $this->Form->text('dni', array());?>
							<!-- {Input-Label} -->
								<label for="ArbpeoplepulicArbrateFecha"><?php echo __('N° D.N.I.'); ?></label>
						</div>
						<!-- ***Off-2***   -->

						<!-- {Input-Botton} -->
						<div class="input-field col s2">
							<?php echo $this->Form->button(__('Buscar'), array('type'=>'button','div'=>false,'class'=>'mdi-action-search waves-effect waves-light btn','id'=>'MiBoton'));	?>
						</div>
					<!-- {End-Field} -->
				</div>
				<?php echo $this->Form->end(); ?>
				<!-- {End-Form} -->

			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 112">
		<div class="card-panel">
			<h4 class="header2"><?php echo __('Beneficiario');?></h4>
			<div class="row">
				<!-- {Start-Form} -->
				<?php echo $this->Form->create('ArbpeoplepulicArbrate',array('class'=>'col s12'));?>

				<div class="row">
					<!-- {Start-Field} -->
						<!-- ***init-1***   -->
						<div class="input-field col s12" >
							<!-- {Input-Type} -->
							<?php
								echo $this->Form->select('arbpeoplepublic_id', array(),array('empty' => 'Seleccione..'),false);
							?>
							<!-- {Input-Label} -->
								<label for="ArbpeoplepulicArbrateArbpeoplepublicId"><?php echo __('Beneficiario').'*'; ?></label>
							<!-- {Input-Error} -->
							<?php echo $this->Form->error('arbpeoplepublic_id', array(
															   	'notEmpty' =>  __('personaNombreNoVacio', true),
																'maxLength' =>  __('personaNombreLongitud', true),
																), array('class' => 'input text required error'));?>
							<!-- {Input-Label} -->
						</div>
						<!-- ***Off-1***   -->

						<!-- ***init-2***   -->
						<div class="input-field col s12" >
							<!-- {Input-Type} -->
							<?php echo $this->Form->select('arbrate_id',array($arbrates),array('empty' => 'Seleccione..'),false);?>
							<!-- {Input-Error} -->
							<?php echo $this->Form->error('arbrate_id', array(
																	'notEmpty' =>  __('personaNombreNoVacio', true),
																'maxLength' =>  __('personaNombreLongitud', true),
																), array('class' => 'input text required error'));?>
							<!-- {Input-Label} -->
								<label for="ArbpeoplepulicArbrateArbrateId"><?php echo __('Tasa').'*'; ?></label>
						</div>
						<!-- ***Off-2***   -->

						<!-- ***init-3***   -->
						<div class="input-field col s12" >
							<!-- {Input-Type} -->
							<?php echo $this->Form->text('fecha', array('class' =>'datepicker'));?>
							<!-- {Input-Error} -->
							<?php echo $this->Form->error('fecha', array(
																	'notEmpty' =>  __('personaNombreNoVacio', true),
																'maxLength' =>  __('personaNombreLongitud', true),
																), array('class' => 'input text required error'));?>
							<!-- {Input-Label} -->
								<label for="ArbpeoplepulicArbrateFecha"><?php echo __('Fecha').'*'; ?></label>
						</div>
						<!-- ***Off-3***   -->

						<!-- ***init-4***   -->
						<div class="input-field col s12" >
							<!-- {Input-Type} -->
							<?php echo $this->Form->textarea('description',array('id' =>'description','class'=>"materialize-textarea"));?>
							<!-- {Input-Error} -->
							<?php echo $this->Form->error('description', array(
																	'notEmpty' =>  __('personaNombreNoVacio', true),
																'maxLength' =>  __('personaNombreLongitud', true),
																), array('class' => 'input text required error'));?>
							<!-- {Input-Label} -->
								<label for="ArbpeoplepulicArbrateDescription"><?php echo __('Descripción').'*'; ?></label>
						</div>
						<!-- ***Off-4***   -->

						<!-- {Input-Botton} -->
						<div class="input-field center col s12">
							<?php echo $this->Form->submit(__('Submit'), array('div'=>false,'class'=>'waves-effect waves-light btn'));	?>
							<?php  echo $this->Html->link(__('cerrar'),'index',array('class'=>'waves-effect waves-light btn')); ?>
						</div>
					<!-- {End-Field} -->
				</div>
				<?php echo $this->Form->end(); ?>
				<!-- {End-Form} -->
			</div>
		</div>
	</div>
</div>

<!--
<div class="arbpeoplepulicArbrates form">
<? // php echo $this->Form->create('ArbpeoplepulicArbrate'); ?>
	<fieldset>
		<legend><?php //echo __('Add Arbpeoplepulic Arbrate'); ?></legend>
	<?php
		// echo $this->Form->input('arbpeoplepublic_id');
		// echo $this->Form->input('arbrate_id');
		// echo $this->Form->input('fecha');
		// echo $this->Form->input('period');
		// echo $this->Form->input('description');
		// echo $this->Form->input('creationdate');
		// echo $this->Form->input('status');
		// echo $this->Form->input('Secperson');
	?>
	</fieldset>
<?php //echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Arbpeoplepulic Arbrates'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Arbpeoplepublics'), array('controller' => 'arbpeoplepublics', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Arbpeoplepublic'), array('controller' => 'arbpeoplepublics', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Arbrates'), array('controller' => 'arbrates', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Arbrate'), array('controller' => 'arbrates', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Secpeople'), array('controller' => 'secpeople', 'action' => 'index')); ?> </li>
		<li><?php// echo $this->Html->link(__('New Secperson'), array('controller' => 'secpeople', 'action' => 'add')); ?> </li>
	</ul>
</div>

-->
<script type="text/javascript" >
	$(document).ready(function(){
		$("#MiBoton").click(function(){
			$dni = $('#DNIDni').val();
			$.ajax({
				// la URL para la petición
				url : 'json_search',
				// la información a enviar
				data : {'data[DNI][dni]' : $dni },
				// especifica si será una petición POST o GET
				type : 'POST',
				// el tipo de información que se espera de respuesta
				dataType : 'json',
				// código a ejecutar si la petición es satisfactoria;
				success : function(json) {
					$.each(json.data,function(key, registro) {
		        $("#ArbpeoplepulicArbrateArbpeoplepublicId").append('<option value='+key+'>'+registro+'</option>');
		      });
				},
				// código a ejecutar si la petición falla
				error : function(xhr, status) {
						alert('Disculpe, existió un problema');
				},
				// código a ejecutar sin importar si la petición falló o no
				complete : function(xhr, status) {
						//alert('Petición realizada');
				}
			});
		});
	});
</script>
