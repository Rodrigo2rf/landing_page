/**
 * 
 * PAGINA: INDEX
 * SESSAO: SLIDESHOW
 * 
 */
new Vue({
    el: '#showcase_landing_page',
        data: {
            imagensShowcase: [],
            loading: true,
        },
        computed: {
            quantidadeSliders: function () {
                return this.imagensShowcase.length;
            }
        },
        mounted () {
            axios
            .get('http://eadh.liga.org.br/moodle/blocks/showcase/display_slideshow.php')
            .then(response => (this.imagensShowcase = response.data ))
            .finally(() => this.loading = true)
        }  
})



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
    filters: {
        formatar_data: function(value) {

            var valor_formatado = new Date(value * 1000);
            var months_arr = ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];
            var year = valor_formatado.getFullYear();
            var month = months_arr[valor_formatado.getMonth()];
            var day = valor_formatado.getDate();

            return day+' '+month+' '+year;
        }
    },
    computed: {
        quantidadeRegistros: function () {
            return this.msnEnviadas.length;
        }
    },
    mounted () {
      axios
        .get('http://eadh.liga.org.br/moodle/blocks/user_opinion/display_messages.php')
        .then(response => (
            this.msnEnviadas = response.data
        ))
        .finally(() => this.loading = true)
    }    
})


/**
 * 
 * PAGINA: INDEX
 * SESSAO: RENDERIZAR O CALENDARIO
 * 
 */
new Vue({
    el: '#calendario',
    data: {
      date: null,
      pickerDate: null,
      allNotes: []
    },
    watch: {
        pickerDate (val) {
            this.createDate(val);
        }
    },
    computed: {
        quantidadeRegistros: function () {
            return this.allNotes.length;        
        }
    },
    created() {
        this.createDate(null);
    },
     methods:{
        getEvents: function(up_timestart, up_timefinish){
            return axios
                .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_calendar_get_calendar_events&options[timestart]='+up_timestart+'&options[timeend]='+up_timefinish+'&moodlewsrestformat=json')
                .then(response => ( this.allNotes = response.data.events  ))
                .finally(() => this.loading = true)
        },
        createDate: function(val){

            if( val == null){
                var date = new Date();
            }else{
                date = new Date(val + '-' + 1);
            }
            
            var timestart 	= new Date(date.getFullYear(), date.getMonth(), 1);
            var timefinish 	= new Date(date.getFullYear(), date.getMonth() + 1);  
           
            start_month = timestart.getMonth() + 1;
            if( start_month == 12 ){
            	start_end = 1;
            }else{
            	start_end = start_month + 1;
            }
            
            new_timestart = timestart.getFullYear()+'-'+start_month+'-'+timestart.getDate();
            new_timefinish = timefinish.getFullYear()+'-'+start_end+'-'+timefinish.getDate(); 
            
            new_timestart  = new_timestart  + ' 00:00:00';
        	new_timefinish = new_timefinish + ' 00:00:00';
        
            up_timestart = new Date(new_timestart).getTime() / 1000;
            up_timefinish = new Date(new_timefinish).getTime() / 1000;

//             var timestart = new Date(date.getFullYear(), date.getMonth(), 1);
//             var timefinish = new Date(date.getFullYear(), date.getMonth() + 1);  
    
//             start_month = timestart.getMonth() + 1;
//             start_end = start_month + 1;
            
//             new_timestart = timestart.getFullYear()+'-'+start_month+'-'+timestart.getDate();
//             new_timefinish = timefinish.getFullYear()+'-'+start_end+'-'+timefinish.getDate();   
        
//             up_timestart = new Date(new_timestart).getTime() / 1000;
//             up_timefinish = new Date(new_timefinish).getTime() / 1000;
    
            this.getEvents(up_timestart, up_timefinish);
        }
    }

});
