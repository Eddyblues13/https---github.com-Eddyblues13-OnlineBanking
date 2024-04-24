@include('admin.header')
<!-- End Sidebar -->
<div class="main-panel">
			<div class="content bg-dark ">
				<div class="page-inner">
                @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
					    <h1 class="title1 text-light d-inline">{{$user->name}} login activities</h1>
                        <div class="d-inline">
							<div class="float-right btn-group">
								<a class="btn btn-primary btn-sm" href=""> <i class="fa fa-arrow-left"></i> back</a>
							</div>
						</div>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
                                                    <div class="mb-4 col-md-12">
                                <a class="btn btn-danger btn-sm" href=""> <i class="fa fa-trash"></i> Clear Data</a>
                            </div>  
                        						<div class="col-md-12 card shadow p-4 bg-dark">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-light"> 
									<thead> 
										<tr>  
											
										
											<th>Amount</th>
                                            <th>Mode</th>
                                            <th>Status</th>
                                            <th>Wallet Address</th>
											<th>Date</th>
                                            <th>Action</th>
										</tr> 
									</thead> 
									<tbody> 
                                        @foreach($transfer as $transfer)
										<tr> 
											
										<td>${{$transfer->amount}}</td>
                                        <td>{{$transfer->mode}}</td>

										 @if($transfer->status=='1')
                                   <td><span class="badge badge-success">Approved</span></td> 
				                        @elseif($transfer->status=='0')
				                   <td><span class="badge badge-danger">Not Approved</span></td> 
				                         @endif
                                         <td>{{$transfer->wallet_address}}</td>
									<td>{{ \Carbon\Carbon::parse($transfer->created_at)->format('D, M j, Y g:i A') }}</td> 
									

                                        @if($transfer->status=='1')
                                   <td><a type="submit" class="btn btn-danger" href="{{route('disapprove.transfer',$transfer->id)}}">Disapprove</a></td> 
				                        @elseif($transfer->status=='0')
				                   <td><a type="submit" class="btn btn-primary"  href="{{ route('approve.transfer', ['id' => $transfer->id, 'amount' => $transfer->amount, 'user_id' => $user->id]) }}">Approve</a></td> 
				                         @endif

                                         </tr> 
                                        @endforeach
                                        								
                                    </tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
			
@include('admin.footer')
				