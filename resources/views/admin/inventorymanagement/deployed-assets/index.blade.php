
@extends('layouts.app')

@section('content')

/* View  Employee Assets */

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
		<h1>All Deployed Assets</h1>
    <div class="container-fluid"><hr>
			<div class="widget-box">
				<div class="widget-title">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#tab3">Accessories</a></li>
						<li><a data-toggle="tab" href="#tab1">Components</a></li>
						<li><a data-toggle="tab" href="#tab4">Units</a></li>
					</ul>
				</div>
				<div class="widget-content tab-content">
					<div id="tab1" class="tab-pane">
						<div class="widget-content nopadding">
							<table class="table table-bordered data-table">
								<thead>
									<tr>
										<th>Brand Name</th>
										<th>Model Name</th>
										<th>Serial No.</th>
										<th>Category Name</th>
										<th>Issued To</th>
										<th>Date Issued</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									@foreach($user_components as $uc)
									<tr>
										<td> {{strtoupper($uc->component->brand->brand)}} </td>
										<td> {{strtoupper($uc->component->component_name)}} </td>
										<td> {{strtoupper($uc->component->serial_no)}} </td>
										<td> {{strtoupper($uc->component->category->category_name)}} </td>
										<td>{{$uc->users->lname }}, {{$uc->users->fname}}
											<b>
										       
											   @if($uc->users->status==="Awol")
											   <span class="label label-warning">{{ucfirst($uc->users->status)}}</span>
											   @endif
											   @if($uc->users->status==="Suspended")
											   <span class="label label-warning">{{ucfirst($uc->users->status)}}</span>
											   @endif
											   @if($uc->users->status==="Active")
											   <span class="label label-success">{{ucfirst($uc->users->status)}}</span>
											   @endif
												@if($uc->users->status==="active")
											   <span class="label label-success">{{ucfirst($uc->users->status)}}</span>
											   @endif											   
										   </b>
										</td>
										<td>{{date('F j,Y',strtotime($uc->created_at))}}</td>
										<td>
											<a title="Edit" href="{{route('all-deployed-assets.edit-component',['id'=>$uc->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>              
											<a title="Delete" href="{{route('all-deployed-assets.delete-component',['id'=>$uc->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" ><i class="icon-trash"></i></a>
										</td>            
									</tr>
									@endforeach      
								</tbody>
							</table>
						</div>
					</div>

					<!-- end for components-->
					<!--accessory-->
					<div id="tab3" class="tab-pane active">
						<div class="widget-content nopadding">
							<table class="table table-bordered data-table" id="accessory">
								<thead>
									<tr>
										<th>Brand Name</th>
										<th>Accessory Name</th>
										<th>Category</th>
										<th>Model No.</th>
										<th>Serial No.</th>
										<th>Batch No.</th>
										<th>Floor & Station #</th>
										<th>Issued To</th>
										<th>Date Issued</th>
										<th>Device Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									@foreach($user_accessory as $ua)
									<tr>
										<td>{{strtoupper($ua->accessory->brand->brand)}}</td>
										<td>{{strtoupper($ua->accessory->accessory_name)}}</td>
										<td>{{strtoupper($ua->accessory->category->category_name)}}</td>
										<td>{{strtoupper($ua->accessory->model_no)}}</td>    
										<td>{{strtoupper($ua->accessory->serial_no)}}</td>                                   
										<td>{{strtoupper($ua->accessory->batch_no)}}</td>    										  
										@if(!empty($ua->floor->floor_name) AND !empty($ua->station->station_name) )
										<td>{{strtoupper($ua->floor->floor_name)}} {{strtoupper($ua->station->station_name)}}</td>
										@else
										<td><span class="alert alert-warning">NO STATION NUMBER</span></td>
										@endif									  
										<td>{{$ua->users->lname }}, {{$ua->users->fname}}
											<b>  
											   @if($ua->users->status==="Awol")
											   <span class="label label-warning">{{ucfirst($ua->users->status)}}</span>
											   @endif
											   @if($ua->users->status==="Suspended")
											   <span class="label label-warning">{{ucfirst($ua->users->status)}}</span>
											   @endif
											   @if($ua->users->status==="Active")
											   <span class="label label-success">{{ucfirst($ua->users->status)}}</span>
											   @endif
												@if($ua->users->status==="active")
											   <span class="label label-success">{{ucfirst($ua->users->status)}}</span>
											   @endif	   
										   </b>
										</td>  
										<td>{{date('F j,Y',strtotime($ua->created_at))}}</td>                 
										<td>{{strtoupper($ua->accessory->status->status_name)}}</td>  
										<td><a title="Edit" href="{{route('all-deployed-assets.edit',['id'=>$ua->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>              
										<a title="Delete" href="{{route('all-deployed-assets.delete',['id'=>$ua->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" ><i class="icon-trash"></i></a></td>                 
									</tr>
									@endforeach      
								</tbody>
							</table>
						</div>
					</div>
					<!--end accessory-->
					<!--Units-->
					<div id="tab4" class="tab-pane">
						<div class="widget-content nopadding">
							<table class="table table-bordered data-table" id="accessory">
								<thead>
									<tr>
										<th>Brand Name</th>
										<th>Model</th>
										<th>Serial No.</th>
										<th>Category</th>
										<th>Issued To</th>
										<th>Date Issued</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($user_system_units as $usu)
									<tr>
										<td>{{strtoupper($usu->system_unit->brand->brand)}}</td>
										<td>{{strtoupper($usu->system_unit->model)}}</td>
										<td>{{strtoupper($usu->system_unit->serial_no)}}</td>
										<td>{{strtoupper($usu->system_unit->category->category_name)}}</td>                                     			                 
										<td>{{$usu->users->lname }}, {{$usu->users->fname}}
											<b>										       
											   @if($usu->users->status==="Awol")
											   <span class="label label-warning">{{ucfirst($usu->users->status)}}</span>
											   @endif
											   @if($usu->users->status==="Suspended")
											   <span class="label label-warning">{{ucfirst($usu->users->status)}}</span>
											   @endif
											   @if($usu->users->status==="Active")
											   <span class="label label-success">{{ucfirst($usu->users->status)}}</span>
											   @endif
												@if($usu->users->status==="active")
											   <span class="label label-success">{{ucfirst($usu->users->status)}}</span>
											   @endif											   
										    </b>
										</td>                                     			                 
									  <td>{{date('F j,Y',strtotime($usu->created_at))}}</td>
									  <td>
									  	<a title="Edit" href="{{route('all-deployed-assets.edit-unit',['id'=>$usu->id])}}" class="btn btn-warning"><i class="icon-edit"></i></a>              
										<a title="Delete" href="{{route('all-deployed-assets.delete-unit',['id'=>$usu->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to permanently delete the selected element?')" ><i class="icon-trash"></i></a>
									  </td>                            			                                                   			                 
									</tr>
									@endforeach      
								</tbody>
							</table>
						</div>
					</div>
					<!--end Units-->
				</div>
			</div>  
		</div>
	</div>
</div>

@endsection
