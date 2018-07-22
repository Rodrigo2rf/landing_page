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
                return coluns = { conteudo: 9, cursos: 3 }
            } else if( this.listCursosPresenciais.length == 2 ){
                return coluns = { conteudo: 6, cursos: 6 }
            } else if( this.listCursosPresenciais.length >= 3 ){
                return coluns = { conteudo: 3, cursos: 9 }
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

var router = new VueRouter({
    mode: 'history',
    routes: []
});
var vm =  new Vue({
    router,
    el: '#app',
    mounted: function() {
        q = this.$route.query.q
        console.log(q)
    },
});
 

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

new Vue({
    router,
    el: '#app',
    mounted: function() {
        q = this.$route.query.q
        console.log(q)
    },
});
