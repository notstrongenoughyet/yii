<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    
?>

<div class="comingsoon">
    <img src="<?php echo $this->BASEURL?>/assets/img/coming_soon.gif">
</div>

<div class="index_form">
<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'top-websites-cr-form',
        'enableAjaxValidation'=>false,
        'clientOptions' => array(
      'validateOnSubmit'=>false,
      'validateOnChange'=>false,
      'validateOnType'=>false,
         ),
)); ?>

    <?php echo $form->errorSummary($model); ?>
 
    <div class="row1">
        <?php echo $form->label($model,'username'); ?>
        <?php echo $form->textField($model,'username') ?>
    </div>
 
    <div class="row1">
        <?php echo $form->label($model,'password'); ?>
        <?php echo $form->passwordField($model,'password') ?>
    </div>
 
    <div class="row1 rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
    </div>
 
    <div class="row1 submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div>


