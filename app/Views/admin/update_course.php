<?= $this->extend('layouts/adminlayout') ?>
<?= $this->section('content') ?>

<?php
//flash messages
if ($this->session->flashdata('flash_message')) {
    if ($this->session->flashdata('flash_message') == 'updated') {
        echo '<div class="alert alert-success">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Well done!</strong> Course updated with success.';
        echo '</div>';
    } else {
        echo '<div class="alert alert-error">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Oh snap!</strong>  Course could not be updated with success';
        echo '</div>';
    }
}
?>


<fieldset>
    <div class="control">
        <label for="inputError" class="control-label">Course title</label>
        <div class="controls">
            <input type="text" id="" name="	course_title" value="<?php echo $course_title[0]['course_title']; ?>">

        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Dimension</label>
        <div class="controls">
            <input type="text" id="dimension" name="dimension" value="<?php echo $dimension[0]['dimension']; ?>">
        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Desc</label>
        <div class="controls">
            <input type="text" id="desc" name="	desc" value="<?php echo $desc[0]['desc']; ?>">
        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label"> Date of birth</label>
        <div class="controls">
            <input type="text" id="dob" name="	dob" value="<?php echo $dob[0]['dob']; ?>">

        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Number of Levels</label>
        <div class="controls">
            <input type="text" id="number_of_levels" name="	number_of_levels" value="<?php echo $number_of_levels[0]['number_of_levels']; ?>">

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