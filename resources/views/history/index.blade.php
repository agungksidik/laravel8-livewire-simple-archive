@extends('layouts.back', ['title' => 'History Document'])

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">                    
                    <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <a href="{{ route('document.index') }}">                            
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Document&nbsp;/&nbsp;</p>
                        </a>
                        <a href="#">
                            <p class="text-primary mb-0 hover-cursor">History Document</p>
                        </a>                        
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <a href="{{ route('document.index') }}" class="btn btn-social-icon-text btn-facebook">
                        <i class="mdi mdi-keyboard-backspace"></i>
                        Back
                    </a>
                </div>
            </div>
          </div>
       
    </div>
    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
            <i class="mdi mdi-clipboard-check"></i>
            {!! \Session::get('success') !!}
        </div>       
    @endif
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title">Detail Document</h4>
                    <div>
                        <img src="/images/document/document.png" class="img-lg rounded-circle mb-2" alt="profile image">
                        <h4>{{ $document->name }}</h4>
                        <p class="text-muted mb-0">{{ $document->created_at->diffForHumans() }}</p>
                    </div>                    
                    <p class="mt-2 card-text">
                        di buat oleh :
                    </p>
                    <p class="mt-2 card-text">
                        {{ $document->user->name }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Update Document</h4>
                {{-- <p class="card-description">
                  Basic form layout
                </p> --}}
                <form class="forms-sample" action="{{ route('history.store', $document->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="name">Document Name</label>
                    <input disabled type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $document->name ?? old('name') }}" placeholder="Document Name">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Update document</label>
                    <input type="file" name="file" class="file-upload-default @error('file') is-invalid @enderror">                    
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Update document">                        
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
              </div>
            </div>
          </div>
    </div>

<div class="card">
    <div class="card-body">     
        <div class="row justify-content-between mx-2 my-4">
            <h4 class="card-title">History Document</h4>
        </div>
            <div class="row justify-content-between mx-2">
                <div class="col-md-6">
                    <div class="form-inline text-left">
                        <span>Show perpage : &nbsp; </span> 
                        <select wire:model="perPage" class="form-control">
                            <option value="9">9</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                        </select>         
                    </div>            
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Search: </label>
                        <div class="col-sm-9">
                            <input type="text" wire:model="query" class="form-control" placeholder="search ...">
                        </div>
                    </div>                
                </div>
            </div> 
            <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Document Name</th>
                    <th>File Name</th>
                    <th>Updated By</th>
                    <th class="text-center">Updated At</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @if (count($historys) < 1)
                    <tr class="text-center">
                        <td colspan="5">                                
                            <h4>Data not found</h4>                           
                        </td>                         
                    </tr>              
                @else
                    @foreach($historys as $index => $history)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $history->document->name }}</td>
                            <td>{{ $history->file }}</td>
                            <td>{{ $history->user->name }}</td>
                            <td class="text-center">{{ $history->created_at->isoFormat('D MMMM Y HH:mm') }}</td>
                            @if (count($historys) > 1)
                                <td class="text-center">
                                    <form action="{{ route('history.delete', $history->id) }}" method="POST">        
                                        @csrf
                                        @method('DELETE')      
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete document" type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="mdi mdi-delete-forever"></i>
                                            </button>
                                        </div>
                                    </form>
                                    
                                </td> 
                            @endif
                        </tr>
                    @endforeach  
                @endif   
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
    <script src="/js/tooltips.js"></script>
    <script src="/js/popover.js"></script>
    <script src="/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/js/file-upload.js"></script>
@endsection