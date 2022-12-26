  <!-- Start Student Registration Form  -->
<form id="stuRegForm">
    <div class="form-group">
        <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
        <small id="statusMsg1"></small>
        <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname" value="">
    </div>    
    <div class="form-group">
        <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
        <small id="statusMsg2"></small>
        <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail" value="">
        <small class="form-text">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
        <small id="statusMsg3"></small>
        <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass" value="" autocomplete="on">
    </div>
    <div class="form-group">
        <i class="fas fa-key"></i><label for="stucpass" class="pl-2 font-weight-bold">Confirm Password</label>
        <small id="statusMsg4"></small>
        <input type="password" class="form-control" placeholder="cPassword" name="cstupass" id="cstupass" value="" autocomplete="on">
    </div>
        <!-- <small class="form-text">We've sent a verification code to your email</small> -->
</form>
<!-- End Student Registration Form  -->