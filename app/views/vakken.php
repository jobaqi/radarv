<div class="mdl-grid">
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs__tab-bar">
			<a href="#vakken-panel" class="mdl-tabs__tab is-active">Vakken</a>
			<a href="#nieuwe-vak-panel" class="mdl-tabs__tab">Nieuw vak toevoegen</a>
		</div>
		<div class="mdl-tabs__panel is-active mdl-cell mdl-cell--12-col" id="vakken-panel">
			<div class="mdl-cell mdl-cell--12-col" style="overflow-x: auto">
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell mdl-cell--12-col">
					<thead>
						<tr>
							<th class="custom-header">Naam</th>
							<th class="custom-header">Vak Code</th>
							<th class="custom-header">Actie</th>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($vakken as $vak): ?>
						<tr>
							<td class="custom-data"><?php echo e($vak->naam); ?></td>
							<td class="custom-data"><?php echo e($vak->vakCode); ?></td>
							<td class="custom-data">
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
		<div id="nieuwe-vak-panel" class="mdl-tabs__panel mdl-cell mdl-cell--12-col">
			
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
					<label class="control-label" for="inputUren"><i class="icon-time"></i>vak Code</label>
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
	</div>
</div>