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
      $('#tourVideo').modal('show')
    } 
  }  
}

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
      text: 'Bienvenidos a nuestro curso de ofimática. Acompañame a un tour por cada una de nuestras opciones',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-header',
        on: 'bottom'
      },
      buttons: [
        {
          text: 'Adelante!',
          action: tour.next
        }
      ]
    })
    
    tour.addStep({
      id:'step_2',
      text: 'Este es el menú de recursos, aquí podras encontrar estas herramientas:',
      attachTo: {
        element: '#bodySection > div.menu',
        on: 'bottom'
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
        element: '#bodySection > div.menu > div.mn_1',
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
      text: 'Aquí vas a poder encontrar actividades en pdf, para que repases el contenido visto',
      attachTo: {
        element: '#bodySection > div.menu > div.mn_2',
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
      text: 'Nuestro diccionario te mostrará los íconos de las opciones usadas frecuentemente',
      attachTo: {
        element: '#bodySection > div.menu > div.mn_3',
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
      text: 'Esta es la zona de contenido. Cada botón te llevará al contenido de nuestro curso, demos una mirada a cada uno: ',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-body',
        on: 'bottom'
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
      text: 'Los botones con este ícono te permiten ver una serie de tips y temas de la actualidad informática, te van a servir en tu día a día',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-body > div > div:nth-child(1) > div > a',
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
      id:'step_8',
      text: 'Los botones con este ícono te permiten ver el contenido del curso de excel.',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-body > div > div:nth-child(2) > div > a',
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
      text: 'Los botones con este ícono te permiten ver el contenido del curso de Powerpoint.',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-body > div > div:nth-child(3) > div > a',
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
      id:'step_10',
      text: 'Los botones con este ícono te permiten ver el contenido del curso de Word.',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-body > div > div:nth-child(4) > div > a',
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
      id:'step_11',
      text: 'Los botones con este ícono te permiten acceder al examen final de cada nivel, para que demuestres lo mucho que aprendiste.',
      attachTo: {
        element: '#contentSection > div > div > div > div > div.card-body > div > div:nth-child(5) > div > a',
        on: 'bottom'
      },
      buttons: [
        {
          text: 'Tip anterior:',
          action: tour.back
        },
        {
          text: 'Excelente, sigamos:',
          action: tour.next
        }
      ]
    })

    tour.addStep({
      id:'step_12',
      text: 'Esta es nuestra sección de soporte, conozcámosla:',
      attachTo: {
        element: '#bodySection > div.sidebar',
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
        element: '#bodySection > div.sidebar > div.sb_2',
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
        element: '#bodySection > div.sidebar > div.sb_3',
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
        element: '#bodySection > div.sidebar > div.sb_4',
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
            window.location.href = 'ofim'
          }
        }
      ]
    })

    tour.start()
});




































































