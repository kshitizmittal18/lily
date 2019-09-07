<div class="clearfix">
</div>
<div class="col-md-12 clearfix">
    <div class=" user_profile_main_box">
        <!-- form start -->
        {!! Form::open(['route'=>['user.update',$user->id],'autocomplete'=>"off", 'class'=>"form-horizontal",'method'=>"POST"]) !!}
        <div class="box-body">
            <!-- ************** User Profile  **************  -->
            <div class="common_shadow_box">
                <h3>
                    Role & Permission
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <strong>
                                            Roles
                                        </strong>
                                    </span>
                                    {!! Form::select('employment_status', [null => 'Select Employement Status', 'Permanent' => 'Permanent', 'Contract' => 'Contract'], @$user->employment_status, array('class' => 'form-control')) !!}
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