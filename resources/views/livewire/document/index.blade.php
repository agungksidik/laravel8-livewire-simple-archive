<div>
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
                <th>Document Name</th>
                <th>File Name</th>
                <th>Updated By</th>
                <th class="text-center">Last Update</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($documents as $index => $document)
                <tr>                    
                    <td>{{ $document->name }}</td>
                    <td>{{ $document->file }}</td>                        
                    <td>{{ $document->user->name }}</td>
                    <td class="text-center">{{ $document->updated_at->isoFormat('D MMMM Y HH:mm') }}</td>
                    <td class="text-center" width="200">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            @livewire('document.download', ['document' => $document], key($document->id))
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="View history document" href="{{ route('history.index', $document->slug) }}" class="btn btn-outline-info">
                                <i class="mdi mdi-clock"></i>
                            </a>
                        </div>                            
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <div>
                {{ $documents->links() }}
            </div>
            <div class="fw-bold">
                Show {{ $documents->firstItem() }} to {{ $documents->lastItem() }} From total {{ $documents->total() }}
            </div>        
        </div>
    </div>    
</div>
