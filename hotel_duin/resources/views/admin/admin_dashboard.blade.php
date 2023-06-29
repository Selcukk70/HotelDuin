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
                        <th>Order ID</th>
                        <th>Costumer Name</th>
                        <th>Room</th>
                        <th>Reserved day</th>
                    </tr>

                        
                        @foreach($orders as $order)
                        <tr><td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->kamer}}</td>
                            <td>{{$order->reserved_time}} tot {{$order->end_reserved_time}}</td>
                            <td></td></tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
