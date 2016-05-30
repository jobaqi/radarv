<div class="container">  

    <form class="form-register form-horizontal" action="<?= url('/register') ?>" method="post">
        <div class="top-bar">
            <h3><i class="icon-leaf"></i> PVI<b>Registreren</b></h3>
        </div>
        <div class="well no-padding">

            <div class="control-group">
                <label class="control-label" for="peopleSoftNummer"><i class="icon-user"></i>People soft#</label>
                <div class="controls">
                    <input type="text" id="peopleSoftNummer" placeholder="People soft#" name="peopleSoftNummer" class="input-block-level">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="firstName"><i class="icon-user"></i>Voornaam</label>
                <div class="controls">
                    <input type="text" id="firstName" placeholder="Voornaam" name="firstName" class="input-block-level">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="lastName"><i class="icon-user"></i>Achternaam</label>
                <div class="controls">
                    <input type="text" id="lastName" placeholder="Achternaam" name="lastName" class="input-block-level">
                </div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="dateOfBirth"><i class="icon-user"></i>Geboorte Datum</label>
            <div class="controls">
              <input type="date" id="dateOfBirth" placeholder="Geboorte datum" name="dateOfBirth" class="input-block-level">
            </div>
          </div>

            <div class="control-group">
                <label class="control-label" for="password"><i class="icon-user"></i>Wachtwoord</label>
                <div class="controls">
                    <input type="password" id="password" placeholder="Wachtwoord" name="password" class="input-block-level">
                </div>
            </div>
            
            

            <div class="padding">
                <button class="btn btn-primary" type="submit">Inloggen</button>
                <button class="btn" type="submit">Wachtwoord vergeten</button>
            </div>
        </div>
    </form>

</div> 

