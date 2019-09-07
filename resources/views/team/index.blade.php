@extends('layouts.app')
@section('header-name')
{{ 'My Team' }}
@endsection
@section('content')
<div class="page-content">
    <link href="{{ asset('css/jquery-treetable.css') }}" rel="stylesheet" type="text/css"/>
    
    <div id="jquery-script-menu">
        <div class="jquery-script-center">
            <div class="jquery-script-ads">
                <script type="text/javascript">
                    <!--
                google_ad_client = "ca-pub-2783044520727903";
                /* jQuery_demo */
                google_ad_slot = "2780937993";
                google_ad_width = 728;
                google_ad_height = 90;
                //-->
                </script>
                <script src="http://pagead2.googlesyndication.com/pagead/show_ads.js" type="text/javascript">
                </script>
            </div>
            <div class="jquery-script-clear">
            </div>
        </div>
    </div>
    <table class="table table-bordered" id="mytable">
        <thead>
            <tr>
                <th>
                    #
                </th>
                 <th style="width:400px">
                    Graph here
                </th>
                <th>
                    First Name
                </th>
                <th>
                    Last Name
                </th>
               
                <th>
                    Username
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    1
                </th>
                 <td>
                    <div class="tt" data-tt-id="root" data-tt-parent="">
                        Mark
                    </div>
                </td>
                <td>
                    Mark
                </td>
                <td>
                    Otto
                </td>
               
                <td>
                    @mdo
                </td>
            </tr>
            <tr>
                <th scope="row">
                    2
                </th>
                 <td>
                    <div class="tt" data-tt-id="jacob" data-tt-parent="root">
                        Jacob
                    </div>
                </td>
                <td>
                    Jacob
                </td>
                <td>
                    Thornton
                </td>
               
                <td>
                    @fat
                </td>
            </tr>
            <tr>
                <th scope="row">
                    3
                </th>
                <td>
                    <div class="tt" data-tt-id="larry" data-tt-parent="root">
                        Larry
                    </div>
                </td>
                <td>
                    Larry
                </td>
                <td>
                    the Bird
                </td>
                
                <td>
                    @twitter
                </td>
            </tr>
            <tr>
                <th scope="row">
                    4
                </th>
                 <td>
                    <div class="tt" data-tt-id="tony" data-tt-parent="larry">
                        Tony
                    </div>
                </td>
                <td>
                    Tony
                </td>
                <td>
                    the Bird
                </td>
               
                <td>
                    @twitter
                </td>
            </tr>
            <tr>
                <th scope="row">
                    1
                </th>
                <td>
                    <div class="tt" data-tt-id="asd">
                        Mark
                    </div>
                </td>
                <td>
                    Mark
                </td>
                <td>
                    Otto
                </td>
                
                <td>
                    @mdo
                </td>
            </tr>
        </tbody>
    </table>
</div>
​
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.10/d3.min.js">
    </script>
    <script src="{{ asset('js/jquery-treetable.js') }}">
    </script>
    <script>
        $(function() {
    $("table").treetable();
    });
    </script>
   
<script type="text/javascript">
    var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- End of My Services -->
@endsection