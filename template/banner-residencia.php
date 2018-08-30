<section id="info-cursos" class="container-fluid  bg-residencia">
    <div class="offset-md-2 col-md-8 mb-5">
        <h2 class="text-light mb-5">Residência</h2>
        <p class="text-light">Com novas instalações e uma maior quantidade de cursos e eventos oferecidos, a Escola de Oncologia desenvolverá ainda mais o estudo e as pesquisas nas áreas ligadas à atenção oncológica.</p>
    </div>    
    <div class="barra-pesquisar">
        <input type="text" placeholder="Pesquisar curso" v-model="filter_fullname">
    </div>
    <div id="trocar-modalidade" class="row justify-content-center menu-de-cursos">
        <a href="<?=url_res_medica?>" class="link-menu-de-cursos col-md-3 dv-2 text-center <?php if($id_cursos == 17){ echo 'ativo'; }?>">Residência<br>Médica</a>
        <a href="<?=url_res_multidisciplinar?>" class="link-menu-de-cursos col-md-3 dv-2 text-center <?php if($id_cursos == 18){ echo 'ativo'; }?>">Residência<br>Multidisciplinar</a> 
    </div>
</section>