<?
$select = "SELECT * FROM BitCursos WHERE eCodCurso = ".$_GET['v1'];
$r = mysql_fetch_array(mysql_query($select));
$tImagen = $tDirImages.$r{'tFlyer'};
?>
<section class="content4 cid-s91qcyP1PS mbr-parallax-background" id="content4-r">
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong><?=$r{'tTitulo'};?></strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="image1 cid-s91qx1Qb2e" id="image1-u">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="<?=$tImagen;?>" alt="Mobirise">
                    
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?=$r{'tObjetivo'};?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tabs content18 cid-s91qCdvC5Y" id="tabs1-w">

    

    
    <div class="container-fluid">
        
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
                <ul class="nav nav-tabs mb-4" role="tablist">
                    <li class="nav-item first mbr-fonts-style"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-w_tab0" aria-selected="true"><strong>Descripción</strong></a></li>
                    <li class="nav-item" style="display:none"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-w_tab1" aria-selected="true">
                            <strong>Temario</strong>
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-w_tab2" aria-selected="true">
                            <strong>Ubicación</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
                    
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <?=$r{'tObjetivo'};?></p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">Tema 1<br>Tema 2<br>Tema 3<br>Tema 4<br></p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <?=$r{'tUbicacion'};?></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
