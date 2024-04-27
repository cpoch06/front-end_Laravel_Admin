@extends('layout.master')

@section('content')

<div class="container mx-auto px-2 py-8">
    <div class="flex justify-between mb-8">
        <h1 class="text-3xl font-bold text-slate-700">Dashboard</h1>
        <div class="flex space-x-2">
        <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Share</button>
        <button class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700">Export</button>
        
        <button class="px-4 py-2 bg-slate-500 text-white rounded-md hover:bg-slate-700">This week <i class="bi bi-caret-down-fill"></i></button>
        </div>
    </div>

    <div class="relative">
        <canvas id="myChart" height="600" width="1104"></canvas>
    </div>


</div>

@endsection