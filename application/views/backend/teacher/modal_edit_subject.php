
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
                <?php echo form_open(base_url() . 'index.php?teacher/subject/do_update/'.$param2 , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <br>
                <div class='form-group'>
                    <label class='col-sm-4 control-label'><?php echo get_phrase('Subject'); ?></label>
                    <div class='col-sm-5 controls'>
                        <input type='text' class='form-control' readonly name='name' value='<?php echo $row['name'];?>'/>
                    </div>
                </div>
                <div class='form-group' id='first'>
                    <label class='col-sm-4 control-label'><?php echo  $param2;?></label>
                    <div class='col-sm-5 controls'>
                        <input type='text' class='form-control' id="banyak" />
                    </div>
                </div>

                            
                <div id="add_input"></div>
                <div class='form-group'>
                    <div class='col-sm-offset-3 col-sm-5'>
                        <a href='javascript:void(0)' id='add' class='btn btn-info' >Add</a>
                        <button type='submit' class='btn btn-info'><?php echo get_phrase('Update'); ?></button>
                    </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
<script type='text/javascript'>
    $(document).ready(function(){
        var i=1;
        var string = "<div class='form-group' id='first'><label class='col-sm-4 control-label'> Lesson ";
        $('#add').click(function(){
            // console.log($('#banyak').val());

            for (var i = 0; i < $('#banyak').val(); i++) {
                // Things[i]
                $('#add_input').append("<div class='form-group' id='first'><label class='col-sm-4 control-label'> Lesson "+(i+1)+"</label><div class='col-sm-5 controls'><input type='text' class='form-control' name='lesson[]'/></div></div>");
            }

            $('#banyak').prop('readonly', true);
            $('#add').remove();
            
        })

    })
</script>




