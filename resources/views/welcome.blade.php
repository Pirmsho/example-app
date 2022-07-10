<h1>Hello World</h1>

<h2>{{$heading}}</h2>

@foreach ($listings as $listing)
    <h2>{{$listing['id']}}</h2>
    <p>{{$listing['text']}}</p>
@endforeach