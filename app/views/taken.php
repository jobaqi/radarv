<div class="mdl-grid">
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs__tab-bar">
			<a href="#taken-panel" class="mdl-tabs__tab is-active">Taken</a>
			<a href="#nieuw-vak-panel" class="mdl-tabs__tab">Nieuwe taak toevoegen</a>
		</div>
		<div class="mdl-tabs__panel is-active mdl-cell mdl-cell--12-col" id="taken-panel">
			<div class="mdl-cell mdl-cell--12-col" style="overflow-x: auto">
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell mdl-cell--12-col">
					<thead>
						<tr>
							<th>Naam</th>
							<th>Actie</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($taken as $taak): ?>
						<tr>
							<td><?php echo e($taak->naam); ?></td>
							<td>
								<a href="#">Edit</a><a href="#">Delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<!-- / Create Account: Content classes Overview Table -->
		</div>
		<div id="nieuw-vak-panel" class="mdl-tabs__panel mdl-cell mdl-cell--12-col">
			
			
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
	</div>
</div>