@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upload Berkas</h1>
    <form action="{{ route('berkas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="berkas">
        <button type="submit">Upload</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
