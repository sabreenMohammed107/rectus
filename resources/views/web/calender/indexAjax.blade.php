<!-- Tab panes -->
<div class="tab-content">
									<div class="tab-pane active" id="cat-0">

										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='January' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-1">
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='February' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-2">
										@foreach($filterd_rounds as $rounds)

										@if($rounds->month==='March' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-3">
                                  
                                  
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='April' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-4">
                                 
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='May' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-5">
                                 
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month ==='June' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-6">
                                  
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='July' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-7">
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='August' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-8">
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='September' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-9">
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='October' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-10">
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='November'&& $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
									<div class="tab-pane" id="cat-11">
										@foreach($filterd_rounds as $rounds)
										@if($rounds->month==='December' && $rounds->year===$years)
										<table class="table">
											<thead style="">
												@if($years===$rounds->year)
												<tr style="border-bottom:solid #32a2a8">
													<th style="border:none !important">
														<h4>{{$rounds->month}} -{{$rounds->year}}</h4>
													</th>
												</tr>
												@endif
											</thead>
											<tbody>
												@foreach($rounds->rounds as $round)
												<?php
												$ddate = date("Y", strtotime($round->round_start_date));
												?>
												@if($ddate===$years)
												<tr>
													<td>
														<div class="detials">
															<a href="{{ url('courseDetails/'.$round->course->id) }}">
																<h4 style="margin:10px 0px"> {{ $round->course->course_en_name }}</h4>
															</a>
															<p style="margin-bottom:0px">
																{{ Str::limit($round->course->course_en_desc, 100, ' ...') }}

															</p>
														</div>
														<a href="{{ url('courseDetails/'.$round->course->id) }}" style="color:#32a2a8">Read More <i class="fas fa-caret-right"></i></a>
													</td>
													<td>
														<div class="detials" style="padding:0px">
															<ul>
																<li><i class="fas fa-map-marker-alt" style="color:#32a2a8"></i> {{ $round->venue->venue_en_name }} </li>
																<li><i class="fas fa-clock" style="color:#32a2a8"></i>
																	{{ $round->course->course_duration }} -Days
																</li>
																<li><i class="fas fa-angle-double-right" style="color:#32a2a8"></i> {{$round->currancy->currency_name}}-{{ $round->round_price}}</li>
																<li><i class="fas fa-calendar-alt" style="color:#32a2a8"></i>
																	<?php $date = date_create($round->round_start_date) ?>
																	{{ date_format($date,"d-m-Y") }}

																</li>
															</ul>
														</div>
													</td>
												</tr>

												@endif
												@endforeach

											</tbody>
										</table>
										@endif
										@endforeach
									</div>
								</div>