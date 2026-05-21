<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVault - Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">🔐 TechVault</span>
</nav>

<div class="container mt-4" style="max-width:600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white fw-bold">Editar Cliente</div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('clientes.update', $cliente) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nombre *</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $cliente->nombre) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">RUC / Cédula</label>
                    <input type="text" name="ruc_cedula" class="form-control" value="{{ old('ruc_cedula', $cliente->ruc_cedula) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Correo</label>
                    <input type="email" name="correo" class="form-control" value="{{ old('correo', $cliente->correo) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Dirección</label>
                    <textarea name="direccion" class="form-control" rows="2">{{ old('direccion', $cliente->direccion) }}</textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Actualizar cliente</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>