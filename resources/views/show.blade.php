@extends('dashboard/dashboard')

@section('content')
<div class="container mt-5">
    <div class="card text-center" style="background: linear-gradient(to bottom right, #f0f0f0, #c0c0c0);">
        <div class="d-flex flex-column align-items-center">
            <!-- Foto de Perfil -->
            <div class="position-relative mb-4 mt-4">
                <img src="https://via.placeholder.com/140" class="rounded-circle border border-light" alt="Foto de Perfil">
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ $contact->name }}</h5>
                <ul class="list-unstyled">
                    <li><strong>Teléfono:</strong> {{ $contact->phone }}</li>
                    <li><strong>Email:</strong> {{ $contact->email }}</li>
                    <li><strong>Dirección:</strong> {{ $contact->direction }}</li>
                </ul>

                <div class="d-flex justify-content-center mb-3 mt-3">
                    <a href="#" class="btn btn-primary me-2">Mensaje</a>
                    <a href="#" class="btn btn-secondary">Agregar Amigo</a>
                </div>

                <h6>Información Adicional</h6>
                <p class="text-muted">Más detalles sobre el usuario.</p>
            </div>
        </div>
    </div>
</div>

<!-- Estilos adicionales -->
<style>
    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .rounded-circle {
        width: 140px; /* Tamaño aumentado de la foto de perfil */
        height: 140px; /* Mantener proporciones */
        border: 5px solid white; /* Borde blanco para destacar */
    }
    .card-body {
        padding: 2rem; /* Aumentar el padding en el cuerpo de la tarjeta */
    }
    .list-unstyled {
        padding: 0;
        margin: 0;
    }
</style>




@endsection