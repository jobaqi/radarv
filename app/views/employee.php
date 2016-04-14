<!-- Content Container -->
<div class="container">

    <div class="row-fluid">
			<!-- Create Account: Box -->
			<div class="span12">

				<!-- Create Account: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#user-overview"><i class="icon-user"></i>Medewerkers overzicht</a></li>
					  <li><a href="#user-create"><i class="icon-user"></i>Toevoegen medewerker</a></li>
					</ul>
				</div>
				<!-- / Create Account: Top Bar -->

				<!-- Create Account: Content -->
				<div class="well no-padding tab-content">
					
					<!-- Create Account: Content User Overview -->
					<div class="tab-pane active" id="user-overview">

					<!-- Create Account: Content User Overview Table -->
						<table class="data-table">
							<thead>
								<tr>
										<th style=" border-right:1px solid #c2c2c2;">Voornaam</th>
										<th style=" border-right:1px solid #c2c2c2;">Achternaam</th>
										<th style=" border-right:1px solid #c2c2c2;">Geboortedatum</th>
										<th style=" border-right:1px solid #c2c2c2;">Functie</th>
										<th style=" border-right:1px solid #c2c2c2;">Schaal</th>
										<th style=" border-right:1px solid #c2c2c2;">Aanstelling WTF</th>
										<th style=" border-right:1px solid #c2c2c2;">Uren jaarbasis</th>
										<th style=" border-right:1px solid #c2c2c2;">Weken inzetbaar</th>
										<th style=" border-right:1px solid #c2c2c2;">Uren inzetbaar</th>
										<th style=" border-right:1px solid #c2c2c2;">Regelingen</th>
										<th style=" border-right:1px solid #c2c2c2;">Resterend inzetbaar</th>	
										<th class="right">Actie</th>
							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td class="right">
										<a href=""><i class="icon-edit-sign"></i></a>
										<a href=""><i class="icon-remove"></i></a>
									</td>
								</tr>

							</tbody>

						</table>
						<!-- / Create Account: Content User Overview Table -->

					</div>
					<!-- / Create Account: Content User Overview -->

					<!-- / Create Account: Tab -->   
					<div class="tab-pane" id="user-create">

						<!-- Create Account: Form -->
						<form class="form-horizontal">

							<!-- Create Account: Top Information -->
							<div class="top-info">

								<!-- Alert -->
								<div class="alert alert-info">
									<a class="close" data-dismiss="alert">&times;</a>
									<i class="icon-info"></i> You can add users through this panel
								</div>
								<!-- / Alert -->

							</div>
							<!-- / Create Account: Top Information -->

							<!-- Create Account: Form Name -->
							<div class="control-group">
								<label class="control-label" for="inputName"><i class="icon-user"></i> Name</label>
								<div class="controls">
									<input type="text" id="inputName" placeholder="Name">
								</div>
							</div>
							<!-- / Create Account: Form Name -->

							<!-- Create Account: Form Username -->
							<div class="control-group">
								<label class="control-label" for="inputUsername"><i class="icon-user"></i> Username</label>
								<div class="controls">
									<input type="text" id="inputUsername" placeholder="Username">
								</div>
							</div>
							<!-- / Create Account: Form Username -->

							<!-- Create Account: Form Nationality -->
							<div class="control-group">
								<label class="control-label" for="inputNationality"><i class="icon-flag"></i> Nationality</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputNationality" placeholder="Nationality">
								</div>
							</div>
							<!-- / Create Account: Form Nationality -->

							<!-- Create Account: Form Password -->
							<div class="control-group">
								<label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
								<div class="controls">
									<input type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
							<!-- / Create Account: Form Password -->

							<!-- Create Account: Form Email -->
							<div class="control-group">
								<label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<!-- / Create Account: Form Email -->

							<!-- Create Account: Form Gender -->
							<div class="control-group">
								<label class="control-label" for="inputGender"><i class="icon-user"></i> Gender</label>
								<div class="controls">
									<div class="btn-group" data-toggle="buttons-radio">
										<button type="button" class="btn">Female</button>
										<button type="button" class="btn">Male</button>
									</div>
								</div>
							</div>
							<!-- / Create Account: Form Gender -->

							<!-- Create Account: Form Date of Birth -->
							<div class="control-group">
								<label class="control-label" for="inputDate"><i class="icon-user"></i> Date of Birth</label>
								<div class="controls">
		 
									<select class="span12">
										<option value="Day">Day
										<option value="01">01
										<option value="02">02
									</select>
									<select class="span12">
										<option value="Month">Month
										<option value="January">January
										<option value="February">February
									</select>
									<select class="span12">
										<option value="Year">Year
										<option value="2012">2012
										<option value="2013">2013
									</select>
								</div>
							</div>
							<!-- / Create Account: Form Date of Birth -->
		 
							<!-- Create Account: Form Actions -->
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Signup</button>
								<button type="button" class="btn">Cancel</button>
							</div>
							<!-- / Create Account: Form Actions -->
		 
						</form> 
						<!-- / Create Account: Form -->   

					</div>
					<!-- / Create Account: Tab -->   

				</div>
				<!-- / Create Account: Content -->

			</div>
			<!-- / Create Account: Box -->
	</div>
</div>