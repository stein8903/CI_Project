<h2>Login Form</h2>

<?php $attributes = ['id' => 'login_form', 'class' => 'form_horizontal'];?>

<?php if($this->session->flashdata('errors')):?>
	<?php echo $this->session->flashdata('errors');?>
<?php endif;?>

<?php echo form_open('users/login', $attributes);?>

<div class="form-group">
<?php echo form_label('Username');?>
<?php
$data = [
    'class' => 'form-controller',
    'name' => 'user_name',
    'placeholder' => 'enter user name',
];
?>
<?php echo form_input($data);?>
</div>


<div class="form-group">
<?php echo form_label('Password');?>
<?php
$data = [
    'class' => 'form-controller',
    'name' => 'password',
    'placeholder' => 'enter user password',
];
?>
<?php echo form_input($data);?>
</div>


<div class="form-group">
<?php echo form_label('Confirm Password');?>
<?php
$data = [
    'class' => 'form-controller',
    'name' => 'confirm_password',
    'placeholder' => 'confirm user password',
];
?>
<?php echo form_input($data);?>
</div>


<div class="form-group">
<?php
$data = [
    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Login',
];
?>
<?php echo form_submit($data);?>
</div>

<?php echo form_close();?>