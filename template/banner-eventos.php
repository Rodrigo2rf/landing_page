<section id="info-cursos" class="container-fluid bg-eventos">
    <div class="offset-md-2 col-md-8 mb-5">
        <h2 class="text-light mb-5">Eventos</h2>
        <p class="text-light">Aqui podemos colocar o texto da index ou uma descrição mais completa, assim como alterar a imagem e adicionar uma que faça referencia a categoria 'Eventos'.</p>
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