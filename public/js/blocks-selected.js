document.addEventListener('livewire:load', function() {

    Livewire.on('addProperties', function() {
        // GUARDAR VARIABLE $component DE BLADE 
        let allElements = '{{ $component }}';
        console.log(allElements);
    });
});


    // for (let i = 0; i < allElements.length; i++) {
        // console.log(allElements[i]);
        // allElements[i].setAttribute('id', 'element-' + Math.floor(Math.random() * 100000));
        // allElements[i].setAttribute('wire:click', 'showContentEdit(' + "'" + allElements[i].getAttribute('id') + "'" + ',' + "'" + allElements[i].tagName + "')");
        
        // colocar clase border-selected solo al elemento hijo que tenga el mouse encima, menos los sections, header, footer, nav, forms y div.
        // allElements[i].addEventListener('mouseover', function (event) {
        //     if (event.target.tagName != 'SECTION' && event.target.tagName != 'HEADER' && event.target.tagName != 'FOOTER' && event.target.tagName != 'NAV' && event.target.tagName != 'FORM' && event.target.tagName != 'DIV') {
        //         event.target.classList.add('border-selected');
        //     }
        // });

        // quitar clase border-selected al elemento hijo que tenga el mouse encima, menos los sections, header, footer, nav, forms y div.
        // allElements[i].addEventListener('mouseout', function (event) {
        //     if (event.target.tagName != 'SECTION' && event.target.tagName != 'HEADER' && event.target.tagName != 'FOOTER' && event.target.tagName != 'NAV' && event.target.tagName != 'FORM' && event.target.tagName != 'DIV') {
        //         event.target.classList.remove('border-selected');
        //     }
        // });
    // }    
// // colocar clase border-selected solo al elemento hijo que tenga el mouse encima, menos los sections, header, footer, nav, forms y div.
// allElements.forEach(function (element) {
//     element.setAttribute('id', 'element-' + Math.floor(Math.random() * 100000));

//     element.setAttribute('wire:click', 'showContentEdit(' + "'" + element.getAttribute('id') + "'" + ',' + "'" + element.tagName + "')");
    
//     element.addEventListener('mouseover', function (event) {
//         if (event.target.tagName != 'SECTION' && event.target.tagName != 'HEADER' && event.target.tagName != 'FOOTER' && event.target.tagName != 'NAV' && event.target.tagName != 'FORM' && event.target.tagName != 'DIV') {
//             event.target.classList.add('border-selected');
//             console.log('mouse over');
//         }
//     });
// });

// // quitar clase border-selected al elemento hijo que tenga el mouse encima, menos los sections, header, footer, nav, forms y div.
// allElements.forEach(function (element) {
//     element.addEventListener('mouseout', function (event) {
//         if (event.target.tagName != 'SECTION' && event.target.tagName != 'HEADER' && event.target.tagName != 'FOOTER' && event.target.tagName != 'NAV' && event.target.tagName != 'FORM' && event.target.tagName != 'DIV') {
//             event.target.classList.remove('border-selected');
//         }
//     });
// });

// Livewire.emit('addComponent', allElements);