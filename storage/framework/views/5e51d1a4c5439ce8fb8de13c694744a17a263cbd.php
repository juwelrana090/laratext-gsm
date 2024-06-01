<div class="bottomNavigationBar">
    <a href="<?php echo e(url('/')); ?>">
        <div class="bottomItem menuActive">
            <ion-icon style="font-size: 20px;" name="home-outline"></ion-icon>
            <p>Home</p>
        </div>
    </a>
    <a href="<?php echo e(route('mobile_search_page')); ?>">
        <div class="bottomItem">
            <ion-icon style="font-size: 20px;color: #000;" name="search-outline"></ion-icon>
            <p>Search</p>
        </div>
    </a>
    
    <a href="https://wa.me/<?php echo e(social_link()->whatsApp); ?>?text=Hi" class="text-dark">
        <div class="bottomItem">
            <ion-icon style="font-size: 20px;" name="chatbubble-ellipses-outline"></ion-icon>
            <p>WhatsApp </p>
        </div>
    </a>
    <a href="tel:<?php echo e(social_link()->whatsApp); ?>" class="text-dark">
        <div class="bottomItem">
            <ion-icon name="call-outline" style="font-size: 20px;"></ion-icon>
            <p>Call</p>
        </div>
    </a>
</div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\frontend-dd\mobile\parts\bottom_navigation.blade.php ENDPATH**/ ?>