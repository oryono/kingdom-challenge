@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-9">
            <div>
                <h4>{{"Day ". $challenge->day . " ". $challenge->name }}</h4>
            </div>
            <video controls style="width: 100%;" autoplay preload = "auto">
                <source src="{{ url($challenge->video) }}" type="video/mp4">
                <source src="{{ url($challenge->video) }}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3">
            <div>
                <h4>Challenge Videos</h4>
            </div>

            <ol>
                @foreach($challenges as $challenge)
                    <li><a href="{{ url('challenge',$challenge->day) }}">{{"Day ".$challenge->day. " ".$challenge->name}}</a></li>
                @endforeach
            </ol>

            <div>
                <h4>Challenge Audios</h4>
            </div>

            <ol>
                @foreach($challenges as $challenge)
                    @if($challenge->audio)
                        <li><a href="{{ url($challenge->audio) }}" download="{{ "Day ".$challenge->day. " ". $challenge->name }}">{{"Day ".$challenge->day. " ".$challenge->name}}</a></li>
                    @else
                        <li>{{ "Day ". $challenge->day }} Audio not available</li>
                    @endif
                @endforeach


            </ol>


        </div>
    </div>
</div>
    @include('partials.footer ')
@endsection