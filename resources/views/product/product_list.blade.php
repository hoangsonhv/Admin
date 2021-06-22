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
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{url("products/edit",["id"=>$item->id])}}">Sửa</a></td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i>
                            <a href="{{url("products/delete",["id"=>$item->id])}}">
                                <form method="post" action="{{url("products/delete",["id"=>$item->id])}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Delete</button>
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
