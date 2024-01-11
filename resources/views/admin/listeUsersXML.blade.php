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
                                                <i class="fas fa-edit" data-toggle="modal" data-target="#editModal{{ $User['id'] }}" style="cursor: pointer;"></i>
                                            
                                                <!-- Bootstrap Modal -->
                                                <div class="modal fade" id="editModal{{ $User['id']}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $User->id }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel{{ $User['id'] }}">Edit user</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Your edit form or input fields go here -->
                                                                <form method="POST" action="{{ route('update-XMLUsers', ['id' => $User['id']]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                    
                                                                    <div class="form-group">
                                                                        <label for="editFieldName">username:</label>
                                                                        <input type="text" name="editFieldUsername" value="{{$User['username']->__toString() }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldName">nom:</label>
                                                                        <input type="text" name="editFieldNom" value="{{ $User['nom']->__toString() }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldName">prenom:</label>
                                                                        <input type="text" name="editFieldPrenom" value="{{  $User['prenom']->__toString()}}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldName">email:</label>
                                                                        <input type="email" name="editFieldEmail" value="{{ $User->email }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldName">tel:</label>
                                                                        <input type="tel" name="editFieldtel" value="{{ $User->tel }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldName">date_naissance:</label>
                                                                        <input type="datetime" name="editFieldDate_naissance" value="{{ $User->date_naissance }}" class="form-control" required>
                                                                    </div>
                                                                   
                                                                    
                                    
                                                                    <button type="submit" class="btn btn-success btn-sm">Save Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
