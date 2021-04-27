@extends('layout.base')
@section('title','订单列表')
@section('css')
    @parent
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
@endsection
@section('navbar')
    @parent
@section('order','active')
@endsection
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>订单列表</h5>

                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
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
                                <th data-toggle="true">序号</th>
                                <th>订单编号</th>
                                <th>订单名称</th>
                                <th>所属公司</th>
                                <th>订单时间</th>
                                <th>状态</th>
                                <th>详情</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>20210426</td>
                                <td>97#汽油</td>
                                <td>中保石油盘锦分公司</td>
                                <td>2021.04.26</td>
                                <td>已支付</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal5">
                                        详情
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>20210426</td>
                                <td>97#汽油</td>
                                <td>中保石油盘锦分公司</td>
                                <td>2021.04.26</td>
                                <td>已支付</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal5">
                                        详情
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                    <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">订单详情</h4>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                                </div>
                            </div>
                        </div>
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

