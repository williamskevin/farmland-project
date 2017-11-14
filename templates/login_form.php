<!DOCTYPE html>
<html>
<head>
  <title>Log In or Sign Up</title>
  <link href="../public/css/bootstrap.css" rel="stylesheet"/>
  <link href="../public/css/styles.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../public/js/jquery-1.10.2.min.js"></script>
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/scripts.js"></script>
</head>
<body>


<script type="text/javascript">
    $(window).on('load',function(){
      $('#loginModal').modal({backdrop: 'static', keyboard: false}) 
        $('#loginModal').modal('show');
    });
</script>

<!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">  

          <ul class="nav nav-tabs">
            <li class="active"><a href="#login" data-toggle="tab" aria-expanded="false">Log In</a></li>
            <li class=""><a href="#signup" data-toggle="tab" aria-expanded="true">Sign Up</a></li> 
          </ul>

        </div>
        <div class="modal-body">
          <div id="login_signup" class="tab-content">
              <div class="tab-pane fade active in" id="login">
                <form action="../public/login.php" method="post">

                  <div class="form-group">
                    <label for="username/email">Username/Email</label>
                    <input type="text" name="username" class="form-control" required="required" placeholder="Username/Email" />
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" required="required" placeholder="Password" />
                  </div>

                  <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-md" name=login value="login">Log In</button>
                    </div>
                  </div>                 
                </form>
              </div>

              <!-- Sign up form -->
              <div class="tab-pane fade in" id="signup">
                <form action="../public/login.php" method="post">

                  <div class="row" id="basic_row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control signup" required="required" placeholder="First Name" />
                      </div>

                      <div class="form-group">
                        <label for="lot_number">Lot Number</label>
                        <input type="text" name="lot_number" class="form-control signup" required="required" placeholder="Lot Number" />
                      </div>                      

                      <div class="form-group">
                        <label for="town">Town</label>
                        <input type="text" name="town" class="form-control signup" required="required" placeholder="Town" />
                      </div>

                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control signup" required="required" placeholder="eg. XXX-XXX-XXXX" />
                      </div>

                      <div class="text-warning">Fill out all field to continue.</div>
                    </div>
                    
                    <div class="col-md-6">

                      <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="form-control signup" required="required" placeholder="Last Name" />
                      </div>

                      <div class="form-group">
                        <label for="address_line">Address Line</label>
                        <input type="text" name="address_line" class="form-control signup" required="required" placeholder="Address Line" />
                      </div>                          

                      <div class="form-group">
                        <label for="region">Region</label>
                        <select class="form-control" name="region">
                          <?php 
                            for ($i=1; $i <= 10 ; $i++) { 
                              echo '<option>'.$i.'</option>';
                            }                            
                          ?>
                        </select> 
                      </div>

                      <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-1">
                          <div id="next_btn" class="btn btn-info btn-md " >Next</div>
                        </div>
                        <div class="col-md-2"></div>
                      </div>

                    </div>                   
                  </div>                  

                  <div class="tab-pane fade in hidden" id="address">
                    <div class="row">
                        <div class="col-md-6">

                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control signup" required="required" placeholder="Email" />
                          </div>

                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control signup" required="required" placeholder="Password" />
                          </div>

                          <div class="row">
                            <div class="col-md-2">
                              <div id="back_btn" class="btn btn-info btn-md">Back</div>                              
                            </div>
                            <div class="col-md-10"></div>
                          </div>

                        </div>

                        <div class="col-md-6">

                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control signup " required="required" placeholder="Username" />
                          </div>

                          <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control signup" required="required" placeholder="Confirm Password" />
                          </div>
                          <div class="text-warning">Fill out all field to continue.</div>
                          
                        </div>
                    </div> 
                  </div>

                  <br><br>
                  <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <button type="submit" value="signup" name="signup" id="signup_submit" disabled="true" class="btn btn-primary btn-md " >Sign Up</button>
                    </div>
                  </div>  

                </form>
              </div>

          </div>          	
        
      </div>
      
    </div>
  </div>

</body>
</html>
  