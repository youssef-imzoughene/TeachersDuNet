@extends('layouts/master',['title'=>"devcorp"])
@section('content')
<h1>Events</h1>
<p>
    @php
        //var_dump($events);
        //dump($events);
    @endphp
</p>
//ancienne methode
<ul>
    @php
        foreach($events as $event):
    @endphp
    <li>
        @php
            echo $event;
        @endphp
    </li>
    @php
        endforeach;
    @endphp
</ul>
//nouveau methode blade
@foreach($events as $event)
    <li> {{ $event }} </li>
@endforeach
@endsection
