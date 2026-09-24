// 1. Variable subtotal con la compra
let subtotal = 1200; 

// 2. Variable para el descuento
let descuento = 0;

// 3. Verificamos si la compra es de 1,000 o más para aplicar el 10%
if (subtotal >= 1000) {
  descuento = subtotal * 0.10;
}

// 4. Calculamos el total final
let totalFinal = subtotal - descuento;

// 5. Mostramos los resultados en la consola
console.log("Subtotal: $" + subtotal);
console.log("Descuento: $" + descuento);
console.log("Total Final: $" + totalFinal);