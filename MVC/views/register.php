<?php
/**
 * @var $model \app\core\User 
 */
?>
<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', "post"); ?>
<div class="row">
    <div class="col"><?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col"><?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordfield() ?>
<?php echo $form->field($model, 'prepassword')->passwordfield() ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\form\Form::end() ?>