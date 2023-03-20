@extends('layouts.mainlayout')

@section('title','Add New Student')

@section('content')


<div class="mt-5 col-8 m-auto">
  <form action="/student/{{ $student->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}" required>
    </div>

    <div class="mb-3">
      <label for="gander">Gender</label>
      <select name="gander" id="gander" class="form-control" required>
        <option value="{{ $student->gander }}">{{ $student->gander }}</option>
        @if ($student->gander == 'L')
            <option value="P">P</option>
        @else
            <option value="L">L</option>
        @endif
      </select>
    </div>

    <div class="mb-3">
      <label for="nis">Nis</label>
      <input type="text" name="nis" class="form-control" id="nis" value="{{ $student->nis }}" required>
    </div>

    <div class="mb-3">
      <label for="class">Class</label>
      <select name="class_id" id="class" class="form-control" required>
        <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
        @foreach ($class as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
    </div>


    <div class="mb-3">
      <button class="btn btn-success" type="submit">Update</button>
    </div>

  </form>
</div>

@endsection