@extends('layouts.frontend.desktop.master')
@push('css')
@endpush
@section('content')
    <div class="container">
        <h3 class="text-center mt-4">Contact With Us</h3>
        <div class="row p-5">
            <div class="col-lg-6">

                <div>
                    <h5 class="font-weight-bold">GSP Gulf Space Parts</h5>
                    <p>
                        Tel: {{sharjah_address()?sharjah_address()->tel:''}}<br>
                        Mob: {{sharjah_address()?sharjah_address()->mobile:''}} <br>
                        Address: {{sharjah_address()?sharjah_address()->address:''}}</p>
                        @if(sharjah_address()->map) <a href="{{sharjah_address()->map}}">View Map</a>@endif

                </div>
                <br>
                <div>
                    <h5 class="font-weight-bold">GSP Gulf Space Parts </h5>
                    <p>
                        Tel: {{dubai_address()?dubai_address()->tel:''}}<br>
                        Mob: {{dubai_address()?dubai_address()->mobile:''}} <br>
                        Address: {{dubai_address()?dubai_address()->address:''}}</p>
                        @if(dubai_address()->map) <a href="{{dubai_address()->map}}">View Map</a>@endif

                </div>

                <br>
                <div>
                    <h5 class="font-weight-bold">GSP Gulf Space Parts</h5>
                    <p>
                        Tel: {{abu_dabi_address()?abu_dabi_address()->tel:''}}<br>
                        Mob: {{abu_dabi_address()?abu_dabi_address()->mobile:''}} <br>
                        Address: {{abu_dabi_address()?abu_dabi_address()->address:''}}</p>
                        @if(abu_dabi_address()->map) <a href="{{abu_dabi_address()->map}}">View Map</a>@endif

                </div>
                <br>
                <div>
                    <h5 class="font-weight-bold">GSP Gulf Space Parts</h5>
                    <p>
                        Tel: {{dubai_ras_al_khor_address()?dubai_ras_al_khor_address()->tel:''}}<br>
                        Mob: {{dubai_ras_al_khor_address()?dubai_ras_al_khor_address()->mobile:''}} <br>
                        Address: {{dubai_ras_al_khor_address()?dubai_ras_al_khor_address()->address:''}}</p>
                        @if(dubai_ras_al_khor_address()->map) <a href="{{dubai_ras_al_khor_address()->map}}">View Map</a>@endif

                </div>
                <br>
            </div>
            <div class="col-lg-6">
                <h5 class="font-weight-bold">GSP Gulf Space Parts</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14426.73840401649!2d55.3968691!3d25.3147987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdc5d9d760b9a4f8!2sBest%20cool%20auto%20spare%20parts%20tr!5e0!3m2!1sen!2sae!4v1650265128822!5m2!1sen!2sae"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
