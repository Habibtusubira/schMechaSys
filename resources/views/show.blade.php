{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@extends('layouts.app')
@section('content')
   <div>
        <h1>demon slayer - {{$ninja->name}}</h1>
        <p>breathing techniq- {{$ninja->form}}</p>
        <p>attire- {{$ninja->attire}}</p>
   </div>
   <a href="/slayer"><<<-Back</a>
@endsection
