@extends('layouts.appLawyer')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bills</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Bills</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->
            <div class="card" style="padding:10px">
              <div class="row">
                <div class="col-md-3">
                  <input id="new-activity" name="activity" type="text" class="form-control" placeholder="Add Activity">
                </div>
                <div class="col-md-3">
                  <select class="form-control">
                   <option value="">Select Case</option> 
                  </select>
                </div>
                <div class="col-md-1"></div>
              
                <div class="col-md-1">
                <label for="isBillable">Billable
                <input id="isBillable" name="isBillable" checked type="radio" class="form-control"> 
                </label>
                </div>
                <div class="col-md-2">
                <label for="isBillable">Not billable
                <input id="isBillable"  name="isBillable" type="radio" class="form-control"> 
                </label>
                </div>

                <div class="col-md-2">
                  <div class="input-group-append">
                    <button id="add-new-event" type="button" class="btn btn-block btn-primary">Start Timer</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
             <!-- s -->
               <!-- <div class="card-footer clearfix">
                <a href="add_bill.html" class="btn btn-sm btn-info float-left">Add Bill</a>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Client Name</th>
                    <th>Case Title</th>
                    <th>Invoice Number</th>
                    <!--<th>Opened Date</th>
                    <th>Current Balance</th>-->
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($billings as $bill)
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                 
                  </tr>
                  @endforeach
               
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
