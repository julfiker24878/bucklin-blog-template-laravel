@extends('layouts.dashboard')

@section('content')

		<div class="row small-spacing">
			
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Projects</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon js__drop_down_button"></a>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div class="percent bg-warning"><i class="fa fa-line-chart"></i>53%</div>
						<!-- /.percent -->
						<div class="right-content">
							<h2 class="counter">837</h2>
							<!-- /.counter -->
							<p class="text">Projects</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
						<div class="clear"></div>
						<!-- /.clear -->
						<div class="process-bar">
							<div class="bar-bg bg-warning"></div>
							<div class="bar js__width bg-warning" data-width="70%"></div>
							<!-- /.bar js__width bg-success -->
						</div>
						<!-- /.process-bar -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Memory usage</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon js__drop_down_button"></a>
						
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat-chart">
						<div class="c100 p76 small blue js__circle">
							<span>76%</span>
							<div class="slice">
								<div class="bar"></div>
								<div class="fill"></div>
							</div>
						</div>
						<!-- /.c100 p58 -->
						<div class="right-content">
							<h2 class="counter">804</h2>
							<!-- /.counter -->
							<p class="text">Disk usage</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Visitor Analytics</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon js__drop_down_button"></a>
						
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div class="percent bg-danger"><i class="fa fa-line-chart"></i>+40%</div>
						<!-- /.percent -->
						<div class="right-content">
							<h2 class="counter">976</h2>
							<!-- /.counter -->
							<p class="text">Visitors today</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
						<div class="clear"></div>
						<!-- /.clear -->
						<div class="process-bar">
							<div class="bar-bg bg-danger"></div>
							<div class="bar js__width bg-danger" data-width="70%"></div>
							<!-- /.bar js__width bg-success -->
						</div>
						<!-- /.process-bar -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Monthly Sales</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon js__drop_down_button"></a>
						
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat-chart">
						<div class="c100 p94 small green js__circle">
							<span>94%</span>
							<div class="slice">
								<div class="bar"></div>
								<div class="fill"></div>
							</div>
						</div>
						<!-- /.c100 p58 -->
						<div class="right-content">
							<h2 class="counter">3922</h2>
							<!-- /.counter -->
							<p class="text">Sales</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			
			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Statistics</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content">
						<div id="chart-2" class="js__chart" data-type="column" data-chart="'Year'/'Statistics' | '2010'/75 | '2011'/42 | '2012'/75 | '2013'/38 | '2014'/19 | '2015'/93 "></div>
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-md-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Total Projects</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content">
						<div id="chart-3" class="js__chart" data-type="curve" data-chart="'Year'/'Desktop'/'Mobile' | '2008'/53/0 | '2009'/35/73 | '2010'/89/14 | '2011'/50/50 | '2012'/86/37 | '2013'/47/89 | '2014'/75/50 | '2015'/100/70 "></div>
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-md-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Daily Sales</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content">
						<div id="chart-1" class="js__chart" data-type="donut" data-chart="'Type'/'Number' | 'Normal Sales'/50 | 'In-Site Sales'/20 | 'Mail-Order Sales'/20"></div>
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content user-info">
					<div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
					<!-- /.avatar -->
					<div class="right-content">
						<h4 class="name">Betty Simmons</h4>
						<!-- /.name -->
						<p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
						<div class="text-warning small">Manager</div>
						<!-- /.text-warning -->
					</div>
					<!-- /.right-content -->
				</div>
				<!-- /.user-info -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content user-info">
					<div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
					<!-- /.avatar -->
					<div class="right-content">
						<h4 class="name">Michael Zenaty</h4>
						<!-- /.name -->
						<p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
						<div class="text-custom small">Support</div>
						<!-- /.text-custom -->
					</div>
					<!-- /.right-content -->
				</div>
				<!-- /.user-info -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content user-info">
					<div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
					<!-- /.avatar -->
					<div class="right-content">
						<h4 class="name">Denise Peterson</h4>
						<!-- /.name -->
						<p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
						<div class="text-success small">Designer</div>
						<!-- /.text-warning -->
					</div>
					<!-- /.right-content -->
				</div>
				<!-- /.user-info -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content user-info">
					<div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
					<!-- /.avatar -->
					<div class="right-content">
						<h4 class="name">Pamela Wood</h4>
						<!-- /.name -->
						<p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
						<div class="text-danger small">Developer</div>
						<!-- /.text-custom -->
					</div>
					<!-- /.right-content -->
				</div>
				<!-- /.user-info -->
			
		<footer class="footer">
			<ul class="list-inline">
				<li>2022 © BucklinAdmin.</li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
@endsection