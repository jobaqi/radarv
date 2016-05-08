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
									<th class="custom-header">Klas</th>
									<th class="custom-header">Studie</th>
									<th class="custom-header">Actie</th>							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="custom-data">4VAOW3A</td>
									<td class="custom-data">Applicatie Ontwikkeling</td>
									<td class="custom-data">
	                                    <a href='#edit' data-toggle="modal"><i class='icon-edit-sign'></i></a>
	                                    <a href='#delete' data-toggle="modal"><i class='icon-remove'></i></a>
									</td>
								</tr>

							</tbody>

						</table>
						<!-- / Create Account: Content classes Overview Table -->
					</div>
					<!-- / Create Account: Content classes Overview -->

	                <!-- Moldule: Edit Classes -->
	                    <div id="edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="close-modal" aria-hidden="true">
	                        <div class="modal-dialog">
	                            <div class="modal-content">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                                    <h3 id="close-modal"><i class="icon-edit-sign"></i> Edit</h3>
	                                </div>
	                                <div class="modal-custom-body">
	                                    <form class="form-horizontal">
	                                        <div class="control-group">
	                                            <label class="control-label" for="inpunaam"><i class="icon-user"></i> Naam</label>
	                                            <div class="controls">
	                                                <input class="span6" type="text" id="inpunaam" placeholder="">
	                                            </div>
	                                        </div>
	                                        <div class="control-group">
	                                            <label class="control-label" for="inputklas"><i class="icon-user"></i> Klas</label>
	                                            <div class="controls">

	                                                <select class="span6">
	                                                    <option value="Applicatie Ontwikkeling">Applicatie Ontwikkeling
	                                                    <option value="Media Developer">Media Developer
	                                                </select>
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                                <div class="modal-footer">
	                                    <button class="btn btn-primary">Opslaan</button>
	                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Sluiten</button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                <!-- / Module: Edit Classes -->

	                 <!-- Module: Delete Classes -->
	                <div class="modal hide fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                    <div class="modal-dialog">
	                        <div class="modal-content">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                                    <h3 id="close-modal"><i class="icon-remove"></i> Delete</h3>
	                                </div>
	                            <div class="modal-body">
	                                <p>Weer u zeker dat u (Klas) wilt verwijderen?</p>
	                            </div>
	                                <div class="modal-footer">
	                                    <button class="btn btn-danger">Delete</button>
	                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Sluiten</button>
	                                </div>
	                        </div>
	                    </div>
	                </div>             
	                <!-- / Module: Delete Classes -->

					<!-- / Create Account: Tab TWEEDE TABBLAD -->   
					<div class="tab-pane" id="classes-create">
						
						<!-- Create A: Tab -->  
						
						<!-- Create Class: Form -->
						<form class="form-horizontal">

							<!-- Create Account: Form Naam -->
							<div class="control-group">
								<label class="control-label" for="inputNaam"><i class="icon-user"></i>Naam</label>
								<div class="controls">
									<input class="span3" type="text" id="inputNaam" placeholder="">
								</div>
							</div>
							<!-- / Create Class: Form Naam -->

							<!-- Create Account: Form Klas -->
							<div class="control-group">
								<label class="control-label" for="inputKlas"><i class="icon-user"></i> Klas</label>
								<div class="controls">

									<select class="span5">
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