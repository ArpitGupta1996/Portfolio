

@foreach($blog as $blogdetails)
<h1>{{ $blogdetails->title }} </h1>

<p style="text-align: justify; font-family: 'Times New Roman', Times">
    {{ strip_tags($blogdetails->body) }}
</p>

<p>
    <img src="{{ URL::asset('storage/' .$blogdetails->image) }}" alt="" height="288px;" width="288px;">
    {{-- {{ URL::asset('storage/' .$item->image) }} --}}
</p>
@endforeach

