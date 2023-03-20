@extends('layouts.mainlayout')

@section('title','Extracurricular')

@section('content')

    <h2 class="mt-5">Anda sedang melihat data detail Extracurricular {{ $ekskul->name }}</h2>
    <div class="mt-5">
      <h3>List Peserta</h3>
      <ol>
      @foreach ($ekskul->students as $item)
          <li>{{ $item->name }}</li>
      @endforeach
    </ol>
    </div>


@endsection