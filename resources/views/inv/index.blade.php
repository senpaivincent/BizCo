@extends('layouts.master')

@section('contents')

<div class="row">
    <div class="col">
        <h2>Products</h2>
    </div>
    <div class="col d-flex justify-content-end">
        <a class="btn btn-success" data-toggle="modal" data-target="#prod-id">Add Product</a>
    </div>
</div>

<!-- $message will be sent bys the Controller -->
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<!-- Table Contents -->
<table class="table table-bordered white shadow">
    <tr>
        <th width="60px">No</th>
        <th>Name</th>
        <th>Variant</th>
        <th>Description</th>
        <th width="60px">Qty</th>
        <th class="text-center" width="275px">Action</th>
    </tr>

    @foreach ($inv as $inventory)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $inventory->product }}</td>
        <td>{{ $inventory->variant }}</td>
        <td>{{ $inventory->description }}</td>
        <td>{{ $inventory->quantity }}</td>
        <td>
            <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a id="updateProduct" class="btn btn-primary" href="{{route('inventory.edit', $inventory->id)}}">Update</a>

                <button id="delete-product" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#promptDelete">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<!-- Table Contents -->
{!! $inv->links() !!}

<div class="container" style="min-height: 45vh;">
    @if($inv->count() == 0)
       <p class="text text-center display-3 text-default text-uppercase wow animated slideInUp" data-wow-delay="1s">No Records</p>
    @endif
</div>

<!-- Modal Prompt for Delete -->
{{-- <div class="modal fade top" id="promptDelete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <div class="modal-content text-center">
            <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalPreviewLabel">Delete Product</h5>
                    <i class="fas fa-exclamation-triangle"></i>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h1 id="test"></h1>
                    <i class="fas fa-times fa-4x animated rotateIn"></i>
                    <p>Are you sure?</p>
                </div>

                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-outline-danger">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<!-- Modal Prompt for Delete -->

<!-- Modal for Add Product -->  
    <!-- Modal -->
    <div class="modal fade" id="prod-id" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <p class="heading">Add Product</p>

                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span> <!-- close button -->
                        </button> --}}
                    </div>
                <form action="{{ route('inventory.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-cart-plus center fa-4x animated rotateIn"></i>
                        </div>
                        <div class="md-form mb-5">
                            <input type="text" name="product" id="product" pattern="[a-zA-Z0-9-]+" class="form-control validate" required>
                            <label data-error="Invalid" data-success="" for="product">Name of Product</label>
                        </div>
                        <div class="md-form mb-4">
                            <input type="text" name="variant" id="variant" pattern="[a-zA-Z0-9-]+" class="form-control validate">
                            <label data-error="Invalid" data-success="" for="variant">Variant</label>
                        </div>
                        <div class="md-form mb-5">
                            <p>Description:</p>
                            <textarea type="text" name="description" id="description" class="form-control validate" style="height:130px"></textarea>
                        </div>
                        <div class="md-form mb-4">
                            <input type="number" name="quantity" id="quantity" class="form-control validate" required>
                            <label data-error="Invalid" data-success="" for="quantity">Quantity</label>
                        </div>
                    </div>

                    <!-- For Foreign Key Value Reference the User that is logged in -->
                    <input type="text" name="users_id" value="{{ Auth::id() }}" hidden>

                    <div class="modal-footer flex-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<!-- Modal for Add Product -->

@endsection