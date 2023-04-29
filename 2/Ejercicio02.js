let num1 = parseFloat(prompt("Ingrese el primer número: "));
let num2 = parseFloat(prompt("Ingrese el segundo número: "));
let num3 = parseFloat(prompt("Ingrese el tercer número: "));
let num4 = parseFloat(prompt("Ingrese el cuarto número: "));

let suma = num1 + num2;

let producto = num3 * num4;

document.getElementById("suma").innerHTML = suma;
document.getElementById("producto").innerHTML = producto;