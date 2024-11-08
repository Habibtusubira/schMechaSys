@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/app.css">
    <div id="container" class="container h-100 mt-5 px-0">
        <div  class="row h-100 justify-content-center align-items-center ">
            <div id="mid-container" class="col-10 col-md-8 col-lg-6 bg-primary bg-opacity-10 pt-5 py-4 rounded shadow-lg shadow-gray-700">
                <h3>Edit slayer</h3>
                <form action="{{ route('slayer.update', $ninja->id) }}" method="POST">
                    {{-- solution for where to route to --}}
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">name the demon slayer</label>
                        <select class="form-control" id="name" name="name" value="{{ $ninja->name }}" required>
                            <option value="Beast Boy">Beast Boy</option>
                            <option value="Mist Hashira">Mist Hashira</option>
                            <option value="Kobitsuji">Kobitsuji</option>
                            <option value="hashirama senju">hashirama senju</option>
                        </select>
                    </div>

                    <label for="form">form of breathing</label>
                    <select name="form" id="form" class="form-control" value="{{ $ninja->form }}">
                        <option value="Beast mimickry">Beast mimickry</option>
                        <option value="Mist breathing">Mist breathing</option>
                        <option value="flame breathing">flame breathing</option>
                        <option value="water breathing">water breathing</option>
                        <option value="stone breathing">stone breathing</option>
                    </select>
                    <label for="level">mastery level</label>
                    <input type="text"name="level" class="form-control" value="{{ $ninja->level }}"><br />
                    <fieldset>
                        <label for="attire">attire color</label><br />
                
                        <input type="checkbox" name="attire" value="checked red" 
                            {{ $ninja->attire == 'checked red' ? 'checked' : '' }}>checked red
                        
                        <input type="checkbox" name="attire" value="striped green" 
                            {{ $ninja->attire == 'striped green' ? 'checked' : '' }}>striped green
                        
                        <input type="checkbox" name="attire" value="black cloak" 
                            {{ $ninja->attire == 'black cloak' ? 'checked' : '' }}>black cloak
                        
                        <input type="checkbox" name="attire" value="golden yellow" 
                            {{ $ninja->attire == 'golden yellow' ? 'checked' : '' }}>golden yellow
                    </fieldset>
                    
                    <button type="submit" class="btn mt-3 btn-primary">Update x'ter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
