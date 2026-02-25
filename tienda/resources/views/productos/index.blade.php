<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <h2>Registro de Producto</h2>

    <label>Nombre del Producto:</label>
    <input type="text" name="nombre" required>

    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" required>

    <label>Categoría:</label>
    <select name="categoria_id" required>
        <option value="">Selecciona una categoría</option>
        @foreach($categorias as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar Producto</button>
</form>

<br>
<a href="{{ route('productos.show') }}">
    <button type="button">Ver todos los productos</button>
</a>