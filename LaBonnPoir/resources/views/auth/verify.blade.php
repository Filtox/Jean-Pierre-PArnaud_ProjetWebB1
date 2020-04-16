@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header">Vérification de votre adresse email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Un lien de vérification a été envoyé à votre adresse email
                        </div>
                    @endif

                    Veuillez d'abord regarder dans vos emails la présence d'un lien de vérification

                    Si vous n'avez rien reçu, <a href="{{ route('verification.resend') }}">cliquez ici pour en recevoir un</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
