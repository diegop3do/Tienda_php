$(document).ready(function () {
    const table = document.getElementById("table-clasificacion");

    function mostrar_tiendas(){
        $.ajax({
            url: '../controller/tienda_controller.php?op=listar',
            type: 'POST',
            success: function(response){
                const fila = table.insertRow();
                    fila.insertCell().innerText = response.Id;
                    fila.insertCell().innerText = response.Nombre;
                    fila.insertCell().innerText = response.Fecha_de_apertura;


                    let eliminarBtn = document.createElement('button');
                    eliminarBtn.innerText = 'Eliminar';
                    eliminarBtn.setAttribute('class', 'btn btn-danger btn-sm');
                    eliminarBtn.addEventListener('click', async () => {
                        // await deleteclasificacionAlert(clasificacion.id);
                    });
                
                    fila.insertCell().appendChild(eliminarBtn);
            
        }})
    } 
    mostrar_tiendas();
});

