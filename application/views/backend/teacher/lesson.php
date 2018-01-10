<!-- <?php print_r($lesson) ?> -->
<!-- <?php echo $param1 ?> -->
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('Lesson');?></h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
  		    <li><a href="<?php echo base_url(); ?>index.php?admin/admin_dashboard"><?php echo get_phrase('Dashboard');?></a></li>
            <li><a href="<?php echo base_url(); ?>index.php?admin/class_list" ><?php echo get_phrase('Subjects');?></a></li>
            <li><a  class="active" ><?php echo get_phrase('Lesson');?></a></li>
        </ol>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<di class="row">
	<?php foreach ($lesson as $key) { 
    $homework = $this->db->get_where('homework' , array('lesson_id' => $key['id_lesson']))->row(); 
		$files = $this->db->get_where('file_lesson' , array('id_lesson' => $key['id_lesson']))->result_array();
	?>
	<div class="col-md-4">
    <div class="card">
      <div class="card-image">
        <span class="card-title" style="width:100%; background: rgba(1, 192, 200, 0.42);">Pekan <?= $key['week']?> - <?php echo $key['name'] ?></span>
      </div>
      <div class="card-content">
        <?php if (count($files)==0) { ?>
        <p> Belum Ada File</p>
        <?php }else{?>
        <table class="table table-striped">
        	<thead>
        		<tr>
	        		<th>File</th>
	        		<th>Delete</th>
	        	</tr>
        	</thead>
        	<tbody> 
        	<?php foreach ($files as $keyFiles ) {?>
        	<tr>
        		<td><a href="<?php echo $keyFiles['url'] ?>"><?php echo $keyFiles['name_file'] ?></a></td>
        		<td><a href="<?php echo base_url(); ?>index.php?teacher/delete_file_lesson/<?php echo $keyFiles['id_file_lesson']?>/<?php  echo $param1 ?>"> <i class="fa fa-times" aria-hidden="true"></i> </a></td>
        	</tr>
        	<?php } ?>
        	</tbody>
        </table>
        <?php } ?>
      </div>
      <div class="card-action">
      	<?php if (count($files)==0) { ?>
        <a href="<?php echo base_url(); ?>index.php?teacher/upload_file_lesson/<?php echo $key['id_lesson']?>">Upload File</a>
        <?php } else{?>
          <a href="<?php echo base_url(); ?>index.php?teacher/upload_file_lesson/<?php echo $key['id_lesson']?>">Tambah File</a>
        <?php } ?>
        <?php if (empty($homework)) { ?>
          <a href="<?php echo base_url(); ?>index.php?teacher/homework_add/<?php echo $param1 ?>/<?php echo $key['id_lesson']?>">Tambah Tugas</a>
        <?php } else{?>
          <a href="<?php echo base_url(); ?>index.php?teacher/homework_bridge_detail/<?php echo $key['id_lesson']?>">Lihat Tugas</a>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php } ?>

</di>