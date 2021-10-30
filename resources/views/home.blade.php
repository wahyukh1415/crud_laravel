@extends('layout/main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <h1>Welcome Home </h1>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="profil-pic" align="center">
                    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="100" alt="">
                    <p>Wahyu Kurniawan Hartanto</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fas fa-users">Friends</i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fas fa-users">Group</i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fas fa-users">Activity</i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fa fa-users">Message</i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="input-group p-3">
                    <input type="text" class="form-control" placeholder="Apa yang anda pikirkan?" width="50">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Kirim</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-3">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <p align="center" class="contact p-3">Contact</p>
                @foreach ($students as $student)
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$student->nama}} <p style="color: green">Online</p>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div> 

@endsection
