<h1>{{$heading}}</h1>

@if(count($listings) == 0)
    <h1>No listings to show </h1>

@endif
@foreach($listings as $listing)

<h2>
{{$listing['id']}}
</h2>
<p>{{$listing['title']}}
</p>
<p>{{$listing['description']}}</p>

@endforeach