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
                                <option value="number">Vinod Poenai
                                <option value="01">Andesh Harnam
                                <option value="02">Anjo Eijeriks
                            </select>
                        </div>
                    </div>
                    <!-- / Forms: achternaam -->
                    <!-- Forms: Form handtekening -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-edit"></i>Handtekening</label>
                        <div class="controls">
                            <textarea rows="3" class="span12"></textarea>
                        </div>
                    </div>
                    <!-- / Forms: Form handtekening -->
                </form>
                <!-- / Forms: Form -->
                <!-- Forms: Form checkbox -->
                    <div class="control-group">
                        <div id="custom-checkbox" class="controls">
                            <label class="checkbox">
                                <div class="checker"><span><input type="checkbox" value=""></span></div> Besproken met: Peter de Jager / Datum: <?php echo date("d-m-y"); ?> (als niet gechecked is kan niet opslaan)
                            </label>
                        </div>
                    </div> 
                <!-- / Forms: Form checkbox -->                          
            </div>
            <!-- / Forms: Content -->
        </div>
        <!-- / Forms: Box -->
        <!-- Forms: Box -->
        <div class="span6">
            <!-- Forms: Top Bar -->
            <div class="top-bar">
                <h3><i class="icon-cog"></i>Inzetbaar</h3>
            </div>
            <!-- / Forms: Top Bar -->
            <!-- Forms: Content -->
            <div class="well no-padding">
                <!-- Forms: Form -->
                <form class="form-horizontal">
                    <!-- Forms: inzetbaar -->	
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-circle"></i>Weken</label>
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
                    <!-- Forms: Form overige auto berekening -->
                    <div class="control-group">
                        <label class="control-label" for="inputInline"><i class="icon-check"></i>Regelingen</label>
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
                            <small>Deze uren kunnen      verdeeld worden over taken of onderwijs</small>
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
    <div class="accordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                    <i class="icon-book"></i> Onderwijs
                </a>
            </div>
            <form id="form-accordion">
            <div id="collapseOne" class="accordion-body collapse">            
                <div class="accordion-inner">
                    <div class="control-group">
                        <div class="controls">
                            <div class="span11">
                            <select class="m-wrap block-level span2" multiple="multiple" data-placeholder="percentage">
                                <option value="1">40</option>
                                <option value="2">25</option>
                                <option value="3">73</option>
                            </select>
                            <select class="m-wrap block-level span2" multiple="multiple" data-placeholder="Vak">
                                <option value="1">C#</option>
                                <option value="2">Javascript</option>
                                <option value="3">Database</option>
                            </select>
                            <select class="m-wrap block-level span2" multiple="multiple" data-placeholder="Klas">
                                <option value="1">4VAOW3A</option>
                                <option value="2">4MDR1B</option>
                                <option value="3">4VAOW2A</option>
                            </select>
                            <select class="m-wrap block-level span2" multiple="multiple" data-placeholder="Start week">
                                <option value="1">1</option>
                                <option value="2">14</option>
                                <option value="3">21</option>
                            </select>
                            <select class="m-wrap block-level span2" multiple="multiple" data-placeholder="Aantal weken">
                                <option value="1">10</option>
                                <option value="2">6</option>
                                <option value="3">20</option>
                            </select>
                                <select class="m-wrap block-level span2" multiple="multiple" data-placeholder="Aantal uren">
                                <option value="1">10</option>
                                <option value="2">6</option>
                                <option value="3">20</option>
                            </select>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            </form>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseTwo">
                    <i class="icon-ticket"></i> Taken
                </a>
            </div>
            <form>
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="control-group">
                        <div class="controls">
                            <div class="span11">
                            <select class="m-wrap block-level span11" multiple="multiple" data-placeholder="Taak - Uren">
                                <option value="1">Taak1 - 300 uur</option>
                                <option value="2">Taak2 - 255 uur</option>
                                <option value="3">Taak3 - 800 uur</option>
                                <option value="4">Taak4 - 25 uur</option>
                                <option value="5">Taak5 - 1200 uur</option
                                <option value="6">Taak6 - 173 uur</option>
                            </select>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </div>    
</div>