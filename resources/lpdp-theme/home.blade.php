@extends ('press::layouts.base')

<svg id="home-banner" width="100%" height="300px">
	<defs>
		<style>
		@font-face {
			font-family: 'Architects Daughter';
			font-style: normal;
			font-weight: 400;
			src: local('Architects Daughter'), local('ArchitectsDaughter'), url(http://fonts.gstatic.com/s/architectsdaughter/v6/RXTgOOQ9AAtaVOHxx0IUBOkI_DLF4EgbZt3mhU8gQFo.woff) format('woff');
			}
		</style>
	</defs>
	<text  fill="#616161" font-size="50" x="300" y="150" font-family="Architects Daughter">This is a test !</text>
	<g id="tag-cloud" opacity="0">
		<a xlink:href="{{ URL::route('press::tag',['test']) }}">
			<text font-size="50" x="300" y="150">This is a test !</text>
		</a>
	</g>
</svg>

@section('content')
	@foreach ($articles as $article)
		<a href="{{ $article->url() }}">
			{{ $article->get('title', $article->id) }}
		</a>
		<br/>
	@endforeach

	{!! $paginator->render() !!}
@stop

@section('assets_scripts')
	@parent
	<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<script src="{{ asset('lpdp/js/home.js') }}" type="text/javascript"></script>
@stop
