<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Movies DB</title>
</head>
<body>

    <div class="row row-cols-4 g-3">
		@forelse ($books as $key => $book)
			<div>
				<div class="col card">
					<div class="card-body">
						<h5 class="card-title">{{ $book->'title' }}</h5>
						<p class="card-text">{{ $book->'description' }}</p>
						<a href=" {{route('book', [ 'id' => $key ] )}} " 
								class="card-link">Vai alle info</a>
					</div>
				</div>
			</div>
		@empty
			<p>Non ci sono elementi libri</p>
		@endforelse
	</div>

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>