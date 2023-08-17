<div class="deletebubble">

    <div wire:ignore.self class="modal fade" id="AddMeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">deleting category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
            </div>

            <form wire:submit.prevent="destroyCategory">

                <div class="modal-body">
                <h6>              are you sure u want to delete this data ? 
                </h6>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit " class="btn btn-primary">yes, delete</button>
                </div>

        </form>
          </div>
        </div>
      </div> 



<div class="row">
    <div class="col-md-12">
        {{-- tot hier, hetzelfde als bij dashboard.blade.php --}}

        @if ( session('message'))
          <div class="alert alert-success"><h6>{{ session('message')}}</h6></div> 
        @endif
    <div class="card">
        <div class="card-header">
            <h3>category
                <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end"> Add Category

                </a>
            </h3>
        </div>
        {{-- hier gaan we de data van elke category gaan fetchen mbv Livewire --}}
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th><th>Name</th><th>Status</th><th width='50'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->status == '1' ? 'hidden' : 'visible'}}</td>
                        <td>
                         <a href= "{{ url('admin/category/'.$item->id.'/edit' ) }}" class="btn btn-success">Edit</a>
                         <a href="#" wire:click="deleteCategory({{$item->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>   
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div>
                {{$categories->links()}}
            </div>

            
        </div>
    </div>


    </div>
</div>
</div>
@push('script')
    <script>
        window.addEventListener('close-mondal',event =>{
            $('#deleteModal').modal("hide");
        })
    </script>
 
@endpush