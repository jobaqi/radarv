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
                                            <th>Resterend inzet
                                            <th>
                                            <th>Onderwijs</th>
                                            <th>BPV/SLB</th>
                                            <th>Examinering</th>
                                            <th>Taken</th>
                                            <th>Ontwikkeling</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($employees as $employee): ?>
                                        <tr>
                                            <th><a href="<?= url('/pvi') ?>"></a><?php echo e($employee->voornaam); ?></th>
                                            <th><?php echo e($employee->contract->aanstellingsOmvangWTF); ?></th>
                                            <th><?php echo e($employee->contract->func->schaal); ?></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
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
