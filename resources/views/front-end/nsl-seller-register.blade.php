<x-guest-layout>
    <style>
        .partnership-logos img {
            display: inline-block;
            max-width: 150px;
        }
        .partnership-separator {
            font-size: 2rem;
            vertical-align: middle;
        }
    </style>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Sign Up</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Sign Up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Information For Seller Signing Up</h3>
                        </div>

                        <div class="input-box">
                            Please register on <strong>New Style Life</strong> to begin your journey as a seller. 
                            By registering with us, your account details will be automatically synced to 
                            <strong>Made In Japan</strong> at 2:00 AM the following day, using the same 
                            information. This setup allows you to sell a variety of products from different 
                            countries on New Style Life, while Made In Japan is dedicated exclusively to products 
                            made in Japan. Register today and start showcasing your products on both platforms 
                            seamlessly.
                        </div>
                        <div class="partnership-logos my-4">
                            <img src="{{ asset('backend/assets/images/logo/mij_blogo.png') }}" class="img-fluid blur-up lazyload mx-2" alt="Made In Japan Logo">
                            <span class="partnership-separator mx-2">+</span>
                            <img src="{{ asset('backend/assets/images/logo/newstyle_logo.png') }}" class="img-fluid blur-up lazyload mx-2" alt="New Style Life Logo">
                        </div>
                        <div class="sign-up-box">
                            <a
                            href="https://new-style.life/seller/register"
                            target="_blank" style="width: 300px"
                            class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">Register On New Style Life
                            <i class="fa-solid fa-right-long ms-2 icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>