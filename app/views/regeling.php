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
										<th class="custom-header">Naam Regeling</th>
										<th class="custom-header">Uren uitgerekend 1 WTF op jaarbasis</th>		
										<th class="custom-header">Actie</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($regelingen as $regeling): ?>
								<tr>
									<td class="custom-data"><?php echo e($regeling->naam); ?></td>
									<td class="custom-data"><?php echo e($regeling->urenEenWTFEenJaar); ?></td>		
									<td class="custom-data">
	                                    <a href='#edit' data-toggle="modal"><i class='icon-edit-sign'></i></a>
	                                    <a href='#delete' data-toggle="modal"><i class='icon-remove'></i></a>
									</td>
								</tr>
								<?php endforeach; ?>

							</tbody>

						</table>
						<!-- / Create Account: Content arrangement Overview Table -->
					</div>
					<!-- / Create Account: Content arrangement Overview -->

	                <!-- Moldule: Edit Arrangements -->
	                    <div id="edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="close-modal" aria-hidden="true">
	                        <div class="modal-dialog">
	                            <div class="modal-content">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                                    <h3 id="close-modal"><i class="icon-edit-sign"></i> Edit</h3>
	                                </div>
	                                <div class="modal-body">
	                                    <form class="form-horizontal">
	                                        <div class="control-group">
	                                            <label class="control-label" for="inputnaam"><i class="icon-user"></i> Naam</label>
	                                            <div class="controls">
	                                                <input class="span6" type="text" id="inputnaam" placeholder="">
	                                            </div>
	                                        </div>
	                                        <div class="control-group">
	                                            <label class="control-label" for="inputuren"><i class="icon-time"></i> Formule</label>
	                                            <div class="controls">
	                                                <input class="span6" type="text" id="inputuren" placeholder="">
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
	                <!-- / Module: Edit Arrangements -->

	                <!-- Module: Delete Arrangements -->
	                <div class="modal hide fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	                    <div class="modal-dialog">
	                        <div class="modal-content">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                                    <h3 id="close-modal"><i class="icon-remove"></i> Delete</h3>
	                                </div>
	                            <div class="modal-body">
	                                <p>Weer u zeker dat u (Regeling) wilt verwijderen?</p>
	                            </div>
	                                <div class="modal-footer">
	                                    <button class="btn btn-danger">Delete</button>
	                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Sluiten</button>
	                                </div>
	                        </div>
	                    </div>
	                </div>             
	                <!-- / Module: Delete Arrangements -->

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
							<!-- Create Account: Form Uren -->
							<div class="control-group">
								<label class="control-label" for="inputUren"><i class="icon-user"></i>Formule</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputUren" placeholder="">
								</div>
							</div>
							<!-- / Create Class: Form Uren -->
                        	<!-- Create Account: Form Actions -->
                        	<div class="form-actions">
                           		<button type="submit" class="btn btn-primary">Aanmaken</button>
                        	</div>
							<div class="row-fluid">
								<div class="span5">

								</div>
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