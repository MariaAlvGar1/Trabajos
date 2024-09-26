
function borrarSesion(){
  $.ajax({
    method: "GET",
    url: "deletesesion.php"

  })
    .done(function( response ) {
      window.location="login.php"
      alert("Se ha cerrado la sesión")
    });
}
function anadirCancion(idsong){
  $.ajax({
    method: "GET",
    url: "pushtocart.php?idsong="+idsong
   
  })
    .done(function( response ) {
      alert("Canción añadida")
      
    });
}
function borrarcarrito(idcarrito){
  $.ajax({
    method: "GET",
    url: "deletecart.php?idcarrito="+idcarrito
   
  })
    .done(function( response ) {
      location.reload();
      
    });
} 
function comprar(){
  $.ajax({
    method: "GET",
    url: "compra.php"
   
  })
    .done(function( response ) {
      location.reload();
      
    });
} 
function index(){
  window.location="index.php"
}
function carrito(){
  window.location="carrito.php"
}

function mixes(){
  window.location="mixes.php"
}
