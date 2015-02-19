@extends ('press::layouts.base')

@section('top')
	<div id="home-banner">
		<a id="home-title" href="//nowhere">
			<span>Les P'tits Pas</span>
		</a>
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
