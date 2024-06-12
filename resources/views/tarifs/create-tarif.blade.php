<!-- resources/views/tarifs/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Créer un nouveau tarif') }}</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('tarifs.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nom" class="form-label">{{ __('Nom') }}</label>
                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autofocus>
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="duree" class="form-label">{{ __('Durée') }}</label>
                            <input id="duree" type="text" class="form-control @error('duree') is-invalid @enderror" name="duree" value="{{ old('duree') }}" required>
                            @error('duree')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">{{ __('Prix') }}</label>
                            <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required>
                            @error('prix')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Créer') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
