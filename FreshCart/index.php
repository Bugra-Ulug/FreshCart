<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FreshCart</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
    <header>
        <div class="header-up">
            <div class="container">
                <div class="header-up-wrapper">
                    <p>Super Value Deals - Save more with coupons</p>
                    <div class="dil-seçeneği" id="dilseçeneği">
                        <a href="#">
                            <img src="İMG/logo/union-jack-g63474fc8f_640.jpg" alt="">
                            <p> English</p>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-dil" id="dildropdown">
                            <li><a href="#"><img src="İMG/logo/french-flag-g658960ea7_640.png" alt=""> French</a></li>
                            <li><a href="#"><img src="İMG/logo/germany-gdbee0dfa7_640.png" alt=""> Germany</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="header-mid-wrapper">
                    <div class="header-mid-left">
                        <a href=""><img src="İMG/logo/download.svg" alt=""></a>
                    </div>
                    <div class="header-mid-center">
                        <div class="search-input">
                            <i class="bi bi-search"></i>
                            <input type="text" name="" id="" placeholder="Search for products">
                        </div>

                        <button>
                            <i class="bi bi-geo-alt"></i> Location
                        </button>

                    </div>
                    <div class="header-mid-right">
                        <div class="favoriler-icon">
                            <a href=""> <i class="bi bi-heart"></i></a>
                            <span>5</span>
                        </div>
                        <div class="person-icon">
                            <a href=""> <i class="bi bi-person"></i></a>
                        </div>
                        <div class="sepet-icon">
                            <a href=""> <i class="bi bi-basket3-fill"></i></a>
                            <span>1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="navigation-wrapper">
                    <div class="all-departments"><a href="#"><i class="bi bi-microsoft"></i>All Departments</a>
                        <div class="dropdown-menu-all">
                            <ul>
                                <li><a href="#">Dairy, Bread & Eggs</a></li>
                                <li><a href="#">Snacks & Munchies</a></li>
                                <li><a href="#">Fruits & Vegetables</a></li>
                                <li><a href="#">Cold Drinks & Juices</a></li>
                                <li><a href="#">Breakfast & Instant Food</a></li>
                                <li><a href="#">Bakery & Biscuits</a></li>
                                <li><a href="#">Chicken, Meat & Fish</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul>
                        <li class="nav-item"><a href="#">Home<i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">Home 1 </a></li>
                                    <li><a href="#">Home 2 </a></li>
                                    <li><a href="#">Home 3 </a></li>
                                    <li><a href="#">Home 4 </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Shop<i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">Shop Grid - Filter </a></li>
                                    <li><a href="#">Shop Grid - 3 column</a></li>
                                    <li><a href="#">Shop List - Filter</a></li>
                                    <li><a href="#">Shop - Filter</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Stores<i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">Store List </a></li>
                                    <li><a href="#">Store Grid </a></li>
                                    <li><a href="#">Store Singe </a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Mega Menu<i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-megamenu">
                                <ul>
                                    <li>
                                        <h4>Dairy, Bread & Eggs</h4>
                                    </li>
                                    <li><a href="#">Butter </a></li>
                                    <li><a href="#">Milk Drinks </a></li>
                                    <li><a href="#">Store Curd & Yogurt </a></li>
                                    <li><a href="#">Eggs </a></li>
                                    <li><a href="#">Buns & Bakery </a></li>
                                    <li><a href="#">Cheese </a></li>
                                    <li><a href="#">Condensed Milk </a></li>
                                    <li><a href="#">Dairy Products </a></li>
                                </ul>
                                <ul>
                                    <li>
                                        <h4>Breakfast & Instant Food</h4>
                                    </li>
                                    <li><a href="#">Breakfast Cereal </a></li>
                                    <li><a href="#"> Noodles, Pasta & Soup </a></li>
                                    <li><a href="#">Frozen Veg Sn </a></li>
                                    <li><a href="#"> Frozen Non-Veg Snacks </a></li>
                                    <li><a href="#"> Vermicelli </a></li>
                                    <li><a href="#"> Instant Mixes </a></li>
                                    <li><a href="#"> Batter </a></li>
                                    <li><a href="#"> Fruit and Juices </a></li>

                                </ul>
                                <ul>
                                    <li>
                                        <h4>Cold Drinks & Juices</h4>
                                    </li>
                                    <li><a href="#">Soft Drinks </a></li>
                                    <li><a href="#">Fruit Juices </a></li>
                                    <li><a href="#">Coldpress </a></li>
                                    <li><a href="#">Water & Ice Cubes </a></li>
                                    <li><a href="#">Soda & Mixers </a></li>
                                    <li><a href="#">Health Drinks </a></li>
                                    <li><a href="#">Herbal Drinks </a></li>
                                    <li><a href="#">Milk Drinks </a></li>
                                </ul>
                                <ul>
                                    <img src="İMG/banner/menu-banner.jpg" alt="">
                                </ul>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Pages<i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">Blog </a></li>
                                    <li><a href="#">Blog Single</a></li>
                                    <li><a href="#">Blog Category</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Account<i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">Sing in </a></li>
                                    <li><a href="#">Singup</a></li>
                                    <li><a href="#">Forgot Password</a></li>
                                    <li><a href="#">My Account </a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Dashboard</a></li>
                        <li class="nav-item"><a href="#">Docs</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="İMG/slider/slide-1.jpg" alt="">
                    <div class="slider-text">
                        <h6>Opening Sale Discount 50%</h6>
                        <h2>SuperMarket For Fresh Grocery</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, neque!</p>
                        <button>Shop Now<i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </div>
                <div class="swiper-slide"><img src="İMG/slider/slider-2.jpg" alt="">
                    <div class="slider-text">
                        <h6>Opening Sale Discount 50%</h6>
                        <h2> Free Shipping on orders over $100 </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, neque!</p>
                        <button>Shop Now<i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="featured-title">
            <h2>Featured Categories</h2>
        </div>
        <div class="categories-slider">
            <div class="swiper smySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="İMG/category/category-atta-rice-dal.jpg" alt="">
                        <h6>Atta, Rice & Dal</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-baby-care.jpg" alt="">
                        <h6>Baby Care</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-bakery-biscuits.jpg" alt="">
                        <h6>Bakery Biscuits</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-chicken-meat-fish.jpg" alt="">
                        <h6>Chicken, Meat and Fish</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-cleaning-essentials.jpg" alt="">
                        <h6>Cleaning Essentials</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-dairy-bread-eggs.jpg" alt="">
                        <h6>Dairy, Bread Eggs</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-instant-food.jpg" alt="">
                        <h6>İnstant Food</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-baby-care.jpg" alt="">
                        <h6>Baby Care</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-snack-munchies.jpg" alt="">
                        <h6>Snack Munchies</h6>
                    </div>
                    <div class="swiper-slide"><img src="İMG/category/category-tea-coffee-drinks.jpg" alt="">
                        <h6>Tea Coffie Drinks</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banners">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-left">
                    <img src="İMG/banner/grocery-banner.png" alt="">
                    <div class="banner-text">
                        <h5>Fruits & Vegetables</h5>
                        <h6>Get Upto 30% Off</h6>
                        <button>Shop Now</button>
                    </div>
                </div>
                <div class="banner-right">
                    <img src="İMG/banner/grocery-banner-2.jpg" alt="">
                    <div class="banner-text">
                        <h5>Freshly Baked Buns</h5>
                        <h6>Get Upto 25% Off</h6>
                        <button>Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="popular-products-title">
            <h2>Popular Products</h2>
        </div>
        <div class="popular-products-wrapper">
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-1.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-2.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-3.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-4.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-5.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-6.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-7.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-8.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-9.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>
            <div class="popular-products">
                <a href="#">
                    <div class="product-img">
                        <img src="İMG/product/product-img-10.jpg" alt="">
                    </div>
                </a>
                <div class="product-actions">
                    <button><i class="bi bi-eye"></i></button>
                    <button><i class="bi bi-heart"></i></button>
                    <button><i class="bi bi-arrow-left-right"></i></button>
                </div>
                <div class="prd-text">
                    <h6>Snack & Munchies</h6>
                    <h2>Haldiram's Sev Bhujia</h2>
                    <div class="prd-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                        <span> 4.5(149)</span>
                    </div>
                </div>
                <div class="prd-price">
                    <p>$18<span>$24</span></p>
                    <button><i class="bi bi-plus"></i> Add</button>
                </div>
            </div>



        </div>
    </div>


    <div class="daily-best-sells">
        <div class="container">
            <div class="daily-title">
                <h2>Daily Best Sells</h2>
            </div>

            <div class="daily-wrapper">
                <div class="daily-img">
                    <img src="İMG/banner/banner-deal.jpg" alt="">
                    <div class="daily-text">
                        <h4>100% Organic Coffee Beans.</h4>
                        <h6>Get the best deal before close.</h6>
                        <button>Shop Now <i class="bi bi-arrow-right-short"></i></button>
                    </div>
                </div>
                <div class="popular-products">
                    <a href="#">
                        <div class="product-img">
                            <img src="İMG/product/product-img-11.jpg" alt="">
                        </div>
                    </a>
                    <div class="product-actions">
                        <button><i class="bi bi-eye"></i></button>
                        <button><i class="bi bi-heart"></i></button>
                        <button><i class="bi bi-arrow-left-right"></i></button>
                    </div>
                    <div class="prd-text">
                        <h6>Snack & Munchies</h6>
                        <h2>Haldiram's Sev Bhujia</h2>
                    </div>
                    <div class="prd-prices">
                        <p>$18<span>$24</span></p>
                        <div class="prd-starss">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-half"></i>
                            <span> 4.5(149)</span>
                        </div>
                    </div>
                    <div class="prd-btn">
                        <button><i class="bi bi-plus"></i> Add to cart</button>
                    </div>
                    <div class="cart-date">
                        <div>
                            <p>2013</p>
                            <p>Days</p>
                        </div>
                        <div>
                            <p>01</p>
                            <p>hours</p>
                        </div>
                        <div>
                            <p>06</p>
                            <p>Mins</p>
                        </div>
                        <div>
                            <p>23</p>
                            <p>sec</p>
                        </div>
                    </div>
                </div>
                <div class="popular-products">
                    <a href="#">
                        <div class="product-img">
                            <img src="İMG/product/product-img-12.jpg" alt="">
                        </div>
                    </a>
                    <div class="product-actions">
                        <button><i class="bi bi-eye"></i></button>
                        <button><i class="bi bi-heart"></i></button>
                        <button><i class="bi bi-arrow-left-right"></i></button>
                    </div>
                    <div class="prd-text">
                        <h6>Snack & Munchies</h6>
                        <h2>Haldiram's Sev Bhujia</h2>
                    </div>
                    <div class="prd-prices">
                        <p>$18<span>$24</span></p>
                        <div class="prd-starss">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-half"></i>
                            <span> 4.5(149)</span>
                        </div>
                    </div>
                    <div class="prd-btn">
                        <button><i class="bi bi-plus"></i> Add to cart</button>
                    </div>
                    <div class="cart-date">
                        <div>
                            <p>2013</p>
                            <p>Days</p>
                        </div>
                        <div>
                            <p>01</p>
                            <p>hours</p>
                        </div>
                        <div>
                            <p>06</p>
                            <p>Mins</p>
                        </div>
                        <div>
                            <p>23</p>
                            <p>sec</p>
                        </div>
                    </div>
                </div>
                <div class="popular-products">
                    <a href="#">
                        <div class="product-img">
                            <img src="İMG/product/product-img-13.jpg" alt="">
                        </div>
                    </a>
                    <div class="product-actions">
                        <button><i class="bi bi-eye"></i></button>
                        <button><i class="bi bi-heart"></i></button>
                        <button><i class="bi bi-arrow-left-right"></i></button>
                    </div>
                    <div class="prd-text">
                        <h6>Snack & Munchies</h6>
                        <h2>Haldiram's Sev Bhujia</h2>
                    </div>
                    <div class="prd-prices">
                        <p>$18<span>$24</span></p>
                        <div class="prd-starss">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-half"></i>
                            <span> 4.5(149)</span>
                        </div>
                    </div>
                    <div class="prd-btn">
                        <button><i class="bi bi-plus"></i> Add to cart</button>
                    </div>
                    <div class="cart-date">
                        <div>
                            <p>2013</p>
                            <p>Days</p>
                        </div>
                        <div>
                            <p>01</p>
                            <p>hours</p>
                        </div>
                        <div>
                            <p>06</p>
                            <p>Mins</p>
                        </div>
                        <div>
                            <p>23</p>
                            <p>sec</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="info-icon-wrapper">
            <div class="info">
                <img src="İMG/icons/clock.svg" alt="">
                <h4>10 minute grocery now</h4>
                <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
            </div>
            <div class="info">
                <img src="İMG/icons/gift.svg" alt="">
                <h4>Best Prices & Offers</h4>
                <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
            </div>
            <div class="info">
                <img src="İMG/icons/package.svg" alt="">
                <h4>Wide Assortment</h4>
                <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
            </div>
            <div class="info">
                <img src="İMG/icons/refresh-cw.svg" alt="">
                <h4>Easy Returns</h4>
                <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
            </div>

        </div>

    </div>

    <!-- footer -->

    <div class="footer">
        <div class="container">
            <div class="header-mid-left">
                <a href=""><img src="İMG/logo/download.svg" alt=""></a><br><br>
            </div>
            <div class="row">
                <div class="footer-col">
                    <h4>Home</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Shop-filter</a></li>
                        <li><a href="#">Shop-List</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">Singup</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>