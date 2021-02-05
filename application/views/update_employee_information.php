<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-6">

									
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Update Profile
												</h3>
											</div>
										</div>
                                        <?php echo form_open_multipart(base_url().'login/update_profile',array('class' => 'form-horizontal')); ?>
										
										<form class="kt-form">
											<div class="kt-portlet__body">

                                            <?php
                $i=0;
                if (!empty($employee_information)){
            	foreach ($employee_information as $row) {
            		$i++;
            		?>
												    <div class="kt-section kt-section--first">
													<div class="form-group">
														<label>First Name*</label>
														<input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $row['first_name'];?>">
														<span class="form-text text-muted">Please enter your First Name</span>
													</div>


                                                   
                                                    <div class="form-group">
														<label>Last Name*</label>
														<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $row['last_name'];?>">
														<span class="form-text text-muted">Please enter your Last Name</span>
													</div>
                                                    <div class="form-group">
														<label>Email*</label>
														<input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $row['email'];?>">
														<span class="form-text text-muted">Please enter your Email</span>
													</div>
                                                    <div class="form-group">
														<label>Password*</label>
														<input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $row['password'];?>">
														<span class="form-text text-muted">Enter Password</span>
													</div>
                                                   
                
													<div class="form-group">
														<label>Mobile Number*</label>
														<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $row['mobile'];?>">
														<span class="form-text text-muted">Enter Mobile Number</span>
													</div>
                                                    <div class="form-group">
														<label>Job Title*</label>
														<input type="text" name="job_title" class="form-control" placeholder="Enter Job Title" value="<?php echo $row['job_title'];?>">
														<span class="form-text text-muted">Enter Job Title</span>
													</div>
                                                    
                                                    <div class="form-group">
														<label>Department*</label>
														<input type="text" name="department" class="form-control" placeholder="Enter Department" value="<?php echo $row['department'];?>">
														<span class="form-text text-muted">Enter Department</span>
													</div>

                                                    <div class="form-group">
														<label>Location*</label>
														<input type="text" name="location" class="form-control" placeholder="Enter Location" value="<?php echo $row['location'];?>">
														<span class="form-text text-muted">Enter Location</span>
													</div>
                                                    <div class="form-group">
														<label>Age*</label>
														<input type="number" name="age" class="form-control" placeholder="Enter Age" value="<?php echo $row['age'];?>">
														<span class="form-text text-muted">Enter Age</span>
													</div>

                                                    <div class="form-group">
														<label>Gender*</label>
														<input type="text" name="gender" class="form-control" placeholder="Enter Gender" value="<?php echo $row['gender'];?>">
														<span class="form-text text-muted">Enter Gender</span>
													</div>

             <!--                                       <div class="form-group">-->
													<!--	<label>Organization*</label>-->
													<!--	<input type="text" name="organization" class="form-control" placeholder="Enter organization" value="<?php echo $row['organization'];?>">-->
													<!--	<span class="form-text text-muted">Enter organization</span>-->
													<!--</div>-->
                                                    <div class="form-group">
														<label>Reporting*</label>
														<input type="text" name="reporting" class="form-control" placeholder="Enter Reporting" value="<?php echo $row['reporting'];?>">
														<span class="form-text text-muted">Enter Reporting</span>
													</div>
                                                    <div class="form-group">
														<label>Landline*</label>
														<input type="text" name="landline" class="form-control" placeholder="Enter Landline" value="<?php echo $row['landline'];?>">
														<span class="form-text text-muted">Enter Landline</span>
													</div>
                                                    <div class="form-group">
														<label>Cnic*</label>
														<input type="text" name="cnic" class="form-control" placeholder="Enter cnic" value="<?php echo $row['cnic'];?>">
														<span class="form-text text-muted">Enter cnic</span>
													</div>
                                                    
                                                    <?php
 
            }
        }
            	?>                               
													
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
										
									</div>

									
