<?php
  
  require('template/header.php');
  require('template/header-nav.php');

?>

<div id="curso"  class="wrap push">

    <section id="info-cursos" class="container-fluid bg-info-curso"> 
        <div class="row justify-content-center">
            <div v-if="curso.dia != '' && curso.horas != '' && curso.preco != ''" class="col-11 col-lg-7 col-sm-10 card-informacoes-curso">
                <div class="row text-center">
                    <div v-if="curso.dia    != ''" class="col">Início <span>{{ curso.dia }}  </span> <br> {{ curso.mes }}</div>
                    <div v-if="curso.horas  != ''" class="col"><span>{{ curso.horas }}</span> <br> HORAS/AULA</div>
                    <div v-if="curso.preco  != ''" class="col"><span>{{ curso.preco }}</span> <br> INVESTIMENTO</div>
                </div>
            </div>
        </div>
    </section>

    <section class="container container-cursos">        
        <div v-if="!exite" color="error">
            <p class="text-danger">Nenhum curso encontrado!</p>
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
                    <div v-if="curso.matricula == true">
                        <a :href="curso.link_inscricao" type="button" class="btn btn-action">Reservar</a>
                    </div>
                    <div v-if="curso.matricula == false">
                        <button type="button" type="button" class="btn btn-disabled" disabled>Matriculas encerradas</button>
                    </div>
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

    require('template/footer-nav.php');
    require('template/footer-script-curso.php');
    require('template/footer.php');

?>