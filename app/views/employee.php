<div class="mdl-grid">
   <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
      <div class="mdl-tabs__tab-bar">
         <a href="#medewerkers-panel" class="mdl-tabs__tab is-active">Medewerkers</a>
         <a href="#nieuwe-medewerker-panel" class="mdl-tabs__tab">Nieuwe medewerkers toevoegen</a>
      </div>
      <div class="mdl-tabs__panel is-active mdl-cell mdl-cell--12-col" id="medewerkers-panel">
         <div class="mdl-cell mdl-cell--12-col" style="overflow-x:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
               <thead>
                  <tr>
                     <th> Peoplesoft</th>
                     <th> Voornaam</th>
                     <th> Achternaam</th>
                     <th> Geboortedatum</th>
                     <th> Functie</th>
                     <th> Schaal</th>
                     <th> Aanstelling WTF</th>
                     <th> Uren jaarbasis</th>
                     <th> Weken inzetbaar</th>
                     <th> Uren inzetbaar</th>
                     <th> Regelingen</th>
                     <th> Resterend inzetbaar</th>
                     <th>Actie</th>
                  </tr>
               </thead>
               <tbody>
                  <!-- Loop through employees -->
                  <?php foreach($employees as $employee): ?>
                  <tr>
                     <td><?php echo e($employee->peopleSoftNummer); ?></td>
                     <td><?php echo e($employee->voornaam); ?></td>
                     <td><?php echo e($employee->achternaam); ?></td>
                     <td><?php echo e($employee->geboorteDatum); ?></td>
                     <td><?php echo e($employee->contract->func->naam); ?></td>
                     <td><?php echo e($employee->contract->func->schaal); ?></td>
                     <td><?php echo e($employee->contract->aanstellingsOmvangWTF); ?></td>
                     <td><?php echo e(\App\Helpers\Formula::yearBasis($employee->contract->aanstellingsOmvangWTF)); ?></td>
                     <td><?php echo e($employee->contract->wekenInzetbaar); ?></td>
                     <td><?php echo e (round(\App\Helpers\Formula::hoursAvailable($employee->contract->aanstellingsOmvangWTF, $employee->contract->wekenInzetbaar))); ?></td>
                     <?php
                     $regeling_hours = 0;
                     foreach($employee->regelingen as $regeling){
                     $regeling_hours = $regeling_hours + $regeling->urenEenWTFEenJaar;
                     }
                     ?>
                     <td><?php echo e($regeling_hours); ?></td>
                     <td><?php echo e(round(\App\Helpers\Formula::remainingHours($employee->contract->aanstellingsOmvangWTF, $regeling_hours))); ?></td>
                     <td>
                        <a href='#edit' data-toggle="modal"><i class='icon-edit-sign'></i></a>
                        <a href='<?php echo e(url("/medewerker/$employee->id/delete"))?>' data-toggle="modal"><i class='icon-remove'></i></a>
                     </td>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
      <div id="nieuwe-medewerker-panel" class="mdl-tabs__panel mdl-cell mdl-cell--12-col">
         <p>Hey</p>
      </div>
   </div>
</div>