@extends('layouts.mainlayout')

@section('title','Teachers')

@section('content')

<h1>Ini Halaman Student</h1>
<h3>Teacher List</h3>


<div class="my-5">
  <a href="" class="btn btn-primary">Add Data</a>
</div>


<table class="table">
  <thead>
          <th>#</th>
          <th>Name</th>
          <th>Action</th>
  </thead>
  <tbody>
    @foreach ($teacherList as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td><a href="teacher-detail/{{ $item->id }}">Detail</a></td>
      </tr>

    @endforeach
  </tbody>

@endsection