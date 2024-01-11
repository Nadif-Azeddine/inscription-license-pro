@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('Liste XMLUsers') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Username') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('prenom') }}</th>
                                            <th>{{ __('email') }}</th>
                                            <th>{{ __('tel') }}</th>
                                            <th>{{ __('date_naissance') }}</th>
                                            <th>{{ __('modd/supp') }}</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($Users as $User)
                                        <tr>
                                            <td>{{ __($User['username']->__toString()) }}</td>
                                            <td>{{ __($User['nom']->__toString())}}</td>
                                            <td>{{ __($User['prenom']->__toString()) }}</td>
                                            <td>{{ __($User->email->__toString()) }}</td>
                                            <td>{{ __($User->tel->__toString())}}</td>
                                            <td>{{ __($User->date_naissance->__toString()) }}</td>
                                       
                                            <td>                                     
                                                <a href="#" class="icon-link pen-icon" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form id="deleteForm" action="{{ route('delete-XMLUsers', ['id' => $User['id']]) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="icon-link trash-icon" data-toggle="tooltip" title="Delete" onclick="confirmDelete()">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
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
