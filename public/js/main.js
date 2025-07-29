// Inicializando DataTable
$(document).ready(function() {
    $('.datatable').DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            url: '/'
        },
        columns: [
            { data: 'customer_id', name: 'customer_id' },
            { data: 'customer_name', name: 'customer_name' },
            { data: 'contact_name', name: 'contact_name' },
            { data: 'city', name: 'city' },
            { data: 'country', name: 'country' },
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <button
                            type="button" 
                            class="btn btn-sm btn-primary btn-editar"
                            title="Editar Contacto"
                            data-bs-toggle="modal"
                            data-bs-target="#editarContactoModal"
                            data-id="${row.customer_id}"
                            data-contact="${row.contact_name}"
                        >
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        
                        <button
                            type="button"
                            class="btn btn-sm btn-secondary btn-ver-ordenes"
                            title="Ver Órdenes de compra"
                            data-bs-toggle="modal"
                            data-bs-target="#ordenesCompraModal"
                            data-id="${row.customer_id}"
                        >
                            <i class="fa-solid fa-list"></i>
                        </button>`
                }
            }
        ]
    });

    $(document).on('click', '.btn-editar', function () {
        const id = $(this).data('id');
        const contacto = $(this).data('contact');

        $('#editar_id').val(id);
        $('#editar_contacto').val(contacto);
    });

    $(document).on('click', '.btn-ver-ordenes', function () {
        const customerId = $(this).data('id');

        document.getElementById('nro_orden').value = "";
        document.getElementById('fecha').value = "";
        document.getElementById('transporte').value = "";
        document.getElementById('empleado').value = "";

        $.ajax({
            url: `/api/v1/customers/${customerId}?includeOrders=true`,
            method: 'GET',
            contentType: 'application/json',
            data: JSON.stringify({
                customerId: customerId
            }),
            success: function(response) {
                const ordenes = response.data.orders;

                const $select = $('#selectOrdenCompra');
                $select.empty(); // Limpia el select antes de agregar opciones
                $select.append('<option value="" selected></option>'); // Opción por defecto

                ordenes.forEach(order => {
                    $select.append(`<option value="${order.orderId}">${order.orderId}</option>`);
                });
            },
            error: function(xhr) {
                console.error(xhr.responseJSON);
                alert('Ocurrió un error al consultar las ordenes del cliente');
            }
        });
    });

    $(document).on('change', '#selectOrdenCompra', function () {
        let orderId = $(this).val();
        let fecha = "";
        let nombreTransporte = "";
        let nombreEmpleado = "";

        let inputOrden = document.getElementById('nro_orden');
        let inputFecha = document.getElementById('fecha');
        let inputTransporte = document.getElementById('transporte');
        let inputEmpleado = document.getElementById('empleado');

        inputOrden.value = "";
        inputFecha.value = "";
        inputEmpleado.value = "";
        inputTransporte.value = "";

        $.ajax({
            url: `/api/v1/orders/${orderId}?includeEmployee=true&includeShipper=true`,
            method: 'GET',
            contentType: 'application/json',
            success: function(response) {
                fecha = response.data.orderDate;
                nombreTransporte = response.data.shipper.shipperName;
                nombreEmpleado = response.data.employee.firstName + ' ' + response.data.employee.lastName;

                inputOrden.value = orderId;
                inputFecha.value = fecha;
                inputEmpleado.value = nombreEmpleado;
                inputTransporte.value = nombreTransporte;
            }
        });
    });

    $(document).on('click', '#btn-detalles', function () {
        let orderId = $('#nro_orden').val();

        $.ajax({
            url: `/api/v1/orders/${orderId}?includeOrderDetails=true`,
            method: 'GET',
            success: function (response) {
                const detalles = response.data.order_details;

                $('.detailsTable').DataTable({
                    data: detalles,
                    destroy: true,
                    paging: false,
                    info: false,
                    searching: false,
                    columns: [
                        { data: 'productName', title: 'Nombre' },
                        { data: 'quantity', title: 'Cantidad' },
                        { data: 'productUnitPrice', title: 'Precio Unit.' },
                        { data: 'total', title: 'Precio Total', render: $.fn.DataTable.render.number(',','.', 2, '$ ')}
                    ],
                    footerCallback: function (row, data, start, end, display) {
                        let total = data.reduce((sum, row) => sum + parseFloat(row.total), 0);

                        $('#totalGeneral').html(`S/ ${total.toFixed(2)}`);
                    }
                });
            }
        });
    });
});

function editarContacto() {
    let customerId = document.getElementById('editar_id').value;
    let contactName = document.getElementById('editar_contacto').value;

    $.ajax({
        url: `/api/v1/customers/${customerId}`,
        method: 'PATCH',
        contentType: 'application/json',
        data: JSON.stringify({
            contactName: contactName
        }),
        success: function(response) {
            Swal.fire({
                title: "Cliente actualizado correctamente",
                icon: "success"
            }).then((result) => {
                $('#editarContactoModal').modal('hide'); // cerrar el modal
                $('.datatable').DataTable().ajax.reload(); // recargar la tabla
            });
        },
        error: function(xhr) {
            console.error(xhr.responseJSON);
            alert('Ocurrió un error al actualizar');
        }
    });
}