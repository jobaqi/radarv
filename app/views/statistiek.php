<div class="mdl-grid" style="overflow-x: auto;">
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell mdl-cell--12-col">
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
</div>