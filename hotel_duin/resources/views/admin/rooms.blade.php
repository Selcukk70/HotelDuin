@extends('layouts.app')

@section('content')


<style>

    table
    {
        display: flex;
        justify-content: center;
        gap: 15px;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        text-align: center;
        padding: 8px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Auth::user()->name}} here are the reservations</div>

                <table>
                    <tr>
                        <th>Room sort</th>
                        <th>Amount</th>
                        <th>Amount Left</th>
                        <th>Price</th>
                    </tr>

                        
                        @foreach($data as $room)
                        <tr>
                            <td>{{$room->kamer}}</td>
                            <td>{{$room->aantal}}</td>
                            <td></td>
                            <td>{{$room->prijs}}</td>
                            <td> 
                                <div class="card h-100">
                                    <?php foreach (json_decode($room->filename)as $picture) { ?>
                                      <img src="{{ asset('/image/'.$picture) }}" class="card-img-top" style="width: 250px; height:100px;"/>
                                     <?php } ?>
                                  </div>
                            </td>
                            <td><a href="wijzig-kamer?id={{$room->id}}">Edit</a></td>
                            <td><a href="verwijder-product?id={{$room->id}}">Verwijder</a></td></tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

