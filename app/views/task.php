<!-- Content Container -->
<div class="container">

    <div class="row-fluid">
			<!-- Create subject: Box -->
			<div class="span12">

				<!-- Create Account: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#subject-overview"><i class="icon-th-list"></i>Taken overzicht</a></li>
					  <li><a href="#subject-create"><i class="icon-plus"></i>Toevoegen taak</a></li>
					</ul>
				</div>
				<!-- / Create Account: Top Bar -->

				<!-- Create Account: Content -->
				<div class="well no-padding tab-content">
					
					<!-- Create Account: Content subject Overview  EERSTE TABBLAD-->
					<div class="tab-pane active" id="subject-overview">
					<!-- Create Account: Content subject Overview Table -->
						<table class="data-table">
							<thead>
								<tr>
										<th style=" border-right:1px solid #c2c2c2; text-align: center;">Naam</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center;">Uren</th>	
										<th class="right" style="text-align: center">Actie</th>
							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align: center;">Taak a</td>
									<td style="text-align: center;">40 uur</td>
									<td class="right">
										<a href=''><i class='icon-edit-sign'></i></a>
										<a href=''><i class='icon-remove'></i></a>
									</td>
								</tr>

							</tbody>

						</table>
						<!-- / Create Account: Content subject Overview Table -->
					</div>
					<!-- / Create Account: Content subject Overview -->

					<!-- / Create Account: Tab TWEEDE TABBLAD -->   
					<div class="tab-pane" id="subject-create">
						
							<!-- Create A: Tab -->  
						

							<!-- Create Account: Form -->
							<form class="form-horizontal">

							<!-- Create Account: Form Naam -->
							<div class="control-group">
								<label class="control-label" for="inputNaam"><i class="icon-user"></i>Naam</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputNaam" placeholder="">
								</div>
							</div>
							<!-- / Create Class: Form Naam -->
							<!-- Create Account: Form Uren -->
							<div class="control-group">
								<label class="control-label" for="inputUren"><i class="icon-time"></i>Uren</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputUren" placeholder="">
								</div>
							</div>
							<!-- / Create Class: Form Naam -->
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
			<!-- / Create subject: Box -->
	</div>
</div>