
<section class="content4 cid-s91p5NbX4s mbr-parallax-background" id="content4-m">
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Próximos cursos</strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features8 cid-s91p5NCd9x" xmlns="http://www.w3.org/1999/html" id="features9-n">
    
    

    

    <div class="container">
       <? 
            $select = "SELECT * FROM BitCursos ORDER BY eCodCurso DESC LIMIT 0,12";
            $rsCursos = mysql_query($select);
            while($rCurso = mysql_fetch_array($rsCursos)){ ?>
            <? $tImagen = $tDirImages.$rCurso{'tSlider'}; ?>
            <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="<?=$tImagen;?>" alt="Monica Musi">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h6 class="card-title mbr-fonts-style display-5">
                                        <strong><?=$rCurso{'tTitulo'};?></strong></h6>
                                    <p class="mbr-text mbr-fonts-style display-7"><?=substr($rCurso{'tDescripcion'},0,30);?></p>
                                </div>
                                <div class="col-md-auto">
                                    
                                    <div class="mbr-section-btn"><a href="/es/detalle-curso/v1/<?=sprintf("%07d",$rCurso{'eCodCurso'});?>/" class="btn btn-success display-4">
                                            Detalles</a></div>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <? } ?>
        
    </div>
</section>
