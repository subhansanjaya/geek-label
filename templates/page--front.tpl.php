<!-- banner section -->
<section id="banner" class="banner">
  <div class="container banner__container">
    <div class="row">
      <div class="col-md-12 ">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <?php print render($page['header']); ?>
      </div>
      <div class="clearfix"></div>
      <a href="#design" class="scroll-btn bounce"><i class="fa fa-angle-down"></i></a>
    </div><!-- / .row -->
  </div><!-- / .banner__container -->
</section><!-- / .banner -->

<!-- design section -->
<section id="design" class="design">
 <div class="container design__container">
   <div class="row">
     <div class="col-md-12 ">
       <?php print render($page['design']); ?>
     </div>
  </div><!-- .row -->
  <a href="#build" class="scroll-btn red bounce"><i class="fa fa-angle-down"></i></a>
 </div><!--/ .design__container -->
</section><!-- / .design -->

<!-- build section -->
<section id="build" class="build">
  <div class="container build__container">
   <div class="row">
       <div class="col-md-12 ">
   <?php print render($page['build']); ?>
  </div>
  </div><!-- .row -->
  <a href="#love" class="scroll-btn red bounce"><i class="fa fa-angle-down"></i></a>
 </div><!--/ .build__container -->
</section><!-- / .build -->

<!-- love section -->
<section id="love" class="love">
  <div class="container love__container">
    <div class="row">
    <div class="col-md-12 ">
        <?php print render($page['design_build']); ?>
    </div>
  </div><!-- .row -->
  <a href="#services" class="scroll-btn red bounce"><i class="fa fa-angle-down"></i></a>
  </div><!--/ .love__container -->
</section><!-- / .love-->

<!-- services section -->
<section id="services" class="services" >
  <div class="container services__container">
    <div class="row">
      <div class="col-md-12 ">
      <?php print render($page['services']); ?>
      </div>
    </div><!-- .row -->
    <a href="#clients" class="scroll-btn black bounce"><i class="fa fa-angle-down"></i></a>
  </div><!--/ .services__container -->
</section><!-- / .services -->

<!-- clients section -->
<section id="clients" class="clients" >
<div class="container clients__container">
  <div class="row">
    <div class="col-md-12" >
    <?php print render($page['clients']); ?>
    </div>
  </div><!-- .row -->
  <a href="#how-to-find" class="scroll-btn black bounce" ><i class="fa fa-angle-down"></i></a>
 </div><!--/ .clients__container -->
</section><!-- / .clients -->

<!-- how to find section -->
<section id="how-to-find" class="how-to-find">
 <div class="container-fluid">
     <div class="row">
       <?php print render($page['map']); ?>
     </div>
     </div>
     <a href="#contact" class="scroll-btn red bounce"><i class="fa fa-angle-down"></i></a>
 </div><!-- /.container-fluid -->
</section><!-- / .section How to find -->

<!-- contact -->
<section id="contact" class="contact">
  <div class="container contact__container">
      <div class="row">
          <?php print render($page['contact']); ?>
        <div class="contact__desktop">
           <?php print render($page['contact_desktop']); ?>
        </div><!-- / .contact__desktop-->
        <div class="contact__mobile">
          <?php print render($page['contact_mobile']); ?>
        </div><!-- / .contact__mobile-->
      </div><!-- / .row -->
  </div><!-- /.container -->
</section><!-- / #contact -->
