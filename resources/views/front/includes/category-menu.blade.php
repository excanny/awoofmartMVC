

 <ul class="mega-menu">
    @php
    $i=1;
    @endphp
    @foreach($categories as $category)
    <li class="sub-mega-menu sub-mega-menu-width-22">
        <a class="menu-title" href="{{ url('pcategory/'. strtolower($category->fcategory_name). '/'. $segment_number) }}">{{$category->fcategory_name}}</a>
        @if(count($category->children) > 0)
        <ul class="dropdown">
            @foreach($category->children as $subcat)
                <li>
                    <a href="{{ url('scategory/'. strtolower($category->fcategory_name). '/'.strtolower($subcat->fcategory_name). '/'. $segment_number) }}" data-bs-toggle="dropdown">{{$subcat->fcategory_name}}</a>
                    @if(count($subcat->children) > 0)
                      <ul class="dropdown-menu">
                        @foreach($subcat->children as $childcat)
                            <li><a href="{{ url('ccategory/'.  strtolower($category->fcategory_name). '/'.strtolower($subcat->fcategory_name). '/'. strtolower($childcat->fcategory_name). '/'. $segment_number) }}" class="dropdown-item">{{$childcat->fcategory_name}}</a></li>
                        @endforeach
                      </ul>
                    @endif
                </li>
            @endforeach
        </ul>             
        @endif
    </li>     
    @endforeach
</ul>