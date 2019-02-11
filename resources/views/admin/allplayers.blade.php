@extends('layout')
@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>pl_name</th>
                          <th>pl_email</th>
                          <th>pl_address</th>
                          <th>pl_image</th>
                          <th>pl_country</th>
                          <th>pl_role</th>
                          <th>pl_tem</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_player_info as $view_player)
                      <tr>
                          <td>{{$view_player->player_name}}</td>
                          <td>{{$view_player->player_country}}</td>
                          <td>{{$view_player->player_email}}</td>
                          <td><img src="{{URL::to($view_player->player_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$view_player->player_address}}</td>
                          <td>{{$view_player->player_role}}</td>

                          <td>
                          	@if ($view_player->player_selecttem==1)
                          	<span class="label label-success">{{'dhaka'}}</span>
                          	@elseif ($view_player->player_selecttem==2)
                          	<span class="label label-success">{{'khulna'}}</span>
                          	@elseif ($view_player->player_selecttem==3)
                          	<span class="label label-success">{{'sylhet'}}</span>
                          	@elseif ($view_player->player_selecttem==4)
                          	<span class="label label-success">{{'rajshahi'}}</span>
                          	@elseif ($view_player->player_selecttem==5)
                          	<span class="label label-success">{{'comilla'}}</span>
                          	@else
                          	<span class="label label-success">{{'not define'}}</span>
                          	@endif




                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       

@endsection
