<?php require_once 'navigation.php'?>
<div class="container">
	<h1>This is live</h1>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
            <div class="row">
                <a href="" class="btn btn-primary col-xs-6">Login</a>
                <a href="/codeigniter/signup" class="btn btn-default col-xs-6">Signup</a>
            </div>
            <div class="row">
                <form action="" method="post">
                    <div class="form-group">
                        <h4 class='text-danger' id="message"></h4>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" id='password' name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-block btn-primary" id="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo site_url('static/js/login.js')?>"></script>
