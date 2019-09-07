<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/myjconnectsidebar.css') }}" />
<style media="screen" type="text/css">


  .myAccordion li a.sidebarActive{
        background: #039be5;
        color: #fff;
    }
    .dropdown-submenu>a:after{
    content: none;
    }
    .top_dropdown {
    margin-top: 20px;
    }
    .top_dropdown1{
    margin-top: 20px;
    }
    .custom_dropdown>.dropdown-menu {
    top: 146px;
    border:none;
    margin-left: 0px;
    }
    .custom_dropdown>a:after {
    display: none;
    }
    .custom_dropdown1>.dropdown-menu {
    top: 7px;
    border:none;
    margin-left: 0px;
    }
    .custom_dropdown1>a:after {
    display: none;
    }

    .myAccordion .myActive{
        background: red;
        color: red;
        height:100px;
    }
       .dropdown-submenu>a:after{
    content: none;
    }
    .top_dropdown {
    margin-top: 20px;
    }
    .top_dropdown1{
    margin-top: 20px;
    }
    .custom_dropdown>.dropdown-menu {
    top: 146px;
    border:none;
    margin-left: 0px;
    }
    .custom_dropdown>a:after {
    display: none;
    }
    .custom_dropdown1>.dropdown-menu {
    top: 7px;
    border:none;
    margin-left: 0px;
    }
    .custom_dropdown1>a:after {
    display: none;
    }

        .ewsBox {
    width: 100%;
    margin-bottom: 30px;
    background: white;

    border-radius: 2px;
    box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.2);
    }
    .ewsBox .ewsUserName {
    color: #3094db;
    font-weight: 600;
    margin-top: 0px;
    }
    .ewsBox p, .ewsBox span {
    display: inline;
    margin-right: 30px;
    }

    .ewsBox .selectWidth {
    display: inline;
    width: 200px;
    }

    .ewsBox .ratingBox{
    border:1px solid #3094db;
    padding: 15px;
    }
    .ratingList{
        margin-bottom: 10px;
    }
    .ews-current-score-box{
        background: #fff;
        border: 3px solid #eee;    
        width: 60%;
        position: absolute;
     /*   left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);*/
    }
    .myewsBoxHeader .ewsScoreHeader,.myewsBoxHeader1 .ewsScoreHeader,.ratingBox h3{
        font-weight: 500;
        color: #fff;
        background: #3c8dbc;
        padding: 5px 10px;
        border-radius: 5px;
        margin-top: -23px;
        margin-bottom: 15px; 
        font-size: 16px;
    }
    .myewsBoxHeader h5,.myewsBoxHeader1 h5{
        
    }
    .myewsBoxHeader{
        margin-top: 15px;
    }
    .myewsBoxHeader1{
        margin-top: 160px;
    }

  .myAccordion li a.sidebarActive{
        background: #039be5;
        color: #fff;
    }
</style>
<div class="col-md-2">
    <div class="user_profile_image_box">
        <div class="avatar-upload">           
            <div class="avatar-preview">
                @if (@$employeedetail->profile_image)
                <div id="imagePreview">
                    <img class="img-responsive" src="{{ URL::asset('public/images')}}/{{@$employeedetail->profile_image}}"/>
                </div>
                @else
                <div id="imagePreview">
                    <img class="img-responsive" src="{{ URL::asset('public/images/avatar5.png')}}"/>
                </div>
                @endif
            </div>
        </div>
        <h2>
            <strong>
                {{ @$employeedetail->first_name }} {{ @$employeedetail->middle_name }} {{ @$employeedetail->last_name }}
            </strong>
        </h2>
        <span> ( {{ @$employeedetail->designations->degname ? @$employeedetail->designations->degname : 'N/A' }} )</span>
        <br />
            {{ @$employeedetail->departments->deptname ? @$employeedetail->departments->deptname : 'N/A' }}
        <br />
    </div>
  
                
    <ul class="myAccordion">

        {{-- @dd() --}}
        @if( Request::is('team/kyt/kytprofile/*') =='kyt/*' || Request::is('team/kyt/kytprofile/*') =='kyt/*')
        
                    
            <li>
                <a class="toggle accordion-toggle" href="#panelBodyOne" data-toggle="collapse" data-parent="#accordion">
                    Appreciation Badges<span class="badge badge-success">2</span>
                    <i class="fa fa-chevron-down pull-right">
                    </i>
                </a>
                <div id="accordion" class="panel-group">
                    <div id="panelBodyOne" class="panel-collapse collapse in">
                        <div class="notifi_box" style="padding:20px;">
                            <div class="row">
                                <div class="col-md-6">
                                <span class="pull-left img_size">
                                   <img src="{{ URL::asset('public/images/badge(2).png')}}">
                                   <h4 class="text-center" style="font-weight: bold;color: #039be5;">Jun 2019</h4>
                                </span>
                            </div>

                              <div class="col-md-6">
                                <span class="pull-left img_size">
                                   <img src="{{ URL::asset('public/images/badge(4).png')}}">
                                   <h4 class="text-center" style="font-weight: bold;color: #039be5;">Jun 2019</h4>
                                </span>
                               
                            </div>
                            <div class="clearfix">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


        <li>
            <a class="toggle" href="{{ route('team.kyt.profile.personal',Crypt::encrypt($employeedetail->emp_id)) }}">
                Home
                <i class="fa fa-chevron-right pull-right">  </i>
            </a>
        </li>

         <li>
            <a class="toggle" href="{{ route('team.kyt.profile.jobdescription',Crypt::encrypt($employeedetail->emp_id)) }}" >
                Job Description
                <i class="fa fa-chevron-right pull-right">  </i>
            </a>
        </li>
       
        <li>
            <a  class="toggle" href="{{ route('team.kyt.profile.pip',Crypt::encrypt($employeedetail->emp_id)) }}" >
                PIP
                <i class="fa fa-chevron-right pull-right">  </i>
            </a>
        </li>
        <li>
            <a  class="toggle" href="{{ route('team.kyt.profile.bi',Crypt::encrypt($employeedetail->emp_id)) }}" >
                BI/CAP
                <i class="fa fa-chevron-right pull-right">  </i>
            </a>
        </li>
        @endif
        @if( Request::is('team/kyt/timeandattendance/*') =='kyt/*' || Request::is('team/kyt/timeandattendance/*') =='kyt/*')
        <!-- ################# Time and Attendance ################# -->

        <li>
            <a  class="toggle" href="{{ route('team.kyt.timeandattendance.swap.apply',Crypt::encrypt($employeedetail->emp_id)) }}" >
                Swap <i class="fa fa-chevron-right pull-right">  </i>
            </a>
        </li>
         <li>
            <a  class="toggle" href="{{ route('team.kyt.leave',Crypt::encrypt($employeedetail->emp_id)) }}" role="tab">
                Leave  <i class="fa fa-chevron-right pull-right">  </i>
            </a>
        </li>
        <li>                       
            <a  class="toggle" href="{{ route('team.kyt.timeandattendance.atten',Crypt::encrypt($employeedetail->emp_id)) }}" >
                    Attendance   <i class="fa fa-chevron-right pull-right">  </i>
            </a>                       
        </li>
        @endif

        @if( Request::is('team/kyt/training/*') =='kyt/*' || Request::is('team/kyt/training/*') =='kyt/*')
         
        <li>
            <a  class="toggle"  href="{{ route('team.kyt.training',Crypt::encrypt($employeedetail->emp_id)) }}">
                TRAINING
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>
        </li>        
        <li>                       
            <a  class="toggle" href="{{ route('team.kyt.training.skillSet',Crypt::encrypt($employeedetail->emp_id)) }}">
                     SKILL SET 
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>                       
        </li>      
        <li>                       
            <a  class="toggle" href="{{ route('team.kyt.training.nomination',Crypt::encrypt($employeedetail->emp_id)) }}">
                     NOMINATION
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>                       
        </li>
        @endif

         @if( Request::is('team/kyt/performance/*') =='kyt/*' || Request::is('team/kyt/performance/*') =='kyt/*')
         
        <li>
            <a  class="toggle"  href="{{ route('team.kyt.performance',Crypt::encrypt($employeedetail->emp_id)) }}">
                Performance Graph
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>
        </li>        
        <li>                       
            <a  class="toggle" href="{{ route('team.kyt.performance.oneonone',Crypt::encrypt($employeedetail->emp_id)) }}">
                   One On One
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>                       
        </li>      
        <li>                       
            <a  class="toggle" href="{{ route('team.kyt.performance.competency',Crypt::encrypt($employeedetail->emp_id)) }}">
                     Competency 
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>                       
        </li>
        @endif

           @if( Request::is('team/kyt/accounts/*') =='kyt/*' || Request::is('team/kyt/accounts/*') =='kyt/*')
         
        <li>
            <a  class="toggle"  href="{{ route('team.kyt.accounts',Crypt::encrypt($employeedetail->emp_id)) }}">
                Travel
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>
        </li>        
        <li>                       
            <a  class="toggle" href="{{ route('team.kyt.accounts.expense',Crypt::encrypt($employeedetail->emp_id)) }}">
                   Expense
                <i class="fa fa-chevron-right pull-right">
                </i>
            </a>                      
        </li>     
      


      @endif
    </ul>
</div>

<script >     
    $(document).ready(function() {        
        var currentRoute = "{{ Request::url() }}";    
        var element = $('a[href="'+currentRoute+'"]');
        element.addClass('sidebarActive');           
   });
</script>
  

