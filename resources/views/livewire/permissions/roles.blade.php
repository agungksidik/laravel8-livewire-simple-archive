<div>
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title">Create New Role</h4>
            <form action="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body"> 
            <h4 class="card-title">Role Data</h4>           
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
                        <th>Name</th>
                        <th>Guard Name</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $index => $role)
                        <tr>
                            <td width="30">{{ $index + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->guard_name }}</td>
                            <td>{{ $role->created_at->format('d F y') }}</td>
                            <td class="text-center" width="200">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" wire:click.prevent="addRole" class="btn btn-info">Update</button>
                                    <button type="button" class="btn btn-danger">2</button>                            
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
</div>
