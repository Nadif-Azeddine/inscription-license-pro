@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> @lang('admin.ListeCondidates') </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>@lang('admin.nom')</th>
                                            <th>@lang('admin.ville')</th>
                                            <th>@lang('admin.etablissement')</th>
                                          
                                            <th>@lang('admin.address')</th>
                                            <th>@lang('admin.CIN')</th>
                                            <th>@lang('admin.CNE')</th>
                                           
                                            <th>@lang('admin.Numéro-Apogée')</th>
                                            <th>@lang('admin.mod-sup')</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($candidates as $candidate)
                                        <tr>
                                            <td>{{ __($candidate->user->nom) }}</td>
                                            <td>{{ __($candidate->ville->nom_ville) }}</td>
                                            <td>{{ __($candidate->etablissement->nom_etablissement) }}</td>
                                            <td>{{ __($candidate->adresse) }}</td>
                                            <td>{{ __($candidate->CIN) }}</td>
                                            <td>{{ __($candidate->CNE) }}</td>
                                            <td>{{ __($candidate->num_apoge) }}</td>
                                            
                
                                            <td>                                     
                                                <i class="fas fa-edit" data-toggle="modal" data-target="#editModal{{ $candidate->id }}" style="cursor: pointer;"></i>
                                            
                                                <!-- Bootstrap Modal -->
                                                <div class="modal fade" id="editModal{{ $candidate->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $candidate->id }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel{{ $candidate->id }}">Edit candidate</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Your edit form or input fields go here -->
                                                                <form method="POST" action="{{ route('updatecondidat', ['id' => $candidate->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                    
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="editFieldUser">@lang('admin.user'):</label>
                                                                        <select id="editFieldUser" name="editFieldUser" class="form-control" required>
                                                                            @foreach($Users as $User)
                                                                                <option value="{{ $User->id }}" {{ old('editFieldUser', $candidate->user ?? '') == $User->id ? 'selected' : '' }}>
                                                                                    {{ $User->nom }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                            
                                                                    <div class="form-group">
                                                                        <label for="editFieldVille">@lang('admin.ville'):</label>
                                                                        <select id="editFieldVille" name="editFieldVille" class="form-control" required>
                                                                            @foreach($Villes as $ville)
                                                                                <option value="{{ $ville->id }}" {{ old('editFieldVille', $candidate->ville ?? '') == $ville->id ? 'selected' : '' }}>
                                                                                    {{ $ville->nom_ville }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                   
                                                                    <div class="form-group">
                                                                        <label for="editFieldEtablissement">@lang('admin.etablissement'):</label>
                                                                        <select id="editFieldEtablissement" name="editFieldEtablissement" class="form-control" required>
                                                                            @foreach($Etablissements as $Etablissement)
                                                                                <option value="{{ $Etablissement->id }}" {{ old('editFieldEtablissement',$candidate->etablissement ?? '') == $Etablissement->id ? 'selected' : '' }}>
                                                                                    {{ $Etablissement->nom_etablissement }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldCIN">@lang('admin.CIN'):</label>
                                                                        <input type="text" name="editFieldCIN" value="{{ $candidate->CIN }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldCNE">@lang('admin.CNE'):</label>
                                                                        <input type="text" name="editFieldCNE" value="{{ $candidate->CNE }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldNum_apoge">@lang('admin.Numéro-Apogée'):</label>
                                                                        <input type="number" name="editFieldNum_apoge" value="{{ $candidate->num_apoge }}" class="form-control" required>
                                                                    </div>
                                                            
                                    
                                                                    <button type="submit" class="btn btn-success btn-sm">@lang('admin.save-change')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <form id="deleteForm" action="{{ route('delete-condidat', ['id' => $candidate->id]) }}" method="POST" style="display:inline;">
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
