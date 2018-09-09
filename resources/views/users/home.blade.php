@extends('layouts.app')

@section('content')

        <!-- <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> -->
        <!-- <div class="container"> -->
				    <h3>Please Fill Your Project Status</h3>
				    <div class="row clearfix">
						<div class="col-md-12 column">
							<table class="table table-bordered table-hover" id="tab_logic0">
								<thead>
									<tr >
                          <th>ID</th>
                          <th>Project</th>
                          <th>Site Code/Work Order</th>
                          <th>From Place</th>
                          <th>To Place</th>
                          <span width="25px"><th>Date</th></span>
                          <th>Mode of Transport</th>
                          <th>Total Fare</th>
                          <th>Hotel</th>
                          <th>If yes, Then amount</th>
                          <th>Consumables</th>
                          <th>Site Remark</th>
                          <th>Total Expense</th>
                          <th>Balance</th>
									</tr>
								</thead>
				<tbody>
					<tr id='addr0_0'>
						<td>
						1
						</td>
						<td>
						<input type="text" name='pname'  placeholder='Project' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='sitecode' placeholder='Site Code' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='fromPlace' placeholder='Place' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='toPlace' placeholder='Place' class="form-control" required/>
						</td>
						<td>
						<input type="date" name='date' class="form-control" width="25px" required/>
						</td>
						<td>
						<input type="text" name='transport' placeholder='Transport' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='trans_fare' placeholder='Total Fare' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='hotel' placeholder='Hotel' class="form-control" required/>
						</td>
						<td>
						<input type="number" name='hotel_amount' placeholder='Amount' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='consume' placeholder='Consumables' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='remark' placeholder='Site Remark' class="form-control" required/>
						</td>
						<td>
						<input type="text" name='expense' placeholder='Total expense' class="form-control" required/>
						</td>
						<td>
						<input type="number" name='bal' placeholder='Balance' class="form-control" disabled required/>
						</td>
						<td>    <a id='delete_row' class="btn btn-default">Delete Row</a>
						</td>
					</tr>
                    <tr id='addr0_1'></tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id="add_row0" class="btn btn-default pull-left">Add Row</a>
</div>

@endsection
