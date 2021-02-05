<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Games Rules</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/games/rules/<?php echo $this->uri->segment(5) ; ?>" class="btn btn-primary btn-sm">View All</a>
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

			<?php echo form_open_multipart(base_url().'admin/portfolio/edit/'.$portfolio['id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Rule *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $portfolio['name']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Content *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="short_content" style="height:100px;"><?php echo $portfolio['short_content']; ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Category *</label>
							<div class="col-sm-4">
							
								<select name="category_id" class="form-control select2">
									<option value="">Select Category</option>
									<option value="format" <?php if($portfolio['category_id'] == 'format') {echo 'selected';} ?>>Format</option>
									<option value="rule" <?php if($portfolio['category_id'] == 'rule') {echo 'selected';} ?>>Rule</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>

					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>
