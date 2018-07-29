// /**
//  * 
//  * PAGINA: CURSOS
//  * SESSAO: EXIBIR CURSOS
//  * 
//  */
var router = new VueRouter({
    mode: 'history',
    routes: []
});
// // new Vue({
// //     router,
// //     el: '#show_courses',
// //     data: {
// //         result: [],
// //         loading: true,
// //     },
// //     filters: {
// //         tratar_string (text) {
// //             var count = 150;
// //             return text.slice(0, count) + (text.length > count ? "..." : "");
// //         }
// //     },
// //     watch: {
// //         result: function () {
// //             for(var i=0; i < this.result.length; i++){
// //                 if( this.result[i].overviewfiles[0] == null ){ 
// //                     this.result[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
// //                 }else{
// //                     this.result[i].img_capa_curso = this.result[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
// //                 }
// //             }
// //         }
// //     },
// //     computed:{
// //         showList: function(){
// //             return this.result.length > 0;
// //         }
// //     },
// //     mounted () {
// //         q = this.$route.query.q;
// //         if ( q == null ){
// //             url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
// //         }else{
// //             url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value='+q+'&moodlewsrestformat=json';
// //         }
// //         axios
// //         .get(url)
// //         .then(response => (
// //             this.result = response.data.courses
// //         ))
// //         .finally(() => this.loading = true)
// //     },
// // });


// new Vue({
//     router,
//     el: '#app',
//     data: {
//       result: [],
//       perPage: 3,
//       pagination: {}
//     },
//     computed: {
//         saida() {
//             console.log(4);
//             console.log(this.result)
//             this.setPage(1);
//             return this.paginate(this.result);
//         }
//     },
//     watch: {
//         result: function () {
//             // console.log(3);
//             // this.setPage(1);
//             for(var i=0; i < this.result.length; i++){
//                 if( this.result[i].overviewfiles[0] == null ){ 
//                     this.result[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
//                 }else{
//                     this.result[i].img_capa_curso = this.result[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
//                 }
//             }
//         },
//     },
//     methods: {
//         setPage(p) {
//             this.loadCursos(p);
//         },
//         paginate(result) {
//           return _.slice(result, this.pagination.startIndex, this.pagination.endIndex + 1)
//         },
//         paginator(totalItems, currentPage) {
//           var startIndex = (currentPage - 1) * this.perPage,
//           endIndex = Math.min(startIndex + this.perPage - 1, totalItems - 1);
//           return {
//             currentPage: currentPage,
//             startIndex: startIndex,
//             endIndex: endIndex,
//             pages: _.range(1, Math.ceil(totalItems / this.perPage) + 1)
//           };
//         },
//         loadCursos: function(p){
//             console.log(2);
//             q = this.$route.query.q;
//             if ( q == null ){
//                 url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
//             }else{
//                 url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value='+q+'&moodlewsrestformat=json';
//             }
//             axios
//             .get(url)
//             .then(response => ( this.result = response.data.courses ))
//             .finally(() => this.loading = true);
//             // this.setPage(1);
//             console.log(this.result);

//             this.pagination = this.paginator(this.result.length, p);p
//         }
//     },
//     created() {
//         console.log(1);
//         this.setPage(1);
//         // this.loadCursos();
//     },
//   });

var app = new Vue({
    el: '#app',
    router,
    data: {
      rows: [],
      countOfPage: 4,
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
        q = this.$route.query.q;
        if ( q == null ){
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json';
        }else{
            url = 'http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value='+q+'&moodlewsrestformat=json';
        }
        axios
        .get(url)
        .then(response => ( 
            this.rows = response.data.courses ))
        .finally(() => this.loading = true);
    }
});

 
/**
 * 
 * PAGINA: INDEX
 * SESSAO: SLIDESHOW
 * 
 */
// new Vue({
//     el: '#showcase_landing_page',
//         data: {
//             imagensShowcase: [],
//             loading: true,
//         },
//         computed: {
//             quantidadeSliders: function () {
//                 return this.imagensShowcase.length;
//             }
//         },
//         mounted () {
//             axios
//             .get('http://eadh.liga.org.br/moodle/blocks/showcase/display_slideshow.php')
//             .then(response => (this.imagensShowcase = response.data ))
//             .finally(() => this.loading = true)
//         }  
// })



/**
 * 
 * PAGINA: INDEX
 * SESSAO: CURSOS PRESENCIAIS
 * 
 */
new Vue({
    el: '#lista-cursos-presenciais',
    data: {
        listCursosPresenciais: [],
        loading: true,
    },
    filters: {
        tratar_string (text) {
            var count = 150;
            return text.slice(0, count) + (text.length > count ? "..." : "");
        }
    },
    computed: {
        quantidadeRegistros: function () {
            if( this.listCursosPresenciais.length == 0 ){
                return coluns = { conteudo: 12, curso: null }
            } else if( this.listCursosPresenciais.length == 1 ){
                return coluns = { conteudo: 9, cursos: 3, qtd: this.listCursosPresenciais.length }
            } else if( this.listCursosPresenciais.length == 2 ){
                return coluns = { conteudo: 6, cursos: 6, qtd: this.listCursosPresenciais.length }
            } else if( this.listCursosPresenciais.length >= 3 ){
                return coluns = { conteudo: 3, cursos: 9, qtd: this.listCursosPresenciais.length }
            }
        }
    },
    watch: {
        listCursosPresenciais: function () {
            for(var i=0; i < this.listCursosPresenciais.length; i++){
                if( this.listCursosPresenciais[i].overviewfiles[0] == null ){ 
                    this.listCursosPresenciais[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                }else{
                    this.listCursosPresenciais[i].img_capa_curso = this.listCursosPresenciais[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                }
            }
        }
    },
    mounted () {
      axios
        .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value=2&moodlewsrestformat=json')
        .then(response => (
            this.listCursosPresenciais = response.data.courses
        ))
        .finally(() => this.loading = true)
    }    
})


/**
 * 
 * PAGINA: INDEX
 * SESSAO: CURSOS SEMI-PRESENCIAIS
 * 
 */
new Vue({
    el: '#lista-cursos-semi-presenciais',
        data: {
            listCursosSemiPresenciais: [],
            loading: true,
        },
        filters: {
            tratar_string (text) {
                var count = 150;
                return text.slice(0, count) + (text.length > count ? "..." : "");
            },  
        },
        computed: {
            quantidadeRegistros: function () {
                if( this.listCursosSemiPresenciais.length == 0 ){
                    return coluns = { conteudo: 12, curso: null }
                } else if( this.listCursosSemiPresenciais.length == 1 ){
                    return coluns = { conteudo: 9, cursos: 3 }
                } else if( this.listCursosSemiPresenciais.length == 2 ){
                    return coluns = { conteudo: 6, cursos: 6 }
                } else if( this.listCursosSemiPresenciais.length >= 3 ){
                    return coluns = { conteudo: 3, cursos: 9 }
                }
            }
        },
        mounted () {
          axios
            .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value=3&moodlewsrestformat=json')
            .then(response => (this.listCursosSemiPresenciais = response.data.courses))
            .finally(() => this.loading = true)
        }    
});



/**
 * 
 * PAGINA: INDEX
 * SESSAO: CURSOS EAD
 * 
 */
new Vue({
    el: '#lista-cursos-ead',
        data: {
            listCursosEAD: [],
            loading: true,
        },
        filters: {
            tratar_string (text) {
                var count = 150;
                return text.slice(0, count) + (text.length > count ? "..." : "");
            },  
        },
        computed: {
            quantidadeRegistros: function () {
                if( this.listCursosEAD.length == 0 ){
                    return coluns = { conteudo: 12, curso: null }
                } else if( this.listCursosEAD.length == 1 ){
                    return coluns = { conteudo: 9, cursos: 3 }
                } else if( this.listCursosEAD.length == 2 ){
                    return coluns = { conteudo: 6, cursos: 6 }
                } else if( this.listCursosEAD.length >= 3 ){
                    return coluns = { conteudo: 3, cursos: 9 }
                }
            }
        },
        mounted () {
          axios
            .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&field=category&value=4&moodlewsrestformat=json')
            .then(response => (this.listCursosEAD = response.data.courses))
            .finally(() => this.loading = true)
        }    
});



/**
 * 
 * PAGINA: INDEX
 * SESSAO: DEPOIMENTO ALUNOS
 * 
 */
new Vue({
    el: '#comentarios-alunos',
    data: {
        msnEnviadas: [],
        loading: true,
    },
    computed: {
        quantidadeRegistros: function () {
            return this.msnEnviadas.length;
        }
    },
    mounted () {
      axios
        .get('http://localhost/m35/blocks/user_opinion/display_messages.php')
        .then(response => (
            this.msnEnviadas = response.data
        ))
        .finally(() => this.loading = true)
    }    
})