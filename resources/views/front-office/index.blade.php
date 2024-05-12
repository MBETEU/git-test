@extends('layouts.front')

@section('content')
<div>
    <div class="hero-wrap" style="background-image: url('assets/front/images/bg_7.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ne rien faire n'est pas une option de notre vie</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <a
                            href="#"></a></p>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a
                            href="https://vimeo.com/45830194"
                            class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span
                                class="icon-play mr-2"></span>Regarder la Vidéo</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>Served Over</span>
                            <strong class="number" data-number="1432805">0</strong>
                            <span>Children in 190 countries in the world</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Donneur de sang</h3>
                            <p>Le sang est essentiel pour sauver des vies dans des situations d'urgence, pour les traitements médicaux et les interventions chirugicales. Votre don peut faire la difference et aider directement ceux qui en ont besoin</p>
                            <p><a href="{{ route('user.donor.index') }}" class="btn btn-white px-3 py-2 mt-2">Devenir donneur</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Receveur de sang</h3>
                            <p>Si vous rechercher du sang en tant que receveur, assurez vous de connaitre clairement vos besoins, tels que le groupe sanguin requis, les quantité neccessaires, les details de vos conditions médicales.</p>
                            <p><a href="{{ route('user.donate.donors') }}" class="btn btn-white px-3 py-2 mt-2">Devenir receveur</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Faire un don</h3>
                            <p>un don est égale à une vie sauvée. Ensemble reduisons le taux de mortalité tout en reduisant le nombre de malade grave dans nos hopitaux</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Devenir un voluntaire</h3>
                            <p>Rien ne peut vaincre la volonté d'un Homme qui veut le bien de son prochain</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Parrainage</h3>
                            <p>Ministère de la santé
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Causes</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(images/cause-1.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Clean water for the urban area</a></h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</p>
                                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(images/cause-2.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Clean water for the urban area</a></h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</p>
                                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(images/cause-3.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Clean water for the urban area</a></h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</p>
                                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(images/cause-4.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Clean water for the urban area</a></h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</p>
                                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(images/cause-5.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Clean water for the urban area</a></h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</p>
                                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cause-entry">
                                <a href="#" class="img"
                                    style="background-image: url(images/cause-6.jpg);"></a>
                                <div class="text p-3 p-md-4">
                                    <h3><a href="#">Clean water for the urban area</a></h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic life</p>
                                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                            aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Derniers dons</h2>
                    
                </div>
            </div>
            <div class="row">
                @foreach ($donates as $donate)
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{ asset('donor_image') }}/{{ $donate->donor_image }});"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">{{ $donate->first_name }} {{ $donate->last_name }}</a></h3>
                                <span class="position">@if($donate->new_donor == 'Yes') Nouveau donneur @else Ancien donneur  @endif</span>
                                <div class="text">
                                    <p>Group sanguin   <span>{{ $donate->voluntary_group }}</span> pour <a href="{{ route('user.donate.show', ['id' => $donate->id]) }}">Voir profil</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="d-md-flex">
            <a href="images/cause-2.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-3.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-4.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-5.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
        <div class="d-md-flex">
            <a href="images/cause-6.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-6.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_3.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/image_3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_1.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/image_1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_2.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/image_2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('assets/front/images/image_1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('assets/front/images/image_2.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('assets/front/images/image_3.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Latest Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('assets/front/images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                    10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('assets/front/images/event-2.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                    10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('assets/front/images/event-3.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                    10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-3 img" style="background-image: url(assets/front/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    {{-- <div class="img img-2 align-self-stretch"
                        style="background-image: url(assets/front/images/bg_4.jpg);"></div> --}}

                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Be a volunteer</h3>
                    <div class="img img-2 align-self-stretch"
                    style="background-image: url(assets/front/images/bg_4.jpg);"></div>

                    <div class="">
                        <a href="{{ route('dashboard') }}" class="btn btn-white py-3 px-5">Sign In</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


</div>
@endsection
