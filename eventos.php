<?php
    
    require('template/header.php');
    require('template/header-nav.php');

    if(isset($_GET['categoryid'])){ 
        $id_cursos = $_GET['categoryid'];
    }

?>

<div id="app">

    <section id="info-cursos" class="container-fluid">
        <div class="offset-md-2 col-md-8 mb-5">
            <h2 class="text-light mb-5">Escola de Oncologia</h2>
            <p class="text-light">Com novas instalações e uma maior quantidade de cursos e eventos oferecidos, a Escola de Oncologia desenvolverá ainda mais o estudo e as pesquisas nas áreas ligadas à atenção oncológica.</p>
        </div>    
        <div class="barra-pesquisar">
            <input type="text" placeholder="Pesquisar curso" v-model="filter_fullname">
        </div>
        <div id="trocar-modalidade" class="row justify-content-center menu-de-cursos">
            <a href="<?=url_eve_congressos?>" class="link-menu-de-cursos col-md-2 text-center <?php if($id_cursos == 20){ echo 'ativo'; }?>">Congressos</a>
            <a href="<?=url_eve_simposios?>" class="link-menu-de-cursos col-md-2 text-center <?php if($id_cursos == 21){ echo 'ativo'; }?>">Simpósios</a>
            <a href="<?=url_eve_jornadas?>" class="link-menu-de-cursos col-md-2 text-center <?php if($id_cursos == 22){ echo 'ativo'; }?>">Jornadas</a>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container container-cursos">
            <div v-if="!showList" color="error">
                <p class="text-danger">Nenhum curso encontrado!</p>
            </div>
            <div v-if="showList"> 
                <div class="row">
                    <ul class="lista-cursos">
                        <li v-for="(curso, index) in filteredRows.slice(pageStart, pageStart + countOfPage)" v-if="curso.id != 1" class="col-sm-6 col-md-3 pt-2 pb-4">
                            <a :href="'/landing_page/curso.php?q=' + curso.id">
                            <div class="card">
                                <div class="card-img background-img mb-2 mt-4" :style="{ backgroundImage: 'url(' + curso.img_capa_curso + ')' }"></div>
                                <div class="card-body">
                                    <h6 class="color-green">{{ curso.fullname }}</h6>
                                    <p class="card-text" v-html="curso.descricao"></p>
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
    require('template/footer-script-eventos.php');
    require('template/footer.php');

?>
