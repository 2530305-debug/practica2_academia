// Variable subtotal de la compra
let subtotal = 1200; 

// Variable para el descuento
let descuento = 0;

// Verificamos si la compra es de 1,000 o más para aplicar el 10%
if (subtotal >= 1000) {
  descuento = subtotal * 0.10;
}

// Calculamos el total final
let totalFinal = subtotal - descuento;

// Se muestran los resultados 
console.log("Subtotal: $" + subtotal);
console.log("Descuento: $" + descuento);
console.log("Total Final: $" + totalFinal);