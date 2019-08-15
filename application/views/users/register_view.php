<h2>Register</h2>

<?php $attributes = ['id' => 'register_form', 'class' => 'form_horizontal'];?>

<?php if($this->session->flashdata('errors')):?>
	<?php echo $this->session->flashdata('errors');?>
<?php endif;?>

<?php echo form_open('users/register', $attributes);?>

    <div class="form-group">
    <?php echo form_label('First Name');?>
    <?php
    $data = [
        'class' => 'form-controller',
        'name' => 'first_name',
        'placeholder' => 'enter First Name',
    ];
    ?>
    <?php echo form_input($data);?>
    </div>


    <div class="form-group">
    <?php echo form_label('Last Name');?>
    <?php
    $data = [
        'class' => 'form-controller',
        'name' => 'last_name',
        'placeholder' => 'enter user Last Nameword',
    ];
    ?>
    <?php echo form_input($data);?>
    </div>


    <div class="form-group">
    <?php echo form_label('Email');?>
    <?php
    $data = [
        'class' => 'form-controller',
        'name' => 'email',
        'placeholder' => 'confirm user Email',
    ];
    ?>
    <?php echo form_input($data);?>
    </div>

    <div class="form-group">
    <?php echo form_label('User Name');?>
    <?php
    $data = [
        'class' => 'form-controller',
        'name' => 'user_name',
        'placeholder' => 'confirm User Name',
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
        'placeholder' => 'confirm user Password',
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
        'placeholder' => 'confirm user Confirm Password',
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
