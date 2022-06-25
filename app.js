function GuardarLocalstorage(){
    var sku=$("#sku").val();
    var Nombre=$("#Nombre").val();
    var pre=$("#pre").val();
    var tipo=$("#tipo").val();
if(!sku.trim()||!Nombre.trim()||!pre.trim()||tipo==0){
    Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'Todos los campos son obligatorios!'
      })
}else{
    localStorage.setItem("sku",sku);
    localStorage.setItem("Nombre",Nombre);
    localStorage.setItem("pre",pre);
    localStorage.setItem("tipo",tipo);
    Swal.fire({
        icon: 'success',
        title: 'Datos Agregados!',
        showConfirmButton: false,
        timer: 1500
      })
}
mostrar();
}
function mostrar(){
    var sku = localStorage.getItem("sku");
    var Nombre = localStorage.getItem("Nombre");
    var pre = localStorage.getItem("pre");
    var tipo = localStorage.getItem("tipo");
    $("#tablastoragebody").empty();
    if(sku==null){
        $('#tablastoragebody').append("<tr><th colspan='5' class='text-center'>No hay elementos para mostrar</th></tr>");
    }else{
        $("#tablastoragebody").append('<tr class="text-center" onClick="modalProyecto(this)">',
        '<td>'+ sku+ '</td>', 
        '<td>'+ Nombre+ '</td>',
        '<td>'+ pre+ '</td>',
        '<td>'+ tipo + '</td>',
        '<td><div class="btn btn-primary btn-rounded m-4"OnClick="editarLocalstorage();"> Editar</div><div class="btn btn-danger btn-rounded m-4"OnClick="eliminarLocalstorage();"> Eliminar</div></td>',
        '</tr>');
    }
  
}
function eliminarLocalstorage(){
    localStorage.removeItem("sku");
    localStorage.removeItem("Nombre");
    localStorage.removeItem("pre");
    localStorage.removeItem("tipo");
    mostrar();
}
function editarLocalstorage(){
    mostrar();
}