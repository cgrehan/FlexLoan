@extends("layouts.app_main")

@section("content")
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Credit Scores</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm" data-toggle="modal" data-target="#addTypeModal">Add New</a>
                <!--end::Actions-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
        <div class="row">
       <div class="col-md-12">
           <!-- Modal-->
           <div class="modal fade" id="addTypeModal" tabindex="-1" role="dialog" aria-labelledby="addTypeModal" aria-hidden="true">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">New Credit Score</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <i aria-hidden="true" class="ki ki-close"></i>
                           </button>
                       </div>
                       <form method="post" action="{{route("credit-scores.store")}}">
                           @csrf
                       <div class="modal-body">
                           <div class="form-group">
                               <label>Type</label>
                               <select name="credit_score_type_id" class="form-control" required>
                                   @foreach($types as $type)
                                   <option value="{{$type->id}}">{{$type->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group">
                               <label>Amount Qualified</label>
                               <input type="number" class="form-control" name="amount_qualified" required>
                           </div>
                           <div class="form-group">
                               <label>Number of days to unlock the next credit score</label>
                               <input type="number" class="form-control" name="duration" min="1" required>
                           </div>
                           <div class="form-group">
                               <label>Number of Points</label>
                               <input type="number" class="form-control" name="points" min="1" required>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                       </div>
                       </form>
                   </div>
               </div>
           </div>
           <!--begin::Card-->
           <div class="card">
               <div class="card-body">
                   <!--begin: Datatable-->
                   <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>Type</th>
                           <th>Amount</th>
                           <th>Amount</th>
                           <th>Actions</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($scores as $score)
                       <tr>
                           <td>{{$score->id}}</td>
                           <td>{{$score->type->name}}</td>
                           <td>{{$score->amount_qualified}}</td>
                           <td>{{$score->points}}</td>
                           <td nowrap="nowrap" class="d-flex">
                               <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details" data-toggle="modal" data-target="#editTypeModal_{{$score->id}}">
	                            <span class="svg-icon svg-icon-md">
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                        <rect x="0" y="0" width="24" height="24"/>
	                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
	                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
	                                    </g>
	                                </svg>
	                            </span>
                               </a>
                               <!-- Modal-->
                               <div class="modal fade" id="editTypeModal_{{$score->id}}" tabindex="-1" role="dialog" aria-labelledby="editTypeModal" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLabel">Edit Interest</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <i aria-hidden="true" class="ki ki-close"></i>
                                               </button>
                                           </div>
                                           <form method="post" action="{{route("credit-scores.update",$score->id)}}">
                                               @csrf
                                               @method("PUT")
                                               <div class="modal-body">
                                                   <div class="form-group">
                                                       <label>Type</label>
                                                       <select name="credit_score_type_id" class="form-control" required>
                                                           @foreach($types as $type)
                                                               <option value="{{$type->id}}" @if($type->id == $score->credit_score_type_id) selected @endif>{{$type->name}}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>
                                                   <div class="form-group">
                                                       <label>Amount Qualified</label>
                                                       <input type="number" class="form-control" name="amount_qualified" required value="{{$score->amount_qualified}}">
                                                   </div>
                                                   <div class="form-group">
                                                       <label>Number of days to unlock the next credit score</label>
                                                       <input type="number" class="form-control" name="duration" min="1" required value="{{$score->duration}}">
                                                   </div>
                                                   <div class="form-group">
                                                       <label>Number of Points</label>
                                                       <input type="number" class="form-control" name="points" min="1" required value="{{$score->points}}">
                                                   </div>
                                               </div>
                                               <div class="modal-footer">
                                                   <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                   <button type="submit" class="btn btn-primary font-weight-bold">Update changes</button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                               <a href="#">
                                   <form action="{{ route('credit-scores.destroy',$score->id) }}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                           <span class="svg-icon svg-icon-md">
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                        <rect x="0" y="0" width="24" height="24"/>
	                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
	                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
	                                    </g>
	                                </svg>
	                            </span>
                                       </button>
                                   </form>
                               </a>

                           </td>
                       </tr>
                       @endforeach
                       </tbody>
                   </table>
                   <!--end: Datatable-->
               </div>
           </div>
           <!--end::Card-->
       </div>
        </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

@endsection
