<?php use Cygnite\AssetManager\Asset; ?>

<div style="float:right;margin-right:47px; margin-bottom: 10px;margin-top: 10px;">
<?php echo Asset::link('products', 'Back', array('class' => 'btn btn btn-info')); ?>
</div>

<div style="color:#FF0000;">
<?php echo $this->validation_errors; ?>
</div>

<div style="float:left;">
<?php echo $this->form; ?>
</div>