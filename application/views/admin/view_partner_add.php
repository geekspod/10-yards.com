<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Partner</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/customer" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error): ?>
			<div class="callout callout-danger">
				<p>
					<?php echo $error; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success): ?>
			<div class="callout callout-success">
				<p><?php echo $success; ?></p>
			</div>
			<?php endif; ?>

			<?php echo form_open_multipart(base_url().'admin/customer/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" placeholder="Enter Your Name" autocomplete="off" class="form-control" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
							</div>
						</div>	

						<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Email<span>*</span></label>
							<div class="col-sm-4">
								<input type="email" placeholder="Enter Your Email" autocomplete="off" class="form-control" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
							</div>
						</div>	

						<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Password<span>*</span></label>
							<div class="col-sm-4">
								<input type="password" placeholder="Enter Your Password" autocomplete="off" class="form-control" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
							</div>
						</div>	

						<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for=""  class="col-sm-2 control-label">Confirm Password<span>*</span></label>
							<div class="col-sm-4">
								<input type="password" placeholder="Enter Your Confirm Password" autocomplete="off" class="form-control" name="confirm_password" value="<?php if(isset($_POST['confirm_password'])){echo $_POST['confirm_password'];} ?>">
							</div>
						</div>					
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
							<div class="col-sm-4" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>