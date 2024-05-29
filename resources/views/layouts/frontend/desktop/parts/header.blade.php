<div class="header_section">
    <div class="header_wrapper">
        <div class="container">
            <div class="top-header">
                <div class="top-header-left-side">
                    <a href="{{ url('/') }}">
                        <div class="logo">
                            <img src="{{ asset('image/logo.jpeg') }}" style="" alt="">&nbsp;
                            {{-- <p style="font-size: 24px"><span style="color: #00489a">Best</span> <span
                                    style="color: #57c725">Cool</span></p> --}}
                        </div>
                    </a>
                </div>
                <div class="top-header-search" style="width: 50%">

                    <form method="GET" action="{{route('search.brand.model.title')}}">
                        <div class="d-flex">
                            {{-- @csrf --}}
                            <input type="text" style="height: 37px" name="search" class="Searchbox__keyword__input"
                                placeholder="Search................">
                            <button type="submit" style="padding: 10px 20px;border-radius: 5px;"
                                class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="auto_completed_box" style="display: none">
                        <ul class="ulList">

                        </ul>
                    </div>
                </div>
                <div class="top-header-right-side">
                    <div class="icon_section">
                        {{-- <div class="icon-holder">
                            <ion-icon name="notifications-outline" style="font-size: 20px;"></ion-icon>
                            <p>Notifications</p>
                        </div>
                        <div class="icon-holder">
                            <ion-icon name="search-outline" style="font-size: 20px;"></ion-icon>
                            <p>Searches</p>
                        </div> --}}
                        <a class="text-dark" href="tel:{{social_link()->whatsApp}}">
                            <div class="icon-holder">
                                <ion-icon name="call-outline" style="font-size: 20px;"></ion-icon>
                                <p>Call</p>
                            </div>
                        </a>
                        <a class="text-dark" href="https://wa.me/{{social_link()->whatsApp}}?text=Hi">
                            <div class="icon-holder">
                                <ion-icon name="chatbubbles-outline" style="font-size: 20px;"></ion-icon>
                                <p>Chat</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar  -->
    <div class="temp_navbar">
        <div class="container">
            <div class="large-menu header-sticky">
                <div class="container">
                    <div class="menu-wrapper">
                        <div class="menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    {{-- <li class="active"><a href="{{route('car.all')}}">All</a></li> --}}
                                    <li class="active">
                                        <a href="#">Products </a>
                                        <ul class="submenu">
                                            @foreach (CarTypes() as $menu)
                                                <li class="active"><a
                                                        href="{{ route('car.search.by.car_type_id', $menu->id) }}">{{ $menu->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    {{-- @foreach (CarTypes() as $menu)
                                        <li class="active"><a href="{{route('car.search.by.car_type_id',$menu->id)}}">{{$menu->name}}</a></li>
                                    @endforeach --}}
                                    <li class="active "><a href="{{ route('bestcool.brands') }}">Brands</a>
                                    </li>
                                    <li class="active "><a href="{{ route('about_us') }}">About Us</a></li>
                                    <li class="active "><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar  -->
</div>
