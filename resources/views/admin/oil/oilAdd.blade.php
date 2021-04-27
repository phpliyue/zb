@extends('layout.base')
@section('title','油厂管理')
@section('navbar')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>添加油厂</h5>
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
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">油厂名称</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">负责人姓名</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">负责人联系方式</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">企业邮箱</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">客户图片</label>
                        <div class="col-sm-10"><input type="file" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">油厂地址</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">经销油品</label>
                        <div class="col-sm-5">
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 汽油90# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 汽油93# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 汽油97# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 汽油97# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 汽油97# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 汽油97# </label></div>
                        </div>
                        <div class="col-sm-5">
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 柴油0# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 柴油0# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 柴油0# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 柴油0# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 柴油0# </label></div>
                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> 柴油0# </label></div>
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



