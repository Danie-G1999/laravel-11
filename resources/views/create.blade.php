@extends('dashboard/dashboard')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Formulario de Contacto</h2>
    <form action="{{ isset($contact) ? route('contact.update', $contact->id) : route('contact.store') }}" method="POST">
        @csrf
        @if (isset($contact))
            @method('PUT') <!-- Método para la actualización -->
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ isset($contact) ? $contact->name : '' }}" required>
            <div class="invalid-feedback">
                Por favor, ingresa tu nombre.
            </div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{ isset($contact) ? $contact->phone : '' }}" required>
            <div class="invalid-feedback">
                Por favor, ingresa tu número de teléfono.
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ isset($contact) ? $contact->email : '' }}" required>
            <div class="invalid-feedback">
                Por favor, ingresa un correo electrónico válido.
            </div>
        </div>

        <div class="mb-3">
            <label for="direction" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direction" name="direction" value="{{ isset($contact) ? $contact->direction : '' }}" required>
            <div class="invalid-feedback">
                Por favor, ingresa tu dirección.
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ isset($contact) ? 'Actualizar' : 'Crear' }}
        </button>
    </form>
</div>
@endsection