<div>
    <h1>Component Header</h1>
    <h3>{{$name}}</h3>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>