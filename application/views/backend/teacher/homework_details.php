<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<?php 
	$current_homework = $this->db->get_where('homework' , array(
		'homework_code' => $homework_code
	))->result_array();
	foreach ($current_homework as $row):
        $subject_id = $this->db->get_where('lesson', array('id_lesson'=> $row['lesson_id']))->row()->id_subject;
?>

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
            <div class="panel panel-info">
            <div class="panel-heading">
            <div class="panel-title">
                <font color="white"><i class="fa fa-graduation-cap"></i> <?php echo get_phrase('Students'); ?></font>
            </div>
        </div>
            <div class="panel-body">
        <?php $students   =   $this->db->get_where('enroll' , array('class_id' => $row['class_id'], 'section_id' => $row['section_id'] , 'year' => $running_year))->result_array();
                    foreach($students as $row2):?>
                                <table width="100%" border="0">
                                    <tr>
                                        <td rowspan="2" width="60">
                                            <img src="<?php echo $this->crud_model->get_image_url('student', $row2['student_id']); ?>" 
                                                 alt="" class="img-circle" width="30">
                                     </td>
                                  <td>
                                 <h4><?php echo $this->db->get_where('student' , array('student_id' => $row2['student_id']))->row()->name; ?></h4>
                             </td>
                          </tr>
                       </table>
                    <?php endforeach;?>
                <br>
            </div>
        </div>
</div>


<div class="col-md-7">
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
                <span class="badge badge-info badge-roundless"><?php echo get_phrase('Last-day-delivery'); ?>:</span> <span class="badge badge-danger badge-roundless"><?php echo $row['time_end'];?></span>
                  <hr/>
                <?php echo get_phrase('File');?><i class="fa fa-download"></i>
                    <a href="<?php echo base_url() . 'uploads/homework/' . $row['file_name']; ?>" class="">
                    <?php echo $row['file_name']; ?></a>
            </p>
        </div>
    </div>
</div>

<div class="col-md-3">
</div>
<div class="col-md-7">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title"><font color="white"><?php echo get_phrase('Yang sudah upload'); ?></font></div> 
        </div>
        <div class="panel-body">
            
             <table class="table table-bordered datatable" id="table_export">
                    <thead>                            
                        <tr>
                            <!-- <th style="text-align: center;"><div><?php echo get_phrase('Class'); ?></div></th> -->
                            <th style="text-align: center;"><div><?php echo get_phrase('Student Name'); ?></div></th>
                            <!-- <th style="text-align: center;"><div><?php echo get_phrase('Teacher'); ?></div></th> -->
                            <th style="text-align: center;"><div><?php echo get_phrase('File'); ?></div></th>
                            <!-- <th style="text-align: center;"><div><?php echo get_phrase('Homework'); ?></div></th> -->
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                            $student = $this->db->get_where('homework_student' , array('homework_id' => $row['homework_id']))->result_array();
                      ?>
                        <?php foreach($student as $les) : ?> 
                        <tr>                        
                            <td style="text-align: center;"><?php echo $this->db->get_where('student', array('student_id'=> $les['student_id']))->row()->name; ?></td>
                            <td style="text-align: center"> <a href="<?php echo $les['url'] ?>"><?php echo $les['name'] ?> </a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>  
                </table>



        </div>
    </div>
</div>
<?php endforeach;?>






