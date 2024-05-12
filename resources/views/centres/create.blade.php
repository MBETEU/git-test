@extends('layouts.dashboard')



@section('content')



    <div class="alert alert-light alert-elevate" role="alert">

        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>

        <div class="alert-text">

            Cette interface vous permet d'ajouter un centre de donneur. Entrez toutes les informations obligatoires et cliquez sur le bouton <b>Enregistrer</b> pour ajouter un centre. 

        </div>

    </div>



    
    <div class="kt-portlet">

        <div class="kt-portlet__head">

            <div class="kt-portlet__head-label">

                <h3 class="kt-portlet__head-title">

                    Ajouter un centre donateur

                </h3>

            </div>

            <div class="kt-portlet__head-toolbar">

                <div class="kt-portlet__head-wrapper">

                    <a href="" class="btn btn-clean btn-sm" style="margin-right: 5px"><i class="la la-print"></i> Imprimer la fiche de renseignement</a>

                     <a href="{{route('centre.index')}}" class="btn btn-clean btn-sm" style="margin-right: 5px"><i class="la la-arrow-circle-o-left "></i> Retour</a>


                </div>

            </div>

        </div>




        <!--begin::Form-->

        <form class="kt-form kt-form--label-right" method="POST" enctype="multipart/form-data" action="{{route('centre.store')}}">

            @csrf





            <div class="kt-portlet__body">

                <div class="form-group row">

                    <div class="col-lg-6">

                        <label>Nom(s)</label>

                        <input type="text" name="nom" class="form-control">

                    </div>

                    <div class="col-lg-6">

                        <label>Adresse</label>

                        <input type="text" name="adresse" class="form-control">

                    </div>

                        

                        

                        
                </div>

             

                <div class="form-group row">

                    <div class="col-lg-6">
                        <label>Email</label>

                        <input type="email" name="email" class="form-control">

                        
                    </div>

                    <div class="col-lg-6">

                        <label>Ville</label>

                        <input type="text" name="ville" class="form-control">

                    </div>

                    <div class="col-lg-6">

                        <label>Horaire</label>

                        <input type="text" name="horaire" class="form-control">

                    </div>

                    <div class="col-lg-6">
                        <label>Téléphone </label>
                       
                        <input type="number" name="tel" class="form-control">

                          </div>
                    

                </div>
                <div class="kt-portlet__foot">

                    <div class="kt-form__actions">
    
                        <div class="row">
    
                            <div class="col-lg-6">
    
                                <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
                                <button type="reset" class="btn btn-primary btn-sm">Annuler</button>

                            </div>

                        </div>
    
                    </div>
    
                </div>
    
            </form>

         <!--end::Form-->

    </div>



    @endsection
