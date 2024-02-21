import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


var cards = document.querySelectorAll('.element');
console.log(cards);
// document.addEventListener('DOMContentLoaded', function() {

//     function checkScroll() {
//         cards.forEach(function(card) {
//             if (isElementInViewport(card)) {
//                 card.classList.add('visible');
//             }
//         });
//     }

//     function isElementInViewport(el) {
//         var rect = el.getBoundingClientRect();

//         return (
//             rect.top >= 0 &&
//             rect.left >= 0 &&
//             rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//             rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//         );
//     }

//     window.addEventListener('scroll', checkScroll);
//     checkScroll();
// });