

<section class="header16 cid-s90XVKrJR4" id="header16-3">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                    <strong>Yo soy "Mónica Musi"</strong></h1>
                
                
                <div class="video-wrapper mt-4"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/UpnTjDxiVaM?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</section>

<section class="content6 cid-s90YnmypuW" id="content6-4">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <hr class="line">
                <p class="mbr-text align-center mbr-fonts-style my-4 display-5">
                    <em>"Existen otros caminos para recuperar tu paz interior y estabilidad emocional"</em></p>
                <hr class="line">
            </div>
        </div>
    </div>
</section>

<section class="image1 cid-s90YIpE7Xf" id="image1-5">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="/assets/images/img-456.jpeg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    ¿Quién soy?</p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    
                    <p class="mbr-text mbr-fonts-style display-7">
                        [texto introductorio]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content2 cid-s90ZyHSYcS" id="content2-7">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Próximos Cursos</strong></h4>
            
        </div>
        <div class="row mt-4">
           <? 
            $select = "SELECT * FROM BitCursos ORDER BY eCodCurso DESC LIMIT 0,12";
            $rsCursos = mysql_query($select);
            while($rCurso = mysql_fetch_array($rsCursos)){ ?>
            <? $tImagen = $tDirImages.$rCurso{'tSlider'}; ?>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?=$tImagen;?>" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><?=$rCurso{'tTitulo'};?></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><em><?=date('d/m/Y H:i',strtotime($rCurso{'fhFechaCurso'}));?></em></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><?=substr($rCurso{'tDescripcion'},0,30);?></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/es/detalle-curso/v1/<?=sprintf("%07d",$rCurso{'eCodCurso'});?>/" class="btn item-btn btn-success display-7">Detalles</a></div>
                </div>
            </div>
            <? } ?>
            
        </div>
    </div>
</section>

<section class="content2 cid-s91kK7djDX" id="content2-8">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Últimas Entradas de Blog</strong></h4>
            
        </div>
        <div class="row mt-4">
           <? 
            $select = "SELECT * FROM BitPublicaciones ORDER BY eCodPublicacion DESC LIMIT 0,12";
            $rsCursos = mysql_query($select);
            while($rCurso = mysql_fetch_array($rsCursos)){ ?>
            <? $tImagen = $tDirImages.$rCurso{'tImagen'}; ?>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?=$tImagen;?>" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><?=base64_decode($rCurso{'tTitulo'});?></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><em><?=date('d/m/Y H:i',strtotime($rCurso{'tTitulo'}));?></em></h6>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="/es/detalle/v1/<?=sprintf("%07d",$rCurso{'eCodPublicacion'});?>/" class="btn item-btn btn-success display-7">Detalles</a></div>
                </div>
            </div>
            <? } ?>
            
        </div>
    </div>
</section>

<section class="gallery1 cid-s91m7hp2go" id="gallery1-9">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Fotogalería</strong></h4>
            
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="/assets/images/img-494.jpeg" alt="">
                    </div>
                    
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="/assets/images/img-0771-facetune-17-08-2020-9.jpeg" alt="">
                    </div>
                    
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="/assets/images/img-457.jpeg" alt="">
                    </div>
                    
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="/assets/images/img-495.jpeg" alt="" title="">
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
