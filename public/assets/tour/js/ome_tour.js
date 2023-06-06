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
    on: 'bottom'
  },
  buttons: [
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
      text: 'ok, veamos el siguiente:',
      action: tour.next
    }
  ]
})

tour.addStep({
  id:'step_9',
  text: 'Al dar clic en estos botones encontraras el contenido de nuestro dviertido curso',
  attachTo: {
    element: '#content > div.framezone > div > section.content > div > div > div > div > div.card-body > div > div:nth-child(1) > div',
    on: 'bottom'
  },
  buttons: [
    {
      text: 'ok, veamos el siguiente:',
      action: tour.next
    }
  ]
})

tour.addStep({
  id:'step_12',
  text: '',
  attachTo: {
    element: '#contentSection > div > div > div > div > div.card-body > div > div:nth-child(5) > div > a',
    on: 'bottom'
  },
  buttons: [
    {
      text: 'Excelente, sigamos:',
      action: tour.next
    }
  ]
})




tour.start()