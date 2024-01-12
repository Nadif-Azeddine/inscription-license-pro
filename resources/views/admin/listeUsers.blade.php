@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> @lang('admin.ListeUsers') </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th> @lang('admin.nom')</th>
                                            <th>@lang('admin.prenom')</th>
                                            <th>@lang('admin.email')</th>
                                            <th>@lang('admin.tel')</th>
                                            <th>@lang('admin.genre')</th>
                                            <th>@lang('admin.date_naissance')</th>
                                            <th>@lang('admin.mod-sup')</th>
                                         
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
                                                <form id="deleteForm" action="{{ route('supprimerUsers', ['id' => $User->id]) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="icon-link trash-icon" data-toggle="tooltip" title="Delete" onclick="confirmDelete()">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
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
