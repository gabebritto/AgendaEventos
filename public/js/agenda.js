document.addEventListener('DOMContentLoaded', function() {
  
    let form = document.querySelector("form");
  
    var calendarEl = document.getElementById('agendaeventos');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    
    initialView: 'dayGridMonth',
    locale:'br',
    
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listWeek'
    },

    events: urlBase+"/agenda/mostrar" ,

    dateClick:function(info){
        form.reset();
        form.start.value=info.dateStr;
        form.end.value=info.dateStr;

        $("#evento").modal("show")
    },

    eventClick:function(info){

        var evento = info.event;
        console.log(evento);

        axios.post(urlBase+"/agenda/editar/"+info.event.id).
        then(
            (resposta)=>{
                form.id.value= resposta.data.id;

                form.start.value = resposta.data.start;
                form.end.value = resposta.data.end;
                form.local.value = resposta.data.local;
                form.title.value = resposta.data.title;
                form.observacao.value = resposta.data.observacao;
                form.status.value = resposta.data.status;

                $("#evento").modal("show");
            }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
    }

  });
  calendar.render();

  document.getElementById("btnSalvar").addEventListener("click",function(){
    enviarDados("/agenda/criar");    
  });
  
  document.getElementById("btnApagar").addEventListener("click",function(){
    enviarDados("/agenda/deletar/"+form.id.value);
  });

  document.getElementById("btnEditar").addEventListener("click",function(){
    enviarDados("/agenda/atualizar/"+form.id.value);
  });


  function enviarDados(url){
    const dados = new FormData(form);

    urlNova = urlBase + url

    axios.post(urlNova, dados).
    then(
        (resposta)=>{
            calendar.refetchEvents();
            $("#evento").modal("hide");
        }
    ).catch(
        error=>{
            if(error.response){
                console.log(error.response.data);
            }
        }
    )
  }

});
