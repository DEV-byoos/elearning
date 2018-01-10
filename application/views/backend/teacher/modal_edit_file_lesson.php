<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-info' data-collapsed='0'>
            <div class='panel-heading'>
                <div class='panel-title' >
                    <i class='entypo-plus-circled'></i>
                    <font color='white'><?php echo get_phrase('Edit'); ?></font>
                </div>
            </div>
            <div class='panel-body'>
                <?php echo form_open(base_url() . 'index.php?teacher/upload_file_lesson/do_update/'.$param2 , array('class' => 'form-horizontal form-groups-bordered validate'));?>
                <br>
                <div class='form-group'>
                    <label class='col-sm-4 control-label'><?php echo get_phrase('Nama File'); ?></label>
                    <div class='col-sm-5 controls'>
                        <input type='text' class='form-control' name='name' value='<?php echo $this->db->get_where('file_lesson' , array('id_file_lesson' => $param2))->row()->name_file?>'/>
                    </div>
                </div>
                <div class='form-group' id='first'>
                    <label class='col-sm-4 control-label'>File</label>
                    <div class='col-sm-5 controls'>
                        <input type='file' name='file_name[]' class='form-control file2 inline btn btn-primary' />
                    </div>
                </div>

                            
                <div id="add_input"></div>
                <div class='form-group'>
                    <div class='col-sm-offset-3 col-sm-5'>
                        <button type='submit' class='btn btn-info'><?php echo get_phrase('Update'); ?></button>
                    </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>