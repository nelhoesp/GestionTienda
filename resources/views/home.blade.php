<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- DataTable CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" /> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.min.css" />
    <!-- Customized Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
    <div class="container py-5">
        <div class="car">
            <div class="card-header">
                <h4 class="card-title">Gestión de Tienda</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Contacto</th>
                                <th>Ciudad</th>
                                <th>País</th>
                                <th>Acción</th>
                            </tr>
                        </thead>

                        <tbody>

                            {{-- @forelse ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->customer_id }}</td>
                                    <td>{{ $customer->customer_name }}</td>
                                    <td>{{ $customer->contact_name }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->country }}</td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="4"> No Data Found! </td>
                                </tr>
                            @endforelse --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Editar Contacto Modal -->
        <div class="modal fade" id="editarContactoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Contacto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="editar_id">
                <div class="mb-3">
                    <label>Contacto</label>
                    <input type="text" class="form-control" id="editar_contacto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="editarContacto()">Guardar cambios</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Ver Órdenes de compra Modal -->
        <div class="modal fade" id="ordenesCompraModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Órdenes de Compra</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <select class="form-select" id="selectOrdenCompra" aria-label="Selecciona ID de orden de compra">
                            <option selected></option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="nro_orden">Nro. Orden</label>
                    </div>
                    <div class="col-3">
                        <input type="text" name="nro_orden" id="nro_orden" value="" style="width: 100%;" disabled>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" id="btn-detalles" style="width: 100%">Detalles</button>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center py-1">
                    <div class="col-3">
                        <label for="empleado">Empleado</label>
                    </div>
                    <div class="col-3">
                        <input type="text" name="empleado" id="empleado" value="" style="width: 100%;" disabled>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center py-1">
                    <div class="col-3">
                        <label for="fecha">Fecha</label>
                    </div>
                    <div class="col-3">
                        <input type="text" name="fecha" id="fecha" value="" style="width: 100%;" disabled>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center py-1">
                    <div class="col-3">
                        <label for="transporte">Transporte</label>
                    </div>
                    <div class="col-3">
                        <input type="text" name="transporte" id="transporte" value="" style="width: 100%;" disabled>
                    </div>
                </div>
                <br>
                <table class="table detailsTable">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio Unit.</th>
                            <th>Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-end">TOTAL:</th>
                            <th id="totalGeneral"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>
        </div>
        
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://kit.fontawesome.com/dec660011f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Customized Script -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>