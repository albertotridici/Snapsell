<div class="container py-5">
    <div class="row p-3 justify-content-center">
        <div class="col-12 col-xxl-8 row content-show">
            <div class="col-12 col-md-6 swiperContent">
                <div class="swiper swiperMain ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div> 
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper swiperThumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 card-container-show">
                @if (Route::currentRouteName() == 'revisor.index')
                    <div class="card-content card-content-show card-content-show-p">
                @else
                    <div class="card-content card-content-show">
                @endif
                    <div>
                        <div class="auth-content-show">
                            <p>{{$announcement->user->name ?? ''}}</p>
                        </div>
                        <div class="pro-cat-content">
                            <div class="link-category-content">
                                <a href="{{route('category.show', $announcement->category)}}" class="pro-cat">{{$announcement->category->name}}</a>
                                <div class="evidenziatore"></div>
                            </div>
                            <h6 class="pro-cat">{{$announcement->created_at->format('d/m/Y')}}</h6>
                        </div>
                        <h2 class="pro-name-show">{{$announcement->title}}</h2>
                    </div>
                    <textarea readonly class="pro-des-show">{{$announcement->description}}</textarea readonly>
                    <div>
                        <div class="price">
                            <p class="current-price">€ {{$announcement->price}}</p>
                        </div>
                        <a href="{{url()->previous()}}" class="cta"><i class="fa-solid fa-arrow-right-from-bracket"></i>Torna indietro</a>
                    </div>
                    @if (Route::currentRouteName() == 'revisor.index')
                        <div class="row content-choose">
                            <div class="col-6 p-0">
                                <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-revisor-accepted" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right"><i class="fa-solid fa-check"></i></button>
                                </form>
                            </div>
                            <div class="col-6 p-0">
                                <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-revisor-reject"><i class="fa-solid fa-xmark"></i></button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>