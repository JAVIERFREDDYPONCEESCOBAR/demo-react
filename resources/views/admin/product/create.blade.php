
<form action="{{url(/productos)}}" method="POST" enctype="multipart/form-data">
    
   {{ csrf_field() }}

    <div class="form-group">
        <label for="sku"></label>
        <input type="text" class="form-control" id="sku" name="sku" value="">
    </div>
    <div class="form-group">
        <label for="nombre"></label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="">
    </div>
    <div class="form-group">
        <label for="precio"></label>
        <input type="number" class="form-control" id="precio" name="precio" value="">
    </div>
    <div class="form-group">
        <label for="preciooferta"></label>
        <input type="number" class="form-control" id="preciooferta" name="preciooferta" value="">
    </div>
    <div class="form-group">
        <label for="existencias"></label>
        <input type="number" class="form-control" id="existencias" name="existencias" value="">
    </div>
    <div class="form-group">
        <label for="descripcion"></label>
        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
    </div>

    <button class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" type="submit">Agregar</button>
</form>