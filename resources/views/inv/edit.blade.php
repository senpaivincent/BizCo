@extends('layouts.master')

@section('contents')
    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="row">
            <div class="col text-center mb-3">
                <h2>Update Product</h2>
            </div>
        </div>

        <div class="alert alert-info text-center">
            <h5>Last Updated</h5>
            <p>[ {{ $inventory->updated_at }} ]</p>
        </div>

        <table>
            <tr>
                <table class="table table-bordered white shadow">
                    <tr>
                        <th width="60px">No</th>
                        <th>Name</th>
                        <th>Variant</th>
                        <th>Description</th>
                        <th width="60px">Qty</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="md-form"><input type="text" id="product" name="product" class="form-control validate" pattern="[a-zA-Z0-9-]+" value="{{ $inventory->product }}" required></td>
                        <td class="md-form"><input type="text" id="variant" name="variant" class="form-control validate" pattern="[a-zA-Z0-9-]+"value="{{ $inventory->variant }}"></td>
                        <td class="md-form"><input type="text" id="description" name="description" class="form-control validate" value="{{ $inventory->description }}"></td>
                        <td class="md-form"><input type="number" id="quantity" name="quantity" class="form-control validate" value="{{ $inventory->quantity }}" style="width:50px;" required></td> 
                    </tr>
                    
                </table>
            </tr>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Save</button>
            <a type="button" href="{{route('inventory.index')}}" class="btn btn-secondary" data-dismiss="modal">Close</a>
        </div>
        
    </form>
    <div class="container" style="min-height: 45vh;">
        <!-- spacer -->
    </div>
@endsection