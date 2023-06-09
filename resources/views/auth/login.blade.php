@extends('layouts.master')
@section("title","Login")

<style>

</style>

@section("content")
   <div class="bg-image">
       <div class="container">
           <div class="row my-5">
               @include('layouts.partials.messages')
               <div class="col-md-4 mt-md-1 mt-sm-4 col-sm-12">
                   <h1 class="text-white">Login</h1>
                   <p class="text-white">Don't have any account yet? <a href="{{url("/register")}}">Register</a></p>
                   <hr>
                   <div>
                       <form action="{{url("/login")}}" method="POST">
                           {{ csrf_field() }}
                           <div>
                               <label class="fw-bold text-white" for="email">
                                   Email
                               </label>
                               <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email">
                               @if ($errors->has('email'))
                                   <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                               @endif
                           </div>
                           <div class="mt-2">
                               <label class="fw-bold text-white" for="password">Password</label>
                               <input class="form-control" type="password" name="password" placeholder="Enter password" id="password">
                               @if ($errors->has('password'))
                                   <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                               @endif
                           </div>
                           <div class="my-2">
                               <button class="btn btn-sm btn-primary" type="submit">Login</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>



@stop

