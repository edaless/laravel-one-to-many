@extends('layouts.main-layout')

@section('content')
    
    <h1>helloooo</h1>
    <ul>
        @foreach ($people as $person)
        <li>
            <b>                
                {{$person -> name}}
            </b>
            <div>
                {{$person -> mail}}
            </div>
            <div>
                {{$person -> personDetail -> phone}}
            </div>
            <div>
                {{$person -> personDetail -> address}}
            </div>
            <h5>
                Posts: {{$person -> posts -> count()}}
            </h5>
            <ul>
                @foreach ($person->posts as $post)
                <li>
                    <h6>
                        {{$post -> title}}
                    </h6>
                    <div>
                        {{$post -> body}}
                    </div>
                </li>
                    
                @endforeach
            </ul>
            <hr>
        </li>
            
        @endforeach
    </ul>

@endsection