<?php

    // URL Paginas
    define("url_site",      "http://eadh.liga.org.br");
    // define("url_site", "http://localhost");
    
    define("url_index",         url_site."/landing_page");    
    define("url_calendario",    url_site."/landing_page/index.php#calendario");
    define("url_contato",       url_site."/landing_page/index.php#contato");

    define("url_curso_presencial",      url_site."/landing_page/index.php#lista-cursos-presenciais");
    define("url_curso_semipresencial",  url_site."/landing_page/index.php#lista-cursos-semi-presenciais");
    define("url_curso_ead",             url_site."/landing_page/index.php#lista-cursos-ead");

    define("url_cursos",            url_site."/landing_page/cursos.php");
    define("url_cur_tecnico",       url_cursos."?categoryid=7#trocar-modalidade");
    define("url_cur_posgraduacao",  url_cursos."?categoryid=10#trocar-modalidade");
    define("url_cur_atualizacao",   url_cursos."?categoryid=13#trocar-modalidade");

    define("url_eventos",           url_site."/landing_page/eventos.php");    
    define("url_eve_congressos",    url_eventos."?categoryid=20#trocar-modalidade");
    define("url_eve_simposios",     url_eventos."?categoryid=21#trocar-modalidade");
    define("url_eve_jornadas",      url_eventos."?categoryid=22#trocar-modalidade");

    define("url_residencia",            url_site."/landing_page/residencia.php");
    define("url_res_medica",            url_residencia."?categoryid=17#trocar-modalidade");
    define("url_res_multidisciplinar",  url_residencia."?categoryid=18#trocar-modalidade");

    define("url_moodle", url_site."/moodle");


?>