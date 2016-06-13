<div class="mdl-grid">
	<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
		<div class="mdl-tabs__tab-bar">
			<a href="#klassen-panel" class="mdl-tabs__tab is-active">Klassen</a>
			<a href="#nieuwe-klas-panel" class="mdl-tabs__tab">Nieuwe klas toevoegen</a>
		</div>
		<div class="mdl-tabs__panel is-active mdl-cell mdl-cell--12-col" id="klassen-panel">
			<div class="mdl-cell mdl-cell--12-col" style="overflow-x: auto">
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell mdl-cell--12-col">
					<thead>
						<tr>
							<th class="custom-header">Klas</th>
							<th class="custom-header">Studie</th>
							<th class="custom-header">Actie</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($klassen as $klas): ?>
						
						<tr>
							<td class="custom-data"><?php echo e($klas->naam); ?></td>
							<td class="custom-data"><?php echo e($klas->Opleiding->naam); ?></td>
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
		<div id="nieuwe-klas-panel" class="mdl-tabs__panel mdl-cell mdl-cell--12-col">
			<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Nieuwe klas toevoegen</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<form action="#">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:100%;">
							<input class="mdl-textfield__input" type="text" id="sample3">
							<label class="mdl-textfield__label" for="sample3">Klas naam</label>
						</div>
						<div class="mdl-textfield" style="width: 100%">
							<select class="mdl-textfield__select" id="professsion" name="professsion">
								<option value="">Opleiding</option>
								<?php foreach($opleidingen as $opleiding): ?>
								<option value="<?php echo e($opleiding->id); ?>"><?php echo e($opleiding->naam); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Toevoegen</button>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
<script>
</script>