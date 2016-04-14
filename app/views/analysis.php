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
                    <!--aantal tabladen wordt geladen uit database (aantal medewerkers)-->
                    <li><a href="#tab-1">1</a></li>
                    <li><a href="#tab-2">2</a></li>
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
                                            <th>#</th>
                                            <th>Naam</th>
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
                                        <tr>
                                            <th>1</th>
                                            <th><a href="<?= url('/pvi') ?>">Vinod Poenai</a></th>
                                            <th>1.0</th>
                                            <th>LC</th>
                                            <th>0</th>
                                            <th>1659
                                            <th>
                                            <th>1000</th>
                                            <th>200</th>
                                            <th>0</th>
                                            <th>100</th>
                                            <th>100</th>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th><a href="<?= url('/pvi') ?>">Anjo Eijeriks</a></th>
                                            <th>1.0</th>
                                            <th>LC</th>
                                            <th>170</th>
                                            <th>1430
                                            <th>
                                            <th>1300</th>
                                            <th>100</th>
                                            <th>0</th>
                                            <th>0</th>
                                            <th>0</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- / Add News: WYSIWYG Edior -->
                            </div>
                            <!-- / Add News: Box -->
                        </div>
                        <!-- / Forms: Content -->
                    </div>
                    <div class="tab-pane" id="tab-1">
                        <p>Vinod Poenai kan nog 100 uur ingezet worden. <a href="<?= url('/pvi') ?>">Bekijk detailpagina</a></p>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <p>Anjo Eijeriks wordt 10 uur teveel ingezet. <a href="<?= url('/pvi') ?>">Bekijk detailpagina</a></p>
                    </div>
                </div>
            </div>
            <!-- / Tabs: Content -->
        </div>
        <!-- / Forms: Box -->
    </div>
    <!-- / Forms -->
</div>
