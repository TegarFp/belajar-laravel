@extends('layouts.mainlayout')

@section('title','Class')

@section('content')

    <h2 class="mt-5">Anda sedang melihat data detail dari class yang bernama {{ $class->name }}</h2>

    <div class="mt-5">
     <h4><strong>Homeroom Teacher :</strong> {{ $class->homeroomTeacher->name }}</h4> 
    </div>
    <div class="mt-5">
      <h4>List Student</h4>
      <ol>
        @foreach ($class->students as $item)
          <li>{{ $item->name }}</li>  
        @endforeach
      </ol>
    </div>
    

@endsection