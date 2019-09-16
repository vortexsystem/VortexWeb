<?php foreach ($estate_array as $estate){ ?>


    <div class="row">
        <div class="col-sm-10">
            <h1>User name</h1></div>
        
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> 2.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> Yesterday</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> Joseph Doe</li>

            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
            </div>

            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul>

         

        </div>
        <!--/col-3-->
        <div class="col-sm-9">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Label 1</th>
                                    <th>Label 2</th>
                                    <th>Label 3</th>
                                    <th>Label </th>
                                    <th>Label </th>
                                    <th>Label </th>
                                </tr>
                            </thead>
                            <tbody id="items">
                                <tr>
                                    <td>1</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                              
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <ul class="pagination" id="myPager"></ul>
                            </div>
                        </div>
                    </div>
                    <!--/table-resp-->

                    <hr>

                </div>
                <!--/tab-pane-->
                <div class="tab-pane" id="messages">

                    <h2></h2>

                    <ul class="list-group">
                        <li class="list-group-item text-muted">Inbox</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>

                    </ul>

                </div>
                <!--/tab-pane-->
                <div class="tab-pane" id="settings">

                    <hr>
                    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Estate Settings</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estatesettings-name">Estate Name</label>  
  <div class="col-md-4">
  <input id="estatesettings-name" name="estatesettings-name" type="text" placeholder="Couldn't Get Estate Name" class="form-control input-md">
  <span class="help-block">Your State</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="estatesettings-voice">Estate Voice Status</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="estatesettings-voice-0">
      <input type="radio" name="estatesettings-voice" id="estatesettings-voice-0" value="1" checked="checked">
      <b>Enable</b> Voice
    </label>
	</div>
  <div class="radio">
    <label for="estatesettings-voice-1">
      <input type="radio" name="estatesettings-voice" id="estatesettings-voice-1" value="0">
      <b>Disable</b> Voice
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="estatesettings-denyminors">Allow Minors(Under 18 In Real Life) in your Estate?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="estatesettings-denyminors-0">
      <input type="radio" name="estatesettings-denyminors" id="estatesettings-denyminors-0" value="1" checked="checked">
      <b>Allow</b> Minors
    </label>
	</div>
  <div class="radio">
    <label for="estatesettings-denyminors-1">
      <input type="radio" name="estatesettings-denyminors" id="estatesettings-denyminors-1" value="0">
      <b>Block</b> Minors
    </label>
	</div>
  </div>
</div>

</fieldset>
</form>

                </div>

            </div>
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->

  <?php } ?>
