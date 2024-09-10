
num1 = document.getElementById("n1");
num2 = document.getElementById("n2");
res = document.getElementById("r");


function sumar() {
    res.value = parseFloat(num1.value) + parseFloat(num2.value);
}


function restar() {
    res.value = parseFloat(num1.value) - parseFloat(num2.value);
}

function multiplicar() {
    res.value = parseFloat(num1.value) * parseFloat(num2.value);
}


function dividir() {
    if (parseFloat(num2.value) !== 0) {
        res.value = parseFloat(num1.value) / parseFloat(num2.value);
    } else {
        res.value = "Error: División por 0";
    }
}


document.getElementById("sumar").addEventListener('click', sumar);
document.getElementById("restar").addEventListener('click', restar);
document.getElementById("multiplicar").addEventListener('click', multiplicar);
document.getElementById("dividir").addEventListener('click', dividir);
