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
										<th style=" border-right:1px solid #c2c2c2; text-align: center;">Naam</th>	
										<th class="right" style="text-align: center">Actie</th>							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align: center;">Desk. bevordering (59) / OR (20)</td>		
									<td class="right">
										<a href=""><button type="button" class="btn btn-danger">Delete</button></a>									
										<a href=""><button type="button" class="btn btn-info">Edit</button></a>
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

							<!-- Create Account: Form Naam -->
							<div class="control-group">
								<label class="control-label" for="inputNaam"><i class="icon-user"></i>Naam</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputNaam" placeholder="">
								</div>
							</div>
							<!-- / Create Class: Form Naam -->
                        	<!-- Create Account: Form Actions -->
                        	<div class="form-actions">
                           		<button type="submit" class="btn btn-primary">Aanmaken</button>
                        	</div>
                        	<!-- / Create Account: Form Actions -->								

						<!-- / Create A: Tab SPAN 12 -->  

					</div>
				<!-- / Create Account: Tab -->   
				
				</div>
				<!-- / Create Account: Content -->

			</div>
			<!-- / Create arrangement: Box -->
	</div>
</div>