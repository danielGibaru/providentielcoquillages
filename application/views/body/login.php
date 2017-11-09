<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">

					  <div class="form-group">
                          <?php
                          echo form_open('login/connect');
                          echo form_label('username','username');
                          echo form_input('username','','class="form-control" id="username" placeholder="username"')
                          ?>
					  </div>
                      <div class="form-group">
                            <?php
                            echo form_label('Password','password');
                            echo form_input('password','','class="form-control" id="password" placeholder="Password"')
                            ?>
                      </div>
                            <?php echo form_submit('login', 'Login', 'class="btn btn-primary"') ?>
					  <a href="Register"  class="btn btn-link">S'inscrire </a>
