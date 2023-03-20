@extends('layouts.mainlayout')

@section('title','Students')

@section('content')

    <h2 class="mt-5">Anda sedang melihat data detail dari Teacher yang bernama {{ $teacher->name }}</h2>

    <div class="mt-5">
      <h3>
        Class : 
        @if ($teacher->class)
            {{ $teacher->class->name }}
        @else
        -
        @endif
      </h3>
    </div>

    <div class="mt-5">
      <h4>List Student</h4>
      @if ($teacher->class)
        <ol>
          @foreach ($teacher->class->students as $item)
              <li>{{ $item->name }}</li>
          @endforeach
        </ol>
      @endif
    </div>
    
@endsection