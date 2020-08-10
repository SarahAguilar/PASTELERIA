<php?
function validar(){
  var usuario, clave, expresion;
  nombre = document.getElementById("usuario").value;
  clave = document.getElementById("clave").value;

  if(usuario === "" || clave === ""){
    alert("Se necesita ingresar todos los datos");
    return false;
  }
 if(usuario==="Sarah" && clave==="1234"){
   $sLang = lang();
header("Location: Index.php?lang=$sLang");
 }

}
?>
