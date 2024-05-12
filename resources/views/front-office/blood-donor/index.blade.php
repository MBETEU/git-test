@extends('layouts.front')

@section('content')
    <section class="ftco-section-3 img" style="background-image: url(assets/front/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-lg-3 d-flex ftco-animate">

        </div>
                <div class="col-lg-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="text-center">Être volontaire</h3>
                    <form action="{{ route('user.donor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="first_name"> <h5 class="text-color">Le nom du donateur:</h5></label>
                            <input type="text" class="form-control" placeholder="Your First Name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name"> <h5 class="text-color">Le prenom du donateur:</h5></label>
                            <input type="text" class="form-control" placeholder="Your Last Name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="birthday"> <h5 class="text-color">La date de naissance du donateur:</h5></label>
                            <input type="date" class="form-control" placeholder="Your Birthday" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="gender"> <h5 class="text-color">Le sexe du donateur:</h5></label>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="body_weight"> <h5 class="text-color">Le poids du donateur:</h5></label>
                            <input type="number" class="form-control" placeholder="Your Weight" name="body_weight">
                        </div>
                        <div class="form-group">
                            <label for="email"> <h5 class="text-color">L'email du donateur:</h5></label>
                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="address"> <h5 class="text-color">Le quartier du donateur:</h5></label>
                            <input type="text" class="form-control" placeholder="Your Address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="country"> <h5 class="text-color">Le pays du donateur:</h5></label>
                            <input type="text" class="form-control" placeholder="Your Country" name="country">
                        </div>
                        <div class="form-group">
                            <label for="city"> <h5 class="text-color">Le ville du donateur:</h5></label>
                            <input type="text" class="form-control" placeholder="Your City" name="city">
                        </div>
                        <div class="form-group">
                            <label for="contact"> <h5 class="text-color">Le contact du donateur:</h5></label>
                            <input type="number" class="form-control" placeholder="Your Contact" name="contact">
                        </div>
                        <div class="form-group">
                            <label for="contact"> <h5 class="text-color">Groupe sanguin du donateur:</h5></label>
                            <select class="form-control" name="voluntary_group">
                                <option>Groupe sanguin</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact"> <h5 class="text-color">C'est la premier fois du donateur:</h5></label>
                            <select class="form-control" name="new_donor">
                                <option>New Donor</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="donor_image"> <h5 class="text-color">La photo du donateur:</h5></label>
                            <input type="file" class="form-control" value="Photo" name="donor_image">
                        </div>
                        <div class="form-group">
                            <button type="submit" value="" class="btn btn-white py-3 px-5">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
