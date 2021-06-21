@extends('layouts.app')

@section('content')  
  <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
                <div class="mr-md-3 mr-xl-5">
                    <h2>Hi, {{ Auth::user()->name ?? 'User' }}</h2>
                    {{-- <p class="mb-md-0">Your analytics dashboard template.</p> --}}
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
  {{-- <div class="row">
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
  </div> --}}
  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Download Log</h4>
          <ul class="bullet-line-list">
            @foreach ($downloads as $download)
              @livewire('dashboard.download', ['download' => $download], key($download->id))
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Activity Log</h4>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Document Name</th>                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($activities as $activity)
                  <tr>
                    <td>{{ $activity->user->name }}</td>
                    <td>{{ $activity->document->name }}</td> 
                    <td>  
                      @if ($activity->action == 'create')
                        <label class="badge badge-success">{{ $activity->action }}</label>
                      @elseif ($activity->action == 'update')
                        <label class="badge badge-warning">{{ $activity->action }}</label>
                      @elseif ($activity->action == 'delete')
                        <label class="badge badge-danger">{{ $activity->action }}</label>
                      @elseif ($activity->action == 'download')
                        <label class="badge badge-info">{{ $activity->action }}</label>
                      @endif                      
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
  <div class="row">
    
  </div>
@endsection