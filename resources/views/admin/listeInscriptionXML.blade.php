@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> @lang('admin.ListeXMLinscription') </h2>
                            
                        
                            <i class="fas fa-plus-circle" data-toggle="modal" data-target="#editModal" style="font-size: 24px;color: green;"></i>
                                            
                            <!-- Bootstrap Modal -->
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">@lang('admin.Edit-inscription-xml')</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Your edit form or input fields go here -->
                                            <form method="POST" action="{{ route('create-XMLinscription') }}">
                                                @csrf
                                    
                                            
                                                <div class="form-group">
                                                    <label for="CreatinscriptionUser">@lang('admin.user'):</label>
                                                    <select id="CreatinscriptionUser" name="CreatinscriptionUser" class="form-control" required>
                                                        @foreach($users as $user)
                                                            <option value="{{ $user['id'] }}" >
                                                                {{ $user['nom']}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="CreatinscriptionOrder">@lang('admin.order'):</label>
                                                    <input type="number" name="CreatinscriptionOrder" value="1" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Creatinscriptionstatus">@lang('admin.status'):</label>
                                                    <select id="Creatinscriptionstatus" name="Creatinscriptionstatus" class="form-control" required>
                                                        <option value="Accepted" >
                                                            Accepted
                                                        </option>
                                                        <option value="Declined" >
                                                            Declined
                                                        </option>
                                                        <option value="In progress" >
                                                            In Progress
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                <label for="CreatinscriptionLicence">@lang('admin.Licence'):</label>
                                                <select id="CreatinscriptionLicence" name="CreatinscriptionLicence" class="form-control" required>
                                                    @foreach($licences as $licence)
                                                        <option value="{{ $licence->id }}" >
                                                            {{ $licence->nom_licence }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                                <button type="submit" class="btn btn-success btn-sm">@lang('admin.save-change')</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
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
                                            <th>@lang('admin.mod-sup')</th>
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
                                                                <h5 class="modal-title" id="editModalLabel{{ $inscription->id }}">@lang('admin.Edit-inscription-xml')</h5>
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
                                                                        <label for="editFieldUser">@lang('admin.user'):</label>
                                                                        <select id="editFieldUser" name="editFieldUser" class="form-control" required>
                                                                            @foreach($users as $user)
                                                                                <option value="{{ $user['id'] }}" {{ old('editFieldUser', $inscription->user ?? '') == $user['id'] ? 'selected' : '' }}>
                                                                                    {{ $user['nom']}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="editFieldOrder">@lang('admin.order'):</label>
                                                                        <input type="number" name="editFieldOrder" value="{{ $inscription->order }}" class="form-control" required>
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
                                                                    <label for="editFieldLicence">@lang('admin.Licence'):</label>
                                                                    <select id="editFieldLicence" name="editFieldLicence" class="form-control" required>
                                                                        @foreach($licences as $licence)
                                                                            <option value="{{ $licence->id }}" {{ old('editFieldLicence', $inscription->licence ?? '') == $licence->id ? 'selected' : '' }}>
                                                                                {{ $licence->nom_licence }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                
                                                                    <button type="submit" class="btn btn-success btn-sm">@lang('admin.save-change')</button>
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
