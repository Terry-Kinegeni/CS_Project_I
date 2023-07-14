<?= $this->extend('layouts/adminlayout') ?>
<?= $this->section('content') ?>


<?php
//flash messages
if ($this->session->flashdata('flash_message')) {
    if ($this->session->flashdata('flash_message') == 'updated') {
        echo '<div class="alert alert-success">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Well done!</strong> Account updated with success.';
        echo '</div>';
    } else {
        echo '<div class="alert alert-error">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Oh snap!</strong>  Account could not be updated with success';
        echo '</div>';
    }
}
?>


<fieldset>
    <div class="control">
        <label for="inputError" class="control-label">First name</label>
        <div class="controls">
            <input type="text" id="" name="	first_name" value="<?php echo $first_name[0]['first_name']; ?>">
            <!--<span class="help-inline">Woohoo!</span>-->
        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Last name</label>
        <div class="controls">
            <input type="text" id="" name="	last_name" value="<?php echo $last_name[0]['last_name']; ?>">
            <!--<span class="help-inline">Woohoo!</span>-->
        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Gender</label>
        <div class="controls">
            <input type="text" id="" name="	gender" value="<?php echo $gender[0]['gender']; ?>">

        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label"> Date of birth</label>
        <div class="controls">
            <input type="date" id="" name="	dob" value="<?php echo $dob[0]['dob']; ?>">

        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Email</label>
        <div class="controls">
            <input type="email" id="" name="email" value="<?php echo $email[0]['email']; ?>">

        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Password</label>
        <div class="controls">
            <input type="text" id="" name="	password" value="<?php echo $password[0]['password']; ?>">

        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-primary" type="submit">Save changes</button>
        <button class="btn" type="reset">Cancel</button>
    </div>
</fieldset>

<?php //echo form_close(); 
?>

</div>



<?= $this->endSection() ?>