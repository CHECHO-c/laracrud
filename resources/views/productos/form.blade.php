@csrf
<div class="mb-3">
    <label >Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre',$producto->nombre ?? "")  }}">
</div>

<div class="mb-3">
    <label >Descripcion</label>
    <input type="text" name="Descripcion" class="form-control" value="{{ old('Descripcion',$producto->Descripcion ?? "")  }}">
</div>

<div class="mb-3">
    <label >precio</label>
    <input type="text" name="precio" class="form-control" value="{{ old('precio',$producto->precio ?? "")  }}">
</div>

<button class="btn btn-primary">Guardar</button>