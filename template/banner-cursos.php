<section id="info-cursos" class="container-fluid bg-cursos">
    <div class="offset-md-2 col-md-8 mb-5">
        <h2 class="text-light mb-5">Cursos</h2>
        <p class="text-light">Com novas instalações e uma maior quantidade de cursos e eventos oferecidos, a Escola de Oncologia desenvolverá ainda mais o estudo e as pesquisas nas áreas ligadas à atenção oncológica.</p>
    </div>    
    <div class="barra-pesquisar">
        <input type="text" placeholder="Pesquisar curso" v-model="filter_fullname">
    </div>
    <div id="trocar-modalidade" class="row justify-content-center menu-de-cursos">
        <a href="<?=url_cur_tecnico?>" class="link-menu-de-cursos col-md-2 text-center <?php if($id_cursos >= 7 && $id_cursos <= 9){ echo 'ativo'; }?>">
            Cursos<br>Técnicos
        </a>
        <a href="<?=url_cur_posgraduacao?>" class="link-menu-de-cursos col-md-2 text-center <?php if($id_cursos >= 10 && $id_cursos <= 12){ echo 'ativo'; }?>">
            Cursos<br>Pós-Graduação
        </a>
        <a href="<?=url_cur_atualizacao?>" class="link-menu-de-cursos col-md-2 text-center <?php if($id_cursos >= 13 && $id_cursos <= 15){ echo 'ativo'; }?>"> 
            Cursos<br>Atualização
        </a> 
    </div>
</section>