<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-form',
	'action' => '/site/order',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
    'clientOptions' => array(
        'validateOnSubmit'=>true,
        'validateOnChange'=>true,
        'validateOnType'=>false,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fio'); ?>
		<?php echo $form->textField($model,'fio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php
			$this->widget('CMaskedTextField', array(
				'model' => $model,
				'attribute' => 'phone',
				'mask' => '+7 (999) 999-99-99',
				'htmlOptions' => array('size' => 18)
			));
		?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_order'); ?>
		<?php echo $form->textField($model,'date_order'); ?>
		<?php echo $form->error($model,'date_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'msg'); ?>
		<?php echo $form->textField($model,'msg',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'msg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_type'); ?>
		<?php echo $form->radioButtonList($model, 'pay_type', Orders::$types);?>
		<?php echo $form->error($model,'pay_type'); ?>
	</div>

	<div class="row">
		
	</div>
	
	<?php echo CHtml::hiddenField('good', 0, array('class' => 'good-id'));?>
	<?php echo $form->hiddenField($model, 'status', array('value' => 1));?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Оформить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->