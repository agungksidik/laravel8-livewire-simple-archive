@extends('layouts.back')

@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Create New Document</h4>
                {{-- <p class="card-description">
                  Basic form layout
                </p> --}}
                <form class="forms-sample" action="/document/store" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="name">Document Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Document Name">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="file" class="file-upload-default @error('file') is-invalid @enderror">                    
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">                        
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a href="{{ route('document.index') }}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection

@section('custom_script')
    <script src="/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/js/file-upload.js"></script>
@endsection