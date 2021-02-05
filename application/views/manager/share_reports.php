
						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-md-6" style="margin:0 auto">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Share Reports
												</h3>
											</div>
										</div>
                        <?php echo form_open_multipart(base_url().'manager/login/share_pdf_reports',array('class' => 'form-horizontal')); ?>

										<!--begin::Form-->
										<form class="kt-form">
											<div class="kt-portlet__body">
												<div class="form-group form-group-last">
													<div class="alert alert-secondary" role="alert">
													
													</div>
												</div>
												<?php
                $i=0;
                if (!empty($users)){
            
            		?>



                    <div class="form-group">
                    <label>Select User Email</label>
                    <select class="form-control" name="email" id="email" required>
                        <!--<option value="">No Selected</option>-->
                        <?php foreach($users as $row):?>
                        <option value="<?php echo $row->email;?>"><?php echo $row->email;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  
                  

											
												<?php
  $count_total_uploads=$count;
 
                }
            
            	?>	
												<!--email-->
												<div class="form-group">
													<label>Manager Email Address</label>
													<input type="email"  name="sending_email" class="form-control" aria-describedby="emailHelp" placeholder="Enter manager email">
													<span class="form-text text-muted">We'll never share your email with anyone else.</span>
												</div>
											
												<div class="form-group form-group-last">
													<label for="exampleTextarea">Message</label>
													<textarea placeholder="Enter Message" class="form-control" name="message" id="message" rows="3"></textarea>
												</div>
											</div>
										 
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" name="form2" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>
										</form>
 <?php echo form_close(); ?>
										<!--end::Form-->
									</div>

									