<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<header>
    <div class="top-nav container">
        <div class="logo">CSS Grid Example</div>
        <ul>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
    </div> <!-- end top-nav -->

    <div class="hero container">
        <div class="hero-copy">
            <h1>CSS Grid Example</h1>
            <p>A practical example of using CSS Grid for a typical website layout.</p>
            <div class="hero-buttons">
                <a href="#" class="button button-white">Button 1</a>
                <a href="#" class="button button-white">Button 2</a>
            </div>
        </div> <!-- end hero-copy -->

        <div class="hero-image">
            <img src="{{asset('storage/images/macbook-pro.png')}}" alt="hero image">
        </div>
    </div> <!-- end hero -->
</header>

<div class="featured-section">
    <div class="container">
        <h1 class="text-center">CSS Grid Example</h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

        <div class="text-center button-container">
            <a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a>
        </div>


        <div class="products text-center">
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="{{asset('storage/images/macbook.png')}}" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="#" class="button">View more products</a>
        </div>

    </div> <!-- end container -->

</div> <!-- end featured-section -->

<div class="blog-section">
    <div class="container">
        <h1 class="text-center">From Our Blog</h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cssgrid_blog1.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cssgrid_blog2.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cssgrid_blog3.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
        </div> <!-- end blog-posts -->
    </div> <!-- end container -->
</div> <!-- end blog-section -->

<footer>
    <div class="footer-content container">
        <div class="made-with">Made with <i class="fa fa-heart"></i> by Andre Madarang</div>
        <ul>
            <li>Follow Me:</li>
            <li><a href="#"><i class="fa fa-globe"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div> <!-- end footer-content -->
</footer>


