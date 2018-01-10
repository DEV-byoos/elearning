<?php 
// $edit_data  =   $this->db->get_where('lesson' , array('id_subject' => $param2) )->result_array();
// print_r($edit_data);        
$file_data =$this->db->get_where('file_lesson',array('id_lesson' => $param2) )->result_array(); ?>
 <!-- // $query = $this->db->get('file_lesson')->result_array(); -->

<!-- // print_r($query); -->
<table class="table table-bordered datatable" id="table_export">
<thead>
                        <tr>
                  <!--           <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <font color="white"><?php echo get_phrase('Edit'); ?></font>

                </div> -->
                            <th  bgcolor="#03a9f3"  style="text-align: center;"><font color="#fff"><div><?php echo get_phrase('File Materi'); ?></div></font></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1; foreach($file_data as $row):?>
                            <tr>
                        <td style="text-align : center;"><a href="<?php echo $row['url']?>"> <?php echo $row['name_file'];?> </a></td>
                        </tr>
                    </tbody>
                
            <?php
             endforeach;
            ?>
            </table>




