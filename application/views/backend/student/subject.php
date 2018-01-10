<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('Subjects'); ?></h4> 
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php?student/student_dashboard"><?php echo get_phrase('Dashboard'); ?></a></li>
            <li class="active"><?php echo get_phrase('Subjects'); ?></li>
        </ol>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
	<div class="white-box">
		<div class="tab-content">            
            <div class="tab-pane box active" id="list">
                <?php $count = 0; foreach ($subjects as $row) : ?>
                <h2><?= $row['name'] ?> - <?php echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></h2>


                <table class="table table-bordered datatable" id="table_export">
                    <thead>                            
                        <tr>
                            <!-- <th style="text-align: center;"><div><?php echo get_phrase('Class'); ?></div></th> -->
                            <th style="text-align: center;"><div><?php echo get_phrase('Lesson'); ?></div></th>
                            <!-- <th style="text-align: center;"><div><?php echo get_phrase('Teacher'); ?></div></th> -->
                            <th style="text-align: center;"><div><?php echo get_phrase('File'); ?></div></th>
                            <th style="text-align: center;"><div><?php echo get_phrase('Homework'); ?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $lessons = $this->db->get_where('lesson', array('id_subject' => $row['subject_id']))-> result_array(); ?>
                        <?php foreach($lessons as $les) :
                            $homework = $this->db->get_where('homework', array('lesson_id' => $les['id_lesson'], 'section_id'=>$section_id))->row();
                         ?>
                        <tr>
                            <!-- <td style="text-align: center;"><?php echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?></td> -->
                            <td style="text-align: center;"><?php echo $les['name']; ?></td>
                            <!-- <td style="text-align: center;"><?php echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></td> -->
                            <td style="text-align: center;" class="text-nowrap"><a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_subject/<?php echo $les['id_lesson'];?>');" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-eye" aria-hidden="true"></i> </a></td>
                            
                            <td style="text-align: center;" class="text-nowrap"><a href="<?php echo count($homework) > 0 ? base_url().'index.php?student/homeworkroom/details/'.$homework->homework_code  : "#"?>"><?php echo count($homework) > 0 ? "Tugas Anda " : "Tidak Ada Tugas"?></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>  
                </table>
                <?php ++$count; endforeach;?>
			</div>            
		</div>
	</div>
</div>
</div>