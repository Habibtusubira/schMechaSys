{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/app.css">
    <div id="body">
        <div >
            <h2 id="title" >
                the forms
            </h2>
            <div id="data" >
                <table id="table" class="bg-primary bg-opacity-10 shadow-lg shadow-gray-700 px-2 py-2">
                    <thead class="th">
                        <tr class="tr">
                            <th >name</th>
                            <th >form</th>
                            <th >mastery level</th>
                            <th >attire</th>
                            <th >date created</th>
                            <th >date updated</th>
                        </tr>
                    </thead>
                    @foreach ($ninjas as $ninja)
                        <tbody>
                            <tr id="tr">
                                <td >
                                    <a href="/slayer/{{ $ninja->id }}">
                                        <p class="input" >{{ $ninja->name }}</p>
                                    </a>
                                </td>
                                <td class="input">{{ $ninja->form }}</td>
                                <td class="input">{{ $ninja->level }}</td>
                                <td class="input">{{ $ninja->attire }}</td>
                                <td class="input">{{ $ninja->created_at }}</td>
                                <td class="input">{{ $ninja->updated_at }}</td>
                                <td>
                                    <form method="GET" action="/slayer/{{ $ninja->id }}/edit">
                                        {{-- @csrf
                                        @method('GET') --}}
                                        <button class="btn edit" type="submit">edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/slayer/{{ $ninja->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn delete">
                                            delete
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <p>
                    {{ session('msg') }}
                </p>
            </div>
        </div>
        <div id="inputArea" class="h-100">
            <form  id="fields" class="bg-primary bg-opacity-10 rounded shadow-lg shadow-gray-700 px-2 py-2" action="/slayer" method="POST" >
                @csrf
                <div >
                    @include('layouts.fields')
                    <p><input class="btn add-btn" type="submit" value="add xter"></p>
                </div>
            </form>
        </div>
    </div>
@endsection
