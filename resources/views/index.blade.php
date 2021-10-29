@extends('layout/main')

@section('title', 'Web Programing')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Hello Mahasiswa</h1>

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
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td> {{ $mhs->nama }}</td>
                        <td> {{ $mhs->nrp }} </td>
                        <td> {{ $mhs->email }} </td>
                        <td> {{ $mhs->jurusan }} </td>
                        <td>
                            <button type="button" href="" class="btn btn-success">Edit</button>
                            <button type="button" href="" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 

@endsection
