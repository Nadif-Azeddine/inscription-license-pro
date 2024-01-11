@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('LISTE condidature') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('candidat') }}</th>
                                            <th>bac{{ __('bac') }}</th>
                                            <th>bacpd{{ __('bacpd') }}</th>
                                            <th>license{{ __('license') }}</th>
                                            <th>anneeun{{ __('anneeun') }}</th>
                                            <th>etat{{ __('etat') }}</th>
                                            <th>modd/supp{{ __('modd/supp') }}</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($candidates as $candidate)
                                        <tr>
                                            <td>{{ __($candidate->name) }}</td>
                                            <td>{{ __($candidate->bac) }}</td>
                                            <td>{{ __($candidate->bacpd) }}</td>
                                            <td>{{ __($candidate->license) }}</td>
                                            <td>{{ __($candidate->anneeun) }}</td>
                                            <td>{{ __($candidate->etat) }}</td>
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
