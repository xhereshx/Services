@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                
                <div class="card-header"><h2>{{ __('Seznam kontaktních formulářů') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
</div>
                    @foreach ($formModels as $formModel)
                    <div class="card ">
                        <div class="ml-4">
                            <p> Dotaz číslo: {{$formModel->id}}</p>
                        <p>Jméno:  {{$formModel->name}}</p>
                        <p>Příjmení:  {{$formModel->surname}}</p>
                        <p>Komentář:  {{$formModel->comment}}</p></div>
                    </div>
                        <br/>
                        <br/>
                    @endforeach
        </div>
    </div>
</div>
@endsection
