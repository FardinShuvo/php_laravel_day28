@extends('master')

@section('title')
    Manage Product Page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">All Product</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Brand</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->brand}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->image}}</td>
                                        <td>
                                            <a href="{{route('manage-product', ['id'=>$product->id])}}" class="btn btn-outline-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form method="POST" action="{{route('delete-product', ['id'=>$product->id])}}" id="deleteProductForm{{$product->id}}">
                                                @csrf
                                            </form>
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
    </section>
    <script>
        function deleteStudent(id)
        {
            event.preventDefault();
            var check=confirm('Are you sure to delete this....');
            if (check)
            {
                document.getElementById('deleteStudentForm' +id).submit();
            }
        }
    </script>
@endsection
