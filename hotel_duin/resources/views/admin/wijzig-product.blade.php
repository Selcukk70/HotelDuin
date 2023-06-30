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
                <div class="card-header">{{ __('Update product') }}</div>

                <div class="card-body">
                    <form method="post" action="{{url('update_product')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="product" class="col-md-4 col-form-label text-md-end">{{ __('Kamer naam: ') }}</label>
                                <input type='hidden' name='id' value='{{$_GET['id']}}' required />
                            <div class="col-md-6">
                                <input type='text' placeholder="Product" name='product' value='{{$kamer->kamer}}' required autofocus/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Aantal" class="col-md-4 col-form-label text-md-end">{{ __('Aantal: ') }}</label>

                            <div class="col-md-6">
                                <input type='text' placeholder="Kenteken" name='kenteken' value='{{$kamer->aantal}}' required autofocus/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Prijs" class="col-md-4 col-form-label text-md-end">{{ __('Prijs: ') }}</label>

                            <div class="col-md-6">
                                <input type='text' placeholder="Prijs per dag" name='prijs' value='{{$kamer->prijs}}' required autofocus/>
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

                                 <a class="btn btn-primary" href="admin_dashboard">{{ __('Ga terug') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection