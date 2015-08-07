@extends('backend.layout.layout') 

@section('styles') @endsection
@section('scripts') 
{!! HTML::script('highcharts/highcharts.js') !!}
{!! HTML::script('highcharts/exporting.js') !!}
  <script type="text/javascript">
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };

        $(document).ready(function () {

            if ($('#tag').length != 0) {
                var elt = $('#tag');
                elt.tagsinput();
            }
        });
    </script>
@endsection
  

@section('pagetitle') 
<!-- Content Header (Page header) -->
	<section class="content-header">
	    <!--section starts-->
	    <h1>User Profile</h1>
	    <ol class="breadcrumb">
	        <li>
	            <a href="index.html">
	                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
	                Home
	            </a>
	        </li>
	        <li>
	            <a href="#">Users</a>
	        </li>
	        <li class="active">User Profile</li>
	    </ol>
	</section>
@endsection
@section('content')
   <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">
                                   <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                                User Profile</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">
                             <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Change Password</a>
                            </li>
                            <li>
                                <a href="user_profile.html" >
                             <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Advanced User Profile</a>
                            </li>
                           
                        </ul>
                        <div  class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                   
                                                    User Profile
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-4">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-file">
                                                            <img data-src="holder.js/100%x100%" alt="..."></div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                                        <div>
                                                            <span class="btn btn-default btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="..."></span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped" id="users">

                                                                <tr>
                                                                    <td>User Name</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Edit User Name">Bella</a>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">gankunding@hotmail.com</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone Number</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">(999) 999-9999</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Edit Address">Sydney, Australia</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>
                                                                        <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status"></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Created At</td>
                                                                    <td>
                                                                        1 month ago
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>City</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1"  class="editable" data-title="Edit City">Nakia</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12 pd-top">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="inputpassword" class="col-md-3 control-label">
                                                        Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password" placeholder="Password" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputnumber" class="col-md-3 control-label">
                                                        Confirm Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password" placeholder="Password" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                    &nbsp;
                                                    <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
 
@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
