@isset($categories)

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        The current link item
    </a>
    @foreach($categories as $category)
    <a href="#" class="list-group-item list-group-item-action">{{$category->name}} &nbsp;
        &nbsp;<span>{{$category->newsCount()}}</span> </a>
    @endforeach

</div>
@endif