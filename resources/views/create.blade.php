{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/app.css">
    <div class="body">
        <h2 class="title">
           Add a new demon slayer x'ter.....
        </h2>
        <form action="/slayer" method="POST" class="w-full p-5 items-center flex justify-center">

            @csrf
            <div class="shadow-lg shadow-gray-800 border px-4 py-5 bg">
                <h3 id="title">Add a demon slayer</h3>
                <label for="name">name the demon slayer</label>
                <select name="name" id="name">
                    <option value="Beast Boy">Beast Boy</option>
                    <option value="Mist Hashira">Mist Hashira</option>
                    <option value="Kobitsuji">Kobitsuji</option>
                    <option value="hashirama senju">hashirama senju</option>
                </select><br />
                
                <label for="form">form of breathing</label>
                <select name="form" id="form" required>
                    <option value="Beast mimickry">Beast mimickry</option>
                    <option value="Mist breathing">Mist breathing</option>
                    <option value="flame breathing">flame breathing</option>
                    <option value="water breathing">water breathing</option>
                    <option value="stone breathing">stone breathing</option>
                </select><br />
                
                
                <label for="level">mastery level</label>
                <input required type="text"name="level" class="border border-t-0 border-r-0 border-l-0 border-black"><br />
                
                
                <fieldset>
                    <label for="attire" class="flex justify-center mb-0" @required(true)>attire color</label><br />
                    <input type="checkbox" name="attire" value="checked red">checked red
                    <input type="checkbox" name="attire" value="striped green">striped green
                    <input type="checkbox" name="attire" value="black cloak">black cloak
                    <input type="checkbox" name="attire" value="golden yellow">golden yellow
                </fieldset><br />
            </div>
        </form>
    </div>
@endsection
