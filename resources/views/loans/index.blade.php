@extends("layouts.app_main")

@section("content")
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Loans</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

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

           <!--begin::Card-->
           <div class="card">
               <div class="card-body">
                   <!--begin: Datatable-->
                   <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>Amount</th>
                           <th>Due Date</th>
                           <th>Interest Rate</th>
                           <th>Repayment Amount</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($loans as $loan)
                       <tr>
                           <td>{{$loan->id}}</td>
                           <td>{{$loan->loan_amount}}</td>
                           <td>{{$loan->due_date}}</td>
                           <td>{{$loan->interest_rate}}</td>
                           <td>{{$loan->repayment_amount}}</td>
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
