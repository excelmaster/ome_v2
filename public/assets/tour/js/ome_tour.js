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
      text: 'Siguiente paso',
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
      text: 'Excelente, sigamos:',
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