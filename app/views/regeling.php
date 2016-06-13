<div class="mdl-grid">
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs__tab-bar">
			<a href="#regelingen-panel" class="mdl-tabs__tab is-active">Regelingen</a>
			<a href="#nieuwe-regeling-panel" class="mdl-tabs__tab">Nieuwe regeling toevoegen</a>
		</div>
		<div class="mdl-tabs__panel is-active mdl-cell mdl-cell--12-col" id="regelingen-panel">
			<div class="mdl-cell mdl-cell--12-col" style="overflow-x: auto">
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell mdl-cell--12-col">
					<thead>
						<tr>
							<th>Naam Regeling</th>
							<th>Uren uitgerekend 1 WTF op jaarbasis</th>
							<th>Actie</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($regelingen as $regeling): ?>
						<tr>
							<td><?php echo e($regeling->naam); ?></td>
							<td><?php echo e($regeling->urenEenWTFEenJaar); ?></td>
							<td>
								<a href='#edit' data-toggle="modal"><i class='icon-edit-sign'></i></a>
								<a href='#delete' data-toggle="modal"><i class='icon-remove'></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<!-- / Create Account: Content classes Overview Table -->
		</div>
		<div id="nieuwe-regeling-panel" class="mdl-tabs__panel mdl-cell mdl-cell--12-col">
			
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
			</form>
		</div>
	</div>
</div>