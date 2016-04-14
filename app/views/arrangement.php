<!-- Content Container -->
<div class="container">

    <div class="row-fluid">
			<!-- Create arrangement: Box -->
			<div class="span12">

				<!-- Create Account: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#arrangement-overview"><i class="icon-th-list"></i>Regelingen overzicht</a></li>
					  <li><a href="#arrangement-create"><i class="icon-plus"></i>Toevoegen Regeling</a></li>
					</ul>
				</div>
				<!-- / Create Account: Top Bar -->

				<!-- Create Account: Content -->
				<div class="well no-padding tab-content">
					
					<!-- Create Account: Content arrangement Overview  EERSTE TABBLAD-->
					<div class="tab-pane active" id="arrangement-overview">
					<!-- Create Account: Content arrangement Overview Table -->
						<table class="data-table">
							<thead>
								<tr>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Voornaam</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Achternaam</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Geboortedatum</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Functie</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Schaal</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Aanstelling WTF</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Uren jaarbasis</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Weken inzetbaar</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Uren inzetbaar</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Regelingen</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center">Resterend inzetbaar</th>	
										<th class="right">Actie</th>
							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Vinod</td>
									<td>Poenai</td>
									<td>06/08/1984</td>
									<td>Senior docent</td>
									<td>LC</td>
									<td>1.0</td>
									<td>1659:00</td>
									<td>30</td>
									<td>1244:15</td>
									<td>Desk. bevordering (59) / OR (20)</td>
									<td>1068:15</td>
									<td class="right">
										<a href=""><i class="icon-edit-sign"></i></a>
										<a href=""><i class="icon-remove"></i></a>
									</td>
								</tr>

							</tbody>

						</table>
						<!-- / Create Account: Content arrangement Overview Table -->
					</div>
					<!-- / Create Account: Content arrangement Overview -->

					<!-- / Create Account: Tab TWEEDE TABBLAD -->   
					<div class="tab-pane" id="arrangement-create">
						
							<!-- Create A: Tab -->  
						

							<!-- Create Account: Form -->
							<form class="form-horizontal">

								<!-- Create Account: Form PeopleSoft -->
								<div class="control-group">
									<label class="control-label" for="inputPeopleSoft"><i class="icon-user"></i> PeopleSoft#</label>
									<div class="controls">
										<input type="text" class="typeahead" id="inputPeopleSoft" placeholder="010....">
									</div>
								</div>
								<!-- / Create Account: Form PeopleSoft -->

								<!-- Create Account: Form Voornaam -->
								<div class="control-group">
									<label class="control-label" for="inputVoornaam"><i class="icon-user"></i> Voornaam</label>
									<div class="controls">
										<input type="text" id="inputVoornaam" placeholder="">
									</div>
								</div>
								<!-- / Create Account: Form Voornaam -->

								<!-- Create Account: Form Achternaam -->
								<div class="control-group">
									<label class="control-label" for="inputAchternaam"><i class="icon-user"></i> Achternaam</label>
									<div class="controls">
										<input type="text" id="inputAchternaam" placeholder="">
									</div>
								</div>
								<!-- / Create Account: Form Achternaam -->

								<!-- Create Account: Form Date of Birth -->
								<div class="control-group">
									<label class="control-label" for="inputDate"><i class="icon-calendar"></i> Geboorte datum</label>
									<div class="controls">
			 
										<select class="span12">
											
											<?php
											for($i = 31; $i>0; $i--)
											{

												echo '<option value="'.$i.'">'.$i.'';
											}

											?>

										</select>
										<select class="span12">
											<option value="Januari">Januari
											<option value="Februari">Februari
											<option value="Maart">Maart
											<option value="April">April
											<option value="Mei">Mei
											<option value="Juni">Juni
											<option value="Juli">Juli
											<option value="Augustus">Augustus
											<option value="September">September
											<option value="Oktober">Oktober
											<option value="November">November
											<option value="December">December
										</select>
										<select class="span12">
											
										<?php 
											for($i=date('Y'); $i>1950; $i--) {
											echo '<option value="'.$i.'">'.$i.'';	
											}

										?>

										</select>
									</div>
								</div>
								<!-- / Create Account: Form Date of Birth -->


								<!-- Create Account: Form Weken -->
								<div class="control-group">
									<label class="control-label" for="inputWeken inzetbaar "><i class="icon-user"></i> Weken inzetbaar</label>
									<div class="controls">
			 
										<select class="span12">

											<?php
											for($i = 40; $i>0; $i--)
											{

												echo '<option value="'.$i.'">'.$i.'';
											}

											?>

										</select>
									</div>
								</div>
								<!-- / Create Account: Form Weken -->

								<!-- Create Account: Form Functie -->
								<div class="control-group">
									<label class="control-label" for="inputFunctie"><i class="icon-user"></i> Functie</label>
									<div class="controls">
			 
										<select class="span6">
											<option value="Functie">Functie
											<option value="Senior Docent">Senior Docent
											<option value="Junior Docent">Junior Docent
										</select>
									</div>
								</div>
								<!-- / Create Account: Form Functie -->

								
								<!-- Create Account: Form Aanstelling -->
								<div class="control-group">
									<label class="control-label" for="inputAanstelling"><i class="icon-user"></i> Aanstelling</label>
									<div class="controls">
										<input type="text" id="inputAanstelling" placeholder="WTF">
									</div>
								</div>
								<!-- / Create Account: Form Aanstelling -->

								<!-- Create Account: Form Regelingen -->
								<div class="control-group">
									<label class="control-label" for="inputRegelingen"><i class="icon-user"></i> Regelingen</label>
									<div class="controls">
			 
										<select class="span6">
											<option value="Regelingen">Regelingen
											<option value="regeling 1">regeling 1
											<option value="regeling 2">regeling 2
										</select>
									</div>
								</div>
								<!-- / Create Account: Form Regelingen -->
			 
								<!-- Create Account: Form Actions -->
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Aanmaken</button>
								</div>
								<!-- / Create Account: Form Actions -->
							  <div class="row-fluid">
								<div class="span5">

								</div>
							  </div>
							</form> 
							<!-- / Create Account: Form -->   

							<!-- / Create A: Tab SPAN 12 -->  


					</div>
						<!-- / Create Account: Tab -->   

				</div>
				<!-- / Create Account: Content -->

			</div>
			<!-- / Create arrangement: Box -->
	</div>
</div>