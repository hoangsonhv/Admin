@extends("layout")
@section("main")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product List</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>description</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>category_id</th>
                    <th>Updated At</th>
                    <th>Created At</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><img style="width: 70px;height: 70px" src="{{$item->getImage()}}"/></td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->id_category}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
<<<<<<< HEAD
                        <td class="center"><a href="{{url("products/edit",["id"=>$item->id])}}"><i class="fa fa-trash-o  fa-fw"></i>Sửa</a></td>
=======
                        <td class="center"><a style="text-decoration: none" href="{{url("products/edit",["id"=>$item->id])}}"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
>>>>>>> up
                        <td class="center">
                            <a href="{{url("products/delete",["id"=>$item->id])}}" style="text-decoration: none">
                                <form method="post" action="{{url("products/delete",["id"=>$item->id])}}">
                                    @method('DELETE')
                                    @csrf
<<<<<<< HEAD
                                    <i class="fa fa-pencil fa-fw"></i>
                                    <button type="submit">Delete</button>
=======
                                    <button style="border: none;background: none" type="submit"><i class="fa fa-trash-o  fa-fw"></i> Delete</button>
>>>>>>> up
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                {!! $product->links("vendor.pagination.default") !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
