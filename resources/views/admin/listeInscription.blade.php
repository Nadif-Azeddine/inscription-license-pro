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
                                        @foreach($Inscriptions as $inscription)
                                        <tr>
                                        
                                            <td>  
                                              {{__($inscription->candidature->candidat->user->nom)}}
                                            </td>
                                            <td>  
                                                {{__(dd($inscription->licnece))}}
                                              </td>
                                            <td>
                                              {{__($inscription->order)}}
                                              
                                            </td>
                                    
                                       
                                            <td>                                     
                                             
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
