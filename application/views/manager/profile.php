<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div style="    width: 40%; margin: 0 auto">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Update Profile
												</h3>
											</div>
										</div>
                                        <?php echo form_open_multipart(base_url().'manager/login/update_profile',array('class' => 'form-horizontal')); ?>
										<!--begin::Form-->
										<form class="kt-form">
											<div class="kt-portlet__body">
												    <div class="kt-section kt-section--first">
													<div class="form-group">
														<label>First Name:</label>
														<input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
														<span class="form-text text-muted">Please enter your First Name</span>
													</div>


                                                    <div class="form-group">
														<label>Middle Name:</label>
														<input type="text" name="middle_name" class="form-control" placeholder="Enter Middle Name">
														<span class="form-text text-muted">Please enter your Middle Name</span>
													</div>
                                                    <div class="form-group">
														<label>Last Name:</label>
														<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
														<span class="form-text text-muted">Please enter your Last Name</span>
													</div>
                                                    <div class="form-group">
														<label>Email:</label>
														<input type="email" name="email" class="form-control" placeholder="Enter Email">
														<span class="form-text text-muted">Please enter your Email</span>
													</div>
													<div class="form-group">
														<label>Organization:</label>
														<input type="text" name="organization" class="form-control" placeholder="Enter Organization">
														<span class="form-text text-muted">Enter Organization</span>
													</div>
                                                    <div class="form-group">
														<label>Title:</label>
														<input type="text" name="title" class="form-control" placeholder="Enter Title">
														<span class="form-text text-muted">Enter Title</span>
													</div>
                                                    <div class="form-group">
														<label>Landline:</label>
														<input type="text" name="landline" class="form-control" placeholder="Enter Landline">
														<span class="form-text text-muted">Enter Landline</span>
													</div>
                                                    <div class="form-group">
														<label>Number1:</label>
														<input type="number" name="number1" class="form-control" placeholder="Enter Number1">
														<span class="form-text text-muted">Enter Number1</span>
													</div>
                                                    <div class="form-group">
														<label>Number2:</label>
														<input type="number" name="number2" class="form-control" placeholder="Enter Number2">
														<span class="form-text text-muted">Enter Number2</span>
													</div>
                                                    <div class="form-group">
														<label>Cnic:</label>
														<input type="text" name="cnic" class="form-control" placeholder="Enter cnic">
														<span class="form-text text-muted">Enter cnic</span>
													</div>
                                                    <div class="form-group">
														<label>Password:</label>
														<input type="password" name="password" class="form-control" placeholder="Enter Password">
														<span class="form-text text-muted">Enter Password</span>
													</div>
                                                    <div class="form-group">
														<label>Confirm Password:</label>
														<input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password">
														<span class="form-text text-muted">Enter Confirm Password</span>
													</div>
                                                    
													<!-- <div class="form-group">
														<label>Status:</label>
														<div class="kt-checkbox-list">
															<label class="kt-checkbox" name="status" value="Enable">
																<input type="checkbox" name="status"> Enable
																<span></span>
															</label>
															<label class="kt-checkbox" name="status" value="Disable">
																<input type="checkbox" name="status"> Disable
																<span></span>
															</label>
															
														</div>
													</div> -->
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" class="btn btn-primary" name="form1">Submit</button>
													<button type="submit" class="btn btn-secondary" name="form1">Cancel</button>
												</div>
											</div>
										</form>
                                        <?php echo form_close(); ?>
										<!--end::Form-->
									</div>

									<!--end::Portlet-->
