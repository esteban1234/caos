$(document).ready(function(){
  $(".menu-abrir").click(function(e){
    e.preventDefault();
    $("#menu").show(100);
  });

  $(".cerrar").click(function(e){
    e.preventDefault();
    $("#menu").hide(100);
  });
});
