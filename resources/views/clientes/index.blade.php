<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVault - Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">🔐 TechVault</span>
    <div>
        <a href="{{ route('clientes.index') }}" class="btn btn-outline-light btn-sm me-2">Clientes</a>
        <a href="{{ route('dispositivos.index') }}" class="btn btn-outline-light btn-sm">Dispositivos</a>
    </div>
</nav>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Clientes registrados</h4>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">+ Nuevo cliente</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>RUC / Cédula</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->ruc_cedula ?? '—' }}</td>
                        <td>{{ $cliente->telefono ?? '—' }}</td>
                        <td>{{ $cliente->correo ?? '—' }}</td>
                        <td>
                            <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-sm btn-info text-white">Ver</a>
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Eliminar este cliente?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">No hay clientes registrados aún.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $clientes->links() }}</div>
</div>

</body>
</html>