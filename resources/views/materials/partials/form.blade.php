@if(count($errors))
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col mt-3">
        <label class="alinear">Nombre<span style="color:red">*</span></label>

        {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 50, 'placeholder' => 'Introduzca de la materia prima. Ej: Tela de seda']) }}
    </div>
    <div class="col mt-3">
        <label class="alinear">Cantidad<span style="color:red">*</span></label>
        {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 9, 'placeholder' => 'Introduzca la cantidad disponible']) }}

    </div>
 
</div>

<div class="row">
    <div class="col mt-3">
        <label class="alinear">Medida<span style="color:red">*</span></label>
        <select class="form-control" id="" name="medida">

            <option value="UNITARIO">UNITARIO</option>
            <option value="m">m</option>
            <option value="cm">cm</option>
            <option value="inch">inch</option>

        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Proveedor<span style="color:red">*</span></label>
        <select class="form-control" id="" name="supplier_id">
        @foreach ($suppliers as $suppliers)
            <option value="{{ $suppliers['id'] }}">{{ $suppliers['nombrep'] }}</option>
        @endforeach
        </select>
    </div>
</div>


<center>

    <button type="submit" class="btn btn-primary mt-4">Registrar</button>


</center>
