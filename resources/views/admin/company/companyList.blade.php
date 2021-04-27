@extends('layout.base')
@section('title','公司列表')
@section('navbar')
    @parent
    @section('company','active')
        @section('company_list','active')
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>公司列表</h5>
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
                    <table class="footable table table-stripped toggle-arrow-tiny">
                        <thead>
                        <tr>
                            <th data-toggle="true">公司名称</th>
                            <th>联系人</th>
                            <th data-hide="all">邮箱</th>
                            <th>详情</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>中保石油盘锦分公司</td>
                            <td>某某</td>
                            <td>zb-panjin@163.com</td>
                            <td>查看</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination float-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
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


