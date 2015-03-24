<div class="container">
    <br/><br/><br/><br/><br/>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert hide response-msg" role="alert"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo URL::to('/signin') ?>" method="post" id="auth">
                        <fieldset>
                            <div class="form-group">
                            	<input class="form-control" type="text" name="username" placeholder="username" required autofocus/>	
                            </div>
                            <div class="form-group">
                               <input class="form-control" 	type="password" name="password" placeholder="password" required/>	
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn  btn-primary ">Sign in</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>