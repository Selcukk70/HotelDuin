@extends('layouts.app_user')

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
        text-align: left;
        padding: 8px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Auth::user()->name}} here are your reservations</div>
                <div class="card-body">
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>Room sort</th>
                            <th>Reserved day</th>
                            <th></th>
                        </tr>

                        @foreach($user_orders as $order)
                        <tr><td>{{$order->id}}</td>
                            <td>{{$order->kamer}}</td>
                            <td>{{$order->reserved_time}} tot {{$order->end_reserved_time}}</td>
                            <td><a href="#">Print invoice</a></td></tr>
                        @endforeach
                    </table>
                </div>
            <center><p>If you wish to cancel or change your reservations please call the helpdesk.</p></center>
            </div>
        </div>
    </div>
</div>
@endsection
