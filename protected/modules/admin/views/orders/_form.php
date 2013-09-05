<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'orders-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'fio',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'date_order',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'msg',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListRow($model,'status', Orders::$statuses); ?>

	<?php echo $form->textFieldRow($model,'date_create',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'pay_type', Orders::$types); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
