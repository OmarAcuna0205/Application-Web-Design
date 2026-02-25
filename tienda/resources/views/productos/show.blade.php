<h2>Listado de Productos</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nombre }}</td>
                <td>${{ number_format($prod->precio, 2) }}</td>
                <td>{{ $prod->categoria->nombre ?? 'Sin categoría' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="{{ route('productos.index') }}">
    <button>Volver al Formulario</button>
</a>