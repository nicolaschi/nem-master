@include('manufacturer.mheader')


<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Product Details</h3>
                            <div class="nk-block-des text-soft">
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ url('/new_product') }}"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery mr-xl-1 mr-xxl-5">
                                        <div class="slider-init slick-initialized slick-slider" id="sliderFor"
                                            data-slick="{&quot;arrows&quot;: false, &quot;fade&quot;: true, &quot;asNavFor&quot;:&quot;#sliderNav&quot;, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}">
                                            <div class="slick-list draggable">
                                                <div class="slick-track" style="opacity: 1; width: 1710px;">
                                                    <div class="slider-item rounded slick-slide slick-current slick-active"
                                                        data-slick-index="0" aria-hidden="false"
                                                        style="width: 342px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                                        tabindex="0">
                                                        <img src=" {{ asset('storage/images/' . $product->image) }}"
                                                            class="w-100" alt="test">
                                                    </div>

                                                </div>
                                            </div>

                                        </div><!-- .slider-init -->
                                        <div class="slider-init slider-nav slick-initialized slick-slider">



                                        </div><!-- .slider-nav -->
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 mr-xxl-5">
                                        <h4 class="product-price text-primary">NGN {{ $product->category->fee }}</h4>
                                        <h2 class="product-title">{{ $product->name }}</h2>
                                        <div class="product-rating">

                                        </div><!-- .product-rating -->
                                        <div class="product-excrept text-soft">
                                            <p class="lead">

                                                Kindly pay a sum of NGN 5,375.00 to the NEMSA official bank account
                                                below<br />
                                                Pay at the Bank using your Unique ID
                                                {{ Auth::User()->unique_id }}<br />
                                                ACCT. NAME: NEMSA DEMO ACCOUNT<br />
                                                BANK: DEMO BANK<br />
                                                ACCT. NO. 0000000000<br />
                                                Send your details and proof of payment to billing@nemsa.ng<br />
                                                To make payment online, CLick the Pay Now button
                                            </p>
                                        </div>
                                        <div class="product-meta">
                                            <ul class="d-flex g-3 gx-5">

                                                <li>
                                                    <div class="fs-14px text-muted">Model Number</div>
                                                    <div class="fs-16px fw-bold text-secondary">{{ $product->model }}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="product-meta">
                                            <form id="paymentForm">
                                                <input type="hidden" id="email-address"
                                                    value="{{ Auth::user()->email }}" />

                                                <input type="hidden" id="amount"
                                                    value="{{ $product->category->fee }}" />
                                                <div class="form-submit">
                                                    <button type="submit" class=" btn btn-primary"
                                                        onclick="payWithPaystack()"> Pay
                                                        Now</button>
                                                </div>
                                            </form>
                                        </div>

                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                        <script src="https://js.paystack.co/v1/inline.js"></script>

                                        <script>
                                            const paymentForm = document.getElementById('paymentForm');
                                            console.log(paymentForm);
                                            paymentForm.addEventListener("submit", payWithPaystack, false);

                                            function payWithPaystack(e) {
                                                e.preventDefault();
                                                let handler = PaystackPop.setup({
                                                    key: 'pk_test_5a5cc43ed090f4050f33634b204a6b57abb4e570', // Replace with your public key
                                                    email: document.getElementById("email-address").value,
                                                    amount: document.getElementById("amount").value * 100,
                                                    ref: '' + Math.floor((Math.random() * 1000000000) + 1),

                                                    onClose: function() {
                                                        alert('Window closed.');
                                                    },

                                                    callback: function(response) {
                                                        let reference = response.reference;
                                                        $.ajax({
                                                            type: "GET",
                                                            url: "{{ URL::to('verify_product') }}/" + reference,
                                                            success: function(response) {
                                                                console.log(response);
                                                            }
                                                        });
                                                    }
                                                });
                                                handler.openIframe();
                                            }
                                        </script>
                                        </ul>
                                    </div><!-- .product-meta -->
                                </div><!-- .product-info -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>
                </div>
            </div><!-- .nk-block -->

        </div>
    </div>
</div>

@include('manufacturer.mfooter')
