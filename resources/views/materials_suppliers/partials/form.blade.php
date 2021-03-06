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
        <label class="alinear">Materia Prima<span style="color:red">*</span></label>
        <select class="form-control" id="" name="material_id">

        @foreach ($materials as $materials)
            <option value="{{ $materials->id }}">{{ $materials->nombre }}</option>
        @endforeach
        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Proveedor<span style="color:red">*</span></label>
        <select class="form-control" id="" name="supplier_id">
        @foreach ($suppliers as $suppliers)
            <option value="{{ $suppliers->id }}">{{ $suppliers->nombre }}</option>
        @endforeach
        </select>
    </div>
</div>
<div class="row">
<div class="col mt-3">
        <label class="alinear">Medida<span style="color:red">*</span></label>
        <select class="form-control" id="" name="medida">

            <option value="UNITARIO">UNITARIO</option>
            <option value="METROS">METROS</option>
            <option value="CENTIMETROS">CENTIMETROS</option>
            <option value="PULGADAS">PULGADAS</option>

        </select>
    </div>
 
</div>

<div class="row">
    <div class="col mt-3">
        <label class="alinear">Cantidad<span style="color:red">*</span></label>

        {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 100, 'placeholder' => 'Introduzca la cantidad de materia prima']) }}
    </div>
    <div class="col mt-3">
        <label class="alinear">Precio<span style="color:red">*</span></label>
        {{ Form::text('precio', null, ['class' => "form-control $errors->has('precio') ? ' is-invalid' : ''", 'id' => 'precio', 'maxlength' => 20, 'placeholder' => 'Introduzca el precio total']) }}

    </div>
 
</div>





<center>

    <button type="submit" class="btn btn-primary mt-4">Registrar</button>


</center>
