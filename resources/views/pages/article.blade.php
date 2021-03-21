@extends('template.main')
@section('content')
    
<section>
    <section class="container">
        <h1 class="text-center">Les articles : </h1>
        <div class="container">
        
                  @foreach ($articles as $item)

                    <div class="jumbotron text-center">
                        <h1 class="display-4">{{$item->title}}</h1>
                        <p class="lead">
                          <a class="btn btn-primary btn-lg" href="/article/{{$item->id}}" role="button">Learn more</a>
                        </p>
                    </div>

                  @endforeach
        </div>
    </section>
</section>
@endsection