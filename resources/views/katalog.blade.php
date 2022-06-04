<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>katalog</title>
    <style>
      body{margin-top:20px;
        background:#ddd;
        }


        /*
        * @subsection Shop
        */
        .product {
        padding-top: 5px;
        padding-bottom: 5px;
        margin-left: auto;
        margin-right: auto;
        }

        .product .caption {
        margin-top: 15px;
        }

        .product .caption h6 {
        color: #455a64;
        }

        .product .caption .price + .price {
        margin-left: 15px;
        }

        .product.tumbnail {
        box-shadow: 0 5px 25px 0 transparent;
        transition: 0.3s linear;
        padding-top: 0;
        }

        .product.tumbnail img:hover {
        box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.2);
        }

        .single-product span {
        display: inline-block;
        }

        .single-product .rating .fa-star, .single-product .rating .fa-star-o {
        font-size: 16px;
        color: #f7d4a0;
        margin-left: 2px;
        }

        .single-product .rating + * {
        margin-left: 15px;
        }

        .single-product h1.h1-variant-2 {
        margin-bottom: 20px;
        }

        .single-product .caption:before {
        content: '';
        height: 100%;
        display: inline-block;
        vertical-align: middle;
        }

        .single-product .caption span {
        display: inline-block;
        vertical-align: middle;
        }

        .single-product .caption .price {
        font-weight: 400;
        }

        .single-product .caption .price.sale {
        color: #e75854;
        font-size: 33px;
        }

        .single-product .caption * + .price {
        margin-left: 10.8%;
        }

        @media (max-width: 1199px) {
        .single-product .caption * + .price {
            margin-left: 7.8%;
        }
        }

        .single-product .caption * + .quantity {
        margin-left: 26px;
        }

        .single-product .caption .info-list {
        border-bottom: 1px solid #f3f3ed;
        border-top: 1px solid #f3f3ed;
        font-family: Montserrat, sans-serif;
        padding-top: 26px;
        padding-bottom: 26px;
        text-align: left;
        }

        .single-product .caption .info-list dt, .single-product .caption .info-list dd {
        display: inline-block;
        line-height: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        }

        .single-product .caption .info-list dt {
        letter-spacing: 0.08em;
        font-size: 12px;
        color: #a7b0b4;
        width: 35%;
        text-transform: uppercase;
        }

        .single-product .caption .info-list dd {
        font-size: 15px;
        color: #565452;
        width: 62.5%;
        }

        .single-product .caption .share span.small {
        margin-top: 9px;
        }

        @media (max-width: 991px) {
        .single-product .caption .share span.small {
            display: block;
            margin-bottom: 15px;
        }
        }

        @media (max-width: 767px) {
        .single-product .table-mobile tr {
            padding-top: 0;
        }
        .single-product .table-mobile tr:before {
            display: none;
        }
        }

        .price {
        display: inline-block;
        font-size: 15px;
        font-family: Montserrat, sans-serif;
        font-weight: 700;
        letter-spacing: 0.02em;
        color: #2b2f3e;
        }

        .price.sale {
        color: #e75854;
        }

        .price del {
        color: #b0bec5;
        }

        .quantity {
        text-align: center;
        font-family: Montserrat, sans-serif;
        font-size: 12px;
        background: #eceff1;
        padding-top: 5px;
        padding-bottom: 5px;
        width: 82px;
        height: auto;
        display: inline-block;
        }

        .quantity span {
        display: inline-block;
        }

        .quantity .num {
        width: 26px;
        }

        .quantity [class*='fa-'] {
        padding-top: 4px;
        width: 22px;
        padding-bottom: 4px;
        color: #b0bec5;
        cursor: pointer;
        }

        .quantity [class*='fa-']:hover {
        color: #455a64;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="container bootstrap snipets">
   <h1 class="text-center text-muted">Product catalog</h1>
   <div class="row flow-offset-1">
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/FFB6C1/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/87CEFA/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/FF7F50/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/20B2AA/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/8A2BE2/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/6495ED/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/00008B/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/9932CC/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/FF69B4/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
   </div>
 </div> 
  </body>
</html>
