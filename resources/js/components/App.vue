<template>
    <div>
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
                                            <li><a href="#">People  </a></li>
                                            <li><a href="#">Watches </a></li>
                                            <li><a href="#">Cinema  </a></li>
                                            <li><a href="#">Clothes  </a></li>
                                            <li><a href="#">Home items </a></li>
                                            <li><a href="#">Animals</a></li>
                                            <li><a href="#">People </a></li>
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
                                        <label class="custom-control custom-checkbox">
                                          <input type="checkbox" checked="" class="custom-control-input">
                                          <div class="custom-control-label">Mercedes  
                                            <b class="badge badge-pill badge-light float-right">120</b>  </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                          <input type="checkbox" checked="" class="custom-control-input">
                                          <div class="custom-control-label">Toyota 
                                            <b class="badge badge-pill badge-light float-right">15</b>  </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                          <input type="checkbox" checked="" class="custom-control-input">
                                          <div class="custom-control-label">Mitsubishi 
                                            <b class="badge badge-pill badge-light float-right">35</b> </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                          <input type="checkbox" checked="" class="custom-control-input">
                                          <div class="custom-control-label">Nissan 
                                            <b class="badge badge-pill badge-light float-right">89</b> </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input">
                                          <div class="custom-control-label">Honda 
                                            <b class="badge badge-pill badge-light float-right">30</b>  </div>
                                        </label>
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
                                        <input type="range" class="custom-range" min="0" max="100" name="">
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label>Min</label>
                                          <input class="form-control" placeholder="$0" type="number">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                          <label>Max</label>
                                          <input class="form-control" placeholder="$1,0000" type="number">
                                        </div>
                                        </div> <!-- form-row.// -->
                                        <button class="btn btn-block btn-primary">Apply</button>
                                    </div><!-- card-body.// -->
                                </div>
                            </article> <!-- filter-group .// -->
                        </div> <!-- card.// -->

                    </aside> <!-- col.// -->


                    <main class="col-md-9">

                        <header class="border-bottom mb-4 pb-3">
                            <div class="form-inline">
                                <span class="mr-md-auto">32 Items found </span>
                            </div>
                        </header><!-- sect-heading -->


                        <article class="card card-product-list">
                            <div class="row no-gutters">
                                <aside class="col-md-3">
                                    <a href="#" class="img-wrap">
                                        <img src="/images/3.jpg">
                                    </a>
                                </aside> <!-- col.// -->
                                <div class="col-md-6">
                                    <div class="info-main">
                                        <a href="#" class="h5 title"> Great product name goes here  </a>
                                        
                                        <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                                    </div> <!-- info-main.// -->
                                </div> <!-- col.// -->
                                <aside class="col-sm-3">
                                    <div class="info-aside">
                                        <div class="price-wrap">
                                            <span class="price h5"> $140 </span>    
                                        </div> <!-- info-price-detail // -->
                                        <br>

                                            <div class="input-group input-spinner">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-minus"></i> </button>
                                                </div>
                                                <input type="text" class="form-control" value="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-plus"></i> </button>
                                                </div>
                                            </div>
                                            <br>
                                            <p style="margin-top: 5px;">
                                                <a href="#" class="btn btn-outline-primary btn-sm"> 
                                                    Add to cart 
                                                    <i class="fa fa-shopping-cart"></i> 
                                                </a>
                                            </p>
                                    </div> <!-- info-aside.// -->
                                </aside> <!-- col.// -->
                            </div> <!-- row.// -->
                        </article> <!-- card-product .// -->



                        <nav aria-label="Page navigation sample">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>

                    </main> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>
    </div>
</template>

<script>
    export default {
        props: {
            source: String,
        },
        data: () => ({
            // title : 'Search Results',
            title : 'Hello From Vue',
            products: [],
            total: 0,
            isLoading: false,
            cart: [],
            page: 0,
            priceMin: 0,
            priceMax: 1000,
            categories: [],
            brands: [],
        }),
        watch: {
        },
        mounted(){
        },
        methods: {
        }
    }
</script>