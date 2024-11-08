<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
    <div class="card-body backgrounddark">
        <h5 class="card-title card-text">{{$article->title}}</h5>
        <h6 class="card-subtitle card-text">{{$article->price}} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-3 flex-column">
            <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">{{__("ui.detail")}}</a>
            @if ($article->category)
                <a href="{{route('byCategory', ['category' => $article->category])}}" class="btn btn-outline-info my-2">{{__("ui." . $article->category->name)}}</a>
            @endif
            @auth
            @if (Auth::user()->is_revisor)
            <form action="{{ route('tobe.revisited', compact('article')) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-danger"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></button>
            </form>
            @endif
            @endauth
        </div>
    </div>
</div>