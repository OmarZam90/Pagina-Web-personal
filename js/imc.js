function calcular() {
    let masa, estatura, imc, margin, consejo, color, categoria;

    masa = parseFloat(document.getElementById("masa").value);
    estatura = parseFloat(document.getElementById("estatura").value);

    if (masa <= 0 || estatura <= 0) {
        imc = "Información inválida";
        margin = "10px"; 
        consejo = "Ingresa un valor correcto";
        color = "black";
    } else {
        imc = masa / (estatura * estatura);
        imc = imc.toFixed(3);

        if (imc > 40) {
            categoria = "obesidad3";
        } else if (imc >= 35) {
            categoria = "obesidad2";
        } else if (imc >= 30) {
            categoria = "obesidad1";
        } else if (imc >= 25) {
            categoria = "sobrepeso";
        } else if (imc >= 18.5) {
            categoria = "normal";
        } else {
            categoria = "bajopeso";
        }

        switch (categoria) {
            case "obesidad3":
                margin = "50px"; 
                color = "red";   
                consejo = "Obesidad 3";
                break;
            case "obesidad2":
                margin = "40px";  
                color = "orangered";  
                consejo = "Obesidad 2";
                break;
            case "obesidad1":
                margin = "30px"; 
                color = "orange"; 
                consejo = "Obesidad 1";
                break;
            case "sobrepeso":
                margin = "20px";  
                color = "yellow"; 
                consejo = "Sobrepeso";
                break;
            case "normal":
                margin = "10px";  
                color = "green";  
                consejo = "Normal";
                break;
            case "bajopeso":
                margin = "5px";   
                color = "blue";   
                consejo = "Bajo peso";
                break;
        }
    }

    document.getElementById("output").textContent = imc;
    document.getElementById("consejo").textContent = consejo;

    document.querySelector(".contenedor").style.margin = margin;
    document.querySelector(".contenedor").style.borderColor = color; 
}
