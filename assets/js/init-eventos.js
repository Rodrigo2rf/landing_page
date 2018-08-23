/**
 * 
 * RECUPERAR PARAMS DA URL
 * 
 */
var router = new VueRouter({
    mode: 'history',
    routes: []
});


/**
 * 
 * PAGINA: CURSOS
 * SESSAO: EXIBIR CURSOS
 * 
 */
var app = new Vue({
    el: '#app',
    router,
    data: {
        rows: [],
        cursos: [],
        countOfPage: 40,
        currPage: 1,
        filter_fullname: '',
        categoryid : ''
    },
    filters: {
        tratar_string (text) {
            var count = 150;
            return text.slice(0, count) + (text.length > count ? "..." : "");
        },  
    },
    watch: {
        rows: function () {
            this.cursos = [];
            for(var i=0; i < this.rows.length; i++){
                if( categoryid == 19 ){
                    if( this.rows[i].categoryid >= 19 && this.rows[i].categoryid <= 22 ){
                        if( this.rows[i].overviewfiles[0] == null ){ 
                                this.rows[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                        }else{
                                this.rows[i].img_capa_curso = this.rows[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                        }
                        // recuperando descricao
                        p_start = this.rows[i].summary.indexOf("apresentacao-card") + 19;
                        p_end = this.rows[i].summary.indexOf("</p>", p_start);
                        this.rows[i].descricao = this.rows[i].summary.substring(p_start, p_end);
                        var c = this.rows[i];
                        this.cursos.push(c);
                    }
                }
                if( categoryid == 20 ){
                    if( this.rows[i].categoryid == 20 ){
                        if( this.rows[i].overviewfiles[0] == null ){ 
                                this.rows[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                        }else{
                                this.rows[i].img_capa_curso = this.rows[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                        }
                        // recuperando descricao
                        p_start = this.rows[i].summary.indexOf("apresentacao-card") + 19;
                        p_end = this.rows[i].summary.indexOf("</p>", p_start);
                        this.rows[i].descricao = this.rows[i].summary.substring(p_start, p_end);
                        var c = this.rows[i];
                        this.cursos.push(c);
                    }
                }
                if( categoryid == 21 ){
                    if( this.rows[i].categoryid == 21 ){
                        if( this.rows[i].overviewfiles[0] == null ){ 
                                this.rows[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                        }else{
                                this.rows[i].img_capa_curso = this.rows[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                        }
                        // recuperando descricao
                        p_start = this.rows[i].summary.indexOf("apresentacao-card") + 19;
                        p_end = this.rows[i].summary.indexOf("</p>", p_start);
                        this.rows[i].descricao = this.rows[i].summary.substring(p_start, p_end);
                        var c = this.rows[i];
                        this.cursos.push(c);
                    }
                }
                if( categoryid == 22 ){
                    if( this.rows[i].categoryid == 22 ){
                        if( this.rows[i].overviewfiles[0] == null ){ 
                                this.rows[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                        }else{
                                this.rows[i].img_capa_curso = this.rows[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                        }
                        // recuperando descricao
                        p_start = this.rows[i].summary.indexOf("apresentacao-card") + 19;
                        p_end = this.rows[i].summary.indexOf("</p>", p_start);
                        this.rows[i].descricao = this.rows[i].summary.substring(p_start, p_end);
                        var c = this.rows[i];
                        this.cursos.push(c);
                    }
                }
            }
        }
    },
    computed: { 
        showList: function(){
            return this.cursos.length > 0;         
        },
        filteredRows: function(){
            var filter_fullname = this.filter_fullname.toLowerCase();
            return ( this.filter_fullname.trim() !== '' ) ? 
            this.cursos.filter(function(d){ return d.fullname.toLowerCase().indexOf(filter_fullname) > -1; }) : 
            this.cursos;
        },
        pageStart: function(){
            return (this.currPage - 1) * this.countOfPage;
        },
        totalPage: function(){
            return Math.ceil(this.filteredRows.length / this.countOfPage);
        },
        limpar_consulta: function(){
            if( this.$route.query.c != null ){
                return limpar_consulta = 0;
            }
        }
    },
    methods: {
        setPage: function(idx){
            if( idx <= 0 || idx > this.totalPage ){
                return;
            }
            this.currPage = idx;
        },
        getCursos: function( categoryid ){
            this.init( categoryid );
        },
        init: function( categoryid ){
            if ( categoryid >= 19 && categoryid <= 22 || categoryid == null ){ 
                url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
            }else{
                url = "";
            }
            axios
                .get(url)
                .then(response => ( this.rows = response.data.courses ))
                .finally(() => this.loading = true);
        }
    },
    created: function () {
        categoryid = this.$route.query.categoryid; 
        if( categoryid == null ){ categoryid = 19; }
        this.init( categoryid );
    }  
});