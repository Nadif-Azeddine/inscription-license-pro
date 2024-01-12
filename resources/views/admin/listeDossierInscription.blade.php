@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> @lang('admin.Listeinscription') </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>@lang('admin.user')</th>
                                            <th>@lang('admin.Licence')</th>
                                            <th>@lang('admin.order')</th>
                                            <th>@lang('admin.status')</th>
                                            <th>@lang('admin.bac')</th>
                                            <th>@lang('admin.CIN')</th>
                                            <th>@lang('admin.diplome')</th>
                                            <th>@lang('admin.relv1')</th>
                                            <th>@lang('admin.relv2')</th>
                                            <th>@lang('admin.mod-sup')</th>
                                           
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($Inscriptions as $inscription)
                                        <tr>
                                        
                                            <td>  
                                              {{__($inscription->candidature->candidat->user->nom)}}
                                            </td>
                                            <td>  
                                                {{__($inscription->license->nom_licence)}}
                                              </td>
                                            <td>
                                              {{__($inscription->order)}}   </td>
                                            <td>   {{__($inscription->etat)}} </td>  
                                            
                                            <td>
                    
                                                @if($inscription->candidature->dossier->dossierpy->bac)
                                               <img src="{{ asset('images/verifier.jpg') }}" class="logo" width="30" height="30">
                                            @else
                                               <img src="{{ asset('images/bouton-x.jpg') }}" class="logo" width="30" height="30">
                                            @endif
                                
                                            </td>     
                                            <td>
                    
                                                @if($inscription->candidature->dossier->dossierpy->CIN)
                                               <img src="{{ asset('images/verifier.jpg') }}" class="logo" width="30" height="30">
                                            @else
                                               <img src="{{ asset('images/bouton-x.jpg') }}" class="logo" width="30" height="30">
                                            @endif
                                
                                            </td>  
                                            <td>
                    
                                                @if($inscription->candidature->dossier->dossierpy->diplome)
                                               <img src="{{ asset('images/verifier.jpg') }}" class="logo" width="30" height="30">
                                            @else
                                               <img src="{{ asset('images/bouton-x.jpg') }}" class="logo" width="30" height="30">
                                            @endif
                                
                                            </td>  
                                            <td>
                    
                                                @if($inscription->candidature->dossier->dossierpy->relevé_ann1)
                                               <img src="{{ asset('images/verifier.jpg') }}" class="logo" width="30" height="30">
                                            @else
                                               <img src="{{ asset('images/bouton-x.jpg') }}" class="logo" width="30" height="30">
                                            @endif
                                
                                            </td>  
                                            <td>
                    
                                                @if($inscription->candidature->dossier->dossierpy->relevé_ann2)
                                               <img src="{{ asset('images/verifier.jpg') }}" class="logo" width="30" height="30">
                                            @else
                                               <img src="{{ asset('images/bouton-x.jpg') }}" class="logo" width="30" height="30">
                                            @endif
                                
                                            </td>  
                                            
                                          
                                
                                                                    
                                             <td>

                                                <i class="fas fa-edit" data-toggle="modal" data-target="#editModal{{ $inscription->id }}" style="cursor: pointer;"></i>
                                            
                                                        <!-- Bootstrap Modal -->
                                                        <div class="modal fade" id="editModal{{ $inscription->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $inscription->id }}" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModalLabel{{ $inscription->id }}">Edit inscription</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Your edit form or input fields go here -->
                                                                        <form method="POST" action="{{ route('updateInscriptionDossier', ['id' => $inscription->id]) }}">
                                                                            @csrf
                                                                            @method('PUT')
                                            
                                                                            <div class="form-group">
                                                                                <label for="editFieldorder">@lang('admin.order'):</label>
                                                                                <input type="text" name="editFieldorder" value="{{ $inscription->order }}" class="form-control" required>
                                                                            </div>
                                                                    
                                                                            <div class="form-group">
                                                                                <label for="editFieldUser">@lang('admin.user'):</label>
                                                                                <select id="editFieldUser" name="editFieldUser" class="form-control" required>
                                                                                    @foreach($Users as $User)
                                                                                        <option value="{{ $User->id }}" {{ old('editFieldUser', $inscription->candidature->candidat->user->nom ?? '') == $User->id ? 'selected' : '' }}>
                                                                                            {{ $User->nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                           
                                                                            <div class="form-group">
                                                                                <label for="editFieldLicence">@lang('admin.Licence'):</label>
                                                                                <select id="editFieldLicence" name="editFieldLicence" class="form-control" required>
                                                                                    @foreach($licences as $licence)
                                                                                        <option value="{{ $licence->id }}" {{ old('editFieldLicence',$inscription->license ?? '') == $licence->id ? 'selected' : '' }}>
                                                                                            {{ $licence->nom_licence }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="editFieldStatus">@lang('admin.status'):</label>
                                                                                <select id="editFieldStatus" name="editFieldStatus" class="form-control" required>
                                                                                    <option value="Accepted" {{ old('editFieldStatus', $inscription->status ?? '') == 'accepted' ? 'selected' : '' }}>
                                                                                        Accepted
                                                                                    </option>
                                                                                    <option value="Declined" {{ old('editFieldStatus', $inscription->status ?? '') == 'declined' ? 'selected' : '' }}>
                                                                                        Declined
                                                                                    </option>
                                                                                    <option value="In progress" {{ old('editFieldStatus', $inscription->status ?? '') == 'in progress' ? 'selected' : '' }}>
                                                                                        In Progress
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            
                                                                            <div class="form-group">
                                                                                <label for="editFieldBAC">@lang('admin.bac'):</label>
                                                                                <select name="editFieldBAC" class="form-control" required>
                                                                                    <option value="0" {{ $inscription->candidature->dossier->dossierpy->bac == 0 ? 'selected' : '' }}>@lang('Non déposé')</option>
                                                                                    <option value="1" {{ $inscription->candidature->dossier->dossierpy->bac == 1 ? 'selected' : '' }}>@lang('Déposé')</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="editFieldcin">@lang('admin.CIN'):</label>
                                                                                <select name="editFieldcin" class="form-control" required>
                                                                                    <option value="0" {{ $inscription->candidature->dossier->dossierpy->CIN == 0 ? 'selected' : '' }}>@lang('Non déposé')</option>
                                                                                    <option value="1" {{ $inscription->candidature->dossier->dossierpy->CIN == 1 ? 'selected' : '' }}>@lang('Déposé')</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="editFieldiplome">@lang('admin.diplome'):</label>
                                                                                <select name="editFieldiplome" class="form-control" required>
                                                                                    <option value="0" {{ $inscription->candidature->dossier->dossierpy->diplome == 0 ? 'selected' : '' }}>@lang('Non déposé')</option>
                                                                                    <option value="1" {{ $inscription->candidature->dossier->dossierpy->diplome == 1 ? 'selected' : '' }}>@lang('Déposé')</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="editFieldreleve1">@lang('admin.relv1'):</label>
                                                                                <select name="editFieldreleve1" class="form-control" required>
                                                                                    <option value="0" {{ $inscription->candidature->dossier->dossierpy->relevé_ann1 == 0 ? 'selected' : '' }}>@lang('Non déposé')</option>
                                                                                    <option value="1" {{ $inscription->candidature->dossier->dossierpy->relevé_ann1 == 1 ? 'selected' : '' }}>@lang('Déposé')</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="editFieldreleve2">@lang('admin.relv2'):</label>
                                                                                <select name="editFieldreleve2" class="form-control" required>
                                                                                    <option value="0" {{ $inscription->candidature->dossier->dossierpy->relevé_ann2 == 0 ? 'selected' : '' }}>@lang('Non déposé')</option>
                                                                                    <option value="1" {{ $inscription->candidature->dossier->dossierpy->relevé_ann2 == 1 ? 'selected' : '' }}>@lang('Déposé')</option>
                                                                                </select>
                                                                            </div>
                                                                    
                                            
                                                                            <button type="submit" class="btn btn-success btn-sm">Save Changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <form id="deleteForm" action="{{ route('delete-inscription', ['id' => $inscription->id]) }}" method="POST" style="display:inline;">
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
