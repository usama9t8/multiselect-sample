@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
 
            <div class="content-heading">
               <!-- START Language list-->
               <div class="pull-right">
                  <div class="btn-group">
                     <button class="btn btn-default" type="button" data-toggle="dropdown">English</button>
                     <ul class="dropdown-menu dropdown-menu-right animated fadeInUpShort" role="menu">
                        <li><a href="#" data-set-lang="en">English</a>
                        </li>
                        <li><a href="#" data-set-lang="es">Spanish</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- END Language list-->Dashboard
               <small data-localize="dashboard.WELCOME"></small>
            </div>
            <!-- START widgets box-->
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-primary">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                           <em class="icon-cloud-upload fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">1700</div>
                           <div class="text-uppercase">Uploads</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                           <em class="icon-globe fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">700
                              <small>GB</small>
                           </div>
                           <div class="text-uppercase">Quota</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-green">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                           <em class="icon-bubbles fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">500</div>
                           <div class="text-uppercase">Reviews</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START date widget-->
                  <div class="panel widget">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green pv-lg">
                           <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                           <div class="text-sm" data-now="" data-format="MMMM"></div>
                           <br>
                           <div class="h2 mt0" data-now="" data-format="D"></div>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="text-uppercase" data-now="" data-format="dddd"></div>
                           <br>
                           <div class="h2 mt0" data-now="" data-format="h:mm"></div>
                           <div class="text-muted text-sm" data-now="" data-format="a"></div>
                        </div>
                     </div>
                  </div>
                  <!-- END date widget-->
               </div>
            </div>
            <!-- END widgets box-->
            <div class="row">
               <!-- START dashboard main content-->
               <div class="col-lg-9">
                  <!-- START chart-->
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- START widget-->
                        <div class="panel panel-default panel-demo" id="panelChart9">
                           <div class="panel-heading">
                              <a class="pull-right" href="#" data-tool="panel-refresh" data-toggle="tooltip" title="Refresh Panel">
                                 <em class="fa fa-refresh"></em>
                              </a>
                              <a class="pull-right" href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel">
                                 <em class="fa fa-minus"></em>
                              </a>
                              <div class="panel-title">Inbound visitor statistics</div>
                           </div>
                           <div class="panel-body">
                              <div class="chart-spline flot-chart"></div>
                           </div>
                        </div>
                        <!-- END widget-->
                     </div>
                  </div>
                  <!-- END chart-->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="panel widget">
                           <div class="row row-table">
                              <div class="col-md-2 col-sm-3 col-xs-6 text-center bg-info pv-xl">
                                 <em class="wi wi-day-sunny fa-4x"></em>
                              </div>
                              <div class="col-md-2 col-sm-3 col-xs-6 pv br">
                                 <div class="h1 m0 text-bold">32&deg;</div>
                                 <div class="text-uppercase">Clear</div>
                              </div>
                              <div class="col-md-2 col-sm-3 hidden-xs pv text-center br">
                                 <div class="text-info text-sm">10 AM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-cloudy"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">20%</span>
                                 </div>
                                 <div class="text-muted">27&deg;</div>
                              </div>
                              <div class="col-md-2 col-sm-3 hidden-xs pv text-center br">
                                 <div class="text-info text-sm">11 AM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-cloudy"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">30%</span>
                                 </div>
                                 <div class="text-muted">28&deg;</div>
                              </div>
                              <div class="col-md-2 hidden-sm hidden-xs pv text-center br">
                                 <div class="text-info text-sm">12 PM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-cloudy"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">20%</span>
                                 </div>
                                 <div class="text-muted">30&deg;</div>
                              </div>
                              <div class="col-md-2 hidden-sm hidden-xs pv text-center">
                                 <div class="text-info text-sm">1 PM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-sunny-overcast"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">0%</span>
                                 </div>
                                 <div class="text-muted">30&deg;</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4">
                        <!-- START widget-->
                        <div class="panel widget">
                           <div class="panel-body">
                              <div class="clearfix">
                                 <h3 class="pull-left text-muted mt0">300</h3>
                                 <em class="pull-right text-muted fa fa-coffee fa-2x"></em>
                              </div>
                              <div class="pv-lg" data-sparkline="" data-type="line" data-height="80" data-width="100%" data-line-width="2" data-line-color="#7266ba" data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba" data-fill-color=""
                              data-highlight-line-color="#fff" data-spot-radius="3" data-values="1,3,4,7,5,9,4,4,7,5,9,6,4" data-resize="true"></div>
                              <p>
                                 <small class="text-muted">Actual progress</small>
                              </p>
                              <div class="progress progress-xs">
                                 <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">80% Complete</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END widget-->
                     </div>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <div class="pull-right label label-danger">5</div>
                              <div class="pull-right label label-success">12</div>
                              <div class="panel-title">Team messages</div>
                           </div>
                           <!-- START list group-->
                           <div class="list-group" data-height="180" data-scrollable="">
                              <!-- START list group item-->
                              <a class="list-group-item" href="#">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img class="media-box-object img-circle thumb32" src="img/user/02.jpg" alt="Image">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">2h</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-success circle-lg text-left"></span>Catherine Ellis</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a class="list-group-item" href="#">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img class="media-box-object img-circle thumb32" src="img/user/03.jpg" alt="Image">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-success circle-lg text-left"></span>Jessica Silva</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla facilisi.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a class="list-group-item" href="#">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img class="media-box-object img-circle thumb32" src="img/user/09.jpg" alt="Image">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Jessie Wells</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a class="list-group-item" href="#">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img class="media-box-object img-circle thumb32" src="img/user/12.jpg" alt="Image">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">1d</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Rosa Burke</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a class="list-group-item" href="#">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img class="media-box-object img-circle thumb32" src="img/user/10.jpg" alt="Image">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">2d</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Michelle Lane</strong>
                                       <p class="mb-sm">
                                          <small>Mauris eleifend, libero nec cursus lacinia...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                           <!-- START panel footer-->
                           <div class="panel-footer clearfix">
                              <div class="input-group">
                                 <input class="form-control input-sm" type="text" placeholder="Search message ..">
                                 <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i>
                                    </button>
                                 </span>
                              </div>
                           </div>
                           <!-- END panel-footer-->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END dashboard main content-->
               <!-- START dashboard sidebar-->
               <aside class="col-lg-3">
                  <!-- START loader widget-->
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <a class="text-muted pull-right" href="#">
                           <em class="fa fa-arrow-right"></em>
                        </a>
                        <div class="text-info">Average Monthly Uploads</div>
                        <div class="text-center pv-xl">
                           <div class="easypie-chart easypie-chart-lg" data-easypiechart data-percent="70" data-animate="{&quot;duration&quot;: &quot;800&quot;, &quot;enabled&quot;: &quot;true&quot;}" data-bar-color="#23b7e5" data-track-Color="rgba(200,200,200,0.4)"
                           data-scale-Color="false" data-line-width="10" data-line-cap="round" data-size="145">
                              <span>70%</span>
                           </div>
                        </div>
                        <div class="text-center" data-sparkline="" data-bar-color="#23b7e5" data-height="30" data-bar-width="5" data-bar-spacing="2" data-values="5,4,8,7,8,5,4,6,5,5,9,4,6,3,4,7,5,4,7"></div>
                     </div>
                     <div class="panel-footer">
                        <p class="text-muted">
                           <em class="fa fa-upload fa-fw"></em>
                           <span>This Month</span>
                           <span class="text-dark">1000 Gb</span>
                        </p>
                     </div>
                  </div>
                  <!-- END loader widget-->
                  <!-- START messages and activity-->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">Latest activities</div>
                     </div>
                     <!-- START list group-->
                     <div class="list-group">
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-purple"></em>
                                    <em class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">15m</small>
                                 <div class="media-box-heading"><a class="text-purple m0" href="#">NEW FILE</a>
                                 </div>
                                 <p class="m0">
                                    <small><a href="#">Bootstrap.xls</a>
                                    </small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-info"></em>
                                    <em class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">2h</small>
                                 <div class="media-box-heading"><a class="text-info m0" href="#">NEW DOCUMENT</a>
                                 </div>
                                 <p class="m0">
                                    <small><a href="#">Bootstrap.doc</a>
                                    </small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                    <em class="fa fa-exclamation fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">5h</small>
                                 <div class="media-box-heading"><a class="text-danger m0" href="#">BROADCAST</a>
                                 </div>
                                 <p class="m0"><a href="#">Read</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-success"></em>
                                    <em class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">15h</small>
                                 <div class="media-box-heading"><a class="text-success m0" href="#">NEW MEETING</a>
                                 </div>
                                 <p class="m0">
                                    <small>On
                                       <em>10/12/2015 09:00 am</em>
                                    </small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-warning"></em>
                                    <em class="fa fa-tasks fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">1w</small>
                                 <div class="media-box-heading"><a class="text-warning m0" href="#">TASKS COMPLETION</a>
                                 </div>
                                 <div class="progress progress-xs m0">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;">
                                       <span class="sr-only">22% Complete</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                     </div>
                     <!-- END list group-->
                     <!-- START panel footer-->
                     <div class="panel-footer clearfix">
                        <a class="pull-left" href="#">
                           <small>Load more</small>
                        </a>
                     </div>
                     <!-- END panel-footer-->
                  </div>
                  <!-- END messages and activity-->
               </aside>
               <!-- END dashboard sidebar-->
            </div>
      
@endsection
