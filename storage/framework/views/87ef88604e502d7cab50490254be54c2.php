<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Room Reservation — Login</title>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Playfair+Display:ital,wght@0,700;1,700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
<div class="card">
  <!-- LEFT PANEL -->
  <div class="side-panel">
    <div class="side-top">
      <div class="tag">CAMPUS ROOM RESERVATION</div>
      <h1 class="brand-label">ISKEDYUL</h1>
      <div class="divider"></div>
    </div>
    <div class="side-mid">
      Para sa mas maayos na silid, oras, at Iskedyul ng isko at iska.
    </div>
    <div class="side-bottom">
      <span>EST. 2026 — CAMPUS ACCESS</span>
    </div>
    <div class="watermark">PUP</div>
    <div class="watermark-top">Iskedyul</div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="form-panel">
    <div class="tabs">
      <button class="tab-btn active" type="button">LOGIN</button>
      <button class="tab-btn" type="button" onclick="window.location.href='<?php echo e(route('register')); ?>'">REGISTER</button>
    </div>

    <!-- LOGIN FORM -->
    <form id="loginForm" class="active">
      <div class="form-heading">
        <h2>Welcome Back!</h2>
        <p class="form-sub">Sign in to manage your campus room reservations.</p>
      </div>

      <div class="field">
        <label>Email / Username</label>
        <input type="text" placeholder="Enter your email or username" required>
      </div>

      <div class="field password-wrap">
        <label>Password</label>
        <input type="password" id="loginPass" placeholder="Enter your password" required>
      </div>

      <div class="row-inline">
        <label><input type="checkbox"> Remember me</label>
        <a href="#" style="color:var(--maroon);">Forgot Password?</a>
      </div>

      <button type="submit" class="submit-btn">SIGN IN</button>

      <div class="footnote">
        Don't have an account? <a href="<?php echo e(route('register')); ?>">Create an account</a>
      </div>
    </form>
  </div>
</div>

<script>
  document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Login submitted (connect this to your backend).');
  });
</script>

</body>
</html><?php /**PATH C:\Users\heavenlee\Downloads\LogInSignup\resources\views/Auth/Login.blade.php ENDPATH**/ ?>