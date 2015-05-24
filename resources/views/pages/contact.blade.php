@extends('apple')

@section('content')

<h1>Contact Me: </h1>
<p>Find {{ $first }} {{ $last }} at this page and get in touch.</p>

@stop

@section('footer')
<i>Content by: {{ $first }}</i>
@stop