@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
	
	<div class="card">
		<div class="card-body">
			<h2 class="card-title">
				@if(session('status'))
					<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" arial-label="close">&times; {{ session('status') }}</a>
				@else
				Add Player
				@endif <br>	
			</h2>
		<form class="forms-sample" method="post" action="{{URL::to('/save_player')}}" enctype="multipart/form-data">
			{{csrf_field()}}
				<div class="form-group">
					<label for="exampleInputEmail1">Player Name</label>
					<input type="text" name="player_name" placeholder="Enter player Name" class="form-control p-input" aria-describedby="emailHelp" value="player test"> 

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="player_password" class="form-control p-input" placeholder="Password" value="password">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Player Country</label>
					<input type="text" placeholder="Enter player_country" name="player_country" class="form-control p-input"aria-describedby="emailHelp" value="Bangladesh">

				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Player Email</label>
					<input type="text" placeholder="Enter Email" class="form-control p-input" name="player_email" aria-describedby="emailHelp" value="test@player.com">

				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Player Address</label>
					<input type="text" placeholder="Enter Address" class="form-control p-input"  name="player_address" aria-describedby="emailHelp" value="Mirpur 12"> 

				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">player Yer</label>
					<input type="date" name="player_yer" class="form-control p-input"  aria-describedby="emailHelp" value="324234"> 

				</div>


				<div class="form-group">
					<label>Upload file</label>
					<div class="row">
						<div class="col-12">
							<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
							<input type="file" class="form-control-file" id="exampleInputFile2" name="player_image" aria-describedby="fileHelp">
							<small id="fileHelp" class="form-text text-muted">upload player image</small>
							<br>
						</div>
						<br>
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Player Role</label>
					<input type="text" name="player_role" placeholder="Enter Role" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" value="Batsman">

				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Player Tem</label>
					<select class="form-control p-input" name="player_selecttem" value="Bangladesh">
						<option>dhaka</option>
						<option>khulna</option>
						<option>sylhet</option>
						<option>rajshahi</option>
						<option>comilla</option>
					</select>

				</div>
				</div>
				<button type="submit" class="btn btn-success btn-block">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection


