@extends('layouts.main')

@section('content')
    <div class="container">
        <h4>Masukan Data Pemain Sepak Bola</h4>
        <form method ="post" action="{{route ('pemain.store') }}">
         @csrf
            <div>Nama Pemain <input type="text" name="nama_pemain"></div>
            <div>No Punggung <input type="number" name="nama_punggung"></div>
            <div>Posisi<input type="text" name="posisi"></div>
            <div><button type="Submit"> Submit </button>
            <a href="/pemain">Cancel</a></div>
        </form>
    </div>
@endsection
