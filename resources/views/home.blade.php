@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
                <div class="mr-md-3 mr-xl-5">
                    <h2>Hi, {{ $user ?? 'User' }}</h2>
                    {{-- <p class="mb-md-0">Your analytics dashboard template.</p> --}}
                </div>
                <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    {{-- <p class="text-primary mb-0 hover-cursor">Analytics</p> --}}
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
                <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                </button>
                <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
            </div>
        </div>
      </div>
    </div>    
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Todays Income</h4>
              <div class="d-flex justify-content-between">
                <p class="text-muted">Avg. Session</p>
                <p class="text-muted">max: 40</p>
              </div>
              <div class="progress progress-md">
                <div class="progress-bar bg-info w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Total Revenue</h4>                      
              <div class="d-flex justify-content-between">
                <p class="text-muted">Avg. Session</p>
                <p class="text-muted">max: 120</p>
              </div>
              <div class="progress progress-md">
                <div class="progress-bar bg-success w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Pending Product</h4>
              <div class="d-flex justify-content-between">
                <p class="text-muted">Avg. Session</p>
                <p class="text-muted">max: 54</p>
              </div>
              <div class="progress progress-md">
                <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sales</h4>
              <div class="d-flex justify-content-between">
                <p class="text-muted">Avg. Session</p>
                <p class="text-muted">max: 143</p>
              </div>
              <div class="progress progress-md">
                <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Download Log</h4>          
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th width="200px">User</th>
                  <th>Document</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Agung Sidik M</td>
                  <td>Format Cuti</td>
                  <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                  <td style="width=10%;"><label class="badge badge-success">Download document</label></td>
                </tr>                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Activity Log</h4>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Document</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jacob</td>
                  <td>Photoshop</td>
                  <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                  <td><label class="badge badge-danger">Create</label></td>
                </tr>                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection