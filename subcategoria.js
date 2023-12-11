//creamos variableas array para cada lista
var categorias_ACCESORIOS = ["BOLSO", "PULSERA", "BUFANDA", "RELOJ"];
var categorias_DOCUMENTACION = ["PASAPORTE", "INE", "CARTERA"];
var categorias_GAFAS = ["MARCAS"];
var categorias_JOYERIA = ["ARETES", "CADENA", "ANILLOS"];
var categorias_LIBROS_Y_PAPELERIA = ["AGENDA", "APUNTES", "LIBROS", "CUADERNOS"];
var categorias_MOVIL = ["CARGADOR", "FUNDA", "ETC"];
var categorias_INFORMATICA = ["TABLET", "LAPTOP", "DISCO DURO EXTRAIBLE"];
var categorias_JUEGOS_Y_DEPORTES = ["JUGUETES", "PELUCHES", "BALONES"];
var categorias_LLAVES = ["AUTOMOVIL", "CASA", "MOTOCICLETA"];
var categorias_MEDICINA = ["MEDICAMENTOS"];
var categorias_ROPA_Y_CALZADO = ["ZAPATOS", "TENIS", "BLUSA", "SHORT"];
var categorias_SALUD_Y_BELLEZA = ["COSMETICOS", "CREMAS", "LABIALES", "MAQUILLAJES"];
var categorias_OTROS = [""];


function cambia_categoria() {
  //tomamos el valor del select categoria elegido
  var dpt
  dpt = document.getElementById('categorias').value
  mis_dptos = acentos(dpt)
  // verificamos si la categoria está definida

  if (mis_dptos != 0) {
    //si estaba definido, entonces coloco las opciones de categoria correspondiente. 
    //selecciono el array de categoria adecuado 
    mis_categorias = eval("categorias_" + mis_dptos)

    //calculo el numero de municipios 
    num_categorias = mis_categorias.length
    //marco el número de municipios en el select 
    document.f1.subcategorias.length = num_categorias
    //para cada municipio del array, lo introduzco en el select 
    for (i = 0; i < num_categorias; i++) {
      document.f1.subcategorias.options[i].value = mis_categorias[i]
      document.f1.subcategorias.options[i].text = mis_categorias[i]

    }
  } else {
    //si no había municipio seleccionado, elimino los municipios del select 
    document.f1.subcategorias.length = 1
    //coloco un guión en la única opción que he dejado 
    document.f1.subcategorias.options[0].value = " "
    document.f1.subcategorias.options[0].text = "SIN ASIGNAR"
  }
}// FIN DE FUNCIONcambia_departamento

function acentos(dpt) {
  var acentuada
  if (dpt == "LIBROS Y PAPELERIA") { acentuada = "LIBROS_Y_PAPELERIA"; }
  else
   {
    if (dpt == "JUEGOS Y DEPORTES") { acentuada = "JUEGOS_Y_DEPORTES"; }
    else 
    {
      if (dpt == "ROPA Y CALZADO") { acentuada = "ROPA_Y_CALZADO"; }
      else 
      {
        if (dpt == "SALUD Y BELLEZA") { acentuada = "SALUD_Y_BELLEZA"; }
        else 
        {
          
        }
       acentuada = dpt;
      }
      
    }
    
  }
  return acentuada
}