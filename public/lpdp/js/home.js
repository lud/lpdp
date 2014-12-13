(function($){$(function(){

	// set the tag cloud with d3

	var tagCloud = d3.select('#home-banner #tag-cloud')
	var text = tagCloud.selectAll('text')
	text
		.attr('font-family','Architects Daughter')
		.attr('fill','white')
		.attr('data-y',function(){ return d3.select(this).attr('y')})
		.attr('data-x',function(){ return d3.select(this).attr('x')})

	text.on('mouseenter',function() {
		d3.select(this).transition()
			.attr('y',function(){
				var y = Number(d3.select(this).attr('y')) - 2
				console.log('descendre',y);
				return y
			})
			.attr('x',function(){
				var x = Number(d3.select(this).attr('x')) - 1
				console.log('descendre',x);
				return x
			})
	})

	text.on('mouseleave',function() {
		d3.select(this).transition()
			.attr('y',function(){return d3.select(this).attr('data-y')})
			.attr('x',function(){return d3.select(this).attr('data-x')})
	})

	// au chargement, le tag cloud est invisible

	tagCloud/*.transition()*/.attr('opacity',1)

});}(jQuery));
