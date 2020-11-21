<?php 
/*
* Template name: inicio
*/
?>
<?php  get_header();  ?>
<section class="slider  ">
    <div class="container ">
        <div class="row item-center">
            <div class="col-12 col-md-6 text-white ">
            <h1>Condominio Villa Luciana</h1>
            <p>
                El proyecto condominio villa luciana te da la oportunidad de ser dueño del terreno soñado para ti y tu familia.
            </p>
            <p>
                Conache, distrito de laredo, goza de una ubicación privilegiada al encontrarse 
                estratégicamente cerca a zonas de gran potencial turístico por sus atractivos naturales y culturales.
            </p>
            <p>
                Siente la tranquilidad de vivir en un condominio de campo donde tendrás la 
                oportunidad de crecer en un entorno naturar rodeado de vegetación donde tú 
                y tu familia tendrán todo lo necesario para vivir en armonía y con el alcance.
            </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="form__box">
                <?php echo do_shortcode( '[contact-form-7 id="16" title="formulario home"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section id="lorem" >
    <div class="container ">
        <h2 class="text-center m-0">
            ¡Tu lote en Chilca a solo 15 min. de Trujillo!
        </h2>
        <!-- Grid row -->
<div class="gallery" id="gallery">

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/01.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/02.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/03.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/04.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/05.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/06.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

</div>
<!-- Grid row -->
    </div>
    
</section>
<section id="proyectos"> 
        <div class="container text-center pt-5 pb-5">
            <h2 class="pb-4 font-weight-bold">Nuestros Proyectos</h2>
            <div class="slider_proyectos">
                <div>
                    <img src="<?=get_template_directory_uri()?>/img/home.jpg" alt="">
                </div>
                <img class="arrow arrow_left" src="<?=get_template_directory_uri()?>/img/left.png">
                <img class="arrow arrow_right" src="<?=get_template_directory_uri()?>/img/right.png">
            </div>
            </div>
</section>
<section id="somos">
    <div class="container p-5 mb-2 text-white">
        <div class="row">
            <div class=" col-12 col-md-6 col-md-offset-6">
                <h3 class="font-weight-bold">Quienes Somos</h3>
                <p class="m-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </div>
</section>
<section id="imagenes">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <h2 class="mb-3">Lorem Ipsum</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4  ">
                <div class="color px-4 py-5 my-3">
                    <div class="mb-2">
                        <img src="<?=get_template_directory_uri()?>/img/image1.jpg" alt="">
                    </div>
                    <p class="pt-3 m-0" >It is a long established fact that  a reader will be distracted by the  readable content  </p>
                </div>
                   
            </div>
            <div class="col-12 col-md-4 ">
                   <div class="color px-4 py-5 my-3">
                    <div class="mb-2">
                        <img src="<?=get_template_directory_uri()?>/img/image1.jpg" alt="">
                    </div>
                    <p class="pt-3 m-0">It is a long established fact that  a reader will be distracted by the  readable content  </p>
                   </div>
            </div>
            <div class="col-12 col-md-4  my-3">
                    <div class="color px-4 py-5 ">
                        <div class="mb-2">
                            <img  src="<?=get_template_directory_uri()?>/img/image1.jpg" alt="">
                        </div>
                <p class="pt-3 m-0">It is a long established fact that a reader will be distracted by the readable content  </p>
                    </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>