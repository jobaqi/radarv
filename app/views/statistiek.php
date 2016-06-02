<!-- Content Container -->
<div class="container">
    <!-- Main Navigation: Box -->
    <div class="navbar navbar-inverse" id="nav">
    </div>
    <!-- / Main Navigation: Box -->
    <!-- Forms -->
    <div class="row-fluid">
        <!-- Forms: Box -->
        <div class="span12">
            <!-- Basic World Map: Top Bar -->
            <div class="top-bar">
                <ul class="tab-container">
                    <li class="active"><a href="#tab-medewerkers"><i class="icon-th-list"></i>Analyse</a></li>
                </ul>
            </div>
            <!-- / Tabs: Top Bar -->
            <!-- Tabs: Content -->
            <div class="well">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-medewerkers">
                        <!-- Forms: Content -->
                        <div class="well no-padding">
                            <div class="span12">
                                <!-- Add News: WYSIWYG Edior -->
                                <table class="table well">
                                    <thead>
                                        <tr>
                                            <th>Voornaam</th>
                                            <th>Aanstelling</th>
                                            <th>Schaal</th>
                                            <th>Regeling</th>
                                            <th>Resterend inzet</th>
                                            <th>Onderwijs</th>
                                            <!-- <th>BPV/SLB</th> -->
                                            <!-- <th>Examinering</th> -->
                                            <th>Taken</th>
                                            <th>Ontwikkeling</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($employees as $employee): ?>
                                        <tr>
                                            <td><a href="<?= url('/pvi') ?>"></a><?php echo e($employee->voornaam); ?></td>
                                            <td><?php echo e($employee->contract->aanstellingsOmvangWTF); ?></td>
                                            <td><?php echo e($employee->contract->func->schaal); ?></td>
                                            <?php
                                                    $regeling_hours = 0;
                                                    foreach($employee->regelingen as $regeling){
                                                        $regeling_hours = $regeling_hours + $regeling->urenEenWTFEenJaar;
                                                }
                                            ?>
                                            <td class="custom-data"><?php echo e($regeling_hours); ?></td>
                                            <td><?php echo e(round(\App\Helpers\Formula::remainingHours($employee->contract->aanstellingsOmvangWTF, $regeling_hours))); ?></td>
                                            <td>
                                                <?php
                                                $weken = 0;
                                                foreach($employee->takenmedewerker as $taak) {
                                                    $weken = $weken + $taak->aantalWeken;
                                                }
                                                echo $weken;

                                                ?>
                                            </td>
                                            <td><?php
                                                    $weken = 0;
                                                    foreach($employee->onderwijsTaken as $taak) {
                                                        $weken = $weken + $taak->aantalWeken;
                                                    }
                                                    echo $weken;
                                                ?>
                                                    
                                            </td>
                                            <td></td>
                                            <td></td>
<!--                                             <td></td>
                                            <td></td> -->
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- / Add News: WYSIWYG Edior -->
                            </div>
                            <!-- / Add News: Box -->
                        </div>
                        <!-- / Forms: Content -->
                    </div>
                </div>
            </div>
            <!-- / Tabs: Content -->
        </div>
        <!-- / Forms: Box -->
    </div>
    <!-- / Forms -->
</div>
