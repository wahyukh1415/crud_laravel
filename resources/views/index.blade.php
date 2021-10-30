@extends('layout/main')

@section('title', 'Web Programing')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>List Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td> {{ $student->nama }}</td>
                        <td> {{ $student->nrp }} </td>
                        <td> {{ $student->email }} </td>
                        <td> {{ $student->jurusan }} </td>
                        <td>
                        <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>
                        <form action="/students/{{$student->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 

@endsection
