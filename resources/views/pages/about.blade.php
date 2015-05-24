@extends('apple')

@section('content')



<h1>About Me</h1>

<pre>
<p>Have others like:</p>
<ul>
<li> {{ '@unless if!' }} </li>
<li> {{ '@foreach' }} - used to filter through a collection, sometimes possible the searched for item is not in the collection. so you can use the 'else' to tell the user that no item was contained or returned. or use a if and nested for (other the other way 'around?).</li>
<li> {{ '@forelse' }} </li>
</ul>
</pre>

@if (count($people))
	<h3>People I Like:</h3>
	
	<ul>
		@foreach ($people as $person)
			<li>{{ $person }} </li>
		@endforeach

	</ul>
@endif

<p>Welcome to it, get familiar.</p>

@stop

@section('footer')

@stop