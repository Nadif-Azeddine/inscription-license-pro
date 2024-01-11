@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('LISTE condidates') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('nom') }}</th>
                                            <th>{{ __('ville') }}</th>
                                            <th>{{ __('etablissement') }}</th>
                                            <th>{{ __('modd/supp') }}</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($candidates as $candidate)
                                        <tr>
                                            <td>{{ __($candidate->user->nom) }}</td>
                                            <td>{{ __($candidate->ville->nom_ville) }}</td>
                                            <td>{{ __($candidate->etablissement->nom_etablissement) }}</td>
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
