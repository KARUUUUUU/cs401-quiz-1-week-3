<div>
    <h1>Game Details</h1>
    @foreach($games as $game)
        <div style="border: 1px solid #ccc; padding: 10px; margin: 10px 0;">
            <h2>{{ $game['title'] }}</h2>
            <p><strong>ID:</strong> {{ $game['id'] }}</p>
            <p><strong>Developer:</strong> {{ $game['developer'] }}</p>
            <p><strong>Publisher:</strong> {{ $game['publisher'] }}</p>
            <p><strong>Genre:</strong> {{ $game['genre'] }}</p>
            <p><strong>Release Date:</strong> {{ $game['releaseDate'] }}</p>
            <p><strong>Platform:</strong> {{ $game['platform'] }}</p>
            <p><strong>Price:</strong> ${{ $game['price'] }}</p>
        </div>
    @endforeach
    <a href="/games">Back to Games List</a>
</div> 