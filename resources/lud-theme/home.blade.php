@extends ('press::layouts.base')

@section('top')
	<?php
		$tags = require(\Press::getThemeDir('lpdp').'/banner-tags.php');
	?>
	<div id="home-banner">
		<a href="//nowhere">
			<span>Les P'tits Pas</span>
		</a>
		@foreach($tags as $tag => $label)
			<a id="tag-{!! substr(str_slug($tag),0,6) !!}" href="{!! URL::route('press.tag',[$tag]) !!}">
				<span>{{ $label }}</span>
			</a>
		@endforeach
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
