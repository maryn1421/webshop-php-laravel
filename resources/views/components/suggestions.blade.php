<div class="scrollmenu">
    <h2 class="scrollmenu__title">You may also like:</h2>
    @foreach($suggestions as $suggestion)
        <div class="suggestion__content">
            <h1>{{$suggestion->name}}</h1>
            <img class="suggestion__image" src="{{$suggestion->image}}" alt="">
        </div>
    @endforeach
</div>
