@extends('layout.base')
@section('title','用户添加')
@section('navbar')
    @parent
    @section('user','active')
    @section('user_add','active')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>添加用户</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">角色名称</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">邮箱</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">联系电话</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">公司选择</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="account">
                                <option>总公司</option>
                                <option>分公司1</option>
                                <option>分公司2</option>
                                <option>分公司3</option>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">角色权限</label>
                        <div class="col-sm-10">
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 用户管理 </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 公司管理 </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 订单管理 </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 客户管理 </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 油厂管理 </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 车辆管理 </label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>

    </script>
@endsection
