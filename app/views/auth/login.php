
     <div class="container">  

        <form class="form-signin form-horizontal" action="<?= url('/login') ?>" method="post">
        <div class="top-bar">
          <h3><i class="icon-leaf"></i> PVI<b>Login</b></h3>
        </div>
        <div class="well no-padding">

          <div class="control-group">
            <label class="control-label" for="inputName"><i class="icon-user"></i></label>
            <div class="controls">
              <input type="text" id="inputName" placeholder="First name" name="firstName">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputUsername"><i class="icon-key"></i></label>
            <div class="controls">
              <input type="password" id="inputUsername" placeholder="Password" name="password">
            </div>
          </div>

        <div class="padding">
          <button class="btn btn-primary" type="submit">Inloggen</button>
          <button class="btn" type="submit">Wachtwoord vergeten</button>
          </div>
        </div>
      </form>

    </div> 

