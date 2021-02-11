<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup for an iDiscuss</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/forum/partials/_handleSignup.php" method="post">
        <div class="form-group">
            <label for="signupEmail">Username</label>
            <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="signupPassword">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="signupPassword">
        </div>
        <div class="form-group">
            <label for="signupcPassword">Confirm Password</label>
            <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type same password.</small>
        </div>
        
        <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>