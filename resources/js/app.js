import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


// transformElement: (elementoSpecifico) => {
//     // altezza ElementoFacts singolo dove si attiverà la transizione viene messa in un oggetto
//     var elementRect = elementoSpecifico.getBoundingClientRect();
//         elementRect.y -= 400;
//    // console.log(elementRect);

//     // parte con classe scompari 
//     window.addEventListener("scroll", function () {
//         // quando i px della  finestra sono di piu rispetto al posizionamento dell elemento rimuove la classe scompari e aggiunge la transizione
//         // messo seconda condizione se no scompariva il componente quando lo scroll era 0 essendo che l'animazione partiva quando lo scrol è maggiore dell'altezza di dove si trova l'elemento
//         if (window.scrollY > elementRect.y || window.scrollY < 120 ) {
//           elementoSpecifico.classList.add("transizione-scroll");
//             elementoSpecifico.classList.remove("scompari");
//         }
//          else{
//             elementoSpecifico.classList.add("scompari")  
//             elementoSpecifico.classList.remove("transizione-scroll");
//         }
//       });
//     },
