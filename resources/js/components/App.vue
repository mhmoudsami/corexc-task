<template>
    <div>
        <PageLoader :is-loading="isLoading"></PageLoader>

        <header class="section-header">
            <section class="header-main border-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-4">
                            <a href="/" class="brand-wrap">
                                Corexc.com
                            </a> <!-- brand-wrap.// -->
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            
                        </div> <!-- col.// -->
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="cart-el">
                                <div class="widgets-wrap float-md-right">
                                    <div class="widget-header  mr-3">
                                        <a @click.prevent="toggleCartVisibility()" href="#" class="cart-link icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                                        <span class="badge badge-pill badge-danger notify">
                                            {{ cart.length }}
                                        </span>
                                    </div>
                                </div> <!-- widgets-wrap.// -->
                            </div>

                            <div class="cart-popover" v-show="cartVisisble">
                               <div class="card">
                                  <table class="table table-borderless table-shopping-cart">
                                     <thead class="text-muted">
                                        <tr class="small text-uppercase">
                                           <th scope="col">Product</th>
                                           <th scope="col" width="120">Quantity</th>
                                           <th scope="col" width="120">Price</th>
                                           <th scope="col" class="text-right" width="200"> </th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <tr v-for="product in cart">
                                           <td>
                                              <figure class="itemside align-items-center">
                                                 <div class="aside"><img src="/images/3.jpg" class="img-sm"></div>
                                                 <figcaption class="info">
                                                      {{ product.name }}
                                                      <div class="price-wrap"> 
                                                         <var class="price">
                                                             ${{ product.quantity *  product.price}}
                                                         </var> 
                                                         <small class="text-muted"> ${{product.price}} each </small> 
                                                      </div>
                                                 </figcaption>
                                              </figure>
                                           </td>
                                           <td class="text-center">
                                                {{product.quantity}}
                                           </td>
                                           <td class="text-right"> 
                                              <a @click.prevent="removeFromCart(product)" href="" class="btn btn-light"> Remove</a>
                                           </td>
                                        </tr>
                                     </tbody>
                                  </table>
                                  <div class="card-body border-top">
                                    <p>
                                        Total : ${{cartTotal}}
                                    </p>
                                    <hr>
                                     <a @click.prevent="submitCartData()" href="#" class="btn btn-primary btn-block">
                                        Submit
                                     </a>
                                  </div>
                                  <!-- card-body.// -->
                               </div>
                            </div>

                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- container.// -->
            </section> <!-- header-main .// -->
        </header> <!-- section-header.// -->


        <section class="section-pagetop bg">
            <div class="container">
                <h2 class="title-page">{{ title }}</h2>
            </div>
        </section>


        <section class="section-content padding-y">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                                
                        <div class="card">
                            <article class="filter-group">
                                <header class="card-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Category</h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse show" id="collapse_1" style="">
                                    <div class="card-body">
                                        <ul class="list-menu">
                                            <li 
                                                v-for="category in categories"
                                                :class="{selectedCat: (category.id == selected_category)}"
                                            >
                                                <a 
                                                    href="#"
                                                    @click.prevent="setSelectedCat(category)"
                                                >
                                                    {{category.name}}
                                                    <b class="badge badge-pill badge-light float-right">
                                                        {{category.products_count}}
                                                    </b>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> <!-- card-body.// -->
                                </div>
                            </article> <!-- filter-group  .// -->
                            <article class="filter-group">
                                <header class="card-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Brands </h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse show" id="collapse_2" style="">
                                    <div class="card-body">
                                        <template v-for="brand in brands">
                                            <label class="custom-control custom-checkbox">
                                              <input 
                                                type="checkbox" 
                                                class="custom-control-input"
                                                v-model="selected_brands"
                                                :value='brand.id'
                                            >
                                              <div class="custom-control-label">
                                                    {{brand.name}}  
                                                    <b class="badge badge-pill badge-light float-right">
                                                        {{brand.products_count}}
                                                    </b>
                                                </div>
                                            </label>
                                        </template>

                                    </div> <!-- card-body.// -->
                                </div>
                            </article> <!-- filter-group .// -->

                            <article class="filter-group">
                                <header class="card-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Price range </h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse show" id="collapse_3" style="">
                                    <div class="card-body">
                                        <vue-range-slider v-model="priceRange" :min="0" :max="priceMax" :enableCross='true'></vue-range-slider>
                                        <br>
                                        <button 
                                            class="btn btn-block btn-primary"
                                            @click.prevent="applyPricerange()"
                                        >
                                            Apply
                                        </button>
                                    </div><!-- card-body.// -->
                                </div>
                            </article> <!-- filter-group .// -->
                        </div> <!-- card.// -->

                    </aside> <!-- col.// -->


                    <main class="col-md-9">

                        <header class="border-bottom mb-4 pb-3">
                            <div class="form-inline">
                                <span class="mr-md-auto">
                                    {{ pagination.total }} Items found 

                                    <template v-if="selected_category">
                                        in : 
                                        <span class="">
                                            {{ selected_category.name }}
                                        </span>
                                    </template>
                                </span>
                            </div>
                        </header><!-- sect-heading -->


                        <article 
                            class="card card-product-list"
                            v-for="product in products"
                        >
                            <div class="row no-gutters">
                                <aside class="col-md-3">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/3.jpg">
                                    </a>
                                </aside> <!-- col.// -->
                                <div class="col-md-6">
                                    <div class="info-main">
                                        <h5 href="#" class="h5 title"> {{ product.name }}  </h5>
                                        <p>
                                            {{ product.description }}
                                        </p>
                                    </div> <!-- info-main.// -->
                                </div> <!-- col.// -->
                                <aside class="col-sm-3">
                                    <div class="info-aside">
                                        <div class="price-wrap">
                                            <span class="price h5">
                                                $ {{ product.price }}
                                            </span>    
                                        </div> <!-- info-price-detail // -->
                                        <br>

                                            <div class="input-group input-spinner">
                                                <div class="input-group-prepend">
                                                    <button 
                                                        class="btn btn-light" 
                                                        type="button" 
                                                        id="button-minus"
                                                        @click="decreaseQuantity(product)"
                                                    > 
                                                        <i class="fa fa-minus"></i> 
                                                    </button>
                                                </div>
                                                <input 
                                                    type="text" 
                                                    class="form-control" value="0"
                                                    v-model="product.quantity"
                                                >
                                                <div class="input-group-append">
                                                    <button 
                                                        class="btn btn-light" 
                                                        type="button" 
                                                        id="button-plus"
                                                        @click="increaseQuantity(product)"
                                                    > 
                                                        <i class="fa fa-plus"></i> 
                                                    </button>
                                                </div>
                                            </div>
                                            <br>
                                            <p style="margin-top: 5px;">
                                                <a 
                                                    @click.prevent="addToCart(product)" 
                                                    href="#" 
                                                    class="btn btn-outline-primary btn-sm"
                                                > 
                                                    Add to cart 
                                                    <i class="fa fa-shopping-cart"></i> 
                                                </a>
                                            </p>
                                    </div> <!-- info-aside.// -->
                                </aside> <!-- col.// -->
                            </div> <!-- row.// -->
                        </article> <!-- card-product .// -->

                        <template v-if="pagination.total > pagination.per_page">
                            <pagination :pagination="pagination" :callback="getProducts" :options="paginationOptions"></pagination>

                        </template>
                        

                    </main> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>
    </div>
</template>

<script>
    import PageLoader from './Loader';
    import Pagination from 'vue-bootstrap-pagination';
    import 'vue-range-component/dist/vue-range-slider.css';
    import VueRangeSlider from 'vue-range-component';

    export default {
        props: {
            source: String,
        },
        components:{PageLoader , Pagination , VueRangeSlider},
        data: () => ({
            isLoading: false,
            cartVisisble: false,
            title : 'Search Results',
            priceRange:[0 , 100],

            products: [],
            cart: [],
            categories: [],
            brands: [],
            priceMin: 0,
            priceMax: 1000,


            pagination:{
                total: 0,
                per_page: 10,
                current_page: 0,
                last_page: 0,
            },
            paginationOptions:{
                offset: 4,
                previousText: 'Prev',
                nextText: 'Next',
                alwaysShowPrevNext: true
            },

            selected_category: null,
            selected_brands: [],
            cart_total: 0,
        }),
        watch: {
            selected_brands(){
                this.getProducts(true);
            }
        },
        mounted(){
            this.getAppData();
            this.getProducts();
            // console.log(this.$toastr);
        },
        computed:{
            // priceMin(){
            //     return this.priceRange[0];
            // },
            // priceMax(){
            //     return this.priceRange[1];
            // },
            cartTotal(){
                this.cart_total = 0;
                this.cart.forEach(product=>{
                    this.cart_total+= (product.price * product.quantity);
                });
                return this.cart_total;
            }
        },
        methods: {
            toggleCartVisibility(){
                // if ( this.cart.length < 1 ) {
                //     return;
                // }
                this.cartVisisble = ! this.cartVisisble;
            },
            setSelectedCat(category){
                this.selected_category = category;
                this.getProducts(true);
            },
            decreaseQuantity(product){
                if ( product.quantity == 1 ) {
                    return;
                }
                product.quantity-=1;
            },
            increaseQuantity(product){
                product.quantity+=1;
            },
            getAppData(){
                axios.get('/api/app/data').then( response=> {
                    this.priceRange = [
                        response.data.priceMin , response.data.priceMax
                    ];
                    this.priceMin = response.data.priceMin;
                    this.priceMax = response.data.priceMax;

                    this.categories = response.data.categories;
                    this.brands = response.data.brands;
                });
            },
            getProducts(clearPast = false){
                this.isLoading = true;

                if ( clearPast ) {
                    this.pagination.current_page = 1;
                }

                axios.get('/api/products' , {
                    params: {
                        page: this.pagination.current_page,
                        priceFrom : this.SpriceMin,
                        priceTo: this.SpriceMax,
                        brands: this.selected_brands,
                        category: (this.selected_category) ? this.selected_category.id: null,
                        priceRange: this.priceRange
                    }
                }).then( response=> {
                    // console.log(response);
                    this.products = response.data.data;
                    this.pagination.total = response.data.total;
                    this.pagination.current_page = response.data.current_page;
                    this.pagination.last_page = response.data.last_page;
                    this.pagination.per_page = response.data.per_page;
                }).finally( a=> {
                    this.isLoading = false;
                });
            },
            applyPricerange(){
                this.getProducts(true);
            },
            addToCart(product){
                // remove first if exist
                this.cart = _.reject(this.cart , function(p){
                    return p.id == product.id;
                });
                // then add to cart again
                this.cart.push(_.clone(product));

                this.$toastr.s('Product Added To Cart');
            },
            removeFromCart(product){
                this.cart = _.reject(this.cart , function(p){
                    return p.id == product.id;
                });

                this.$toastr.s('Product Removed From Cart');
            },
            submitCartData(){
                if ( this.cart.length < 1 ) {
                    this.$toastr.i('Your Cart Is Empty');
                    return false;
                }

                this.isLoading = true;

                axios.post('/api/cart/submit' , {
                    cart: this.cart,
                }).then( response=> {
                    if ( response.data.success == false ) {
                        this.$toastr.i(response.data.message);
                        return;
                    }
                    // empty cart
                    this.cart = [];
                    // hide
                    this.toggleCartVisibility();
                    // display success message
                    this.$toastr.s(response.data.message);

                }).finally(a=>{
                    this.isLoading = false;
                });
            }
        }
    }
</script>