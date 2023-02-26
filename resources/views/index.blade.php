<!DOCTYPE html>


@vite(['resources/scss/app.scss', 'resources/js/app.js'])

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
	<div class="wrapper">

		<div class="sidebar">

			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="#" class="simple-text">PVP</a>
				</div>
				<ul class="nav">
					<li class="nav-item active">
						<a class="nav-link" href="dashboard.html">
							<p>Dashboard</p>
						</a>
					</li>

					<li>
						<a class="nav-link" href="pc_list.html">
							<p>List</p>
						</a>
					</li>
				</ul>
			</div>

		</div>

		<div class="main-panel">


			<nav class="navbar navbar-expand-lg " color-on-scroll="500">
				<div class=" container-fluid  ">
					<a class="navbar-brand"> Dashboard </a>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#"><span class="no-icon">Account</span></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#"><span class="no-icon">Log out</span></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card ">
								<div class="card-header ">
									<h4 class="card-title">Energy Consumption By Computer</h4>
								</div>
								<div class="card-body ">
									<div id="computer-chart">
										<div style="position: relative;">
											<div dir="ltr" style="position: relative; width: 350px; height: 200px;">
												<div aria-label="A chart."
													style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
													<svg width="350" height="200" aria-label="A chart."
														style="overflow: hidden;">
														<defs id="_ABSTRACT_RENDERER_ID_0">
															<filter id="_ABSTRACT_RENDERER_ID_3">
																<fegaussianblur in="SourceAlpha" stdDeviation="2">
																</fegaussianblur>
																<feoffset dx="1" dy="1"></feoffset>
																<fecomponenttransfer>
																	<fefunca type="linear" slope="0.1"></fefunca>
																</fecomponenttransfer>
																<femerge>
																	<femergenode></femergenode>
																	<femergenode in="SourceGraphic"></femergenode>
																</femerge>
															</filter>
														</defs>
														<rect x="0" y="0" width="350" height="200" stroke="none"
															stroke-width="0" fill="#ffffff"></rect>
														<g><text text-anchor="start" x="64" y="22.5" font-family="Arial"
																font-size="10" font-weight="bold" stroke="none"
																stroke-width="0" fill="#000000">Energy Consumption By
																Computer</text>
															<rect x="64" y="14" width="223" height="10" stroke="none"
																stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
														</g>
														<g>
															<rect x="218" y="38" width="69" height="42" stroke="none"
																stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g column-id="Computer 2">
																<rect x="218" y="38" width="69" height="10"
																	stroke="none" stroke-width="0" fill-opacity="0"
																	fill="#ffffff"></rect>
																<g><text text-anchor="start" x="232" y="46.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#222222">Computer
																		2</text></g>
																<circle cx="223" cy="43" r="5" stroke="none"
																	stroke-width="0" fill="#3366cc"></circle>
															</g>
															<g column-id="Computer 3">
																<rect x="218" y="54" width="69" height="10"
																	stroke="none" stroke-width="0" fill-opacity="0"
																	fill="#ffffff"></rect>
																<g><text text-anchor="start" x="232" y="62.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#222222">Computer
																		3</text></g>
																<circle cx="223" cy="59" r="5" stroke="none"
																	stroke-width="0" fill="#dc3912"></circle>
															</g>
															<g column-id="Computer 1">
																<rect x="218" y="70" width="69" height="10"
																	stroke="none" stroke-width="0" fill-opacity="0"
																	fill="#ffffff"></rect>
																<g><text text-anchor="start" x="232" y="78.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#222222">Computer
																		1</text></g>
																<circle cx="223" cy="75" r="5" stroke="none"
																	stroke-width="0" fill="#ff9900"></circle>
															</g>
														</g>
														<g>
															<path
																d="M133,75.2L133,38A62,62,0,0,1,179.97352994402826,140.46588049947118L151.7894119776113,116.18635219978847A24.8,24.8,0,0,0,133,75.2"
																stroke="#ffffff" stroke-width="1" fill="#3366cc"></path>
															<text text-anchor="start" x="152.79227479262934"
																y="88.00857569260239" font-family="Arial" font-size="10"
																stroke="none" stroke-width="0"
																fill="#ffffff">36.3%</text>
														</g>
														<g>
															<path
																d="M108.23345989693223,101.28782425941418L71.08364974233056,103.21956064853543A62,62,0,0,1,133,38L133,75.2A24.8,24.8,0,0,0,108.23345989693223,101.28782425941418"
																stroke="#ffffff" stroke-width="1" fill="#ff9900"></path>
															<text text-anchor="start" x="91.40093219096713"
																y="77.29875711739219" font-family="Arial" font-size="10"
																stroke="none" stroke-width="0"
																fill="#ffffff">25.8%</text>
														</g>
														<g>
															<path
																d="M151.7894119776113,116.18635219978847L179.97352994402826,140.46588049947118A62,62,0,0,1,71.08364974233056,103.21956064853543L108.23345989693223,101.28782425941418A24.8,24.8,0,0,0,151.7894119776113,116.18635219978847"
																stroke="#ffffff" stroke-width="1" fill="#dc3912"></path>
															<text text-anchor="start" x="105.59422055799635"
																y="142.69189126045922" font-family="Arial"
																font-size="10" stroke="none" stroke-width="0"
																fill="#ffffff">37.9%</text>
														</g>
														<g></g>
													</svg>
													<div aria-label="A tabular representation of the data in the chart."
														style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
														<table>
															<thead>
																<tr>
																	<th>Computer</th>
																	<th>Energy Consumption</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Computer 2</td>
																	<td>3,448</td>
																</tr>
																<tr>
																	<td>Computer 3</td>
																	<td>3,594</td>
																</tr>
																<tr>
																	<td>Computer 1</td>
																	<td>2,452</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div aria-hidden="true"
												style="display: none; position: absolute; top: 210px; left: 360px; white-space: nowrap; font-family: Arial; font-size: 10px; font-weight: bold;">
												2,452 (25.8%)</div>
											<div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card ">
								<div class="card-header ">
									<h4 class="card-title">Energy Consumption By Day</h4>
								</div>
								<div class="card-body ">
									<div id="day-chart">
										<div style="position: relative;">
											<div dir="ltr" style="position: relative; width: 350px; height: 200px;">
												<div aria-label="A chart."
													style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
													<svg width="350" height="200" aria-label="A chart."
														style="overflow: hidden;">
														<defs id="_ABSTRACT_RENDERER_ID_1">
															<clippath id="_ABSTRACT_RENDERER_ID_2">
																<rect x="64" y="38" width="223" height="124"></rect>
															</clippath>
															<filter id="_ABSTRACT_RENDERER_ID_4">
																<fegaussianblur in="SourceAlpha" stdDeviation="2">
																</fegaussianblur>
																<feoffset dx="1" dy="1"></feoffset>
																<fecomponenttransfer>
																	<fefunca type="linear" slope="0.1"></fefunca>
																</fecomponenttransfer>
																<femerge>
																	<femergenode></femergenode>
																	<femergenode in="SourceGraphic"></femergenode>
																</femerge>
															</filter>
														</defs>
														<rect x="0" y="0" width="350" height="200" stroke="none"
															stroke-width="0" fill="#ffffff"></rect>
														<g><text text-anchor="start" x="64" y="22.5" font-family="Arial"
																font-size="10" font-weight="bold" stroke="none"
																stroke-width="0" fill="#000000">Energy Consumption By
																Day</text>
															<rect x="64" y="14" width="223" height="10" stroke="none"
																stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
														</g>
														<g>
															<rect x="117" y="184" width="117" height="10" stroke="none"
																stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g>
																<rect x="117" y="184" width="117" height="10"
																	stroke="none" stroke-width="0" fill-opacity="0"
																	fill="#ffffff"></rect>
																<g><text text-anchor="start" x="141" y="192.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#222222">Energy
																		Consumption</text></g>
																<path d="M117,189L137,189" stroke="#3366cc"
																	stroke-width="2" fill-opacity="1" fill="none">
																</path>
															</g>
														</g>
														<g>
															<rect x="64" y="38" width="223" height="124" stroke="none"
																stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g
																clip-path="url(file:///C:/Users/juliu/Desktop/html.html#_ABSTRACT_RENDERER_ID_2)">
																<g>
																	<rect x="64" y="161" width="223" height="1"
																		stroke="none" stroke-width="0" fill="#cccccc">
																	</rect>
																	<rect x="64" y="100" width="223" height="1"
																		stroke="none" stroke-width="0" fill="#cccccc">
																	</rect>
																	<rect x="64" y="38" width="223" height="1"
																		stroke="none" stroke-width="0" fill="#cccccc">
																	</rect>
																	<rect x="64" y="130" width="223" height="1"
																		stroke="none" stroke-width="0" fill="#ebebeb">
																	</rect>
																	<rect x="64" y="69" width="223" height="1"
																		stroke="none" stroke-width="0" fill="#ebebeb">
																	</rect>
																</g>
																<g>
																	<rect x="64" y="161" width="223" height="1"
																		stroke="none" stroke-width="0" fill="#333333">
																	</rect>
																</g>
																<g>
																	<path
																		d="M120,49.348600000000005C120,49.348600000000005,231,156.8752,231,156.8752"
																		stroke="#3366cc" stroke-width="2"
																		fill-opacity="1" fill="none"></path>
																</g>
															</g>
															<g></g>
															<g>
																<g><text text-anchor="middle" x="120" y="176.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#222222">1/1/2022</text>
																</g>
																<g><text text-anchor="middle" x="231" y="176.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#222222">1/2/2022</text>
																</g>
																<g><text text-anchor="end" x="54" y="165"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#444444">0</text></g>
																<g><text text-anchor="end" x="54" y="103.5"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#444444">5,000</text></g>
																<g><text text-anchor="end" x="54" y="42"
																		font-family="Arial" font-size="10" stroke="none"
																		stroke-width="0" fill="#444444">10,000</text>
																</g>
															</g>
														</g>
														<g></g>
													</svg>
													<div aria-label="A tabular representation of the data in the chart."
														style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
														<table>
															<thead>
																<tr>
																	<th>Day</th>
																	<th>Energy Consumption</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1/1/2022</td>
																	<td>9,118</td>
																</tr>
																<tr>
																	<td>1/2/2022</td>
																	<td>376</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div aria-hidden="true"
												style="display: none; position: absolute; top: 210px; left: 360px; white-space: nowrap; font-family: Arial; font-size: 10px; font-weight: bold;">
												376</div>
											<div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>