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
        watch:{
            imagensShowcase: function () {
                for(var i=0; i < this.imagensShowcase.length; i++){
                    var string = this.imagensShowcase[i].anexopath;

                    type = string.split(';');
                    string = type[0].split('//');
                    string = string.pop();

                    if ( string !== ''){
                        if( type[1] === 'file' || type[1] === 'image' ){
                            this.imagensShowcase[i].href = 'http://eadh.liga.org.br/moodle/blocks/showcase/uploads/' + string;
                        }
                        if( type[1] === 'text' ){
                            this.imagensShowcase[i].href = 'http://'+string;
                        }
                    }else{ 
                        this.imagensShowcase[i].href = 0;
                    }

                }
            }
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
    el: '#sessoes',
    data: {
        todosCursos: [],
        cursos: [],
        cursos_shortname: [],
        eventos: [],
        residencias: [],
        loading: true,
    },
    filters: {
        tratar_string (text) {
            var count = 150;
            return text.slice(0, count) + (text.length > count ? "..." : "");
        }
    },
    computed: {
        qtdCursos: function () {
            if( this.cursos.length == 0 ){
                return coluns = { conteudo: 12, curso: null }
            } else if( this.cursos.length == 1 ){
                return coluns = { conteudo: 9, todosCursos: 3, qtd: this.cursos.length }
            } else if( this.cursos.length == 2 ){
                return coluns = { conteudo: 6, todosCursos: 6, qtd: this.cursos.length }
            } else if( this.cursos.length >= 3 ){
                return coluns = { conteudo: 3, todosCursos: 9, qtd: this.cursos.length }
            }
        },
        qtdEventos: function () {
            if( this.eventos.length == 0 ){
                return coluns = { conteudo: 12, curso: null }
            } else if( this.eventos.length == 1 ){
                return coluns = { conteudo: 9, todosEventos: 3, qtd: this.eventos.length }
            } else if( this.eventos.length == 2 ){
                return coluns = { conteudo: 6, todosEventos: 6, qtd: this.eventos.length }
            } else if( this.eventos.length >= 3 ){
                return coluns = { conteudo: 3, todosEventos: 9, qtd: this.eventos.length }
            }
        },
        qtdResidencias: function () {
            if( this.residencias.length == 0 ){
                return coluns = { conteudo: 12, curso: null }
            } else if( this.residencias.length == 1 ){
                return coluns = { conteudo: 9, todosResidencias: 3, qtd: this.residencias.length }
            } else if( this.residencias.length == 2 ){
                return coluns = { conteudo: 6, todosResidencias: 6, qtd: this.residencias.length }
            } else if( this.residencias.length >= 3 ){
                return coluns = { conteudo: 3, todosResidencias: 9, qtd: this.residencias.length }
            }
        }
    },
    watch: {
        todosCursos: function () {
            for(var i=0; i < this.todosCursos.length; i++){

                if( this.todosCursos[i].id != 1 ){
                    this.cursos_shortname.push( this.todosCursos[i].shortname );
                }

                if( this.todosCursos[i].categoryid >= 6 && this.todosCursos[i].categoryid <= 15 ){
                    
                    if( this.todosCursos[i].overviewfiles[0] == null ){ 
                        this.todosCursos[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                    }else{
                        this.todosCursos[i].img_capa_curso = this.todosCursos[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                    }
                    
                    // recuperando itens
                    p_start = this.todosCursos[i].summary.indexOf("apresentacao-card") + 19;
                    p_end = this.todosCursos[i].summary.indexOf("</p>", p_start);
                    this.todosCursos[i].descricao = this.todosCursos[i].summary.substring(p_start, p_end);

                    mi_start = this.todosCursos[i].summary.indexOf("dt-inicio-matricula") + 21;
                    mi_end = this.todosCursos[i].summary.indexOf("</p>", mi_start);
                    timestart = this.todosCursos[i].summary.substring(mi_start, mi_end);
        
                    mf_start = this.todosCursos[i].summary.indexOf("dt-fim-matricula") + 18;
                    mf_end = this.todosCursos[i].summary.indexOf("</p>", mf_start);
                    timefinish = this.todosCursos[i].summary.substring(mf_start, mf_end);

                    ts = timestart.split("-");
                    tf = timefinish.split("-");
                    
                    timestart  = new Date(String(ts[2] +'-'+ ts[1] +'-'+ ts[0]+ ' 20:59:59')).getTime()/1000;
                    timefinish = new Date(String(tf[2] +'-'+ tf[1] +'-'+ tf[0]+ ' 20:59:59')).getTime()/1000;

                    var hoje = Math.round(+new Date()/1000);
                    if( hoje >= timestart && hoje <= timefinish){
                        this.todosCursos[i].matricula = true;
                    }else{
                        this.todosCursos[i].matricula = false;
                    }

                    var c = this.todosCursos[i];
                    this.cursos.push(c);
                
                }
                if( this.todosCursos[i].categoryid >= 19 && this.todosCursos[i].categoryid <= 22 ){
                    
                    if( this.todosCursos[i].overviewfiles[0] == null ){ 
                        this.todosCursos[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                    }else{
                        this.todosCursos[i].img_capa_curso = this.todosCursos[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                    }
                    // recuperando itens
                    p_start = this.todosCursos[i].summary.indexOf("apresentacao-card") + 19;
                    p_end = this.todosCursos[i].summary.indexOf("</p>", p_start);
                    this.todosCursos[i].descricao = this.todosCursos[i].summary.substring(p_start, p_end);

                    mi_start = this.todosCursos[i].summary.indexOf("dt-inicio-matricula") + 21;
                    mi_end = this.todosCursos[i].summary.indexOf("</p>", mi_start);
                    timestart = this.todosCursos[i].summary.substring(mi_start, mi_end);
        
                    mf_start = this.todosCursos[i].summary.indexOf("dt-fim-matricula") + 18;
                    mf_end = this.todosCursos[i].summary.indexOf("</p>", mf_start);
                    timefinish = this.todosCursos[i].summary.substring(mf_start, mf_end);

                    ts = timestart.split("-");
                    tf = timefinish.split("-");
                    
                    timestart  = new Date(String(ts[2] +'-'+ ts[1] +'-'+ ts[0]+ ' 20:59:59')).getTime()/1000;
                    timefinish = new Date(String(tf[2] +'-'+ tf[1] +'-'+ tf[0]+ ' 20:59:59')).getTime()/1000;

                    var hoje = Math.round(+new Date()/1000);
                    if( hoje >= timestart && hoje <= timefinish){
                        this.todosCursos[i].matricula = true;
                    }else{
                        this.todosCursos[i].matricula = false;
                    }

                    var e = this.todosCursos[i];
                    this.eventos.push(e);

                }
                if( this.todosCursos[i].categoryid >= 16 && this.todosCursos[i].categoryid <= 18 ){

                    if( this.todosCursos[i].overviewfiles[0] == null ){ 
                        this.todosCursos[i].img_capa_curso = 'http://eadh.liga.org.br/landing_page/assets/img/img_default.png';
                    }else{
                        this.todosCursos[i].img_capa_curso = this.todosCursos[i].overviewfiles[0].fileurl + '?token=abd25152ce4f60bb1aeddb480c034867';
                    }
                    // recuperando itens
                    p_start = this.todosCursos[i].summary.indexOf("apresentacao-card") + 19;
                    p_end = this.todosCursos[i].summary.indexOf("</p>", p_start);
                    this.todosCursos[i].descricao = this.todosCursos[i].summary.substring(p_start, p_end);
                    
                    mi_start = this.todosCursos[i].summary.indexOf("dt-inicio-matricula") + 21;
                    mi_end = this.todosCursos[i].summary.indexOf("</p>", mi_start);
                    timestart = this.todosCursos[i].summary.substring(mi_start, mi_end);
        
                    mf_start = this.todosCursos[i].summary.indexOf("dt-fim-matricula") + 18;
                    mf_end = this.todosCursos[i].summary.indexOf("</p>", mf_start);
                    timefinish = this.todosCursos[i].summary.substring(mf_start, mf_end);

                    ts = timestart.split("-");
                    tf = timefinish.split("-");
                    
                    timestart  = new Date(String(ts[2] +'-'+ ts[1] +'-'+ ts[0]+ ' 20:59:59')).getTime()/1000;
                    timefinish = new Date(String(tf[2] +'-'+ tf[1] +'-'+ tf[0]+ ' 20:59:59')).getTime()/1000;

                    var hoje = Math.round(+new Date()/1000);
                    if( hoje >= timestart && hoje <= timefinish){
                        this.todosCursos[i].matricula = true;
                    }else{
                        this.todosCursos[i].matricula = false;
                    }   
                    
                    var r = this.todosCursos[i];
                    this.residencias.push(r);
                }
            }
        },
    },
    mounted () {
      axios
        .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json')
        .then(response => (
            this.todosCursos = response.data.courses
        ))
        .finally(() => this.loading = true)
    }    
})


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
            
            if( day <= 9){
                day = 0 + '' + day;
            }

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
    filters: {
        tratar_data (dia) {
            var date = new Date(dia*1000);
            var months_arr = ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];
                    
            return '<p class="dia_evento mb-0">' + date.getDate() +'</p><p class="mes_evento">'+ months_arr[date.getMonth()]+'<p>';
        }
    },
    computed: {
        quantidadeRegistros: function () {
            return this.allNotes.length;        
        }
    },
    methods:{
        getEvents: function(up_timestart, up_timefinish){
            return axios
                .get('http://eadh.liga.org.br/moodle/webservice/rest/server.php?wstoken=abd25152ce4f60bb1aeddb480c034867&wsfunction=core_calendar_get_calendar_events&options[timestart]='+up_timestart+'&options[timeend]='+up_timefinish+'&moodlewsrestformat=json')
                .then(response => ( this.allNotes = response.data.events  ))
                .finally(() => this.loading = true)
        },
        createDate: function(val){

            date = new Date(val+'-01 23:59:59');
            
            var timestart 	= new Date(date.getFullYear(), date.getMonth(), 1);
            var timefinish 	= new Date(date.getFullYear(), date.getMonth() + 1,  1);  

            start_month = timestart.getMonth() + 1;
            if( start_month == 12 ){
            	start_end = 1;
            }else{
            	start_end = start_month + 1;
            }
            
            new_timestart = start_month+' '+timestart.getDate() +', '+timestart.getFullYear();
            new_timefinish = start_end+' '+timefinish.getDate() +', '+timefinish.getFullYear();            

            new_date_start  = String(new_timestart  + ' 20:59:59');
        	new_date_end    = String(new_timefinish + ' 20:59:59');
        
            up_timestart = new Date(new_timestart).getTime() / 1000;
            up_timefinish = new Date(new_timefinish).getTime() / 1000;
    
            this.getEvents(up_timestart, up_timefinish);
        }
    }

});
