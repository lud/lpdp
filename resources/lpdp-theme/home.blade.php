@extends ('press::layouts.base')

<div id="home-banner">
	<a id="tag-test" href="{{ URL::route('press::tag',['test']) }}"><span>This is a test !</span></a>
	<a id="tag-other" href="{{ URL::route('press::tag',['other']) }}"><span>Another test</span></a>
</div>

@section('content')
	@foreach ($articles as $article)
		<a href="{{ $article->url() }}">
			{{ $article->get('title', $article->id) }}
		</a>
		<br/>
	@endforeach

	{!! $paginator->render() !!}
@stop
