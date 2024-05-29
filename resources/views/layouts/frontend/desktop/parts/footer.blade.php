<footer>
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3">
                <h4 class="footer-block-header">Company</h4>
                <ul id="footer-company" class="box">
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="{{url('/')}}">Home</a>
                    </li>
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="{{route('about_us')}}">About Us</a>
                    </li>
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li><a class="footer-links" data-tr-event-name="footer_advertising"
                            href="https://business.dubizzle.com/advertisers/">Advertising</a></li>
                    <li><a class="footer-links" data-tr-event-name="footer_careers"
                            href="https://apply.workable.com/bayutdubizzle/">Careers</a></li>
                    <li><a class="footer-links" href="/terms/">Terms of Use</a></li>
                    <li><a class="footer-links" data-tr-event-name="footer_privacy_policy" href="/privacy/">Privacy
                            Policy</a></li>
                </ul>
            </div> --}}
            <div class="col-lg-3">
                <h4 class="footer-block-header">Products</h4>
                <ul id="footer-company" class="box">
                    @foreach (CarTypes() as $menu)
                        <li>
                            <a class="footer-links" data-tr-event-name="footer_about_us" href="{{route('car.search.by.car_type_id',$menu->id)}}">{{$menu->name}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            {{-- <div class="col-lg-2">
                <h4 class="footer-block-header">Other Countries</h4>
                <ul id="footer-company" class="box">
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="/about/">Egypt</a>
                    </li>
                    <li><a class="footer-links" data-tr-event-name="footer_advertising" href="">Bahrain</a></li>
                    <li><a class="footer-links" data-tr-event-name="footer_careers" href="">Saudi Arabia</a></li>
                    <li><a class="footer-links" href="/terms/">Instagram</a></li>

                </ul>
            </div> --}}
            <div class="col-lg-3">
                <h4 class="footer-block-header">Get Social</h4>
                <ul id="footer-company" class="box">
                    <li><a class="footer-links" target="_blank" href="{{social_link()->fb}}">Facebook</a>
                    </li>
                    <li><a class="footer-links" target="_blank" href="{{social_link()->twitter}}">Twitter</a></li>
                    <li><a class="footer-links" target="_blank" href="{{social_link()->youtube}}">Youtube</a></li>
                    <li><a class="footer-links" target="_blank" href="{{social_link()->instagram}}">Instagram</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="footer-block-header">Company</h4>
                <ul id="footer-company" class="box">
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="{{route('contact')}}">Help</a>
                    </li>
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="{{route('about_us')}}">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="footer-block-header">Address</h4>
                <ul id="footer-company" class="box">
                   <p class="text-white">Tel: {{sharjah_address()?sharjah_address()->tel:''}}</p>
                   <p class="text-white">Mobile: {{sharjah_address()?sharjah_address()->mobile:''}}</p>
                   <p class="text-white">Address: {{sharjah_address()?sharjah_address()->address:''}}</p>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright mt-5 text-white text-center">
        <p>© COPYRIGHT {{date('Y')}} <a href="https://bestcoolautoac.com/">DYNE BEST COOL</a></p>
    </div>
</footer>
