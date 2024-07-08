@extends('admin::layouts.master')

@section('title')
    {{'Dashboard'}}
@endsection
@section('menu')
    <strong>Home</strong>
@endsection
@section('header')
    <strong>Admin Dashboard</strong>
@endsection

@section('content')

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-2 col-sm-4 col-6">
        <div class="info-tiles">
            <div class="info-icon">
                <i class="icon-account_circle"></i>
            </div>
            <div class="stats-detail">
                <h3>82k</h3>
                <p>Users</p>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-sm-4 col-6">
        <div class="info-tiles">
            <div class="info-icon">
                <i class="icon-watch_later"></i>
            </div>
            <div class="stats-detail">
                <h3>2k</h3>
                <p>Agents</p>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-sm-4 col-6">
        <div class="info-tiles">
            <div class="info-icon">
                <i class="icon-visibility"></i>
            </div>
            <div class="stats-detail">
                <h3>70k</h3>
                <p>Visitors</p>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-sm-4 col-6">
        <div class="info-tiles">
            <div class="info-icon">
                <i class="icon-shopping_basket"></i>
            </div>
            <div class="stats-detail">
                <h3>90k</h3>
                <p>Sales</p>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-sm-4 col-6">
        <div class="info-tiles">
            <div class="info-icon secondary">
                <i class="icon-check_circle"></i>
            </div>
            <div class="stats-detail">
                <h3>3k</h3>
                <p>Signups</p>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-sm-4 col-6">
        <div class="info-tiles">
            <div class="info-icon secondary">
                <i class="icon-archive"></i>
            </div>
            <div class="stats-detail">
                <h3>64k</h3>
                <p>Orders</p>
            </div>
        </div>
    </div>
</div>
<!-- Row ends -->

<!-- Row starts -->
<div class="row gutters">
    <div class="col-xl-6 col-sm-12 col-12">

        <div class="card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2308.2877509742884!2d103.84708378969262!3d13.34643245458692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110171c32d8ba6d%3A0xff5b40564b8b472b!2sSiemReap%20Goldenkids%20School!5e0!3m2!1sen!2skh!4v1718691188742!5m2!1sen!2skh" width="100%" height="414" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        </div>
    </div>
    
    <div class="col-xl-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="elegant-calencar d-md-flex">
                    <div class="wrap-header d-flex align-items-center img" style="background-image: url(images/bg.jpg);">
                        <p id="reset">Today</p>
                        <div id="header" class="p-0">
                            <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                            <div class="head-info">
                                <div class="head-month"></div>
                                <div class="head-day"></div>
                            </div>
                            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                        </div>
                    </div>
                    <div class="calendar-wrap">
                        <div class="w-100 button-wrap">
                            <div class="pre-button d-flex align-items-center justify-content-center"><i
                                    class="fa fa-chevron-left"></i></div>
                            <div class="next-button d-flex align-items-center justify-content-center"><i
                                    class="fa fa-chevron-right"></i></div>
                        </div>
                        <table id="calendarsa">
                            <thead>
                                <tr>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Basic Column Graph</div>
            </div>
            <div class="card-body">
                <div id="basic-column-graph" class="primary-graph"></div>
            </div>
        </div>

    </div>
    <div class="col-xl-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Basic Pie Graph Monochrome Gradient</div>
            </div>
            <div class="card-body">
                <div id="basic-pie-graph-monochrome-gradient"></div>
            </div>
        </div>
    </div>
</div>
@endsection
