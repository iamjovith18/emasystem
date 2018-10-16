
@extends('layouts.app')

@section('content')


/* View All Employee */

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('usermanagement')}}" class="tip-bottom">View Employee List</a></div>
    <h1>{{$user->fname.' '. $user->lname}}</h1>
  </div>
  <div class="container-fluid"><hr>
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Employee's Assets</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
            
              <tbody>
                    <thead>
                        <tr>
                            <th>Components</th>
                            <th>Accessories</th>
                        </tr>
                    </thead>
                    <tr>
                        @if($component_users!=null)
                            @foreach($component_users as $cu)
                            <tr>
                                <td> {{$cu->component->component_name}} </td>
                                <td> {{$cu->component->component_name}} </td>
                            </tr>
                            
                             @endforeach
                        @else{
                            <tr>
                                <td>No data found!</td>
                            </tr>
                        }     
                         @endif
                    </tr>
                    
                                      
              </tbody>
            </table>
          </div>
        </div>
        </div>
</div>

@endsection
