<?= $this->extend('layouts/adminlayout') ?>
<?= $this->section('content') ?>


<?php
//flash messages
if ($this->session->flashdata('flash_message')) {
    if ($this->session->flashdata('flash_message') == 'updated') {
        echo '<div class="alert alert-success">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Well done!</strong> Level updated with success.';
        echo '</div>';
    } else {
        echo '<div class="alert alert-error">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Oh snap!</strong>  Level could not be updated with success';
        echo '</div>';
    }
}
?>


<fieldset>
    <div class="control">
        <label for="inputError" class="control-label"> Level_title</label>
        <div class="controls">
            <input type="text" id="level_title" name="level_title" value="<?php echo $level_title[0]['level_title']; ?>">

        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label">Content</label>
        <div class="controls">
            <input type="text" id="content" name="content" value="<?php echo $content[0]['content']; ?>">
        </div>
    </div>

    <div class="control">
        <label for="inputError" class="control-label"> Level requirement</label>
        <div class="controls">
            <input type="text" id="	level_requirement" name="level_requirement" value="<?php echo $level_requirement[0]['level_requirement']; ?>">
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