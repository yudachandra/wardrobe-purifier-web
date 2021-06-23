<!DOCTYPE html>
<html>
<body>
  <div class="center-block w-xxl w-auto-xs p-y-md">
      <div class="navbar">
        <div class="pull-center">
          <div ui-include="'../views/blocks/navbar.brand.html'"></div>
        </div>
      </div>

      <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
        <div class="m-b text-sm">
          Sign up to your {{app.name}} Account
        </div>
        <form name="form">
          <div class="md-form-group">
            <input type="text" class="md-input" required>
            <label>User Name PHP</label>
          </div>
            <div class="md-form-group">
              <input type="text" class="md-input" required>
              <label>Name</label>
            </div>
          <div class="md-form-group">
        </div>
          <div class="md-form-group">
            <input type="text" class="md-input" required>
            <label>Phone</label>
          </div>
        <div class="md-form-group">
            <input type="email" class="md-input" required>
            <label>Email</label>
          </div>
          <div class="md-form-group">
            <input type="password" class="md-input" required>
            <label>Password</label>
          </div>
          <button type="submit" class="btn primary btn-block p-x-md">Sign up</button>
        </form>
      </div>

      <div class="p-v-lg text-center">
        <div>Already have an account? <a ui-sref="access.signin" href="signin.html" class="text-primary _600">Sign in</a></div>
      </div>
    </div>

    <?php echo date('l, F jS, Y'); ?>.

</body>
</html>