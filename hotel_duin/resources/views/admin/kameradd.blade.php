@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Sorry !</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div> 
  @endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kamer toevoegen') }}</div>

                <div class="card-body">
                    <form method="post" action="{{url('upload_data')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="kamer" class="col-md-4 col-form-label text-md-end">{{ __('Kamer: ') }}</label>

                            <div class="col-md-6">
                                <input type='text' placeholder="Kamer" name='kamer' required autofocus/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="aantal" class="col-md-4 col-form-label text-md-end">{{ __('Aantal: ') }}</label>

                            <div class="col-md-6">
                                <input type='text' placeholder="Aantal" name='aantal' required autofocus/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prijs" class="col-md-4 col-form-label text-md-end">{{ __('Prijs: ') }}</label>

                            <div class="col-md-6">
                                <input type='text' placeholder="Prijs per dag" name='prijs' required autofocus/>
                            </div>
                        </div>
                        
                        
                        <div class="row mb-3">
                            <input type="file" name="filename[]" class="col-md-4 col-form-label text-md-end">
                        </div>  


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection