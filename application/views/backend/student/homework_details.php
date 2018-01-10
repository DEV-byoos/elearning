<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<?php 
    $current_homework = $this->db->get_where('homework' , array(
        'homework_code' => $homework_code
    ))->result_array();
    $homework = $this->db->get_where('homework' , array('homework_code' => $homework_code))->row()->homework_id;

    $files = $this->db->get_where('homework_student' , array('homework_id' => $homework, 'student_id'=>$this->session->userdata('student_id')))->row();

    foreach ($current_homework as $row):
        $subject_id = $this->db->get_where('lesson', array('id_lesson'=> $row['lesson_id']))->row()->id_subject;
        // echo $subject_id; 
        // print_r($row);

?>
<div class="col-md-9">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title"><font color="white"><?php echo get_phrase('Details'); ?></font></div> 
        </div>
        <div class="panel-body">
            <p align="justify">
            <?php echo $row['description'];?>
            </p>
            <hr/>
            <p style="font-size: 10px;">
                <span class="badge badge-info badge-roundless"><?php echo get_phrase('you-have-until'); ?>:</span> <span class="badge badge-danger badge-roundless"><?php echo $row['time_end'];?></span> <span class="badge badge-info badge-roundless"><?php echo get_phrase('to-deliver-this-task'); ?>.</span> 
                  <hr/>
                <?php echo get_phrase('File'); ?><i class="entypo-download"></i>
                    <a href="<?php echo base_url() . 'uploads/homework/' . $row['file_name']; ?>" class="">
                    <?php echo $row['file_name']; ?></a>
            </p>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="panel panel-warning" data-collapsed="0">
        <div class="panel-heading">
            <div class="panel-title">
                <font color="white"><i class="fa fa-graduation-cap"></i> <?php echo get_phrase('Information'); ?></font>
            </div>
        </div>
        <div class="panel-body">
        <?php echo get_phrase('Class'); ?>: <?php echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?> <br><?php echo get_phrase('Section'); ?>: <?php echo $this->crud_model->get_type_name_by_id('section',$row['section_id']);?><br><?php echo get_phrase('Subject'); ?>: <?php echo $this->crud_model->get_type_name_by_id('subject',$subject_id);?>
        </div>
    </div>
</div>


<div class="col-md-9">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title"><font color="white"><?php echo get_phrase('Upload File'); ?></font></div> 
        </div>
    <!-- form -->
    <div class="panel-body">
    <?php if (!empty($files)){ ?>
        File : <a href="<?php echo $files->url ?>"><?php echo $files->name; ?></a>
    <?php }else{ ?>
        <?php if(date('d-m-Y') < $row['time_end']){?>
        <?php echo form_open(base_url() . 'index.php?student/homework_upload/'.$homework_code , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="form-group">
                <label class="col-sm-3 control-label"><?php echo get_phrase('File'); ?></label>
                <div class="col-sm-8">
                    <input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> <?php echo get_phrase('Search'); ?>" />
                </div>
            </div>
            <br>
             <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <button type="submit" class="btn btn-info" id="submit-button">
                      <?php echo get_phrase('Send'); ?></button>
                    <span id="preloader-form"></span>
                </div>
            </div>
        <?php echo form_close();?>
        <?php } else {echo "Maaf Anda Telat <br> <br> <br>"; }?>
    <?php } ?>
    </div>    
    <!-- <hr> -->
               
    </div>
</div>
<?php endforeach;?>