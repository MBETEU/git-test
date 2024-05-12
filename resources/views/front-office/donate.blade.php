@extends('layouts.front')

@section('content')
    <div>

        <div class="hero-wrap" style="background-image: url('assets/front/images/bg_6.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                                class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Donate</span></p>
                        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations
                        </h1>
                    </div>
                </div>
            </div>
        </div>


        <section class="ftco-section bg-light">
            <div class="container">
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
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
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
