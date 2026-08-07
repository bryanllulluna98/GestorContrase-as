<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVault - {{ $cliente->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">🔐 TechVault</span>
    <a href="{{ route('clientes.index') }}" class="btn btn-outline-light btn-sm">← Volver</a>
</nav>

<div class="container mt-4">
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <span class="fw-bold">{{ $cliente->nombre }}</span>
            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>
        </div>
        <div class="card-body">
            <p><strong>RUC / Cédula:</strong> {{ $cliente->ruc_cedula ?? '—' }}</p>
            <p><strong>Teléfono:</strong> {{ $cliente->telefono ?? '—' }}</p>
            <p><strong>Correo:</strong> {{ $cliente->correo ?? '—' }}</p>
            <p><strong>Dirección:</strong> {{ $cliente->direccion ?? '—' }}</p>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Dispositivos de {{ $cliente->nombre }}</h5>
        <a href="{{ route('dispositivos.create') }}?cliente_id={{ $cliente->id }}" class="btn btn-primary btn-sm">+ Agregar dispositivo</a>
    </div>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ubicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dispositivos as $dispositivo)
                    <tr>
                        <td><span class="badge bg-secondary">{{ $dispositivo->tipo }}</span></td>
                        <td>{{ $dispositivo->marca ?? '—' }}</td>
                        <td>{{ $dispositivo->modelo ?? '—' }}</td>
                        <td>{{ $dispositivo->ubicacion ?? '—' }}</td>
                        <td>
                            <a href="{{ route('dispositivos.show', $dispositivo) }}" class="btn btn-sm btn-info text-white">Ver</a>
                            <a href="{{ route('dispositivos.edit', $dispositivo) }}" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">Este cliente no tiene dispositivos aún.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>