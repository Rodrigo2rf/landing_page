/**
 * 
 * PAGINA: INDEX
 * SESSAO: CURSOS PRESENCIAIS
 * 
 */
// new Vue({
//     el: '#sessoes',
//     data: {
//         todosCursos: [],
//         cursos: [],
//         eventos: [],
//         residencias: [],
//         loading: true,
//     },
//     filters: {
//         tratar_string (text) {
//             var count = 150;
//             return text.slice(0, count) + (text.length > count ? "..." : "");
//         }
//     },
//     computed: {
//         qtdCursos: function () {
//             if( this.cursos.length == 0 ){
//                 return coluns = { conteudo: 12, curso: null }
//             } else if( this.cursos.length == 1 ){
//                 return coluns = { conteudo: 9, todosCursos: 3, qtd: this.cursos.length }
//             } else if( this.cursos.length == 2 ){
//                 return coluns = { conteudo: 6, todosCursos: 6, qtd: this.cursos.length }
//             } else if( this.cursos.length >= 3 ){
//                 return coluns = { conteudo: 3, todosCursos: 9, qtd: this.cursos.length }
//             }
//         },
//         qtdEventos: function () {
//             if( this.eventos.length == 0 ){
//                 return coluns = { conteudo: 12, curso: null }
//             } else if( this.eventos.length == 1 ){
//                 return coluns = { conteudo: 9, todosEventos: 3, qtd: this.eventos.length }
//             } else if( this.eventos.length == 2 ){
//                 return coluns = { conteudo: 6, todosEventos: 6, qtd: this.eventos.length }
//             } else if( this.eventos.length >= 3 ){
//                 return coluns = { conteudo: 3, todosEventos: 9, qtd: this.eventos.length }
//             }
//         },
//         qtdResidencias: function () {
//             if( this.residencias.length == 0 ){
//                 return coluns = { conteudo: 12, curso: null }
//             } else if( this.residencias.length == 1 ){
//                 return coluns = { conteudo: 9, todosResidencias: 3, qtd: this.residencias.length }
//             } else if( this.residencias.length == 2 ){
//                 return coluns = { conteudo: 6, todosResidencias: 6, qtd: this.residencias.length }
//             } else if( this.residencias.length >= 3 ){
//                 return coluns = { conteudo: 3, todosResidencias: 9, qtd: this.residencias.length }
//             }
//         }
//     },
//     watch: {
//         todosCursos: function () {
//             for(var i=0; i < this.todosCursos.length; i++){
                    
//                 // recuperando itens
//                 p_start = this.todosCursos[i].summary.indexOf("apresentacao-card") + 19;
//                 p_end = this.todosCursos[i].summary.indexOf("</p>", p_start);
//                 this.todosCursos[i].descricao = this.todosCursos[i].summary.substring(p_start, p_end);

//                 mi_start = this.todosCursos[i].summary.indexOf("dt-inicio-matricula") + 21;
//                 mi_end = this.todosCursos[i].summary.indexOf("</p>", mi_start);
//                 timestart = this.todosCursos[i].summary.substring(mi_start, mi_end);
    
//                 mf_start = this.todosCursos[i].summary.indexOf("dt-fim-matricula") + 18;
//                 mf_end = this.todosCursos[i].summary.indexOf("</p>", mf_start);
//                 timefinish = this.todosCursos[i].summary.substring(mf_start, mf_end);

//                 ts = timestart.split("-");
//                 tf = timefinish.split("-");
                
//                 timestart  = new Date(String(ts[2] +'-'+ ts[1] +'-'+ ts[0]+ ' 20:59:59')).getTime()/1000;
//                 timefinish = new Date(String(tf[2] +'-'+ tf[1] +'-'+ tf[0]+ ' 20:59:59')).getTime()/1000;

//                 var hoje = Math.round(+new Date()/1000);
//                 if( hoje >= timestart && hoje <= timefinish){
//                     this.todosCursos[i].matricula = true;
//                 }else{
//                     this.todosCursos[i].matricula = false;
//                 }

//                 var c = this.todosCursos[i];
//                 this.cursos.push(c);
                
//             }
//         },
//     },
//     mounted () {
//       axios
//         .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json')
//         .then(response => (
//             this.todosCursos = response.data.courses
//         ))
//         .finally(() => this.loading = true)
//     }    
// })


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
      filtro_matricula: 1,
      countOfPage: 40,
      currPage: 1,
      filter_fullname: ''
    },
    filters: {
        tratar_string (text) {
            var count = 150;
            return text.slice(0, count) + (text.length > count ? "..." : "");
        },  
    },
    watch: {
        rows: function () {
            for(var i=0; i < this.rows.length; i++){
                if(this.rows[i].id != 1){
                    if( this.rows[i].overviewfiles[0] == null ){ 
                        this.rows[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                    }else{
                        this.rows[i].img_capa_curso = this.rows[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                    }
                }
            }
        },
    },
    computed: {
        showList: function(){
            return this.rows.length > 0;         
        },
        filteredRows: function(){
            var filter_fullname = this.filter_fullname.toLowerCase();
            return ( this.filter_fullname.trim() !== '' ) ? 
            this.rows.filter(function(d){ return d.fullname.toLowerCase().indexOf(filter_fullname) > -1; }) : 
            this.rows;
        },
        pageStart: function(){
            return (this.currPage - 1) * this.countOfPage;
        },
        totalPage: function(){
            return Math.ceil(this.filteredRows.length / this.countOfPage);
        }
    },
    methods: {
      setPage: function(idx){
        if( idx <= 0 || idx > this.totalPage ){
          return;
        }
        this.currPage = idx;
      },
    },
    mounted () {    
        course = this.$route.query.course;
        if ( course != null ){
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&&field=shortname&value='+course+'&moodlewsrestformat=json';
        }else{
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';           
        }
        axios
            .get(url)
            .then(response => ( this.rows = response.data.courses ))
            .finally(() => this.loading = true);
    }
});