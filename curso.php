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
                    <p v-html="curso.summary"></p>
                </div>
                <div class="col-md-3">
                    <h2>INCLUSOS</h2>
                </div>
            </div>
        </div>
    </section>

</div>

    <script src="assets/js/init_curso.js"></script>

<?php

    require('assets/template/footer-nav.php');
    require('assets/template/footer.php');

?>