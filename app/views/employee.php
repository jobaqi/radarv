<!-- Content Container -->
<div class="container">
   <div class="row-fluid">
      <!-- Create Empoloyee: Box -->
      <div class="span12">
         <!-- Create Account: Top Bar -->
         <div class="top-bar">
            <ul class="tab-container">
               <li class="active"><a href="#user-overview"><i class="icon-th-list"></i>Medewerkers overzicht</a></li>
               <li><a href="#user-create"><i class="icon-plus"></i>Toevoegen medewerker</a></li>
            </ul>
         </div>
         <!-- / Create Account: Top Bar -->
         <!-- Create Account: Content -->
         <div class="well no-padding tab-content">
            <!-- Create Account: Content User Overview  EERSTE TABBLAD-->
            <div class="tab-pane active" id="user-overview">
               <!-- Create Account: Content User Overview Table -->
               <table class="data-table">
                  <thead>
                     <tr>
                        <th class="custom-header"> Peoplesoft</th>
                        <th class="custom-header"> Voornaam</th>
                        <th class="custom-header"> Achternaam</th>
                        <th class="custom-header"> Geboortedatum</th>
                        <th class="custom-header"> Functie</th>
                        <th class="custom-header"> Schaal</th>
                        <th class="custom-header"> Aanstelling WTF</th>
                        <th class="custom-header"> Uren jaarbasis</th>
                        <th class="custom-header"> Weken inzetbaar</th>
                        <th class="custom-header"> Uren inzetbaar</th>
                        <th class="custom-header"> Regelingen</th>
                        <th class="custom-header"> Resterend inzetbaar</th>
                        <th class="right">Actie</th>
                     </tr>
                  </thead>
                  <tbody>
                     <!-- Loop through employees -->
                     <?php foreach($employees as $employee): ?>
                     <tr>
                        <td class="custom-data"><?php echo e($employee->peopleSoftNummer); ?></td>
                        <td class="custom-data"><?php echo e($employee->voornaam); ?></td>
                        <td class="custom-data"><?php echo e($employee->achternaam); ?></td>
                        <td class="custom-data"><?php echo e($employee->geboorteDatum); ?></td>
                        <td class="custom-data"><?php echo e($employee->contract->func->naam); ?></td>
                        <td class="custom-data"><?php echo e($employee->contract->func->schaal); ?></td>
                        <td class="custom-data"><?php echo e($employee->contract->aanstellingsOmvangWTF); ?></td>
                        <td class="custom-data"><?php echo e(\App\Helpers\Formula::yearBasis($employee->contract->aanstellingsOmvangWTF)); ?></td>
                        <td class="custom-data"><?php echo e($employee->contract->wekenInzetbaar); ?></td>
                        <td class="custom-data"><?php echo e(round(\App\Helpers\Formula::hoursAvailable($employee->contract->aanstellingsOmvangWTF, $employee->contract->wekenInzetbaar))); ?></td>
                        <td class="custom-data"></td>
                        <td class="custom-data"></td>
                        <td class="custom-data">
                           <a href='#edit' data-toggle="modal"><i class='icon-edit-sign'></i></a>
                           <a href='#delete' data-toggle="modal"><i class='icon-remove'></i></a>
                        </td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
               <!-- / Create Account: Content User Overview Table -->
            </div>
            <!-- / Create Account: Content User Overview -->
            <!-- Moldule: Edit employee -->
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
                              <label class="control-label" for="Peoplesoft"><i class="icon-user"></i> PeopleSoft#</label>
                              <div class="controls">
                                 <input class="span9" type="text" id="inputPeoplesoft" placeholder="010....">
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputVoornaam"><i class="icon-user"></i> Voornaam</label>
                              <div class="controls">
                                 <input class="span9" type="text" id="inputVoornaam" placeholder="">
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputAchternaam"><i class="icon-user"></i> Achternaam</label>
                              <div class="controls">
                                 <input class="span9" type="text" id="inputAchternaam" placeholder="">
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputDate"><i class="icon-calendar"></i> Geboorte datum</label>
                              <div class="controls">
                                 <select class="span3">
                                 <?php
                                    for ($i = 31; $i > 0; $i--) {
                                    
                                      echo '<option value="' . $i . '">' . $i . '';
                                    }
                                    ?>
                                 </select>
                                 <select class="span3">
                                    <option value="Januari">Januari
                                    <option value="Februari">Februari
                                    <option value="Maart">Maart
                                    <option value="April">April
                                    <option value="Mei">Mei
                                    <option value="Juni">Juni
                                    <option value="Juli">Juli
                                    <option value="Augustus">Augustus
                                    <option value="September">September
                                    <option value="Oktober">Oktober
                                    <option value="November">November
                                    <option value="December">December
                                 </select>
                                 <select class="span3">
                                 <?php
                                    for ($i = date('Y'); $i > 1950; $i--) {
                                      echo '<option value="' . $i . '">' . $i . '';
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputWeken inzetbaar "><i class="icon-user"></i> Weken inzetbaar</label>
                              <div class="controls">
                                 <select class="span9">
                                 <?php
                                    for ($i = 40; $i > 0; $i--) {
                                    
                                      echo '<option value="' . $i . '">' . $i . '';
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputFunctie"><i class="icon-user"></i> Functie</label>
                              <div class="controls">
                                 <select class="span9">
                                    <option value="Functie">Functie
                                    <option value="Senior Docent">Senior Docent
                                    <option value="Junior Docent">Junior Docent
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputAanstelling"><i class="icon-envelope"></i> Aanstelling</label>
                              <div class="controls">
                                 <input class="span9" type="text" id="inputAanstelling" placeholder="WTF">
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label" for="inputRegelingen"><i class="icon-user"></i> Regelingen</label>
                              <div class="controls">
                                 <div class="span9">
                                    <select class="m-wrap block-level" multiple="multiple" data-placeholder="Regelingen">
                                       <option value="1">regeling 1
                                       <option value="2">regeling 2
                                    </select>
                                 </div>
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
            <!-- / Module: Edit Employee -->
            <!-- Module: Delete Employee -->
            <div class="modal hide fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="close-modal"><i class="icon-remove"></i> Delete</h3>
                     </div>
                     <div class="modal-body">
                        <p>Weer u zeker dat u (medewerker) wilt verwijderen?</p>
                     </div>
                     <div class="modal-footer">
                        <button class="btn btn-danger">Delete</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Sluiten</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- / Module: Delete Employee -->
            <!-- / Create Account: Tab TWEEDE TABBLAD -->   
            <div class="tab-pane" id="user-create">
               <!-- Create A: Tab -->  
               <!-- Create Account: Form -->
               <form class="form-horizontal">
                  <!-- Create Account: Form PeopleSoft -->
                  <div class="control-group">
                     <label class="control-label" for="inputPeopleSoft"><i class="icon-user"></i> PeopleSoft#</label>
                     <div class="controls">
                        <input class="span3" type="text" id="inputPeopleSoft" placeholder="010....">
                     </div>
                  </div>
                  <!-- / Create Account: Form PeopleSoft -->
                  <!-- Create Account: Form Voornaam -->
                  <div class="control-group">
                     <label class="control-label" for="inputVoornaam"><i class="icon-user"></i> Voornaam</label>
                     <div class="controls">
                        <input class="span3" type="text" id="inputVoornaam" placeholder="">
                     </div>
                  </div>
                  <!-- / Create Account: Form Voornaam -->
                  <!-- Create Account: Form Achternaam -->
                  <div class="control-group">
                     <label class="control-label" for="inputAchternaam"><i class="icon-user"></i> Achternaam</label>
                     <div class="controls">
                        <input class="span3" type="text" id="inputAchternaam" placeholder="">
                     </div>
                  </div>
                  <!-- / Create Account: Form Achternaam -->
                  <!-- Create Account: Form Date of Birth -->
                  <div class="control-group">
                     <label class="control-label" for="inputDate"><i class="icon-calendar"></i> Geboorte datum</label>
                     <div class="controls">
                        <select class="span3">
                        <?php
                           for ($i = 31; $i > 0; $i--) {
                           
                             echo '<option value="' . $i . '">' . $i . '';
                           }
                           ?>
                        </select>
                        <select class="span3">
                           <option value="Januari">Januari
                           <option value="Februari">Februari
                           <option value="Maart">Maart
                           <option value="April">April
                           <option value="Mei">Mei
                           <option value="Juni">Juni
                           <option value="Juli">Juli
                           <option value="Augustus">Augustus
                           <option value="September">September
                           <option value="Oktober">Oktober
                           <option value="November">November
                           <option value="December">December
                        </select>
                        <select class="span3">
                        <?php
                           for ($i = date('Y'); $i > 1950; $i--) {
                             echo '<option value="' . $i . '">' . $i . '';
                           }
                           ?>
                        </select>
                     </div>
                  </div>
                  <!-- / Create Account: Form Date of Birth -->
                  <!-- Create Account: Form Weken -->
                  <div class="control-group">
                     <label class="control-label" for="inputWeken inzetbaar "><i class="icon-user"></i> Weken inzetbaar</label>
                     <div class="controls">
                        <select class="span3">
                        <?php
                           for ($i = 40; $i > 0; $i--) {
                           
                             echo '<option value="' . $i . '">' . $i . '';
                           }
                           ?>
                        </select>
                     </div>
                  </div>
                  <!-- / Create Account: Form Weken -->
                  <!-- Create Account: Form Functie -->
                  <div class="control-group">
                     <label class="control-label" for="inputFunctie"><i class="icon-user"></i> Functie</label>
                     <div class="controls">
                        <select class="span5">
                           <option value="Functie">Functie
                           <option value="Senior Docent">Senior Docent
                           <option value="Junior Docent">Junior Docent
                        </select>
                     </div>
                  </div>
                  <!-- / Create Account: Form Functie -->
                  <!-- Create Account: Form Aanstelling -->
                  <div class="control-group">
                     <label class="control-label" for="inputAanstelling"><i class="icon-envelope"></i> Aanstelling</label>
                     <div class="controls">
                        <input class="span3" type="text" id="inputAanstelling" placeholder="WTF">
                     </div>
                  </div>
                  <!-- / Create Account: Form Aanstelling -->
                  <!-- Create Account: Form Regelingen -->
                  <div class="control-group">
                     <label class="control-label" for="inputRegelingen"><i class="icon-user"></i> Regelingen</label>
                     <div class="controls">
                        <div class="span3">
                           <select class="m-wrap block-level" multiple="multiple" data-placeholder="Regelingen">
                              <option value="1">regeling 1
                              <option value="2">regeling 2
                              <option value="1">Regeling 1</option>
                              <option value="2">Regeling 2</option>
                              <option value="3">Regeling 3</option>
                              <option value="4">Regeling 4</option>
                              <option value="5">Regeling 5</option>
                              <option value="6">Regeling 6</option>
                              <option value="7">Regeling 7</option>
                              <option value="8">Regeling 8</option>
                              <option value="9">Regeling 9</option>
                              <option value="10">Regeling 10</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- / Create Account: Form Regelingen -->
                  <!-- Create Account: Form Actions -->
                  <div class="form-actions">
                     <button type="submit" class="btn btn-primary">Aanmaken</button>
                  </div>
                  <!-- / Create Account: Form Actions -->
                  <div class="row-fluid">
                     <div class="span4">
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
      <!-- / Create Employee: Box -->
   </div>
</div>
