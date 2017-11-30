@extends('layouts.app')
@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat laborum odio aliquid, neque, numquam beatae cumque totam laudantium inventore quisquam, omnis voluptatibus impedit quam tenetur autem commodi officiis consectetur aliquam.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection