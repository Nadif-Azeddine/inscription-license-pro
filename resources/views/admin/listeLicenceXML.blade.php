@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> @lang('admin.ListeXMLLicence') </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                           
                                           
                                            <th>@lang('admin.nom')</th>
                                          
                                            <th>@lang('admin.specialite')</th>
                                            <th>@lang('admin.departement')</th>
                                            
                                            <th>@lang('admin.mod-sup')</th>
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
                                                                                <label for="editFieldName">@lang('admin.nom'):</label>
                                                                                <input type="text" name="editFieldName" value="{{ $licence->nom_licence }}" class="form-control" required>
                                                                            </div>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="editFieldSpecialite">@lang('admin.specialite'):</label>
                                                                                <select id="editFieldSpecialite" name="editFieldSpecialite" class="form-control" required>
                                                                                    @foreach($specialites as $specialite)
                                                                                        <option value="{{ $specialite->id }}" {{ old('editFieldSpecialite', $licence->specialite_id ?? '') == $specialite->id ? 'selected' : '' }}>
                                                                                            {{ $specialite->libelle }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                          
                                                                            <div class="form-group">
                                                                                <label for="editFieldDepartement">@lang('admin.departement'):</label>
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
