@extends ('press::layouts.base')

@section('top')
	<div id="home-banner">
		<a id="tag-test" href="{{ URL::route('press.tag',['test']) }}"><span>This is a test !</span></a>
		<a id="tag-other" href="{{ URL::route('press.tag',['dev']) }}"><span>Another test</span></a>
	</div>
	<div id="navbar-wrapper" data-spy="affix" data-offset-top="360">
		@include('press::pressParts.navbar')
	</div>
@stop

@section('content')
	@foreach ($articles as $article)
		<a href="{{ $article->url() }}">
			{{ $article->get('title', $article->id) }}
		</a>
		<br/>
	@endforeach
	{!! $paginator->render() !!}
@stop
