<div class="header_section">
    <div class="header_wrapper">
        <div class="container">
            <div class="top-header">
                <div class="top-header-left-side">
                    <a href="<?php echo e(url('/')); ?>">
                        <div class="logo">
                            <img src="<?php echo e(asset('image/logo.jpeg')); ?>" style="" alt="">&nbsp;
                            
                        </div>
                    </a>
                </div>
                <div class="top-header-search" style="width: 50%">

                    <form method="GET" action="<?php echo e(route('search.brand.model.title')); ?>">
                        <div class="d-flex">
                            
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
                        
                        <a class="text-dark" href="tel:<?php echo e(social_link()->whatsApp); ?>">
                            <div class="icon-holder">
                                <ion-icon name="call-outline" style="font-size: 20px;"></ion-icon>
                                <p>Call</p>
                            </div>
                        </a>
                        <a class="text-dark" href="https://wa.me/<?php echo e(social_link()->whatsApp); ?>?text=Hi">
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
                                    <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                    
                                    <li class="active">
                                        <a href="#">Products </a>
                                        <ul class="submenu">
                                            <?php $__currentLoopData = CarTypes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="active"><a
                                                        href="<?php echo e(route('car.search.by.car_type_id', $menu->id)); ?>"><?php echo e($menu->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    
                                    <li class="active "><a href="<?php echo e(route('bestcool.brands')); ?>">Brands</a>
                                    </li>
                                    <li class="active "><a href="<?php echo e(route('about_us')); ?>">About Us</a></li>
                                    <li class="active "><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
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
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\frontend-dd\desktop\parts\header.blade.php ENDPATH**/ ?>