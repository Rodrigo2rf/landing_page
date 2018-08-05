<?php
  
  require('assets/template/header.php');
  require('assets/template/header-nav.php');

?>

<div id="curso">
    <section id="info-cursos" class="container-fluid"> 
        <div v-if="exite"> 
    </section>

    <section class="container container-cursos">        
        <div v-if="!exite" color="error">
            Curso não encontrado.
        </div>
        <div v-if="exite">
            <div class="row"> 
                <div class="col-md-9">
                    
                    <h2>{{ curso.fullname }}</h2>

                    <img :src="curso.img_capa_curso" class="col capa-curso">

                    <p v-html="curso.summary"></p>
                </div>
                <div class="col-md-3">
                    <h2>INCLUSOS</h2>
                </div>
            </div>
        </div>
    </section>
</div>

<?php

    require('assets/template/footer-nav.php');
    require('assets/template/footer-script-type-c.php');
    require('assets/template/footer.php');

?>