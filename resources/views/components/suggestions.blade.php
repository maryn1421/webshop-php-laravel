<div class="suggestions__container">
    @foreach($suggestions as $suggestion)
        <div class="suggestion__content">
            <h1>{{$suggestion->name}}</h1>
            <img src="{{$suggestion->image}}" alt="">
        </div>
    @endforeach
</div>
