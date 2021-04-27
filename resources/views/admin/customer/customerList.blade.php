@extends('layout.base')
@section('title','客户列表')
@section('css')
    @parent
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
@endsection
@section('navbar')
    @parent
@section('customer','active')
@section('customer_list','active')
@endsection
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>客户列表</h5>

                        <div class="ibox-tools">
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="footable table table-stripped toggle-arrow-tiny">
                            <thead>
                            <tr>
                                <th data-toggle="true">客户名称</th>
                                <th>地址</th>
                                <th>详情查看</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>全运路加油站</td>
                                <td>全运一路12号</td>
                                <td><a href="#"><i class="fa fa-check text-navy">详情</i></a></td>
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


