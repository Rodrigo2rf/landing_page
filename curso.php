<?php
  
  require('assets/template/header.php');
  require('assets/template/header-nav.php');

?>

<div id="curso">

    <section id="info-cursos" class="container-fluid"> 
        <div class="row justify-content-md-center">
            <div class="col col-lg-6 card-informacoes-curso">
                <div class="row text-center">
                    <div class="col"><span>{{ curso.dia }}</span> <br> {{ curso.mes }}</div>
                    <div class="col"><span>{{ curso.horas }}</span> <br> HORAS/AULA</div>
                    <div class="col"><span>{{ curso.preco }}</span> <br> INVESTIMENTO</div>
                </div>
            </div>
        </div>
    </section>

    <section class="container container-cursos">        
        <div v-if="!exite" color="error">
            Curso não encontrado.
        </div>
        <div v-if="exite">
            <div class="row"> 
                <div class="col-md-9">
                    
                    <h4 class="color-green">{{ curso.fullname }}</h4>

                    <img :src="curso.img_capa_curso" class="col capa-curso mb-15 ml-0">

                    <p v-html="curso.summary"></p>
                </div>
                <div class="col-md-3">
                    <h4 class="color-green">RESERVE SUA VAGA</h4>
                    <button type="button" class="btn btn-action ">Reservar</button>
                </div>
            </div>
        </div>
    </section>

    <section v-if="curso.coordenador" id="coordenador" class="container-fluid container-cursos">  
        <div class="container">
            <h4 class="color-green">Coordenador</h4>
            <p>{{ curso.coordenador }}</p>
        </div>
    </section>

</div>

<?php

    require('assets/template/footer-nav.php');
    require('assets/template/footer-script-type-c.php');
    require('assets/template/footer.php');

?>