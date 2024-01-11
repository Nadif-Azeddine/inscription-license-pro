@extends('admin.sidebars')

@section('table')

        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> {{ __('Liste Users') }} </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('prenom') }}</th>
                                            <th>{{ __('email') }}</th>
                                            <th>{{ __('tel') }}</th>
                                            <th>{{ __('genre') }}</th>
                                            <th>{{ __('date_naissance') }}</th>
                                            <th>    {{ __('modd/supp') }}</th>
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
        <style>
            .confirmation-dialog {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
                z-index: 1000;
            }
        
            .confirmation-dialog h2 {
                margin-bottom: 10px;
            }
        
            .confirmation-dialog button {
                padding: 10px 15px;
                margin-right: 10px;
                cursor: pointer;
            }
        
            .confirmation-dialog button.cancel {
                background-color: #d9534f;
                color: #fff;
            }
        
            .confirmation-dialog button.confirm {
                background-color: #5bc0de;
                color: #fff;
            }
        </style>
        
        <div class="confirmation-dialog" id="confirmationDialog">
            <h2>Are you sure you want to delete this licence?</h2>
            <button class="cancel" onclick="cancelDelete()">Cancel</button>
            <button class="confirm" onclick="submitDelete()">Delete</button>
        </div>
        
        <script>
            function confirmDelete() {
                document.getElementById('confirmationDialog').style.display = 'block';
            }
        
            function cancelDelete() {
                document.getElementById('confirmationDialog').style.display = 'none';
            }
        
            function submitDelete() {
                document.getElementById('deleteForm').submit();
            }
        </script>
     

@section('scripts')
@endsection

@endsection
