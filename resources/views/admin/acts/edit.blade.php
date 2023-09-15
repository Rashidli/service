@include('admin.includes.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <form action="{{route('acts.update', $act->id)}}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$act->act_number}}</h4>
                        <div class="row">
                            <div class="col-6">

                                <div class="mb-3">
                                    <label class="col-form-label">Akt nömrəsi</label>
                                    <input value="{{$act->act_number}}" class="form-control" type="text"
                                           name="act_number">
                                    @if($errors->first('act_number'))
                                        <small class="form-text text-danger">{{$errors->first('act_number')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label">Yekun məbləğ</label>
                                    <input value="{{$act->total_price}}" class="form-control" type="text"
                                           name="total_price">
                                    @if($errors->first('total_price'))
                                        <small class="form-text text-danger">{{$errors->first('total_price')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label">ƏDV</label>
                                    <input value="{{$act->edv}}" class="form-control" type="text" name="edv">
                                    @if($errors->first('edv'))
                                        <small class="form-text text-danger">{{$errors->first('edv')}}</small>
                                    @endif
                                </div>


                                <div class="mb-3">
                                    <label class="col-form-label">Müəssisə</label>
                                    <select class="form-control" type="text" name="enterprise_name">
                                        <option selected disabled>-----</option>
                                        <option value="Müəssisə1">Müəssisə1</option>
                                        <option value="Müəssisə2">Müəssisə2</option>
                                    </select>
                                    @if($errors->first('enterprise_name'))
                                        <small class="form-text text-danger">{{$errors->first('enterprise_name')}}</small>
                                    @endif
                                </div>


                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Korporativin adı</label>
                                    <select class="form-control js-example-basic-single" type="text"
                                            name="corporate_name" id="corporate_name">
                                        <option selected disabled>-----</option>

                                            <option value="11">444</option>
                                            <option value="11">455</option>

                                    </select>
                                    @if($errors->first('corporate_name'))
                                        <small class="form-text text-danger">{{$errors->first('corporate_name')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label">Vöen</label>
                                    <input value="{{$act->voen}}" id="voen" class="form-control" type="text"
                                           name="voen">
                                    @if($errors->first('voen'))
                                        <small class="form-text text-danger">{{$errors->first('voen')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label">Şirkət</label>
                                    <select class="form-control" type="text" name="company_name">
                                        <option selected disabled>-----</option>
                                        <option value="Şirkət1">Şirkət1</option>
                                        <option value="Şirkət2">Şirkət2</option>
                                    </select>
                                    @if($errors->first('company_name'))
                                        <small class="form-text text-danger">{{$errors->first('company_name')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label">Status</label>
                                    <select class="form-control" type="text" name="is_active">
                                        <option selected disabled>-----</option>
                                        <option value="1" {{$act->is_active == true ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{$act->is_active == false ? 'selected' : ''}}>Deactive
                                        </option>
                                    </select>
                                    @if($errors->first('is_active'))
                                        <small class="form-text text-danger">{{$errors->first('is_active')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <a href="{{asset('storage/acts/'. $act->file)}}">File</a>
                                    <input class="form-control" type="file" name="file">
                                    @if($errors->first('file'))
                                        <small class="form-text text-danger">{{$errors->first('file')}}</small>
                                    @endif
                                </div>

                                <div class="mb-3">

                                    <button class="btn btn-primary">Yadda saxla</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@include('admin.includes.footer')
