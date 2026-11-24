@extends('layouts.app') 
@section('title', 'Ubah Sekolah') 
  
@section('content') 
<h1 class="text-2xl font-bold mb-4">Ubah Sekolah</h1> 
@include('sekolah._tab', ['sekolah' => $sekolah]) 

<form action="{{ route('sekolah.update', $sekolah) }}" method="POST">
    @csrf 
    @method('PUT') 
    @include('admin.sekolah._form', ['sekolah' => $sekolah]) 
</form> 
@endsection