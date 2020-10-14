<?
$select = "SELECT * FROM BitPublicaciones WHERE eCodPublicacion = ".$_GET['v1'];
$rs = mysql_query($select);
$r = mysql_fetch_array($rs);
$tImagen = $tDirImages.$r{'tImagen'};
?>
   <section class="content4 cid-s91qcyP1PS mbr-parallax-background" id="content4-r">
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong><?=base64_decode($r{'tTitulo'});?></strong></h3>
                
                
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
                    
                    <?=base64_decode($r{'tContenido'});?>
                </div>
            </div>
        </div>
    </div>
</section>
