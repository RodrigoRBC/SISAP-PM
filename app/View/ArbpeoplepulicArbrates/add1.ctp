
<?php $this->Session->flash();?>
<div class="row">
	<div class="col s12 m12 112">
		<div class="card-panel">
			<h4 class="header2"><?php echo __('Beneficiarios');?></h4>
			<div class="row">
				<!-- {Start-Form} -->
				<?php echo $this->Form->create('ArbpeoplepulicArbrate',array('class'=>'col s12'));?>
				<div class="row">
					<!-- {Start-Field} -->
						<!-- ***init-1***   -->
						<div class="input-field col s12" >
							<!-- {Input-Type} -->
							<?php echo $this->Form->select('arbpeoplepublic_id',array($arbpeoplepublics),array('empty' => 'Seleccione..'),false);?>
							<!-- {Input-Error} -->
							<?php echo $this->Form->error('arbpeoplepublic_id', array(
															   	'notEmpty' =>  __('personaNombreNoVacio', true),
																'maxLength' =>  __('personaNombreLongitud', true),
																), array('class' => 'input text required error'));?>
							<!-- {Input-Label} -->
								<label for="ArbpeoplepulicArbrateArbpeoplepublicId"><?php echo __('Beneficiario').'*'; ?></label>
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
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
		$('#description').val('New Text');
	  M.textareaAutoResize($('#description'));

    $('.datepicker').pickadate({
        selectMonths: false, // Creates a dropdown to control month
        selectYears: 200, // Creates a dropdown of 15 years to control year,
        monthsFull: [
            "<?= __d('materialize', 'January') ?>",
            "<?= __d('materialize', 'February') ?>",
            "<?= __d('materialize', 'March') ?>",
            "<?= __d('materialize', 'April') ?>",
            "<?= __d('materialize', 'May') ?>",
            "<?= __d('materialize', 'June') ?>",
            "<?= __d('materialize', 'July') ?>",
            "<?= __d('materialize', 'August') ?>",
            "<?= __d('materialize', 'September') ?>",
            "<?= __d('materialize', 'October') ?>",
            "<?= __d('materialize', 'November') ?>",
            "<?= __d('materialize', 'December') ?>"],
        monthsShort: [
            "<?= __d('materialize', 'Jan') ?>",
            "<?= __d('materialize', 'Fev') ?>",
            "<?= __d('materialize', 'Mar') ?>",
            "<?= __d('materialize', 'Apr') ?>",
            "<?= __d('materialize', 'May') ?>",
            "<?= __d('materialize', 'Jun') ?>",
            "<?= __d('materialize', 'Jul') ?>",
            "<?= __d('materialize', 'Aug') ?>",
            "<?= __d('materialize', 'Sep') ?>",
            "<?= __d('materialize', 'Oct') ?>",
            "<?= __d('materialize', 'Nov') ?>",
            "<?= __d('materialize', 'Dec') ?>"],
        weekdaysFull: [
            "<?= __d('materialize', 'Sunday') ?>",
            "<?= __d('materialize', 'Monday') ?>",
            "<?= __d('materialize', 'Tuesday') ?>",
            "<?= __d('materialize', 'Wednesday') ?>",
            "<?= __d('materialize', 'Thursday') ?>",
            "<?= __d('materialize', 'Friday') ?>",
            "<?= __d('materialize', 'Saturday') ?>"],
        weekdaysShort: [
            "<?= __d('materialize', 'Sun') ?>",
            "<?= __d('materialize', 'Mon') ?>",
            "<?= __d('materialize', 'Tue') ?>",
            "<?= __d('materialize', 'Wed') ?>",
            "<?= __d('materialize', 'Thu') ?>",
            "<?= __d('materialize', 'Fri') ?>",
            "<?= __d('materialize', 'Sat') ?>"],
        weekdaysLetter: [
            "<?= __d('materialize', 'S') ?>",
            "<?= __d('materialize', 'M') ?>",
            "<?= __d('materialize', 'T') ?>",
            "<?= __d('materialize', 'W') ?>",
            "<?= __d('materialize', 'T') ?>",
            "<?= __d('materialize', 'F') ?>",
            "<?= __d('materialize', 'S') ?>"],
        today: "<?= __d('materialize', 'Today') ?>",
        clear: "<?= __d('materialize', 'Clear') ?>",
        close: 'Ok',
        closeOnSelect: true, // Close upon selecting a date,
        format: 'dd/mm/yyyy'
    });

    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: "<?= __d('materialize', 'Clear') ?>", // text for clear-button
        canceltext: "<?= __d('materialize', 'Cancel') ?>", // Text for cancel-button
        format: "HH:ii",
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });




		    $('.datepicker').pickadate({
		        selectMonths: false, // Creates a dropdown to control month
		        selectYears: 200, // Creates a dropdown of 15 years to control year,
		        monthsFull: [
		            "<?= __d('materialize', 'January') ?>",
		            "<?= __d('materialize', 'February') ?>",
		            "<?= __d('materialize', 'March') ?>",
		            "<?= __d('materialize', 'April') ?>",
		            "<?= __d('materialize', 'May') ?>",
		            "<?= __d('materialize', 'June') ?>",
		            "<?= __d('materialize', 'July') ?>",
		            "<?= __d('materialize', 'August') ?>",
		            "<?= __d('materialize', 'September') ?>",
		            "<?= __d('materialize', 'October') ?>",
		            "<?= __d('materialize', 'November') ?>",
		            "<?= __d('materialize', 'December') ?>"],
		        monthsShort: [
		            "<?= __d('materialize', 'Jan') ?>",
		            "<?= __d('materialize', 'Fev') ?>",
		            "<?= __d('materialize', 'Mar') ?>",
		            "<?= __d('materialize', 'Apr') ?>",
		            "<?= __d('materialize', 'May') ?>",
		            "<?= __d('materialize', 'Jun') ?>",
		            "<?= __d('materialize', 'Jul') ?>",
		            "<?= __d('materialize', 'Aug') ?>",
		            "<?= __d('materialize', 'Sep') ?>",
		            "<?= __d('materialize', 'Oct') ?>",
		            "<?= __d('materialize', 'Nov') ?>",
		            "<?= __d('materialize', 'Dec') ?>"],
		        weekdaysFull: [
		            "<?= __d('materialize', 'Sunday') ?>",
		            "<?= __d('materialize', 'Monday') ?>",
		            "<?= __d('materialize', 'Tuesday') ?>",
		            "<?= __d('materialize', 'Wednesday') ?>",
		            "<?= __d('materialize', 'Thursday') ?>",
		            "<?= __d('materialize', 'Friday') ?>",
		            "<?= __d('materialize', 'Saturday') ?>"],
		        weekdaysShort: [
		            "<?= __d('materialize', 'Sun') ?>",
		            "<?= __d('materialize', 'Mon') ?>",
		            "<?= __d('materialize', 'Tue') ?>",
		            "<?= __d('materialize', 'Wed') ?>",
		            "<?= __d('materialize', 'Thu') ?>",
		            "<?= __d('materialize', 'Fri') ?>",
		            "<?= __d('materialize', 'Sat') ?>"],
		        weekdaysLetter: [
		            "<?= __d('materialize', 'S') ?>",
		            "<?= __d('materialize', 'M') ?>",
		            "<?= __d('materialize', 'T') ?>",
		            "<?= __d('materialize', 'W') ?>",
		            "<?= __d('materialize', 'T') ?>",
		            "<?= __d('materialize', 'F') ?>",
		            "<?= __d('materialize', 'S') ?>"],
		        today: "<?= __d('materialize', 'Today') ?>",
		        clear: "<?= __d('materialize', 'Clear') ?>",
		        close: 'Ok',
		        closeOnSelect: true, // Close upon selecting a date,
		        format: 'dd/mm/yyyy'
		    });

		    $('.timepicker').pickatime({
		        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
		        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
		        twelvehour: false, // Use AM/PM or 24-hour format
		        donetext: 'OK', // text for done-button
		        cleartext: "<?= __d('materialize', 'Clear') ?>", // text for clear-button
		        canceltext: "<?= __d('materialize', 'Cancel') ?>", // Text for cancel-button
		        format: "HH:ii",
		        autoclose: false, // automatic close timepicker
		        ampmclickable: true, // make AM PM clickable
		        aftershow: function(){} //Function for after opening timepicker
		    });

				// $("#ArbpeoplepulicArbrateArbpeoplepublicId").on(function(e) {
				//
				//     e.preventDefault(); // avoid to execute the actual submit of the form.
				//
				//     var form = $(this);
				//     var url = form.attr('action');
				//
				//     $.ajax({
				//            type: "POST",
				//            url: url,
				//            data: form.serialize(), // serializes the form's elements.
				//            success: function(data)
				//            {
				//                alert(data); // show response from the php script.
				//            }
				//          });
				//
				//
				// });
				//
				// $.ajax({
				// 		url : 'json_search',
				// 		data : $('#IdDNI').serialize(),
				// 		type : 'post',
				// 		dataType : 'json',
				// 		success : function(json) {
				// 			$('#ArbpeoplepulicArbrateArbpeoplepublicId').val(json);
				// 		},
				// 		error : function(jqXHR, status, error) {
				// 				alert('Disculpe, existió un problema');
				// 		}
				// });

		</script>
		<script type="text/javascript" >
			$(document).ready(function(){
				$("p").click(function(){
			    alert("The paragraph was clicked.");
			  });
				$.ajax({
					url : 'json_search',
					data : $('#IdDNI').serialize(),
					type : 'post',
					dataType : 'json',
					success : function(json) {
						$('#ArbpeoplepulicArbrateArbpeoplepublicId').val(json);
					},
					error : function(jqXHR, status, error) {
						//alert('Disculpe, existió un problema');
					}
				});
			});
</script>
