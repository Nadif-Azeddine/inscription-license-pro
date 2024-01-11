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
                                           
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('specialite') }}</th>
                                            <th>{{ __('departement') }}</th>
                                            <th>{{ __('modd/supp/ajot') }}</th>
                                        </tr>
                                    </thead>
                        
                               
                                       
                                        <tbody>
                                            @foreach($licences as $licence)
                                            <tr>
                                              
                                                <td>{{ __($licence->nom_licence->__toString()) }}</td>
                                                <td>{{ __($licence->specialite->__toString()) }}</td>
                                                <td>{{ __($licence->departement->__toString()) }}</td>
                                           
                                            
                                          
                                                <td>                                     
                                                    <a href="{{ route('licences', ['id' => $licence->licence_id]) }}" class="icon-link pen-icon" data-toggle="tooltip" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('licences', ['id' => $licence->licence_id]) }}" class="icon-link trash-icon" data-toggle="tooltip" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <a href="{{ route('licences', ['id' => $licence->licence_id]) }}" class="icon-link plus-icon" data-toggle="tooltip" title="Add">
                                                        <i class="fas fa-plus"></i>
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
