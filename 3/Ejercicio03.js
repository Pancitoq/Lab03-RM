function compararNumeros() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);

    if (num2 === 0) {
      alert("El segundo número no puede ser cero.");
      return;
    }

    if (num1 > num2) {
      let suma = num1 + num2;
      let diferencia = num1 - num2;
      document.getElementById("resultado").innerHTML = `La suma de ${num1} y ${num2} es ${suma}. La diferencia entre ${num1} y ${num2} es ${diferencia}.`;
    } else {
      let producto = num1 * num2;
      let division = num1 / num2;
      document.getElementById("resultado").innerHTML = `El producto de ${num1} y ${num2} es ${producto}. La división de ${num1} entre ${num2} es ${division}.`;
    }
}