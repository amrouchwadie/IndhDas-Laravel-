@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')

<div class="col-xl-8 col-md-12 box-md-12 pl-0">
    <div class="email-right-aside">
      <div class="email-body radius-left">
        <div class="ps-0">
          <div class="tab-content">
            <div class="tab-pane fade" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
              <div class="email-compose">
                <div class="email-top compose-border">
                  <div class="row">
                    <div class="col-sm-8 xl-50">
                      <h4 class="mb-0">New Message</h4>
                    </div>
                    <div class="col-sm-4 btn-middle xl-50">
                      <button class="btn btn-primary btn-block btn-mail text-center mb-0 mt-0 w-100" type="button" data-bs-original-title="" title=""><i class="fa fa-paper-plane me-2"></i> SEND</button>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="tab-pane fade active show" id="pills-darkprofile" role="tabpanel" aria-labelledby="pills-darkprofile-tab">
              <div class="email-content">
                <div class="email-top">
                  <div class="row">
                    <div class="col-md-6 xl-100 col-sm-12">
                      <div class="media"><img class="me-3 rounded-circle" src="../assets/images/user/user.png" alt="">
                        <div class="media-body">
                          <h6>{{$messages->name}} </h6>
                          <p>{{$messages->created_at->toDateString()}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12 xl-100">
                      <div class="float-end d-flex">
                        <p class="user-emailid">{{$messages->email}}<span></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="email-wrapper">
                
                  <p class="m-b-20">{{$messages->message}}</p>
                 <hr>
            
              
             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection