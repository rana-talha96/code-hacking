<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="<?php echo e(route('home')); ?>">Techie</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?php echo e(Request::path() == 'home' ? 'active' : ''); ?>" href="#hero">Home</a>
                </li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto <?php echo e(Request::path() == 'portfolio' ? 'active' : ''); ?>"
                        href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        <li><a href="<?php echo e(route('users.index')); ?>">Users Detail</a></li>
                        <li><a href="<?php echo e(route('posts.index')); ?>">Posts Detail</a></li>
                        <li><a href="<?php echo e(route('categories.index')); ?>">Categories Detail</a></li>

                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(Route::has('login')): ?>
                                        <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(Route::has('register')): ?>
                                        <li><a class="nav-link" href="<?php echo e(route('users.create')); ?>"><?php echo e(__('Register')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <li>
                                        <a class="nav-link" href="#"><?php echo e(Auth::user()->name); ?></a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<?php /**PATH D:\Laravel\laravel-apps\code-hacking\code-hacking\resources\views/layouts/header.blade.php ENDPATH**/ ?>