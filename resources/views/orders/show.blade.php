@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Order</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order #{{ $order->order_number }}</h5>
            <p class="card-text"><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
            <p class="card-text"><strong>Order Date:</strong> {{ $order->order_date }}</p>
            <p class="card-text"><strong>Total Price:</strong> {{ $order->total_price }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $order->status }}</p>
            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
