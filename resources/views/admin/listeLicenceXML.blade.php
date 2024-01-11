@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('Liste XMLLicence') }} </h2>
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
                                            
                                          
                                                                               
                                                <td>
                                                    @foreach($specialites as $specialite)
                                                        @if($specialite->id->__toString() == $licence->specialite->__toString())
                                                            {{ $specialite->libelle->__toString() }}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($departments as $departement)
                                                        @if($departement->id->__toString() == $licence->departement->__toString())
                                                            {{ $departement->departement_nom->__toString() }}
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </td>
                                                       
                                                <td>                                     

                                                
                                                        <i class="fas fa-edit" data-toggle="modal" data-target="#editModal{{ $licence->id }}" style="cursor: pointer;"></i>
                                            
                                                        <!-- Bootstrap Modal -->
                                                        <div class="modal fade" id="editModal{{ $licence->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $licence->licence_id }}" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModalLabel{{ $licence->is }}">Edit Licence</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Your edit form or input fields go here -->
                                                                        <form method="POST" action="{{ route('update-XMLlicence', ['licenceId' => $licence->id]) }}">
                                                                            @csrf
                                                                            @method('PUT')
                                            
                                                                            <div class="form-group">
                                                                                <label for="editFieldName">Name:</label>
                                                                                <input type="text" name="editFieldName" value="{{ $licence->nom_licence }}" class="form-control" required>
                                                                            </div>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="editFieldSpecialite">Specialité:</label>
                                                                                <select id="editFieldSpecialite" name="editFieldSpecialite" class="form-control" required>
                                                                                    @foreach($specialites as $specialite)
                                                                                        <option value="{{ $specialite->id }}" {{ old('editFieldSpecialite', $licence->specialite_id ?? '') == $specialite->id ? 'selected' : '' }}>
                                                                                            {{ $specialite->libelle }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                          
                                                                            <div class="form-group">
                                                                                <label for="editFieldDepartement">Département:</label>
                                                                                <select id="editFieldDepartement" name="editFieldDepartement" class="form-control" required>
                                                                                    @foreach($departments as $departement)
                                                                                        <option value="{{ $departement->id }}" {{ old('editFieldDepartement', $licence->departement_id ?? '') == $departement->id ? 'selected' : '' }}>
                                                                                            {{ $departement->departement_nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            
                                            
                                                                            <button type="submit" class="btn btn-success btn-sm">Save Changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form id="deleteForm" action="{{ route('delete-XMLlicence', ['licenceId' => $licence->id]) }}" method="POST" style="display:inline;">
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
