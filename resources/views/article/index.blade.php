@extends('../layouts/base')
@section('content')
<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-4 my-2">
  @foreach($result as $r)
  <div class="card w-full bg-base-100 shadow-xl">
    <figure><img class="object-cover h-48 w-full" src="{{ $r['image'] }}" alt="Shoes" /></figure>
    <div class="card-body">
      <h2 class="card-title">{{ $r['title'] }}</h2>
      <p>{{ strlen($r['description']) > 100 ? substr($r['description'], 0, 100).'....' : $r['description'] }}</p>
      <div class="card-actions justify-end">
        <a href="{{ $r['url'] }}" target="_blank" class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection