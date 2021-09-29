<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
     aria-labelledby="v-pills-1-tab">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 text-center">
                <div class="menu-wrap">
                    <img src="{{ asset('food_frontend/images/pizza-1.jpg') }}" alt="">
                    <div class="text">
                        <h3><a href="#">{{ $product->name }}</a></h3>
                        <p>{{ $product->description }}</p>
                        <p class="price"><span>${{ $product->price }}</span></p>
                        <p><a href="#" class="btn btn-white btn-outline-white">Add
                                to cart</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
