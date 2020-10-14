
   <section class="content4 cid-s91oft52ax mbr-parallax-background" id="content4-j">
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Blog</strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="content2 cid-s91phSdCqc" id="content2-p">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Blog</strong></h4>
            
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
