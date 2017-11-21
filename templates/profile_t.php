<?php 
	
	if($_SESSION['info_update_success'] == 1)
	{		
		echo "<script type='text/javascript'>alert('You information has been updated successfully.');</script>";	
		$_SESSION['info_update_success'] = 0;	
	}
?>
<div class="row">
	<div class="col-md-3">
	</div>

	<form action="../public/profile.php" method="POST">
		<div class="col-md-6">
			<!-- Personal information and contact section -->
			<div class="row">
				<h3>Personal and Contact Information</h3>	
				<hr/>			
			</div>
			
		
			<div class="row">
				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="name">Name:</label>
						</div>
						
						<div class="col-md-9">     
							<div class="col-md-3">
								<input type="text" name="first_name" class="form-control" tabindex="1" value='<?php echo $first_name; ?>' required="required" placeholder="First Name" />
							</div>   
							<div class="col-md-3">
								<input type="text" name="last_name" class="form-control" tabindex="2" value='<?php echo $last_name; ?>' required="required" placeholder="Last Name" />
							</div> 
							<div class="col-md-3">
							</div> 		                
			          	</div>		
					</div>
				</div>
				<br>
				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="email">Email:</label>
						</div>
						
						<div class="col-md-9">     
							<div class="col-md-6">
								<input type="text" name="email" class="form-control" tabindex="3" value='<?php echo $email; ?>' required="required" placeholder="Email Address" />
							</div>	                
			          	</div>		
					</div>
				</div>	
				<br>				
				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="phone">Phone Number:</label>
						</div>
						
						<div class="col-md-9">     
							<div class="col-md-3">
								<input type="text" name="phone" class="form-control" tabindex="4" value='<?php echo $phone; ?>' required="required" placeholder="XXX-XXX-XXXX" />
							</div>		                
			          	</div>		
					</div>
				</div>	
			</div>
			<br>

					<!--Address section-->
			<div class="row">
				<h3>Address Information</h3>
				<hr/>
			</div>
			
			<div class="row">
				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="lot_number">Lot Number:</label>
						</div>
							
						<div class="col-md-9">     
							<div class="col-md-3">
								<input type="text" name="lot_number" class="form-control" tabindex="5" value='<?php echo $lot_number; ?>' required="required" placeholder="Lot Number" />
							</div>		                
				          </div>		
					</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="street_address">Street Address:</label>
						</div>
							
						<div class="col-md-9">     
							<div class="col-md-6">
								<input type="text" name="address_line" class="form-control" tabindex="6" value='<?php echo $address_line; ?>' required="required" placeholder="Stree Address" />
							</div>		                
				          </div>		
					</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="town">Town:</label>
						</div>
							
						<div class="col-md-9">     
							<div class="col-md-3">
								<input type="text" name="town" class="form-control" tabindex="7" value='<?php echo $town; ?>' required="required" placeholder="Town" />
							</div>		                
				          </div>		
					</div>
				</div>
				<br>

				<div class="row">
					<div class="form-group">
						<div class="col-md-3">
							<label for="region">Region:</label>
						</div>

						<div class="col-md-2">
	                       <select class="form-control" name="region" tabindex="8" >
	                          <?php 
	                            for ($i=1; $i <= 10 ; $i++) { 
	                            	if($i == $region)
	                            		echo '<option selected="selected">'.$i.'</option>';	
	                            	else
	                              		echo '<option>'.$i.'</option>';
	                            }                            
	                          ?>
	                        </select> 
                    	</div>
                    </div>
				</div>
				<hr>
			</div>	
			<div class="row">
				<button type="submit" class="btn btn-primary">Update Information</button>
			</div>
		</div>
	</form>

	<div class="col-md-3">		
	</div>


</div>