var cantidadEntrada = document.getElementById('cantidadEntrada')
var categoria = document.getElementById('categoria')
var totalCompra = document.getElementById("totalCompra")
var botonCalcular = document.getElementById('botonCalcular')
var valorEntrada = 200
const estudiante = document.getElementById('estudiante')
const trainee = document.getElementById('trainee')
const junior = document.getElementById('junior')

function resumen(){
    if(categoria.value=="estudiante"){
      estudiante.value = valorEntrada * 0.20
    }else if(categoria.value=="trainee"){
      trainee.value = valorEntrada * 0.50
    }else if(categoria.value=="junior"){
     junior.value = valorEntrada * 0.85
    }
    totalCompra.textContent = "Total a pagar: $" + Number(cantidadEntrada.value) * Number(categoria.value)
}