<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="card-group">
        <div class="card">
            @foreach ($blog as $item)
                {{-- <a href="{{ route(blog-detailed/{{ $item->id }}) }}"> --}}
                  <a href="./blog-detailed/{{ $item->slug }}">
                    <img class="card-img-top" src="{{ URL::asset('storage/' .$item->image) }}" alt="Card image cap" style="width:288px;">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            {{-- <p class="card-text">{{!!   strip_tags($item->body) !!}}</p><br> --}}
            <p class="card-text">{!!  substr(strip_tags($item->body),0,50 )!!}</p><br>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
          </div>
                </a>
            @endforeach
          
        </div>
        
        {{-- {!! $item->links() !!}   --}}
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>