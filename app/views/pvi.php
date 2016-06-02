<!-- Content Container -->
<div class="container">

    <!-- Forms -->
    <div class="row-fluid">
        <!-- Forms: Box -->
        <div class="span6">
            <!-- Forms: Top Bar -->
            <div class="top-bar">
                <h3><i class="icon-cog"></i>Persoonlijke gegevens</h3>
            </div>
            <!-- / Forms: Top Bar -->
            <!-- Forms: Content -->
            <div class="well no-padding">
                <!-- Forms: Form -->
                <form class="form-horizontal">
                    <!-- Forms: achternaam -->
                    <div class="control-group">
                        <label class="control-label" for="inputNormal"><i class="icon-user"></i>Medewerker</label>
                        <div class="controls">
                            <select class="span12">
                                <?php foreach($employees as $em): ?>
                                    <option value="<?php echo $em->id; ?>"><?php echo $em->voornaam; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- / Forms: achternaam -->
                    <!-- Forms: Form geb datum -->
                    <div class="control-group">
                        <label class="control-label" for="inputDate"><i class="icon-user"></i>Geboortedatum</label>
                        <div class="controls">
                            <select class="span3" disabled>
                                <option value="01">06
                            </select>
                            <select class="span3" disabled>
                                <option value="Month">Augustus
                            </select>
                            <select class="span3" disabled>
                                <option value="1984">1984
                            </select>
                        </div>
                    </div>
                    <!-- / Forms: geb datum -->
                    <!-- Forms: Form functie -->
                    <div class="control-group">
                        <label class="control-label" for="inputPassword"><i class="icon-key"></i>Functie</label>
                        <div class="controls">
                            <select class="span12" disabled>
                                <option value="number">Docent LC(11)
                                <option value="01">Begeleider(9)
                                <option value="02">Docent LB(10)
                                <option value="04">Docent LD(12)
                            </select>
                        </div>
                    </div>
                    <!-- / Forms: Form functie -->
                    <!-- Forms: Form aanstelling -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-edit"></i>Aanstelling</label>
                        <div class="controls">
                            <input type="text" class="input-small" placeholder="1.0" disabled>
                            <label class="label"><i class="icon-circle"></i>1659 op jaarbasis</label>
                        </div>
                    </div>
                    <!-- / Forms: Form aanstelling -->
                    <!-- Forms: Form handtekening -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-edit"></i>Handtekening</label>
                        <div class="controls">
                            <textarea rows="3" class="span12"></textarea>
                        </div>
                    </div>
                    <!-- / Forms: Form handtekening -->
                    <!-- Forms: Form Actions -->
                    <div class="control-group">
                        <label class="label"><i class="icon-edit"></i>Besproken met: Peter de Jager / Datum: [vandaag]</label>
                        <!-- / Forms: Form Actions -->
                    </div>
                </form>
                <!-- / Forms: Form -->           
            </div>
            <!-- / Forms: Content -->
        </div>
        <!-- / Forms: Box -->
        <!-- Forms: Box -->
        <div class="span6">
            <!-- Forms: Top Bar -->
            <div class="top-bar">
                <h3><i class="icon-cog"></i>Regelingen</h3>
            </div>
            <!-- / Forms: Top Bar -->
            <!-- Forms: Content -->
            <div class="well no-padding">
                <!-- Forms: Form -->
                <form class="form-horizontal">
                    <!-- Forms: inzetbaar -->	
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-circle"></i>Weken inzetbaar</label>
                        <div class="controls">
                            <select class="span4">
                                <option value="number">40
                                <option value="01">39
                                <option value="02">38
                                <option value="03">2
                                <option value="04">1
                            </select>
                            <label class="label"><i class="icon-circle"></i>1659 uur inzetbaar</label>
                        </div>
                    </div>
                    <!-- / Forms inzetbaar -->
                    <!-- Forms: Form seniorendagen -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-edit"></i>Seniorendagen</label>
                        <div class="controls">
                            <input type="text" class="span12 m-wrap" placeholder="vul dag(en) in. Wordt automatisch vertaald in uren ">
                        </div>
                    </div>
                    <!-- / Forms: Form seniorendagen -->
                    <!-- Forms: Inline bapo -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-key"></i>Bapo</label>
                        <div class="controls">
                            <input type="text" class="input-small" placeholder="urenberekening">
                        </div>
                    </div>
                    <!-- / Forms: Inline bapo -->
                    <!-- Forms: Form overige auto berekening -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-check"></i>Overige</label>
                        <div class="controls">
                            <label class="label"><i class="icon-circle"></i>??? uur Ind. desk. bevordering</label>
                        </div>
                        <div class="controls">
                            <label class="label"><i class="icon-circle"></i>??? Buiten het team (g/l)</label>
                        </div>
                    </div>
                    <!-- / Forms: Form overige auto berekening -->
                    <!-- Forms: Form Actions -->
                    <div class="control-group">
                        <div class="controls">
                            <p>Resterend inzetbaar --- uur </p>
                            <small>Deze uren kunnen hierna verdeeld worden over taken of onderwijs</small>
                        </div>
                    </div>
                    <!-- / Forms: Form Actions -->
                </form>
                <!-- / Forms: Form -->           
            </div>
            <!-- / Forms: Content -->
        </div>
        <!-- / Forms: Box -->
    </div>
    <!-- / Forms -->
    <!-- Forms -->
    <div class="row-fluid">
        <!-- Forms: Box -->
        <div class="span12">
            <!-- Basic World Map: Top Bar -->
            <div class="top-bar">
                <ul class="tab-container">
                    <li class="active"><a href="#tab-onderwijs"><i class="icon-home"></i>Onderwijs</a></li>
                    <li><a href="#tab-taken"><i class="icon-user"></i>Taken</a></li>
                </ul>
            </div>
            <!-- / Tabs: Top Bar -->
            <!-- Tabs: Content -->
            <div class="well no-padding">
                <div class="tab-content well">
                    <div class="tab-pane active" id="tab-onderwijs">
                        <!-- Forms: Content -->
                        <div class="well no-padding">
                            <div class="span12">
                                <!-- Add News: WYSIWYG Editor -->
                                <table class="table well">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Omschrijving (vak + klas)</th>
                                            <th>ot/ow</th>
                                            <th>v&n</th>
                                            <th>P1</th>
                                            <th>P2</th>
                                            <th>P3</th>
                                            <th>P4</th>
                                            <th>Weken</th>
                                            <th>gem. uu p week</th>
                                            <th>op jaarbasis</th>
                                            <th>wtf jaarbasis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>u</td>
                                            <td>[4VAOW1A]Project theorie HTML</td>
                                            <td>ot</td>
                                            <td>40%</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>10</td>
                                            <td>3</td>
                                            <td>34</td>
                                            <td>0,23</td>
                                        </tr>
                                        <tr>
                                            <td>u</td>
                                            <td>[4VAOW3A]C# Gevorderd</td>
                                            <td>ot</td>
                                            <td>40%</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>10</td>
                                            <td>3</td>
                                            <td>34</td>
                                            <td>0,23</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- / Add News: WYSIWYG Editor -->
                                <div class="accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                                            <i class="icon-bug"></i> Toevoegen owt
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <div class="control-group">
                                                    <label class="control-label" for="inputInline"><i class="icon-circle"></i>Klas</label>
                                                    <div class="controls">
                                                        <select class="span4">
                                                            <option value="number">4VAOW1A</option>
                                                            <option value="01">4VAOW1B</option>
                                                            <option value="02">4VAOW2A</option>
                                                            <option value="03">4VAOW2B</option>
                                                            <option value="04">4VAOW3A</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputInline"><i class="icon-edit"></i>Vak</label>
                                                    <div class="controls">
                                                        <input type="text" class="span4 m-wrap">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Add News: Box -->
                        </div>
                        <!-- / Forms: Content -->
                    </div>
                    <div class="tab-pane" id="tab-taken">
                        <p>Deze medewerker heeft geen taken toegewezen</p>
                        <div class="accordion">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                                    <i class="icon-bug"></i> Toevoegen taak
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <div class="control-group">
                                            <label class="control-label" for="inputInline"><i class="icon-circle"></i>Taak</label>
                                            <div class="controls">
                                                <select class="span4">
                                                    <option value="number">Natschool beheer
                                                    <option value="01">Kerndocent
                                                    <option value="02">Examinering
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Tabs: Content -->
        </div>
        <!-- / Forms: Box -->
    </div>
    <!-- / Forms -->
</div>