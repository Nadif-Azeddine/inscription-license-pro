@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('Liste Licence') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Etablissement') }}</th>
                                            <th>{{ __('Name') }}</th>
                                          
                                            <th>{{ __('specialite') }}</th>
                                            <th>{{ __('departement') }}</th>
                                            
                                            <th>{{ __('modd/supp') }}</th>
                                        </tr>
                                    </thead>
                        
                               
                                       
                                        <tbody>
                                            @foreach($licences as $licence)
                                            <tr>
                                                <td>{{ __($licence->departement->etablissement->nom_etablissement) }}</td>
                                                <td>{{ __($licence->nom_licence) }}</td>
                                               
                                              <td>{{ $licence->specialite->libelle }}</td>
                                                <td>{{ __($licence->departement->departement_nom) }}</td>
                                                <td>                                     
                                                    <a href="#" class="icon-link pen-icon" data-toggle="tooltip" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="#" class="icon-link trash-icon" data-toggle="tooltip" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                    </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
 

@section('scripts')
@endsection

@endsection
