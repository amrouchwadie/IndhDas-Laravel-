@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')

<div class="container-fluid product-wrapper">
    <div class="product-grid">
      <div class="feature-products">
        <div class="row">
          <div class="col-md-6 products-total">
            <a href="{{ route('filespics.create',app()->getLocale())}}" class="btn btn-primary">{{__('Add File')}} </a>
            <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title="" data-bs-original-title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></a></div>
            <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title="" data-bs-original-title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a></div><span class="d-none-productlist filter-toggle">
                  Filters<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-data"><polyline points="6 9 12 15 18 9"></polyline></svg></span></span>
            <div class="grid-options d-inline-block">
              <ul>
                <li><a class="product-2-layout-view" href="#" data-original-title="" title="" data-bs-original-title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                <li><a class="product-3-layout-view" href="#" data-original-title="" title="" data-bs-original-title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                <li><a class="product-4-layout-view" href="#" data-original-title="" title="" data-bs-original-title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                <li><a class="product-6-layout-view" href="#" data-original-title="" title="" data-bs-original-title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
              </ul>
            </div>
          </div>
        
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="product-sidebar">
              <div class="filter-section">
                <div class="card">
              
                  <div class="left-filter">
                    <div class="card-body filter-cards-view animate-chk">
                      <div class="product-filter">
                        <h6 class="f-w-600">Category</h6>
                        <div class="checkbox-animated mt-0">
                          <label class="d-block" for="edo-ani5">
                            <input class="radio_animated" id="edo-ani5" type="radio" data-original-title="" title="" data-bs-original-title="">Man Shirt
                          </label>
                          <label class="d-block" for="edo-ani6">
                            <input class="radio_animated" id="edo-ani6" type="radio" data-original-title="" title="" data-bs-original-title="">Man Jeans
                          </label>
                          <label class="d-block" for="edo-ani7">
                            <input class="radio_animated" id="edo-ani7" type="radio" data-original-title="" title="" data-bs-original-title="">Woman Top
                          </label>
                          <label class="d-block" for="edo-ani8">
                            <input class="radio_animated" id="edo-ani8" type="radio" data-original-title="" title="" data-bs-original-title="">Woman Jeans
                          </label>
                          <label class="d-block" for="edo-ani9">
                            <input class="radio_animated" id="edo-ani9" type="radio" data-original-title="" title="" data-bs-original-title="">Man T-shirt
                          </label>
                        </div>
                      </div>
                      <div class="product-filter">
                        <h6 class="f-w-600">Brand</h6>
                        <div class="checkbox-animated mt-0">
                          <label class="d-block" for="chk-ani">
                            <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title="" data-bs-original-title=""> Levi's
                          </label>
                          <label class="d-block" for="chk-ani1">
                            <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="" data-bs-original-title="">Diesel
                          </label>
                          <label class="d-block" for="chk-ani2">
                            <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="" data-bs-original-title="">Lee
                          </label>
                          <label class="d-block" for="chk-ani3">
                            <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="" data-bs-original-title="">Hudson
                          </label>
                          <label class="d-block" for="chk-ani4">
                            <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="" data-bs-original-title="">Denizen
                          </label>
                          <label class="d-block" for="chk-ani5">
                            <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="" data-bs-original-title="">Spykar
                          </label>
                        </div>
                      </div>
                      <div class="product-filter slider-product">
                        <h6 class="f-w-600">Colors</h6>
                        <div class="color-selector">
                          <ul>
                            <li class="white"></li>
                            <li class="gray"></li>
                            <li class="black"></li>
                            <li class="orange"></li>
                            <li class="green"></li>
                            <li class="pink"></li>
                            <li class="yellow"></li>
                            <li class="blue"></li>
                            <li class="red"></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product-filter pb-0">
                        <h6 class="f-w-600">Price</h6>
                        <span class="irs js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">$0</span><span class="irs-max" style="visibility: hidden;">$1 000</span><span class="irs-from" style="visibility: visible; left: 7.46362%;">$200</span><span class="irs-to" style="visibility: visible; left: 61.7672%;">$800</span><span class="irs-single" style="visibility: hidden; left: 17.6585%;">$200 — $800</span></span><span class="irs-grid" style="width: 90.8524%; left: 4.4738%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -5.08058%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -9.92075%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -10.0961%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -9.64137%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -13.1822%;">1 000</span></span><span class="irs-bar" style="left: 22.7443%; width: 54.5114%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-slider from" style="left: 18.1705%;"></span><span class="irs-slider to type_last" style="left: 72.6819%;"></span></span><input id="u-range-03" type="text" class="irs-hidden-input" tabindex="-1" readonly="" data-bs-original-title="" title="">
                        <h6 class="f-w-600">New Products</h6>
                      </div>
                      <div class="product-filter pb-0 new-products">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="testimonial">
                          
                          
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-300px, 0px, 0px); transition: all 0s ease 0s; width: 902px;"><div class="owl-item cloned" style="width: 120.25px; margin-right: 30px;"><div class="item">
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                          </div></div><div class="owl-item cloned" style="width: 120.25px; margin-right: 30px;"><div class="item">
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00  </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item active" style="width: 120.25px; margin-right: 30px;"><div class="item">
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 120.25px; margin-right: 30px;"><div class="item">
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00  </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item cloned" style="width: 120.25px; margin-right: 30px;"><div class="item">
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                          </div></div><div class="owl-item cloned" style="width: 120.25px; margin-right: 30px;"><div class="item">
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00</div>
                              </div>
                            </div>
                            <div class="product-box row">
                              <div class="product-img col-md-5"><img class="img-fluid img-100" src="/assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                              <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                <p class="mb-0">Fancy Shirt</p>
                                <div class="product-price">$100.00  </div>
                              </div>
                            </div>
                          </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                      </div>
                      <div class="product-filter text-center"><img class="img-fluid banner-product" src="/assets/images/ecommerce/banner.jpg" alt="" data-original-title="" title=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <div class="product-wrapper-grid"> 
             @foreach ($filespics as $filespic)
        <div class="row">
        
                
          
          <div class="col-xl-3 col-sm-6 xl-4">
        
            <div class="card">
              <div class="product-box">
                <div class="product-img"><img class="img-fluid" src="{{URL::to('files/'.$filespic->picture)}}" alt="">
                  <div class="product-hover">
                    <ul>
                     
                      <li>
                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-original-title="" title=""><i class="icon-eye"></i></button>
                      </li>
                    
                    </ul>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="product-box row">
                          <div class="product-img col-lg-6"><img class="img-fluid" src="{{URL::to('files/'.$filespic->picture)}}" alt=""></div>
                      
                        </div>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-details">
             
                  <p>{{$filespic->picture}}</p>
                  <div class="product-price">
                    <table >
                      <tbody>
                      <tr>
                      <td ><a href="{{ route('filespics.edit',['language' => app()->getLocale(),'id' => $filespic->id]) }}" class="btn btn-warning">🖋️</a></td>
                      <td >  <form action="{{ route('filespics.destroy', ['language' => app()->getLocale(),'id' => $filespic->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >🗑️</button>
                      </form></td>
                      </tr>
                      </tbody>
                      </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
    
      
       
       
  
    
   
     
        </div>
          @endforeach
      </div>
    </div>
  </div>


  <script src="/assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="/assets/js/scrollbar/simplebar.js"></script>
  <script src="/assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="/assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="/assets/js/sidebar-menu.js"></script>
  <script src="/assets/js/range-slider/ion.rangeSlider.min.js"></script>
  <script src="/assets/js/range-slider/rangeslider-script.js"></script>
  <script src="/assets/js/touchspin/vendors.min.js"></script>
  <script src="/assets/js/touchspin/touchspin.js"></script>
  <script src="/assets/js/touchspin/input-groups.min.js"></script>
  <script src="/assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="/assets/js/select2/select2.full.min.js"></script>
  <script src="/assets/js/select2/select2-custom.js"></script>
  <script src="/assets/js/tooltip-init.js"></script>
  <script src="/assets/js/product-tab.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="/assets/js/script.js"></script>
  <script src="/assets/js/theme-customizer/customizer.js"></script>

@endsection