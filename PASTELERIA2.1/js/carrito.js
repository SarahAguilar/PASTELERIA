//Se hace esta funcion para que seeste ejecutando continuanemente en el html
(function() {
    //se declaran las variables que van a contener el valor que cambia (precios)
    let
        decorado, fruta, personas;

    //se crean las variables para obtener los select del html, 
    //!IMPORTANTE Estas variables de los select van afuera de la funcion principal 
    op1 = document.getElementById('decoracion');
    op2 = document.getElementById('fruta');
    op3 = document.getElementById('personas');


    //metodo que aun no lo entiendo bien para que sirve, pero lo explicaron en el curso lo tomaremos como la funcion principal jajaj
    "use strict";
    document.addEventListener('DOMContentLoaded', function() {


        var calcular = document.getElementById('calcular'); //variable que obtiene el boton, esta variable si va dentro de la funcion principal



        calcular.addEventListener('click', calcularMontos); //es la llamada del boton al hacer click y se llama al metodo que se quiera ejecutar

        function calcularMontos(event) { //se crea la funcion para calcular
            event.preventDefault(); //esto no se para que sirve pero es importante :3

            //Comienzan las condicionales para comparar las cadenas del select al seleccionar
            if (op1.value == 'sencillo') { //pregunta si lo seleccinado es un valor asignado por defecto
                decorado = 30; //si es verdadero cambia el precio de la variable 
            } else if (op1.value == 'decorado') {
                decorado = 40;
            } else if (op1.value == 'muydecorado') {
                decorado = 50;
            }

            //lo mismo de arriba :3
            if (op2.value == 'durazno') {
                fruta = 5;
            } else if (op2.value == 'fresa') {
                fruta = 10;
            } else if (op2.value == 'frambuesa') {
                fruta = 15;
            } else if (op2.value == 'nuez') {
                fruta = 20;
            }

            //lo mismo de arriba :3 x2
            if (op3.value == 'diez') {
                personas = 20;
            } else if (op3.value == 'veinte') {
                personas = 40;
            } else if (op3.value == 'treinta') {
                personas = 60;
            } else if (op3.value == 'cuarenta') {
                personas = 80;
            } else if (op3.value == 'cincuenta') {
                personas = 100;
            }

            //se hacen las operaciones
            var op = decorado + fruta;
            var opera2 = op + personas;

            //se asigna el resultado al label con su id
            document.getElementById('costo').innerHTML = "$" + opera2 + ".00";


            //LISTOOOOOOOOOOOOO BYE TE AMOO <6

        }
        $('.mobile-menu').on('click', function() {
            $('.contenido-header').slideToggle()
        });
    }); //dom content leadedop1
})();