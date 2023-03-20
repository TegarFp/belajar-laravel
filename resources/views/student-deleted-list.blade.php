@extends('layouts.mainlayout')

@section('title','Students')

@section('content')


    <h1>Ini Halaman Student Yang Sudah Didelete</h1>

    <div class="my-5 ">
      <a href="/students" class="btn btn-primary">Back</a>
    </div>

    
    
    <div class="mt-5">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Gender</th>
          <th>NIS</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach ($student as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gander }}</td>
                <td>{{ $data->nis }}</td>
                <td>
                  <a href="/student/{{ $data->id }}/restore">Restore</a>
                </td>
              </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>


@endsection