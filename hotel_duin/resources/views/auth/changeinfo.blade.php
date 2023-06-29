@extends('layouts.app_user')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Information</div>
   
                <div class="card-body">
                    <form method="POST" action="/update-information">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
  
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" autocomplete="name">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
  
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adres" class="col-md-4 col-form-label text-md-right">Adres</label>
    
                            <div class="col-md-6">
                                <input id="adres" type="text" class="form-control" name="adres" autocomplete="adres">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">Postcode</label>
    
                            <div class="col-md-6">
                                <input id="postcode" type="postcode" class="form-control" name="postcode" autocomplete="postcode">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-right">Phone number</label>
    
                            <div class="col-md-6">
                                <input id="phonenumber" type="number" class="form-control" name="phonenumber" autocomplete="phonenumber">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Information
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