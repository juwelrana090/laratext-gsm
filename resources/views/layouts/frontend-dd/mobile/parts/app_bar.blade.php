<div class="topAppBar">
    <div class="humberMenu">
        <i class="fas fa-bars"></i>
    </div>
    <a href="{{ url('/') }}">
        <div class="MobileLogo">
            <img src="{{ asset('image/logo.jpeg') }}" alt="">&nbsp;
            {{-- <span style="font-size: 24px" class="h6 mb-0"><span style="color: #00489a">Best</span> <span
                    style="color: #57c725">Cool</span></span> --}}
        </div>
    </a>
    <div class="rightTopIcon"></div>
</div>
<div class="mobile_menu_sidebar">
    <div class="mobile_menu_sidebar_wrapper">
        <div class="mobile_sidebar_close">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a class="side_menu_active" href="{{ url('/') }}">Home</a></li>
            <li>
                <a href="#">Products &nbsp;<i class="fas fa-caret-down"></i></a>
                <ul class="mobile_submneu">
                    @foreach (CarTypes() as $menu)
                        <li><a href="{{ route('car.search.by.car_type_id', $menu->id) }}">{{ $menu->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            {{-- <li><a  href="{{ route('car.all') }}">All</a></li> --}}

            <li><a href="{{route('bestcool.brands')}}">Brands</a></li>
            <li><a href="{{ route('about_us') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
</div>
<div class="space50"></div>
