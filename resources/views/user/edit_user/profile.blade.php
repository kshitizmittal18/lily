<div class="col-md-12">
    <div class=" user_profile_main_box">
        <!-- form start -->
        {!! Form::open(['route'=>['user.update',$user->id],'autocomplete'=>"off", 'class'=>"form-horizontal",'method'=>"POST"]) !!}
        <div class="box-body">
            <!-- ************** User Profile  **************  -->
            <div class="common_shadow_box">
                <h3>
                    Profile
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                            Name
                                        </strong>
                                    </span>
                                    {!! Form::text('name', null, ['class'=>"form-control",'required'=>true,'placeholder'=>'Name']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                            Email
                                        </strong>
                                    </span>
                                    {!! Form::email('email', @$user->email, ['class'=>'form-control','placeholder'=>'Email']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                            Mobile No.
                                        </strong>
                                    </span>
                                    {!! Form::text('mobile', @$user->mobile, ['class'=>'form-control','placeholder'=>'Mobile']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                            Gender
                                        </strong>
                                    </span>
                                    {!! Form::select('gender', ['Male' => 'Male', 'female' => 'Female'], @$user->gender, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                            Date of Birth
                                        </strong>
                                    </span>
                                    {!! Form::date('dob', @$user->dob, ['class' => 'form-control','placeholder'=>'DOB']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="common_shadow_box">
                    {!! Form::submit('Update', ['class'=>'blue_button']) !!}
                    {{ link_to_route('department.index', 'Back', null, array('class'=>'btn btn-primary','title'=>'Back')) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix">
</div>