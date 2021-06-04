@extends('layouts.back', ['title' => 'Document'])

@section('content')   
<div class="card">
    <div class="card-body">     
        <div class="row justify-content-between mx-2 my-4">
            <h4 class="card-title">List Document</h4>       
            <a href="{{ route('document.add') }}" class="btn btn-info">Create Document</a>    
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
                    <th>Create by</th>
                    <th class="text-center">Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($documents as $index => $document)
                    <tr>
                        <td width="30">{{ $index + 1 }}</td>
                        <td>{{ $document->name }}</td>
                        <td>{{ $document->file }}</td>
                        <td>{{ $document->user->name }}</td>
                        <td class="text-center">{{ $document->created_at->format('d F y') }}</td>
                        <td class="text-center" width="200">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Download document" href="{{ route('document.download', [$document->path, $document->file]) }}" class="btn btn-outline-info">
                                  <i class="mdi mdi-download"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="View history document" href="" class="btn btn-outline-info">
                                  <i class="mdi mdi-clock"></i>
                                </a>
                              </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
    <script src="/js/tooltips.js"></script>
    <script src="/js/popover.js"></script>
@endsection