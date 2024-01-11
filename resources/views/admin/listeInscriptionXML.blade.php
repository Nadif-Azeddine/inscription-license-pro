@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('Liste XMLinscription') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('user') }}</th>
                                            <th>{{ __('licnece') }}</th>
                                            <th>{{ __('order') }}</th>
                                            <th>{{ __('status') }}</th>
                                            <th>{{ __('mod/sup') }}</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        @foreach($inscriptions as $inscription)
                                        <tr>
                                        
                                            <td>  
                                                @foreach($users as $user)
                                                    @if($user['id']->__toString() == $inscription->user->__toString())
                                                        {{ $user['nom']->__toString() }}
                                                        @break
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                              
                                                @foreach($licences as $licence)
                                                    @if($licence->id->__toString() == $inscription->licence->__toString())
                                                        {{ $licence->nom_licence->__toString() }}
                                                        @break
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ __($inscription->order->__toString()) }}</td>
                                            <td>{{ __($inscription['status']->__toString()) }}</td>
                                       
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
                                                                <form method="POST" action="{{ route('update-inscription', ['id' => $inscription->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                
                                                                    <div class="form-group">
                                                                        <label for="editFieldUser">Licence:</label>
                                                                        <select id="editFieldUser" name="editFieldUser" class="form-control" required>
                                                                            @foreach($users as $user)
                                                                                <option value="{{ $user['id'] }}" {{ old('editFieldUser', $inscription->user ?? '') == $user['id'] ? 'selected' : '' }}>
                                                                                    {{ $user['nom']}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldOrder">order:</label>
                                                                        <input type="number" name="editFieldOrder" value="{{ $inscription->order }}" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldStatus">Status:</label>
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
                                                                    <label for="editFieldLicence">Licence:</label>
                                                                    <select id="editFieldLicence" name="editFieldLicence" class="form-control" required>
                                                                        @foreach($licences as $licence)
                                                                            <option value="{{ $licence->id }}" {{ old('editFieldLicence', $inscription->licence ?? '') == $licence->id ? 'selected' : '' }}>
                                                                                {{ $licence->nom_licence }}
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
                                                <form id="deleteForm" action="{{ route('delete-deleteinscription', ['id' => $inscription->id]) }}" method="POST" style="display:inline;">
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
