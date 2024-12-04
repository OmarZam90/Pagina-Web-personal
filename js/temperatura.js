function convertir() {
    let valor1, out, val2, salida;

    valor1 = parseFloat(document.querySelector("#val").value); 
    val2 = document.querySelector("#valor1").value; 
    salida = document.querySelector("#salida1").value; 

    if (isNaN(valor1)) {
        document.querySelector('#result').textContent = 'Por favor, ingrese un valor válido.';
        return; 
    }

    let tempura; 

    switch (val2) {
        case 'C':
            tempura = valor1;
            break;
        case 'F':
            tempura = (valor1 - 32) * 5 / 9; s
            break;
        case 'K':
            tempura = valor1 - 273.15; 
            break;
        case 'R':
            tempura = (valor1 - 491.67) * 5 / 9; 
            break;
        default:
            tempura = valor1; 
    }

    switch (salida) {
        case 'C':
            out = tempura; 
            break;
        case 'F':
            out = (tempura * 9 / 5) + 32; 
            break;
        case 'K':
            out = tempura + 273.15; 
            break;
        case 'R':
            out = (tempura + 273.15) * 9 / 5; 
            break;
        default:
            out = tempura; 
    }

    document.querySelector('#result').textContent = `Resultado: ${out.toFixed(2)} ${salida}`;
}

document.querySelector('#convertBtn').addEventListener('click', convertir);
