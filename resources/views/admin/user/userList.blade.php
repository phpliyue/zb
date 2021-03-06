@extends('layout.base')
@section('title','用户列表')
@section('css')
    @parent
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
    @endsection
@section('navbar')
    @parent
    @section('user','active')
    @section('user_list','active')
@endsection
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>管理员列表</h5>

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

                            <th data-toggle="true">名称</th>
                            <th>角色</th>
                            <th>电话</th>
                            <th data-hide="all">公司</th>
{{--                            <th data-hide="all">Completed</th>--}}
                            <th data-hide="all">权限</th>
                            <th data-hide="all">登入日期</th>
                            <th>状态</th>
{{--                            <th>编辑</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Project - This is example of project</td>
                            <td>Patrick Smith</td>
                            <td>0800 051213</td>
                            <td>Inceptos Hymenaeos Ltd</td>
{{--                            <td><span class="pie">0.52/1.561</span></td>--}}
                            <td><a>编辑</a></td>
                            <td>Jul 14, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alpha project</td>
                            <td>Alice Jackson</td>
                            <td>0500 780909</td>
                            <td>Nec Euismod In Company</td>
{{--                            <td><span class="pie">6,9</span></td>--}}
                            <td>40%</td>
                            <td>Jul 16, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                        </tr>
                        <tr>
                            <td>Betha project</td>
                            <td>John Smith</td>
                            <td>0800 1111</td>
                            <td>Erat Volutpat</td>
{{--                            <td><span class="pie">3,1</span></td>--}}
                            <td>75%</td>
                            <td>Jul 18, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                        </tr>
                        <tr>
                            <td>Gamma project</td>
                            <td>Anna Jordan</td>
                            <td>(016977) 0648</td>
                            <td>Tellus Ltd</td>
{{--                            <td><span class="pie">4,9</span></td>--}}
                            <td>18%</td>
                            <td>Jul 22, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                        </tr>
                        <tr>
                            <td>Alpha project</td>
                            <td>Alice Jackson</td>
                            <td>0500 780909</td>
                            <td>Nec Euismod In Company</td>
{{--                            <td><span class="pie">6,9</span></td>--}}
                            <td>40%</td>
                            <td>Jul 16, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                        </tr>
                        <tr>
                            <td>Project
                                <small>This is example of project</small>
                            </td>
                            <td>Patrick Smith</td>
                            <td>0800 051213</td>
                            <td>Inceptos Hymenaeos Ltd</td>
{{--                            <td><span class="pie">0.52/1.561</span></td>--}}
                            <td>20%</td>
                            <td>Jul 14, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                        </tr>
                        <tr>
                            <td>Gamma project</td>
                            <td>Anna Jordan</td>
                            <td>(016977) 0648</td>
                            <td>Tellus Ltd</td>
{{--                            <td><span class="pie">4,9</span></td>--}}
                            <td>18%</td>
                            <td>Jul 22, 2013</td>
                            <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
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
    </div>
@endsection
@section('js')
    @parent
    <script src="js/plugins/footable/footable.all.min.js"></script>
    <script>
        $(document).ready(function() {

            // $('.footable').footable();

        });

    </script>
@endsection
