<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>this is header component</h1>
    <h2>hello, {{ $name }}</h2>
    <p>fruits :</p>
    <ul>
        @foreach ($adel as $fruit)
          <li>{{ $fruit }}</li>
        @endforeach
    </ul>
</div>