<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('Information Class');?></h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
  		    <li><a href="<?php echo base_url(); ?>index.php?admin/admin_dashboard"><?php echo get_phrase('Dashboard');?></a></li>
            <li><a class="active"><?php echo get_phrase('Teachers');?></a></li>
        </ol>
    </div>
</div>

<div class="tab-content">
		<div class="tab-pane box active" id="list">
          <div class="white-box">
          	<?php $classes = $this->db->get('class')->result_array(); ?>
            <div class="table-responsive">
            <table id="myTable" class="table table-striped">
              <thead>
                <tr>
                	<th style="text-align: center;">No</th>
                  	<th style="text-align: center;"><?php echo get_phrase('Name');?></th>
                  	<th style="text-align: center;"><?php echo get_phrase('Subject');?></th>
                  	<th style="text-align: center;"><?php echo get_phrase('Member');?></th>
                </tr>
              </thead>
              <tbody>
              	<?php 
              	$i=1;
              	foreach ($classes as $key => $value) {?>
              	<tr>
              		<td style="text-align: center;"><?= $i ?></td>
              		<td style="text-align: center;"><?= $value['name']?></td>
              		<td style="text-align: center;"><a href="<?php echo base_url(); ?>index.php?admin/courses/<?php echo $value['class_id']; ?>"><div style="width: 100%"><i class="fa fa-book" aria-hidden="true"></i></div></a></td>
              		<td style="text-align: center;"><a href="<?php echo base_url(); ?>index.php?admin/students_area/<?php echo $value['class_id']; ?>"><div style="width: 100%"><i class="fa fa-users" aria-hidden="true"></i></div></a></td>
              	</tr>
              	<?php 
              	$i++;
              } ?>
              </tbody>
            </table>
            </div>
            </div>
          </div>

<script src="<?php echo base_url();?>style/bower_components/datatables/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
      $('#myTable').DataTable();

    });
  </script>