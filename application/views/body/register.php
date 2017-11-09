<div class="row">
   <div class="col-md-4"> </div>
   <div class="col-md-4">
      <div class="panel panel-default">
         <div class="panel-body">

            <?php
                              echo form_open('addaccount');
               ?>
               <div class="form-group">
               <h5> register </h5>
               </div>
            <div class="form-group">
               <?php
                  echo form_label('username','username');
                  echo form_input('username','','class="form-control" id="username" placeholder="username"')
                  ?>
            </div>
            <div class="form-group">
               <?php
                  echo form_label('password','password');
                  echo form_input('password','','class="form-control" id="password" placeholder="password"')
                  ?>
            </div>
            <div class="form-group">
               <?php
                  echo form_label('mail','mail');
                  echo form_input('mail','','class="form-control" id="mail" placeholder="mail"')
                  ?>
            </div>

            <?php echo form_submit('register', 'register', 'class="btn btn-primary"') ?>

            <?php echo form_close()?>
            </form>
         </div>
      </div>
   </div>
   <div class="col-md-4"></div>
</div>
</div>
</body>
</html>
