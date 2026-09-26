const deputadoF = document.querySelectorAll('.deputadoF-group');
const deputadoE = document.querySelectorAll('.deputadoE-group');
const senador1 = document.querySelectorAll('.senador1-group');
const senador2 = document.querySelectorAll('.senador2-group');
const governador = document.querySelectorAll('.governador-group');
const presidente = document.querySelectorAll('.presidente-group');
// const deputadoF = document.getElementsByClassName('.deputadoF-group');
// NodeList 
// - foreach
// HTMLCollection
// console.log(deputadoF)
// bool
// true
// false
// 0
// 1
// ['Kylom', 'Felipe',  'Luiz']


let i = 0;
deputadoF.forEach((el, index) => {
    el.addEventListener('input', () => {
        if (el.value.length && length <4) {
            // para direita        
            deputadoF[index + 1].focus();
        }

        if (!el.value.length) {
            // para esquerda        
            deputadoF[index - 1].focus();
        }
    });

});

deputadoE.forEach((el, index) => {
    el.addEventListener('input', () => {
        if (el.value.length) {
            // para direita        
            deputadoE[index + 1].focus();
        }

        if (!el.value.length) {
            // para esquerda        
            deputadoE[index - 1].focus();
        }
    });

});

senador1.forEach((el, index) => {
    el.addEventListener('input', () => {
        if (el.value.length) {
            // para direita        
            senador1[index + 1].focus();
        }

        if (!el.value.length) {
            // para esquerda        
            senador1[index - 1].focus();
        }
    });

});

senador2.forEach((el, index) => {
    el.addEventListener('input', () => {
        if (el.value.length) {
            // para direita        
            senador2[index + 1].focus();
        }

        if (!el.value.length) {
            // para esquerda        
            senador2[index - 1].focus();
        }
    });

});

governador.forEach((el, index) => {
    el.addEventListener('input', () => {
        if (el.value.length) {
            // para direita        
            governador[index + 1].focus();
        }

        if (!el.value.length) {
            // para esquerda        
            governador[index - 1].focus();
        }
    });

});

presidente.forEach((el, index) => {
    el.addEventListener('input', () => {
        if (el.value.length) {
            // para direita        
            presidente[index + 1].focus();
        }

        if (!el.value.length) {
            // para esquerda        
            presidente[index - 1].focus();
        }
    });

});
// el.addEventListener('keydown', function(key) {

//     if(key == 'Backspace') {
//         console.log(key);
//     }

// })