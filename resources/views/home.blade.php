@extends('layouts.app')

@section('title', 'laravel12') 

@push('css')
    <style>
        body{
            background-color: #f3f3f3;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">

        <x-alert2 type="danger" class="mb-4">
            <x-slot name='title'>ALERTA PAPU</x-slot>
        </x-alert2>

        <h1>hola mundo</h1>
    </div>
@endsection