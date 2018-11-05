<?php
$single_master=Config::get('app_config.blade.single_master');

?>
@extends($single_master)
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugin/datatables/css/jquery.dataTables.min.css')}}">
@endsection
@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <!-- stats -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="pink">10</h3>
                                            <span>Package Booking List</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-book pink font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="teal">10</h3>
                                            <span>Rental Car List</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-car red font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-body text-xs-left">
                                            <h3 class="deep-orange">10</h3>
                                            <span>Packages</span>
                                        </div>
                                        <div class="media-right media-middle">
                                            <i class="icon-list2 teal font-large-2 float-xs-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Package Booking List</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table id="example" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <th>Booking No.</th>
                                    <th>User Name</th>
                                    <th>DATE</th>
                                    <th>Package</th>
                                    <th>Details</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>PK-0001</td>
                                        <td>Zwe Mun Htun</td>
                                        <td>20/11/2018</td>
                                        <td>တောင်ကြီး - ကလော</td>
                                        <td >
                                            <a href="#" class="btn btn-xs btn-info pull-right">Details</a>
                                            <a href="#"><button class="btn btn-danger btn-md" onclick="return confirm('Are you sure want to delete ? ')">Delete</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Car Rental List</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table id="rental" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <th>Booking No.</th>
                                    <th>User Name</th>
                                    <th>DATE</th>
                                    <th>Package</th>
                                    <th>Details</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>PK-0001</td>
                                        <td>Zwe Mun Htun</td>
                                        <td>20/11/2018</td>
                                        <td>တောင်ကြီး - ကလော</td>
                                        <td >
                                            <a href="#" class="btn btn-xs btn-info pull-right">Details</a>
                                            <a href="#"><button class="btn btn-danger btn-md" onclick="return confirm('Are you sure want to delete ? ')">Delete</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection


@section('script')

    <script type="text/javascript" src="{{ URL::asset('plugin/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            //for data table
            $('#example').DataTable({

            });

            $('#rental').DataTable({

            });
        });
    </script>

@endsection