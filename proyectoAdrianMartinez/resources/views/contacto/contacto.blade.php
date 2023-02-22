@extends('layout')

@section('title', 'Contacto')

@section('content')
    <!-- Wrapper container -->
    <div class="container-contacto py-4">
        <h2>Contacto</h2>

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" method="POST" action="{{ route('message.procesarFormulario') }}"
            data-sb-form-api-token="API_TOKEN">
            @csrf
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Nombre</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Nombre"
                    data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es obligatorio.</div>
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="subject">Asunto</label>
                <input class="form-control" id="subject" name="subject" type="text" placeholder="Asunto"
                    data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="subject:required">El asunto es obligatorio.</div>
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Mensaje</label>
                <textarea class="form-control" id="message" name="message" type="text" placeholder="Mensaje" style="height: 10rem;"
                    data-sb-validations="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es obligatorio.</div>
            </div>

            <!-- Form submissions success message -->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">Mensaje enviado correctamente!</div>
            </div>

            <!-- Form submissions error message -->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error al enviar el mensaje!</div>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Enviar</button>
            </div>

        </form>

    </div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
