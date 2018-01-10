<div class='row bg-title'>
    <div class='col-lg-3 col-md-4 col-sm-4 col-xs-12'>
        <h4 class='page-title'>Materi - <?php echo $materi ?></h4>
    </div>
    <div class='col-lg-9 col-sm-8 col-md-8 col-xs-12'>
        <ol class='breadcrumb'>
  		    <li><a href='<?php echo base_url(); ?>index.php?teacher/admin_dashboard'><?php echo get_phrase('Dashboard');?></a></li>
            <li><a href='<?php echo base_url(); ?>index.php?teacher/class_list' ><?php echo get_phrase('Subjects');?></a></li>
            <li><a  href='<?php echo base_url(); ?>index.php?teacher/lesson_list/<?php echo $subject_id ?>' ><?php echo get_phrase('Lesson');?></a></li>
        </ol>
    </div>
</div>

<?php echo form_open(base_url() . 'index.php?teacher/upload_file_lesson/create/'.$id_lesson.'/'.$subject_id, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
<div class='row'>
    <div class='col-md-4'>
        <div class='panel panel-info'>
            <div class='panel-heading'>
                <div class='panel-title'  style='display: inline;'>
                    <font color='white'>File 1</font>
                    <!-- <div > -->
                        <i class='fa fa-times-circle text-white fa-lg col-md-offset-10 del'></i>
                    <!-- </div> -->
                 </div>
            </div>
            <br><br>
            <div class='panel-body'>

                <div class='form-group'>
                        <label for='field-2' class='col-sm-3 control-label'>Nama File</label>
                            <div class='col-sm-8'>
                                <input type='text' name='name[]'>
                            </div>
                    </div>

                <div class='form-group'>
                    <label for='field-2' class='col-sm-3 control-label'>Date</label>
                    <div class='col-sm-8'>
                        <input type='date' name='tanggal[]' required>
                    </div>
                </div>

                 <div class='form-group'>
                    <label class='col-sm-3 control-label'><?php echo get_phrase('File'); ?></label>

                    <div class='col-sm-8'>

                        <input type='file' name='file_name[]' class='form-control file2 inline btn btn-primary' />

                    </div>
                </div>
            </div>
        </div>
    </div>
<div id='add_input'></div>
</div>
<button type='submit' class='btn btn-info' id='submit-button'><?php echo get_phrase('Send'); ?></button>
<a href='javascript:void(0)' class='btn btn-info' id='add'> Add</a>
<?php echo form_close(); ?>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript'>
    $(document).ready(function(){
        var i=1;
        
        $('#add').click(function(){
            // console.log($('#banyak').val());
                // Things[i]
                i++; 
                $('#add_input').append("<div class='col-md-4'><div class='panel panel-info'><div class='panel-heading'><div class='panel-title'  style='display: inline;'><font color='white'>File "+i+"</font><!-- <div > --><i class='fa fa-times-circle text-white fa-lg col-md-offset-10 del'></i><!-- </div> --></div></div><br><br><div class='panel-body'><div class='form-group'><label for='field-2' class='col-sm-3 control-label'>Nama File</label><div class='col-sm-8'><input type='text' name='name[]'></div></div><div class='form-group'><label for='field-2' class='col-sm-3 control-label'>Date</label><div class='col-sm-8'><input type='date' name='tanggal[]' required></div></div><div class='form-group'><label class='col-sm-3 control-label'><?php echo get_phrase('File'); ?></label><div class='col-sm-8'><input type='file' name='file_name[]' class='form-control file2 inline btn btn-primary' /></div></div></div></div></div>");
        });

        $('.del').click(function(){
            // console.log($(this).data("id"));
            alert();
        });

    })
</script>