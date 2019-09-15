<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('../resources/views/pdf/boostrap/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <style>
        img {
            width: 20%;
        }

        h3 {
            text-align: center;
        }

        small {
            margin-top: 20%;
        }

        #titulo {
            text-align: center;
        }

        #membrete {
            text-align: center;
            margin-top: 35px;
        }

        #fecha {
            margin-right: 15px;
        }

        @font-face {
            font-family: 'Times-Bold';
            src:"{{ public_path('../storage/fonts/Times-Bold') }}"
        }

        body {
            font-family: 'Times-Bold';
        }

        table {
            border-collapse: separate;

        }

    </style>
</head>

<body>
    <div class="row">
        <img class="align-left" src="{{ public_path('../public/assets/login/images/Stylo.png') }}">
        <h3 class="float-center" id="titulo">Stylo M C.A</h3>
        <div class="float-right">
            Fecha:<br>
            <div id="fecha"> {{ $date }} </div>

        </div>
        <br>

        <div id="membrete">

            <p class="float-center">J-29954809-0</p>
            <small class="float-center">Maracay Edo. Aragua, Av. Las Delicias</small> <br>
            <small class="float-center">Telefono: 0426-3186547</small> /
            <small class="float-center">Correo: stylom@gmail.com</small>

        </div>

    </div>


    <div class="row">
        <div class="dt-responsive table-responsive">
            <h2 class="text-center">Listado de ordenes de compra</h2> <br>

            <table id="simpletable" class="table table-striped table-bordered  text-center">
                <thead class=>
                    <tr>
                        <th>#</th>

                        <th>Materia P.</th>
                        <th>Proveedor</th>
                        <th>Medida</th>
                        <th>Cantidad</th>
                        <th>Precio</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($materialSupplier as $item)
                    <tr>

                        <td><b>{{ $i++ }}</b></td>

                        <td>{{ $item->materialNombre}}</td>
                        <td>{{ $item->supplierNombre}}</td>
                        <td>{{ $item->medida}}</td>
                        <td>{{ $item->cantidad}}</td>
                        <td>{{ $item->precio}} Bs</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>




</body>

</html>
