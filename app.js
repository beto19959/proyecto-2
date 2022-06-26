
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
    var contador=localStorage.getItem("conta");
    if(contador==null){
        contador=1;
    }else{
        contador=parseInt(contador)+1;
    }
    localStorage.setItem("conta",contador);
    localStorage.setItem("sku"+contador,sku);
    localStorage.setItem("Nombre"+contador,Nombre);
    localStorage.setItem("pre"+contador,pre);
    localStorage.setItem("tipo"+contador,tipo);
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
    $("#tablastoragebody").empty();
    var conta=localStorage.getItem("conta");

    for (var i = 1; i <= conta; i++) {

        var sku = localStorage.getItem("sku"+[i]);
        var Nombre = localStorage.getItem("Nombre"+[i]);
        var pre = localStorage.getItem("pre"+[i]);
        var tipo = localStorage.getItem("tipo"+[i]);
        
        if(sku!=null){
            $("#tablastoragebody").append('<tr class="text-center"',
            '<td>'+ sku+ '</td>', 
            '<td>'+ Nombre+ '</td>',
            '<td>'+ pre+ '</td>',
            '<td>'+ tipo + '</td>',
            '<td><div class="btn btn-primary btn-rounded m-3"OnClick="editarLocalstorage(this);" data-i="'+[i]+'" data-sku="'+sku+'" data-nombre="'+Nombre+'"data-pre="'+pre+'"data-tipo="'+tipo+'"> Editar</div><div class="btn btn-danger btn-rounded m-3"OnClick="eliminarLocalstorage('+[i]+');"> Eliminar</div></td>',
            '</tr>');
        }
    }
}
function eliminarLocalstorage(i){
    localStorage.removeItem("sku"+i);
    localStorage.removeItem("Nombre"+i);
    localStorage.removeItem("pre"+i);
    localStorage.removeItem("tipo"+i);
    mostrar();
}
function editarLocalstorage(event){
    $("#exampleModal").modal('show');
    var sku = $(event).data('sku');
    var Nombre = $(event).data('nombre');
    var pre = $(event).data('pre');
    var tipo = $(event).data('tipo');
    var i = $(event).data('i');
    
    $("#Nombre1").val(Nombre);
    $("#pre1").val(pre);
    $("#tipo1").val(tipo);
	$("#exampleModal").attr("data-id", sku);
	$("#exampleModal").attr("data-i", i);
    mostrar();
}
function ActualizarLocalstorage(){
    var sku = $("#exampleModal").attr("data-id");
    var i = $("#exampleModal").attr("data-i");
    var Nombre =  $("#Nombre1").val();
    var pre = $("#pre1").val();
    var tipo = $("#tipo1").val();

    localStorage.setItem("sku"+i,sku);
    localStorage.setItem("Nombre"+i,Nombre);
    localStorage.setItem("pre"+i,pre);
    localStorage.setItem("tipo"+i,tipo); 
    Swal.fire({
        icon: 'success',
        title: 'Datos Actualizados!',
        showConfirmButton: false,
        timer: 1500
      })
      mostrar();
      $("#exampleModal").modal('hide');
}
function sku()
{
    var conteo=conteo+1;
}
function borrarLocalstorage(){
    var conf=confirm("¿Quieres borrar todos los datos de la tabla?");
    if(conf){
        localStorage.clear();
        mostrar();
    }
}