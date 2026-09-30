<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Room Reservation — Login</title>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Playfair+Display:ital,wght@0,700;1,700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
      <button class="tab-btn" type="button" onclick="window.location.href='{{ route('register') }}'">REGISTER</button>
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
        <input type="password" id="loginPass" placeholder="Enter your password">
        <button type="button" class="toggle-pass" id="loginPassToggle" onclick="togglePassword('loginPass', this)">
          <svg class="icon-eye" viewBox="0 0 24 24"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg>
          <svg class="icon-eye-off" viewBox="0 0 24 24" style="display:none;"><path d="M17.94 17.94A10.94 10.94 0 0112 19c-7 0-11-7-11-7a21.6 21.6 0 015.06-6.06M9.9 4.24A10.9 10.9 0 0112 4c7 0 11 7 11 7a21.6 21.6 0 01-3.11 4.26M14.12 14.12a3 3 0 11-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
        </button>
      </div>

      <div class="row-inline">
        <label><input type="checkbox"> Remember me</label>
        <a href="#" style="color:var(--maroon);">Forgot Password?</a>
      </div>

      <button type="submit" class="submit-btn">SIGN IN</button>

      <div class="footnote">
        Don't have an account? <a href="{{ route('register') }}">Create an account</a>
      </div>
    </form>
  </div>
</div>

<script>
  document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Login submitted (connect this to your backend).');
  });

  function togglePassword(inputId, btn) {
    const input = document.getElementById(inputId);
    const eye = btn.querySelector('.icon-eye');
    const eyeOff = btn.querySelector('.icon-eye-off');

    if (input.type === 'password') {
      input.type = 'text';
      eye.style.display = 'none';
      eyeOff.style.display = 'block';
    } else {
      input.type = 'password';
      eye.style.display = 'block';
      eyeOff.style.display = 'none';
    }
  }

  function bindPasswordToggleVisibility(inputId, toggleId) {
    const input = document.getElementById(inputId);
    const toggle = document.getElementById(toggleId);

    input.addEventListener('input', function () {
      toggle.classList.toggle('visible', input.value.length > 0);
    });
  }

  bindPasswordToggleVisibility('loginPass', 'loginPassToggle');
</script>

</body>
</html>