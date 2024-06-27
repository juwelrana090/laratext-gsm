<?php

use App\Models\SocialLink;
$socialLInk = SocialLink::orderBy('id', 'DESC')->first();

$address = json_decode($socialLInk->dubai_address);

?>


<footer>
    <div class="footer">
        <div class="container-fluid bg-dark pt-4 pb-1">
            <div class="row row-cols-1 row-cols-md-4 pb-4">

                <div class="col">
                    <div class="mx-1">
                        <img src="./images/logo2.png" class="mx-auto d-block company_logo" alt="Biz Info BD Logo"
                            title="Biz Info BD Logo" style="height: 50px; width: auto;">
                        <!-- <h4 class="text-center company_name">Your Comany Name Here</h4> -->
                        <hr class="mt-0 horizontal_line">
                        <p class="company_description">Lorem ipsum, iusto doloribus natus pariatur suscipit delectus
                            error doloremque aspernatur qui beatae iure quibusdam eligendi minima deserunt dolorem
                            incidunt fuga ratione quos corrupti aliquid? Incidunt minima cupiditate expedita deserunt
                            repellat placeat et perspiciatis numquam, quis ex nulla, ab odio a, aperiam autem eum fugiat
                            officiis vitae ducimus rem dolore temporibus dicta exercitationem! Accusantium voluptatum
                            voluptates tenetur perferendis expedita.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="m-3">
                        <h4>Contact Info</h4>
                        <hr class="mt-0 horizontal_line">
                        <a href="tel:<?php echo e($address->mobile); ?>" class="text-decoration-none d-block mb-1"
                            title="Phone Number">
                            <i class="bi bi-telephone fs-6"></i>
                            <span class="fs-6 ms-1"><?php echo e($address->mobile); ?></span>
                        </a>
                        <a href="mailto:<?php echo e($address->email); ?>" class="text-decoration-none d-block mb-1"
                            title="Email Link">
                            <i class="bi bi-envelope fs-6"></i>
                            <span class="fs-6 ms-1"><?php echo e($address->email); ?></span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo e($socialLInk->whatsApp); ?>"
                            class="text-decoration-none d-block mb-1" target="_blank" title="Whatsapp Link">
                            <i class="bi bi-whatsapp fs-6"></i>
                            <span class="fs-6 ms-1">Whatsapp</span>
                        </a>
                        
                        <a href="<?php echo e($address->map); ?>" class="text-decoration-none d-block mb-1" target="_blank"
                            title="Google map direction">
                            <i class="bi bi-geo-alt fs-6"></i>
                            <span class="fs-6 ms-1"><?php echo e($address->address); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="m-3">
                        <h4 class="">Quick Link</h4>
                        <hr class="mt-0 horizontal_line">
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit home page">
                            <i class="bi bi-house-door fs-6"></i>
                            <span class="fs-6 ms-1">Home</span>
                        </a>
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit about us page">
                            <i class="bi bi-person-vcard fs-6"></i>
                            <span class="fs-6 ms-1">About Us</span>
                        </a>
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit service page">
                            <i class="bi bi-tools fs-6"></i>
                            <span class="fs-6 ms-1">Business Listing</span>
                        </a>
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit search companies page">
                            <i class="bi bi-buildings fs-6"></i>
                            <span class="fs-6 ms-1">Experts</span>
                        </a>
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit company page">
                            <i class="bi bi-building-add fs-6"></i>
                            <span class="fs-6 ms-1">Products</span>
                        </a>
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit search companies page">
                            <i class="bi bi-buildings fs-6"></i>
                            <span class="fs-6 ms-1">Brands</span>
                        </a>
                        <a href="#" class="text-decoration-none d-block mb-1" title="Visit contact page">
                            <i class="bi bi-telephone fs-6"></i>
                            <span class="fs-6 ms-1">Contact Us</span>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="m-3 footer-social-icon">
                        <h4>Follow Us</h4>
                        <hr class="mt-0 horizontal_line">
                        <a href="http://" class="text-decoration-none d-block mb-1">
                            <i class="bi bi-facebook fs-6"></i>
                            <span class="fs-6 ms-1">Facebook</span>
                        </a>
                        <a href="http://" class="text-decoration-none d-block mb-1">
                            <i class="bi bi-linkedin fs-6"></i>
                            <span class="fs-6 ms-1">LinkedIn</span>
                        </a>
                        <a href="http://" class="text-decoration-none d-block mb-1">
                            <i class="bi bi-twitter fs-6"></i>
                            <span class="fs-6 ms-1">Twitter</span>
                        </a>
                        <a href="http://" class="text-decoration-none d-block mb-1">
                            <i class="bi bi-instagram fs-6"></i>
                            <span class="fs-6 ms-1">Instagram</span>
                        </a>
                        <a href="http://" class="text-decoration-none d-block mb-1">
                            <i class="bi bi-youtube fs-6"></i>
                            <span class="fs-6 ms-1">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 border-top border-1 border-primary px-3 border-opacity-50 pt-3">
                <div class="col text-center text-md-start copyright ps-2">
                    <p>Copyright <i class="bi bi-c-circle"></i> 2024 xxx xxx xxx | All Rights Reserved</p>
                </div>
                <div class="col text-center policy mb-3 mb-md-0">
                    <a href="<?php echo e(route('privacy-policy')); ?>" class="text-decoration-none"
                        title="Visit privacy policy page">
                        Privacy Policy
                    </a>
                    <span class="mx-1 text-primary">|</span>
                    <a href="<?php echo e(route('terms-and-conditions')); ?>" class="text-decoration-none"
                        title="Visit terms and conditions page">
                        Terms & Conditions
                    </a>
                    <span class="mx-1 text-primary">|</span>
                    <a href="#" class="text-decoration-none" title="Visit terms and conditions page">
                        Refund Policy
                    </a>
                </div>
                <div class="col text-center text-md-end developed-by pe-2">
                    <!-- <p>Developed By <a href="#" target="_blank" title="Visit BIZ INFO BD About page">Ringer Soft Ltd.</a></p> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\app_gsp\resources\views/includes/footer.blade.php ENDPATH**/ ?>