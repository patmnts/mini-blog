@extends('master')
@section('title')
    ajouter-article
@stop

@section('contenu')
	<article class="topContent">
		<header>
			<h2>Ajouter un nouveau article</h2>
		</header>
				
		<content>
			<section>
				{{ Form::open() }}
					<!-- Titre Flied -->
					<p>{{ Form::label('Titre', 'Titre') }}</p>
					<p>{{ Form::text('Titre') }}</p>
					<!-- description Flied -->
					<p>{{ Form::label('Description', 'Description') }}</p>
					<p>{{ Form::text('Description') }}</p>
					<!-- Author Flied -->
					<p>{{ Form::label('Author', 'Author') }}</p>
					<p>{{ Form::text('Author') }}</p>
					<!-- Contenu Flied -->
					<p>{{ Form::label('Contenu', 'Contenu') }}</p>
					<p>{{ Form::textarea('Contenu') }}</p>

					<p>{{ Form::submit('Enregistrer') }}</p>
				{{ Form::close() }}
			</section>
		</content>
	</article>
@stop