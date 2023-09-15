@include('admin.includes.header')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @if(session('message'))
                                    <div class="alert alert-success">{{session('message')}}</div>
                                @endif
                                <h4 class="card-title">İstifadəçilər</h4>
{{--                                <a href="{{route('customers.create')}}" class="btn btn-primary">+</a>--}}
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">

                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ad</th>
                                            <th>Email</th>
{{--                                            <th>Əməliyyat</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customers as $customer)
                                            <tr>
                                                <th scope="row">{{$customer->id}}</th>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->email}}</td>
{{--                                                <td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary" style="margin-right: 15px" >Edit</a>--}}
{{--                                                    <form action="{{route('customers.destroy', $customer->id)}}" method="post" style="display: inline-block">--}}
{{--                                                        {{ method_field('DELETE') }}--}}
{{--                                                        @csrf--}}
{{--                                                        <button  type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}

                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@include('admin.includes.footer')
