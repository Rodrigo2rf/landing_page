
<nav id="menu" class="panel" role="navigation">
    <div class="menu-list">
        <!-- menu -->
        <div id="MainMenu" class="menu-lateral-mobile">
            <div class="list-group panel">
                <a href="<?=url_index?>" class="list-group-item" data-parent="#MainMenu"><span style="font-size:125%;">Home</span></a>
                <a href="#cursos" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><span style="font-size:125%;">Cursos</span><i class="fa fa-caret-down"></i></a>
                <div class="collapse" id="cursos">
                    <a href="<?=url_cur_tecnico?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Técnico</a>
                    <a href="<?=url_cur_posgraduacao?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Pós-Graduação</a>
                    <a href="<?=url_cur_atualizacao?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Atualização</a>
                </div>
                <a href="#eventos" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><span style="font-size:125%;">Eventos</span><i class="fa fa-caret-down"></i></a>
                <div class="collapse" id="eventos">
                    <a href="<?=url_eve_congressos?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Congressos</a>
                    <a href="<?=url_eve_simposios?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Simpósios</a>
                    <a href="<?=url_eve_jornadas?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Jornadas</a>
                </div>
                <a href="#posgraduacao" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><span style="font-size:125%;">Residência</span><i class="fa fa-caret-down"></i></a>
                <div class="collapse" id="posgraduacao">
                    <a href="<?=url_res_medica?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Médica</a>
                    <a href="<?=url_res_multidisciplinar?>" class="list-group-item" style="background:#005e34; padding-left:35px; font-size:125%;">Multidisciplinar</a>
                </div>
                <a href="#" class="list-group-item" data-parent="#MainMenu"><span style="font-size:125%;">Pesquisa clínica</span></a>
                <a href="<?=url_moodle?>" class="list-group-item" data-parent="#MainMenu"><span style="font-size:125%;">Login</span></a>
            </div>
        </div>
    </div>
</nav>

<div class="wrap push">

    <!-- Barra contato -->
    <div id="topo" class="container-fluid barra-contato text-white d-flex align-items-center">
        <div class="container text-right">
            Fone 55 (84) 4009 5501 | sec.depecom@liga.org.br
        </div>
    </div>

    <div class="container-fluid menu-mobile">
        <div class="container">
            <div class="row">
                <a class="menu-link" href="#menu"><i class="material-icons">menu</i></a>
                <a href="<?=url_index?>">
                <img src="<?=url_index?>/assets/img/logo.png" height="50px" alt="Liga Contra o Câncer" title="Liga Contra o Câncer"></a>
            </div>
        </div>
    </div>

    <!-- Barra de menu -->
    <div class="container-fluid barra-menu d-flex">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-2 d-flex align-items-center text-left">
                    <a href="<?=url_index?>"><img src="<?=url_index?>/assets/img/logo.png" height="50px" alt="Liga Contra o Câncer" title="Liga Contra o Câncer"></a>
                </div>
                <div class="col-md-10">
                    <div class="col-md-1 bt-login no-gutters float-right">
                        <a class="text-center" href="<?=url_moodle?>">Login</a>
                    </div>
                    <div class="menu-horizontal float-right">
                        <ul class="list-inline icons-redes-sociais text-center">
                            <li class="list-inline-item m-0">
                                <a href="https://www.facebook.com/ligacontraocancer/" target="_blank" title="Facebook">
                                <img class="ml-3" src="<?=url_index?>/assets/img/icones_redes_sociais/facebook_gray.svg"></a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a href="https://www.instagram.com/ligacontraocancer/" target="_blank" title="Instagram">
                                <img class="ml-3" src="<?=url_index?>/assets/img/icones_redes_sociais/instagram_gray.svg"></a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a href="https://twitter.com/liga_cancer" target="_blank" title="Twitter">
                                <img class="ml-3" src="<?=url_index?>/assets/img/icones_redes_sociais/twitter_gray.svg"></a>
                            </li>
                            <li class="list-inline-item m-0">
                                <a href="https://www.youtube.com/c/LigaContraoC%C3%A2ncerrn" target="_blank" title="Youtube">
                                <img class="ml-3 mr-3" src="<?=url_index?>/assets/img/icones_redes_sociais/youtube_gray.svg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="float-right">
                            <div class="menu-horizontal no-gutters float-right"><a href="<?=url_contato?>" class="pr-3 pl-3">Contato</a></div>
                            
                            <div class="menu-horizontal no-gutters float-right"><a href="<?=url_calendario?>" class="pr-3 pl-3">Calendário</a></div>
                            <div class="menu-horizontal no-gutters float-right"><a href="#" class="pr-3 pl-3">Pesquisa Clínica</a></div>
                            <div class="menu-horizontal no-gutters dropdown float-right">
                                <a href="<?=url_residencia?>" class="pr-3 pl-3">Residência</a>
                                <div class="dropdown-content text-left">
                                    <a href="<?=url_res_medica?>">Médica</a>
                                    <a href="<?=url_res_multidisciplinar?>">Multidisciplinar</a>
                                </div>
                            </div> 
                            <div class="menu-horizontal no-gutters dropdown float-right">
                                <a href="<?=url_eventos?>" class="pr-3 pl-3">Eventos</a>
                                <div class="dropdown-content text-left">
                                    <a href="<?=url_eve_congressos?>">Congessos</a>
                                    <a href="<?=url_eve_simposios?>">Simpósios</a>
                                    <a href="<?=url_eve_jornadas?>">Jornadas</a>
                                </div>
                            </div>                            
                            <div class="menu-horizontal no-gutters dropdown float-right">
                                <a href="<?=url_cursos?>" class="pr-3 pl-3">Cursos</a>
                                <div class="dropdown-content text-left">
                                    <a href="<?=url_cur_tecnico?>">Técnicos</a>
                                    <a href="<?=url_cur_posgraduacao?>">Pós-Graduação</a>
                                    <a href="<?=url_cur_atualizacao?>">Atualização</a>
                                </div>
                            </div>
                            <!-- <div class="menu-horizontal no-gutters float-right"><a href="<?=url_index?>" class="pr-3 pl-3">Home</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
