@extends('admin.sidebars')

@section('table')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="header">
                        <h2> @lang('admin.permissions') </h2>
                    </div>

                    {{-- permissions --}}

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>nom</th>
                                        <th>description</th>
                                        <th>edit/supp</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>

                                            <td>
                                                {{ $permission->nom }}
                                            </td>
                                            <td>
                                                {{ $permission->description }}
                                            </td>
                                            <td>

                                                <i class="fas fa-edit" data-toggle="modal"
                                                    data-target="#editModal{{ $permission->id . 'perm' }}"
                                                    style="cursor: pointer;"></i>

                                                <!-- Bootstrap Modal -->
                                                <div class="modal fade" id="editModal{{ $permission->id . 'perm' }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="editModalLabel{{ $permission->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="editModalLabel{{ $permission->id . 'perm' }}">
                                                                    @lang('admin.Edit-role')
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Your edit form or input fields go here -->
                                                                <form method="POST"
                                                                    action="{{ route('updatepermission', ['id' => $permission->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <input type="hidden" name="id_permission"
                                                                        value="{{ $permission->id }}">
                                                                    <div class="form-group">
                                                                        <label for="editFieldorder">nom</label>
                                                                        <input type="text" name="nom_permission"
                                                                            value="{{ $permission->nom }}"
                                                                            class="form-control" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="editFieldorder">description</label>
                                                                        <input type="text" name="desc_permission"
                                                                            value="{{ $permission->description }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-sm">@lang('admin.save-change')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form id="deleteForm"
                                                    action="{{ route('deletepermission', ['id' => $permission->id]) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id_permission"
                                                        value="{{ $permission->id }}">
                                                    <button type="button" class="icon-link trash-icon"
                                                        data-toggle="tooltip" title="Delete" onclick="confirmDelete()">
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

                    {{-- roles  --}}
                    <div class="col-lg-12 my-3">
                        <div class="card">
                            <div class="header">
                                <h2> @lang('admin.roles') </h2>
                            </div>

                            <div class="body">
                                <div class="table-responsive">
                                    <table
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>nom</th>
                                                <th>description</th>
                                                <th>permissions</th>
                                                <th>edit/supp</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>
                                                        {{ $role->nom }}
                                                    </td>
                                                    <td>
                                                        {{ $role->description }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2 flex-wrap">
                                                            @foreach ($role->permissions as $permission)
                                                                <span
                                                                    class="text-white bg-info p-1 px-2 rounded-pill ">{{ $permission->nom }}</span>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <i class="fas fa-edit" data-toggle="modal"
                                                            data-target="#editModal{{ $role->id }}"
                                                            style="cursor: pointer;"></i>

                                                        <!-- Bootstrap Modal -->
                                                        <div class="modal fade" id="editModal{{ $role->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="editModalLabel{{ $role->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editModalLabel{{ $role->id }}">
                                                                            @lang('admin.Edit-role')
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Your edit form or input fields go here -->
                                                                        <form method="POST"
                                                                            action="{{ route('updaterole', ['id' => $role->id]) }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <input type="hidden" name="id_role"
                                                                                value="{{ $role->id }}">
                                                                            <div class="form-group">
                                                                                <label for="editFieldorder">nom</label>
                                                                                <input type="text" name="nom_role"
                                                                                    value="{{ $role->nom }}"
                                                                                    class="form-control" required>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="editFieldorder">description</label>
                                                                                <input type="text" name="desc_role"
                                                                                    value="{{ $role->description }}"
                                                                                    class="form-control" required>
                                                                            </div>

                                                                            <label for="editFieldUser">permissions:</label>
                                                                            <div
                                                                                class="form-group d-flex flex-wrap col-12">
                                                                                @foreach ($permissions as $permission)
                                                                                    <div class="m-2">
                                                                                        <label for=""
                                                                                            class="mx-2">{{ $permission->nom }}</label>
                                                                                        <input type="checkbox"
                                                                                            name="roles_per[]"
                                                                                            value="{{ $permission->id }}"
                                                                                            {{ $role->permissions->contains('nom', $permission->nom) ? 'checked' : '' }}>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>


                                                                            <button type="submit"
                                                                                class="btn btn-success btn-sm">@lang('admin.save-change')</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form id="deleteForm"
                                                            action="{{ route('deleterole', ['id' => $role->id]) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="id_role"
                                                                value="{{ $role->id }}">
                                                            <button type="button" class="icon-link trash-icon"
                                                                data-toggle="tooltip" title="Delete"
                                                                onclick="confirmDelete()">
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
        </div>

    </div>


@section('scripts')
@endsection
@endsection
