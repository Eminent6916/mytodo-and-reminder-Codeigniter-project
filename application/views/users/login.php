<h3>Login Form</h3>
<?php if ($this->session->userdata('logged_in')) : ?>
    <p> You are logged in as <?php echo $this->session->userdata('username'); ?></p>
<!-- form start -->
    <?php $attributes = array('id' => 'logout_form','class' => 'form-horizontal'); ?>
    <?php echo form_open('users/logout',$attributes); ?>
    <!-- submit Button -->
    <?php $data = array("value" => "logout",
                "name" => "submit",
                "class" => "btn btn-primary"); ?>
    <?php echo form_submit($data); ?>
    <?php echo form_close(); ?>
<?php else : ?>
    <?php $attributes = array('id' => 'login_form', 'class' => 'form-horizontal'); ?>
<?php echo form_open('users/login',$attributes); ?>

<p>
    <?php echo form_label('Username:'); ?>
    <?php
    $data = array('name'            => 'username', 
                    'placeholder'   => 'Enter your username',
                    'style'         => 'width:90%',
                    'value'         => set_value('username'));

    ?>
    <?php echo form_input($data); ?>
</p>
<p>
    <?php echo form_label('Password:');?>
    <?php
    $data = array('name'            => 'password', 
                    'placeholder'   => 'Enter your password',
                    'style'         => 'width:90%',
                    'value'         => set_value('password'));
    ?>
    <?php echo form_password($data); ?>
</p>
<p>
    <?php
    $data = array('name'            => 'submit', 
                    'placeholder'   => 'Enter your password',
                    'class'         => 'btn btn-primary',
                    'value'         => 'Login');
    ?>
    <?php echo form_submit($data); ?>
</p>

<?php echo form_close(); ?>

<?php endif; ?>