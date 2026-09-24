// Creamos la variable numero
let numero = 6; 

console.log("--- Tabla de multiplicar del " + numero + " ---");

// Creamos el ciclo 'for' que avanza del 1 al 10
for (let i = 1; i <= 10; i++) {
  // Calculamos el resultado de cada multiplicación
  let resultado = numero * i;

  //  Mostramos el mensaje 
  console.log(numero + " x " + i + " = " + resultado);
}