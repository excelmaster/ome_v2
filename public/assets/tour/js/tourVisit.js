// trigger user tour
async function tourVisitsRegistered(){
  let tourFlag = localStorage.getItem('visitTourFlag');
  
  if(tourFlag== 0){    
    let visits = await $.get(localStorage.getItem('getVisits'),
      function(data){        
        return data
      })      
      
    if(visits <= 2){     
      console.log('ejecuta la visita')   
      try{ 
        let newVisit = await  $.get(localStorage.getItem('setVisit'),
          function(dataValue, textStatus, jqXHR){            
            $('#tourVideo').modal('show')
            localStorage.setItem('visitTourFlag','1')            
            console.log('data received: '+ dataValue)
          })
        return newVisit
      } catch(error) {
        console.log('error: '+error)
      }
    } else if (localStorage.getItem('manualTutorial')=="1") {
      localStorage.setItem("manualTutorial","0")
      $('#tourVideo').modal('show')
    } 
  }  
}

// shepperd user tour settings
$("#tourVideo").on('hide.bs.modal',function (e) { 
  e.preventDefault()
  console.log('modal clicked')
  //localStorage.setItem('manualTutorial',1)
  console.log('Tutorial closed successfully')
  $("#tourVideo").hide()
  // Shepherd tour section
    const tour = new Shepherd.Tour({
      useModalOverlay: true,
      defaults: {
        exitOnEsc:true,
      }
    })

    tour.addStep({
      id:'step_1',
      text: 'Bienvenidos a nuestro curso de Inglés. Acompañame a un tour por cada una de nuestras opciones',
      attachTo: {
        element: '#content > div.framezone > div > section.content > div > div > div > div > div.card-header > div > div.col-sm-6',
        on: 'bottom'
      },
      buttons: [
        {
          text: 'Siguiente paso',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_2',
      text: 'Este es el menú de recursos, aquí podras encontrar estas herramientas:',
      attachTo: {
        element: 'body > div.menu', 
        on: 'right'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Vamos a conocerlas!',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_3',
      text: 'El botón de tutorial. Al dar clic podras ver este tour las veces que quieras',
      attachTo: {
        element: 'body > div.menu > div.mn_6 > a > img',
        on: 'right'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Super! sigamos viendo',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_4',
      text: 'En este diccionario podras encontrar muchos términos en inglés para aumentar tu vocabulario',
      attachTo: {
        element: 'body > div.menu > div.mn_1 > a > img',
        on: 'right'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Magnífico! sigamos viendo',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_5',
      text: 'Auí encuentras canciones para que puedas repasar lo visto en clase y de paso pasar un momento divertido',
      attachTo: {
        element: 'body > div.menu > div.mn_2 > a > img',
        on: 'right'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Importante! y que mas tienes?',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_6',
      text: 'Tenemos una lista de verbos para que puedas empezar a describir las acciones del día a día',
      attachTo: {
        element: 'body > div.menu > div.mn_3 > a > img',
        on: 'right'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Vamos !',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_7',
      text: 'Esta es la zona de pdf, aquí puedes encontrar una serie de actividades para practicar en casa',
      attachTo: {
        element: 'body > div.menu > div.mn_4 > a > img',
        on: 'right'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'ok, veamos el siguiente:',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_8',
      text: 'Aquí tenemos la zona de contenido, aquí puedes empezar a ver tus temas desde mundo 1 al 8',
      attachTo: {
        element: '#content > div.framezone > div > section.content > div > div > div > div > div.card-body',
        on: 'bottom'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'ok, veamos el siguiente:',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_9',
      text: 'Al dar clic en estos botones encontraras el contenido de nuestro divertido curso',
      attachTo: {
        element: '#content > div.framezone > div > section.content > div > div > div > div > div.card-body > div > div:nth-child(1) > div',
        on: 'bottom'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'ok, veamos el siguiente:',
          action: tour.next
        }
      ]
    })

    tour.addStep({
      id:'step_12',
      text: 'Esta es nuestra sección de soporte, conozcámosla:',
      attachTo: {
        element: 'body > div.sidebar',
        on: 'left'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Vamos!:',
          action: tour.next
        }        
      ]
    })

    tour.addStep({
      id:'step_13',
      text: 'El botón de certificado te permitirá ver tu información sobre avance del curso, Estará disponible en próximos días',
      attachTo: {
        element: 'body > div.sidebar > div.sb_1 > a > img',
        on: 'left'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Sigamos!:',
          action: tour.next
        }
      ]
    })

    tour.addStep({
      id:'step_14',
      text: 'El botón de preguntas frecuentes te ayudará con algunas situaciones comunes que pueden suceder en el desarrollo del curso',
      attachTo: {
        element: 'body > div.sidebar > div.sb_3 > a > img',
        on: 'left'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Vamos!:',
          action: tour.next
        }        
      ]
    })

    tour.addStep({
      id:'step_15',
      text: 'El botón de soporte te llevará a whatsapp y desde ahí puedes chatear con un agente de servicio',
      attachTo: {
        element: 'body > div.sidebar > div.sb_4 > a > img',
        on: 'left'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Vamos!:',
          action: tour.next
        }        
      ]
    })

    tour.addStep({
      id:'step_16',
      text: 'Esto es todo, ahora a disfrutar de tu curso de ofimática, Bienvenido!',
      attachTo: {
        element: '',
        on: 'bottom'
      },
      buttons: [
        {
          text: 'Acceder a la plataforma',
          action: function(event){
            window.location.href = ''
          }
        }
      ]
    })
    tour.start()
});

//  trigger user tour from tutorial button
$("#tutorialButton").click(function (e) { 
  e.preventDefault();
  localStorage.setItem("manualTutorial","1")
  tourVisitsRegistered()
});




