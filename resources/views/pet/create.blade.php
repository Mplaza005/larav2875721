@extends('layouts.app')

@section('content')

<h1>Ingresar Mascota:</h1>

<form action="{{route('pet.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" id="title" name="name" class="form-control" required>
    </div>

    <br>

    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}- {{ $user->email }}</option>
        @endforeach
    </select>


    <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

</form>

@endsection
