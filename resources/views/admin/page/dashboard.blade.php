@extends('admin.layouts.master')

@section('content')
<div>
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                            <i class="icon-location-pin"></i>
                        </button>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Traffic &amp; Sales</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">
                                        <i class="icon-people"></i>
                                    </th>
                                    <th>User</th>
                                    <th class="text-center">Country</th>
                                    <th>Usage</th>
                                    <th class="text-center">Payment Method</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="avatar">
                                            <img class="img-avatar" src="{{asset('/admin/img/avatars/2.jpg')}}">
                                            <span class="avatar-status badge-success"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>Yiorgos Avraamu</div>
                                        <div class="small text-muted">
                                            <span>New</span> | Registered: Jan 1, 2015
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>
                                    </td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <strong>50%</strong>
                                            </div>
                                            <div class="float-right">
                                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div>
                                        <strong>10 sec ago</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="avatar">
                                            <img class="img-avatar" src="{{asset('/admin/img/avatars/2.jpg')}}" >
                                            <span class="avatar-status badge-danger"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>Avram Tarasios</div>
                                        <div class="small text-muted">
                                            <span>Recurring</span> | Registered: Jan 1, 2015
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                                    </td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <strong>10%</strong>
                                            </div>
                                            <div class="float-right">
                                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-cc-visa" style="font-size:24px"></i>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div>
                                        <strong>5 minutes ago</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="avatar">
                                            <img class="img-avatar" src="{{asset('/admin/img/avatars/3.jpg')}}" >
                                            <span class="avatar-status badge-warning"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>Quintin Ed</div>
                                        <div class="small text-muted">
                                            <span>New</span> | Registered: Jan 1, 2015
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                                    </td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <strong>74%</strong>
                                            </div>
                                            <div class="float-right">
                                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div>
                                        <strong>1 hour ago</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="avatar">
                                            <img class="img-avatar" src="{{asset('/admin/img/avatars/4.jpg')}}" >
                                            <span class="avatar-status badge-secondary"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>Enéas Kwadwo</div>
                                        <div class="small text-muted">
                                            <span>New</span> | Registered: Jan 1, 2015
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                                    </td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <strong>98%</strong>
                                            </div>
                                            <div class="float-right">
                                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-paypal" style="font-size:24px"></i>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div>
                                        <strong>Last month</strong>
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
@endsection