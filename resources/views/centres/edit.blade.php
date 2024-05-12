@extends('layouts.dashboard')



@section('content')



    <div class="alert alert-light alert-elevate" role="alert">

        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>

        <div class="alert-text">

            Cette interface vous permet de modifier un Centre donateur. Entrez toutes les informations obligatoires et cliquez sur le bouton <b>Enregistrer</b>.

        </div>

    </div>



    <div class="kt-portlet">

        <div class="kt-portlet__head">

            <div class="kt-portlet__head-label">

                <h3 class="kt-portlet__head-title">

                    Modification d'un donneur

                </h3>

            </div>
            
            <div class="kt-portlet__head-toolbar">

                <div class="kt-portlet__head-wrapper">

             <a href="{{route('centre.index')}}" class="btn btn-clean btn-sm" style="margin-right: 5px"><i class="la la-arrow-circle-o-left "></i> Retour</a>


        </div>

    </div>

</div>



<!--begin::Form-->

<form class="kt-form kt-form--label-right" method="POST" action="{{ route('centre.update',$centre) }}">

    @csrf

    <input name="_method" type="hidden" value="PUT">

    <div class="kt-portlet__body">

        <div class="form-group row">

            <div class="col-lg-6">

                <label>Nom(s)</label>

                <input type="text" name="nom" class="form-control" value='{{ $centre->nom }}'>

            </div>

            <div class="col-lg-6">

                <label>Adresse</label>

                <input type="text" name="adresse" class="form-control" value='{{ $centre->adresse }}'>

            </div>

                

                

                
        </div>

     

        <div class="form-group row">

            <div class="col-lg-6">
                <label>Email</label>

                <input type="email" name="email" class="form-control" value='{{ $centre->email }}'>

                
            </div>

            <div class="col-lg-6">

                <label>Ville</label>

                <input type="text" name="ville" class="form-control" value='{{ $centre->ville }}'>

            </div>

            <div class="col-lg-6">

                <label>Horaire</label>

                <input type="text" name="horaire" class="form-control" value='{{ $centre->horaire }}'>

            </div>

            <div class="col-lg-6">
                <label>Téléphone </label>
               
                <input type="number" name="tel" class="form-control" value='{{ $centre->telephone }}'>

                  </div>
            

        </div>
    
                <div class="kt-portlet__foot">

                    <div class="kt-form__actions">
    
                        <div class="row">
    
                            <div class="col-lg-6">
    
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
            </form>    
         <!--end::Form-->

    </div>

</form>

    @endsection




    