@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('Liste Users') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('prenom') }}</th>
                                            <th>{{ __('email') }}</th>
                                            <th>{{ __('tel') }}</th>
                                            <th>{{ __('genre') }}</th>
                                            <th>{{ __('date_naissance') }}</th>
                                            <th>    {{ __('modd/supp') }}</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($Users as $User)
                                        <tr>
                                            <td>{{ __($User->nom) }}</td>
                                            <td>{{ __($User->prenom)}}</td>
                                            <td>{{ __($User->email) }}</td>
                                            <td>{{ __($User->tel) }}</td>
                                            <td>{{ __($User->genre) }}</td>
                                            <td>{{ __($User->date_naissance) }}</td>
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
