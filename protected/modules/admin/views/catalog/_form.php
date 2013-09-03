<?php Yii::import('admin_ext.chosen.Chosen'); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'flowers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля помеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'discount_price',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'desc',array('maxlength'=>255)); ?>

	<div>
		<?php
			echo CHtml::label('Категории', 'category');
			echo Chosen::multiSelect('category', CHtml::listData($model->categories, 'name', 'id'), Category::getList());
		?>
	</div>

	<div>
		<?php
			echo CHtml::label('Повод', 'reasons');
			echo Chosen::multiSelect('reasons', CHtml::listData($model->reasons, 'name', 'id'), Reasons::getList());
		?>
	</div>

	<div>
		<?php
			echo CHtml::label('Цветы', 'flowers');
			echo Chosen::multiSelect('flowers', CHtml::listData($model->flowers, 'name', 'id'), Flowers::getList());
		?>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
