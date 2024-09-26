function MostrarTexto(boton) {

  let dots = boton.parentNode.getElementsByClassName("dots")[0];
  let moreText = boton.parentNode.getElementsByClassName("more")[0];
  let btnText = boton.parentNode.getElementsByClassName("myBtn")[0];
  console.log(btnText);
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Leer más";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Leer menos";
    moreText.style.display = "inline";
  }
}




if (localStorage.getItem("carrito") !== null) {
  var carrito = JSON.parse(localStorage.getItem("carrito"));
  displayCart();
} else {
  var carrito = [];
}



function producto(producto) {
  let libros = [];
  let nombre = producto.parentNode.getAttribute("nombre");
  let precio = parseFloat(producto.parentNode.getAttribute("precio").replace(",", "."));

  let cantidad;

  if (carrito.length == 0) {
    cantidad = 1;
    libros.push(nombre, precio, cantidad);
    carrito.push(libros);
  } else {
    let comprobacion = 0
    for (let i = 0; i < carrito.length; i++) {

      if (carrito[i][0] == nombre) {
        comprobacion = 1;
        carrito[i][2] = carrito[i][2] + 1;
      }

    }

    if (comprobacion == 0) {
      cantidad = 1;
      libros.push(nombre, precio, cantidad);
      carrito.push(libros);
    }

  }


  console.log(carrito);
  //almacenamiento local temporal, me lo devuelve en array y lo paso a un JSON
  localStorage.setItem("carrito", JSON.stringify(carrito));
  //mensaje por pantalla
  var myModal = new bootstrap.Modal(document.getElementById('myModal'), {});

  myModal.show();
  //mensaje por pantalla se oculta tras x segundos
  setTimeout(function () { myModal.hide(); }, 2000);


  displayCart();

}

function displayCart() {

  let table = document.getElementById("cartTable");
  let total = document.getElementById("total");
  //esto llama a la tabla vacia del html
  table.innerHTML = "";
  total.innerHTML = "0";

  for (let i = 0; i < carrito.length; i++) {
    //se rellena la tabla del html con la info
    table.innerHTML += "<tr><td>" + carrito[i][0] + "</td><td>" + carrito[i][1] + "</td><td>" + carrito[i][2] + "</td></tr>";
    //se calcula el precio total de los libros 
    total.innerHTML = (carrito[i][1] * carrito[i][2]) + parseFloat(total.innerHTML);
  }
}

