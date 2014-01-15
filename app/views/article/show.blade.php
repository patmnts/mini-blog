@extends('master')
@section('title')
    Articles
@stop

@section('contenu')
	@foreach($articles as $element)
	<article class="topContent">
		<header>
			<h2>{{$element->title}}</h2>
		</header>
				<footer>
					<h3><p class="post-info">{{$element->description}}</p></h3>
				</footer>
		<content>
			<p>{{$element->info}}</p>
			<h5>by {{$element->author}}</h5>
			<h5>{{$element->date}}</h5>
		</content>
		<p><a href="create?{{$element->idarticle}}" class="btn btn-primary">modifier l'article</a></p>
	</article>
	@endforeach
	{{ $articles->links() }}
	<p>
    	<a href="create" class="btn btn-primary">ajout un article</a>
  	</p>
@stop