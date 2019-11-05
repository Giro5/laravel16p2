@include("components.top")
@include("components.navbar")


<div class="container">
    Catalog
</div>



<div class="container">
    <div class="card-deck">

        @foreach($result as $card)

        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$card->title}} ID: {{$card->id}}</h5>
                <p class="card-text">{{$card->text}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{$card->time}}</small>
            </div>
        </div>

        @endforeach

    </div>
</div>

@include("components.bottom")