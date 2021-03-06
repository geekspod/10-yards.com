<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Questions Score </h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/questions_score_description" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">
    
        <?php
        if($this->session->flashdata('error')) {
            ?>
            <div class="callout callout-danger">
                <p><?php echo $this->session->flashdata('error'); ?></p>
            </div>
            <?php
        }
        if($this->session->flashdata('success')) {
            ?>
            <div class="callout callout-success">
                <p><?php echo $this->session->flashdata('success'); ?></p>
            </div>
            <?php
        }
        ?>

      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Test Description</th>
			        <th>Test Name</th>
			        <th>Categories Name</th>
			        <th>Sub Categories Name</th>
			        <!--<th>Sub Categories Name</th>-->
			        <th>Min Value</th>
			        <th>Max Value</th>
                    
                    
			        <th>Action</th>
                    <!-- <th>Add Score</th> -->
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
            	foreach ($questions_score_description as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                     <td><?php echo $row['description_test']; ?></td>
	                    <td><?php echo $row['categories_id']; ?></td>
                        <td><?php echo $row['dimensions_id']; ?></td>
                         <td><?php echo $row['sub_categories_id']; ?></td>
                         <!--<td><?php echo $row['sub_categories_id']; ?></td>-->
                        <td><?php echo $row['min_value']; ?></td>
                        <td><?php echo $row['max_value']; ?></td>
                        
                        
                        
	                    <td>
	                        <a href="<?php echo base_url(); ?>admin/categories/edit_questions_score_description/<?php echo $row['description_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
	                        <a href="<?php echo base_url(); ?>admin/categories/delete_questions_score_description/<?php echo $row['description_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>

                        </td>
                        <!-- <td>
                        <a href="<?php echo base_url(); ?>admin/categories/add_score/<?php echo $row['categories_id']; ?>" class="btn btn-primary btn-xs">Add score</a>
</td> -->
                       
	                </tr>
            		<?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>