<!-- Content Container -->
<div class="container">

    <div class="row-fluid">
			<!-- Create classes: Box -->
			<div class="span12">

				<!-- Create Account: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#classes-overview"><i class="icon-th-list"></i>klassen overzicht</a></li>
					  <li><a href="#classes-create"><i class="icon-plus"></i>Toevoegen klas</a></li>
					</ul>
				</div>
				<!-- / Create Account: Top Bar -->

				<!-- Create Account: Content -->
				<div class="well no-padding tab-content">
					
					<!-- Create Account: Content classes Overview  EERSTE TABBLAD-->
					<div class="tab-pane active" id="classes-overview">
					<!-- Create Account: Content classes Overview Table -->
						<table class="data-table">
							<thead>
								<tr>
										<th style=" border-right:1px solid #c2c2c2; text-align: center;">Klas</th>
										<th style=" border-right:1px solid #c2c2c2; text-align: center;">Studie</th>
										<th class="right" style="text-align: center;">Actie</th>
							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align: center;">4VAOW3A</td>
									<td style="text-align: center;">Applicatie Ontwikkeling</td>
									<td style="text-align: center;"  class="right">
										<a href=''><i class='icon-edit-sign'></i></a>
										<a href=''><i class='icon-remove'></i></a>
									</td>
								</tr>

							</tbody>

						</table>
						<!-- / Create Account: Content classes Overview Table -->
					</div>
					<!-- / Create Account: Content classes Overview -->

					<!-- / Create Account: Tab TWEEDE TABBLAD -->   
					<div class="tab-pane" id="classes-create">
						
						<!-- Create A: Tab -->  
						
						<!-- Create Class: Form -->
						<form class="form-horizontal">

							<!-- Create Account: Form Naam -->
							<div class="control-group">
								<label class="control-label" for="inputNaam"><i class="icon-user"></i>Naam</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputNaam" placeholder="">
								</div>
							</div>
							<!-- / Create Class: Form Naam -->

							<!-- Create Account: Form Klas -->
							<div class="control-group">
								<label class="control-label" for="inputKlas"><i class="icon-user"></i> Klas</label>
								<div class="controls">

									<select class="span12">
										<option value="Applicatie Ontwikkelaar">Applicatie Ontwikkelaar
										<option value="Media Developer">Media Developer
									</select>
								</div>
							</div>
							<!-- / Create Account: Form Klas -->
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
			<!-- / Create classes: Box -->
	</div>
</div>