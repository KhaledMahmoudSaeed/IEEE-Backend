<?php
/**
 * @var $model \app\core\User 
 */
?>
<h1> Login in </h1> <?php $form = \app\core\form\Form::begin('', "post"); ?>

<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordfield() ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\form\Form::end() ?>