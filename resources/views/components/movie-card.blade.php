<div>
    <div class="mt-8">
        <a href="{{ route('movies.show', $movie['id']) }}">
            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="mt-2">
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
                <img src="/img/star.png" alt="" class="w-7 h-5">
                <span class="ml-1">{{ $movie['vote_average'] *10 }}%</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
            </div>
            <div class="text-gray-400">
                @foreach ($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre) }} {{ !$loop->last ? ', ' : '' }}
                @endforeach
            </div>
        </div>
    </div>
</div>