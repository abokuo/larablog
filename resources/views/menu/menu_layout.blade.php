<nav id="navbar" class="navbar">
    <ul>
        @foreach($items as $item)
            @php
                $sub2items = $item->children;
            @endphp
            @if(isset($sub2items) && count($sub2items) > 0)
                <li class="dropdown"><a href="#">{{$item->title}}<i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($sub2items as $sub2item)
                            @php
                                $sub3items = $sub2item->children;
                            @endphp
                            @if(isset($sub3items) && count($sub3items) > 0)
                                <li class="dropdown"><a href="#">{{$sub2item->title}}<i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        @foreach($sub3items as $sub3item)
                                            <li><a href="{{$sub3item->link()}}">{{$sub3item->title}} </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{$sub2item->link()}}">{{$sub2item->title}} </a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @else
                <li><a href="{{$item->link()}}">{{$item->title}}</a></li>
            @endif
        @endforeach
    </ul>

    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
