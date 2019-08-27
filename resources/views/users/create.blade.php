@extends ("partials.admin.layout")
@section('content')



<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-container navbar-wrapper">
    </div>

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                 <div class="card-body">
                                         <center>
                                            <h4 class="box-title">Registro de secretarias</h4>
                                            <p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <form id="formulario_registro_usuarios" method="POST"
                                                    action="controllers/registro_usuarios.php"
                                                    enctype="multipart/form-data">


                                                    <div class="row">

                                                        <div class="col mt-1">
                                                            <label for="">Usuario<span
                                                                    style="color:red">*</span></label>
                                                            <input
                                                                onkeypress='return event.charCode >= 65 && event.charCode <= 122 || event.charCode==32'
                                                                type="text" class="form-control"
                                                                placeholder="Nombre de usuario para ingresar al sistema"
                                                                name="usuario" maxlength="20">
                                                        </div>
                                                        <div class="col mt-1">
                                                            <label for="">Correo<span style="color:red">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Email"
                                                                name="correo" maxlength="30">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <label for="">Contraseña<span
                                                                    style="color:red">*</span></label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Contraseña" name="clave" maxlength="15">
                                                        </div>
                                                        <div class="col mt-3">
                                                            <label for="">Confirmar contraseña<span
                                                                    style="color:red">*</span></label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Repita la contraseña" name="clave2"
                                                                maxlength="15">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <label for="">Nombre<span style="color:red">*</span></label>
                                                            <input
                                                                onkeypress='return event.charCode >= 65 && event.charCode <= 122 || event.charCode==32'
                                                                type="text" class="form-control" placeholder="Nombre"
                                                                name="nombre" maxlength="20">
                                                        </div>
                                                        <div class="col mt-3">
                                                            <label for="">Apellido<span
                                                                    style="color:red">*</span></label>
                                                            <input
                                                                onkeypress='return event.charCode >= 65 && event.charCode <= 122 || event.charCode==32'
                                                                type="text" class="form-control" placeholder="Apellido"
                                                                name="apellido" maxlength="30">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <label for="">Fecha de Nacimiento<span
                                                                    style="color:red">*</span></label>
                                                            <input type="date" class="form-control"
                                                                placeholder="Fecha de nacimiento" name="f_nacimiento">
                                                        </div>
                                                        <div class="col mt-3">
                                                            <label for="">Teléfono<span
                                                                    style="color:red">*</span></label>
                                                            <input
                                                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                type="text" class="form-control"
                                                                placeholder="Número telefonico" name="telefono"
                                                                maxlength="11">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <label for="">Cédula<span style="color:red">*</span></label>
                                                            <input
                                                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                type="text" class="form-control" placeholder="Cédula"
                                                                name="cedula" maxlength="8">
                                                        </div>
                                                        <div class="col mt-3">
                                                            <label for="">Dirección<span
                                                                    style="color:red">*</span></label>
                                                            <textarea class="form-control" placeholder="Dirección"
                                                                rows="3" name="direccion" maxlength="100"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" class="row">

                                                        <select hidden="" class="form-control" name="rol">
                                                            <option value="SECRETARIA">Secretaria</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group" class="row">
                                                        <label for="">Curriculum</label>


                                                        <input class="form-control-file" type="file" name="archivo" />

                                                    </div>


                                                    <center>

                                                        <button class="btn btn-primary mt-4">Agregar</button>
                                                        <button type="reset" class="btn btn-danger mt-4 ml-2"
                                                            value="Reset">Limpiar</button>
                                                        <a href="index.php" class="btn btn-success mt-4">Volver</a>


                                                    </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
                                    <div class="card-body"></div>
                                </div>
                            </div><!-- /# column -->
                        </div>
                        <!--  /Traffic -->
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>



</body>

</html>




@endsection