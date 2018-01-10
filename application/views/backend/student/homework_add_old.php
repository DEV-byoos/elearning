<?php 
    $edit_data  =   $this->db->get_where('homework' , array('lesson_id' => $param2))->row();
    $homework_id = $edit_data->homework_id;
    ?>
    <table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th style="text-align: center;"><div><?php echo get_phrase('Deskripsi'); ?></div></th>
            <th style="text-align: center;"><div><?php echo get_phrase('Upload'); ?></div></th>
        </tr>
        <tr>
            <th style="text-align: center;"><div><?php echo get_phrase($edit_data->description); ?></div></th>
            <th style="text-align: center;"><div>
            <?php if(empty($edit_data->file_name)) { ?>
            <?php echo form_open(base_url() . 'index.php?student/homework_upload/'.$homework_id, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
            	<input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> <?php echo get_phrase('Search'); ?>" />
            	<button type="submit" class="btn btn-info"><?php echo get_phrase('Upload');?></button>
            <?php echo form_close(); ?>
            <?php } ?>
        	<?php print_r($edit_data->file_name); ?>
            </div></th>
        </tr>
    </thead>