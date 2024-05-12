@extends('layouts.dashboard')

@section('content')
        
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                            <div class="alert alert-light alert-elevate" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                <div class="alert-text">
                                   Cette interface vous permet de consulter la liste des banques de sang ou centre donateur disponible. Vous pouvez créer, modifier ou supprimer une banque.
                                </div>
                            </div>
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">
                                        <span class="kt-portlet__head-icon">
                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                        </span>
                                        <h3 class="kt-portlet__head-title">
                                            Liste des Centres donateurs
                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            <div class="kt-portlet__head-actions">
                                                <div class="dropdown dropdown-inline">
                                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="la la-download"></i> Export
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                <span class="kt-nav__section-text">Choose an option</span>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                                    <span class="kt-nav__link-text">Print</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                    <span class="kt-nav__link-text">CSV</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                    <span class="kt-nav__link-text">PDF</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <a href="{{route('centre.create')}}" class="btn btn-default btn-icon-sm dropdown-toggle">
                                                    <i class="la la-plus"></i>
                                                    Ajouter un Centre donateur
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">

                                     <!--begin: Datatable -->
                                     <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nom</th>
                                                <th>Ville</th>
                                                <th>Adresse</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Horaire</th>
                                                <th>Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach( App\Models\Centre_donneur::all() as $centre)
                      <tr>
                          <td>{{$centre->id}}</td>
                          <td>{{$centre->nom}}</td>
                          <td>{{$centre->ville}}</td>
                          <td>{{$centre->adresse}}</td>
                          <td>{{$centre->telephone}}</td>
                          <td>{{$centre->email}}</td>
                          <td>{{$centre->horaire}}</td>
                          
                          <td>
                              <a href="{{ route('centre.edit' ,$centre) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-edit"></i>
                              </a>

                              <a href="{{ route('centre.destroy' ,$centre) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-trash-o"></i>
                              </a>

                              
                          </td>
                      </tr>
                   @endforeach

              </tbody>
          </table>
           <!--end: Datatable -->
        </div>
    </div>
</div>

@endsection

                  