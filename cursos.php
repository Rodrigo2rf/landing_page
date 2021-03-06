<?php
    
    require('template/header.php');
    require('template/header-nav.php');

    if(isset($_GET['categoryid'])){ 
        $id_cursos = $_GET['categoryid']; 
        if( $id_cursos >= 7 && $id_cursos <= 9 ){ $id_categoria_busca = 7; }
        if( $id_cursos >= 10 && $id_cursos <= 12 ){ $id_categoria_busca = 10; }
        if( $id_cursos >= 13 && $id_cursos <= 15 ){ $id_categoria_busca = 13; }
    }

?>

<div id="app"  class="wrap push">

    <?php
        require('template/banner-cursos.php');
    ?>

    <section class="container-fluid">
        <div class="container container-cursos">
            <div id="navigation">
                <ul>
                    <li @click.prevent="getCursos(<?=$id_categoria_busca?>)"><a class="sub-menu-categoria active" href="">Todos</a></li>
                    <li @click.prevent="getCursos(<?=$id_categoria_busca + 1?>)"><a class="sub-menu-categoria " href="">Presencial</a></li>
                    <li @click.prevent="getCursos(<?=$id_categoria_busca + 2?>)"><a class="sub-menu-categoria " href="">À Distância</a></li>
                </ul>
            </div>

            <div class="block-filtro" style="width: 270px">
                <span class="float-left mr-2">Filtrar por:</span>
                <select name="LeaveType" @change="changeFilter()" class="form-control form-control-sm" style="width: 195px" v-model="filtro_matricula">
                    <option value="1" selected="selected">Todos</option>
                    <option value="2">Matrículas abertas</option>
                </select>
            </div>

            <div v-if="!showList" color="error">
                <p class="text-danger">Nenhum curso encontrado!</p>
            </div>
            <div v-if="showList"> 
                <div class="row">
                    <ul class="lista-cursos">
                        <li v-for="(curso, index) in filteredRows.slice(pageStart, pageStart + countOfPage)" v-if="curso.id != 1" class="col-sm-6 col-md-3 pt-2 pb-4">
                            <a :href="'/landing_page/curso.php?q=' + curso.id">
                            <div class="card">
                                <span class="info-matricula" v-if="curso.matricula == true">Matrículas abertas</span>
                                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + curso.img_capa_curso + ')' }"></div>
                                <div class="card-body">
                                    <h6 class="color-green">{{ curso.fullname }}</h6>
                                    <!-- <p class="card-text" v-html="curso.descricao"></p> -->
                                </div>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    <li class="page-item" v-bind:class="{'disabled': (currPage === 1)}" @click.prevent="setPage(currPage-1)"><a class="page-link" href="">Prev</a></li>
                    <li class="page-item" v-for="n in totalPage" v-bind:class="{'active': (currPage === (n))}" @click.prevent="setPage(n)"><a class="page-link" href="">{{n}}</a></li>
                    <li class="page-item" v-bind:class="{'disabled': (currPage === totalPage)}" @click.prevent="setPage(currPage+1)"><a class="page-link" href="">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

</div>

<?php

    require('template/footer-nav.php');
    require('template/footer-script-cursos.php');
    require('template/footer.php');

?>
