@extends('layout.master')

@section('content')

<div class="p-2.5">
    <h1 class='text-2xl font-bold text-slate-700'>Dashboard</h1>
    <p class='text-slate-500'>Welcome to Kriss Dashboard</p>
</div>

<div class="total-home-content">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-2.5">
        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Total Users</h1>
            <p class='text-slate-500'>1000</p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Total Orders</h1>
            <p class='text-slate-500'>2000</p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Total Revenue</h1>
            <p class='text-slate-500'>$2000</p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Total Products</h1>
            <p class='text-slate-500'>1000</p>
        </div>
    </div>
</div>

<div class="p-2.5">
    <h1 class='text-2xl font-bold text-slate-700'>Recent Orders</h1>
    <p class='text-slate-500'>List of recent orders</p>
</div>

<div class="recent-orders">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-2.5">
        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Order #1</h1>
            <p class='text-slate-500'>POS System</p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Order #2</h1>
            <p class='text-slate-500'>Web Application</p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Order #3</h1>
            <p class='text-slate-500'>Mobile Application</p>
        </div>

        <div class="p-4 bg-white shadow-md rounded-lg">
            <h1 class='text-xl font-bold text-slate-700'>Order #4</h1>
            <p class='text-slate-500'>E-commerce Website</p>
        </div>
    </div>
</div>

<div class="hero-section">
    <div class="p-3.5 mt-20 right-0 ">
        <h1 class="font-bold text-7xl text-slate-600">Kriss Software</h1>
        <p class="text-3xl mt-10">Your Best Software Solution</p>
    </div>
</div>

@endsection



