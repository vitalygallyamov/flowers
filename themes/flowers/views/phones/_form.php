<?php
/* @var $this PhonesController */
/* @var $model Phones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phones-form',
	'action' => '/phones/create',
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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	<?php echo $form->hiddenField($model,'status'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Заказать'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->