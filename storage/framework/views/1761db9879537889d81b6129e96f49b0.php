<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Room Reservation — Register</title>
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
      <button class="tab-btn" type="button" onclick="window.location.href='<?php echo e(route('login')); ?>'">LOGIN</button>
      <button class="tab-btn active" type="button">REGISTER</button>
    </div>

    <!-- REGISTER FORM -->
    <form id="registerForm" class="active">
      <div class="form-heading">
        <h2>Create a <span id="accTypeLabel">Section</span> Account</h2>
        <p id="accTypeSub">Register your section to reserve and manage campus rooms.</p>
      </div>

      <div class="field">
        <label>Account Type</label>
        <div class="account-type-select">
          <label class="role-option selected" id="sectionOpt">
            <input type="radio" name="accountType" value="section" checked onchange="selectAccountType('section')">
            Section Account
          </label>
          <label class="role-option" id="professorOpt">
            <input type="radio" name="accountType" value="professor" onchange="selectAccountType('professor')">
            Professor Account
          </label>
        </div>
      </div>

      <!-- PROFESSOR FIELDS -->
      <div class="field-row" id="professorFields1" style="display:none;">
        <div class="field">
          <label>Full Name</label>
          <input type="text" id="regName" placeholder="e.g. Juan Dela Cruz">
        </div>
        <div class="field">
          <label>Faculty ID</label>
          <input type="text" id="regId" placeholder="e.g. Faculty ID">
        </div>
      </div>
      <div class="field-row" id="professorFields2" style="display:none;">
        <div class="field">
          <label>Department</label>
          <input type="text" id="regDept" placeholder="e.g. College of Computer Studies">
        </div>
        <div class="field">
          <label>Campus</label>
          <select id="regCampusProf">
            <option value="" disabled selected>Select campus</option>
            <option value="main">Main Campus</option>
            <option value="satellite">Satellite Campus</option>
          </select>
        </div>
      </div>

      <!-- SECTION FIELDS -->
      <div class="field-row" id="sectionFields1">
        <div class="field">
          <label>Section Name / Code</label>
          <input type="text" id="regSectionName" placeholder="e.g. BSIT 2-3">
        </div>
        <div class="field">
          <label>Program</label>
          <input type="text" id="regProgram" placeholder="e.g. BS Information Technology">
        </div>
      </div>
      <div class="field-row" id="sectionFields2">
        <div class="field">
          <label>Year Level</label>
          <select id="regYearLevel">
            <option value="" disabled selected>Select year level</option>
            <option value="1">1st Year</option>
            <option value="2">2nd Year</option>
            <option value="3">3rd Year</option>
            <option value="4">4th Year</option>
            <option value="5">5th Year</option>
          </select>
        </div>
        <div class="field">
          <label>Campus</label>
          <select id="regCampusSection">
            <option value="" disabled selected>Select campus</option>
            <option value="main">Main Campus</option>
            <option value="satellite">Satellite Campus</option>
          </select>
        </div>
      </div>

      <div class="field">
        <label>Institutional Email / Username</label>
        <input type="text" id="regEmail" placeholder="Enter your institutional email or username">
      </div>

      <div class="field-row">
        <div class="field password-wrap">
          <label>Password</label>
          <input type="password" id="regPass" placeholder="Create a password">
          <button type="button" class="toggle-pass" id="regPassToggle" onclick="togglePassword('regPass', this)">
            <svg class="icon-eye" viewBox="0 0 24 24"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg>
            <svg class="icon-eye-off" viewBox="0 0 24 24" style="display:none;"><path d="M17.94 17.94A10.94 10.94 0 0112 19c-7 0-11-7-11-7a21.6 21.6 0 015.06-6.06M9.9 4.24A10.9 10.9 0 0112 4c7 0 11 7 11 7a21.6 21.6 0 01-3.11 4.26M14.12 14.12a3 3 0 11-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
          </button>
        </div>

        <div class="field password-wrap">
          <label>Confirm Password</label>
          <input type="password" id="regConfirm" placeholder="Confirm your password">
          <button type="button" class="toggle-pass" id="regConfirmToggle" onclick="togglePassword('regConfirm', this)">
            <svg class="icon-eye" viewBox="0 0 24 24"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg>
            <svg class="icon-eye-off" viewBox="0 0 24 24" style="display:none;"><path d="M17.94 17.94A10.94 10.94 0 0112 19c-7 0-11-7-11-7a21.6 21.6 0 015.06-6.06M9.9 4.24A10.9 10.9 0 0112 4c7 0 11 7 11 7a21.6 21.6 0 01-3.11 4.26M14.12 14.12a3 3 0 11-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
          </button>
        </div>
      </div>

      <label class="terms">
        <input type="checkbox" id="termsCheck">
        <span>I agree to the <a href="#">Terms and Conditions</a> of the Iskedyul system.</span>
      </label>

      <button type="submit" class="submit-btn" id="registerBtn">CREATE ACCOUNT</button>

      <div class="footnote">
        Already have an account? <a href="<?php echo e(route('login')); ?>">Sign in</a>
      </div>
    </form>
  </div>
</div>

<script>
  function selectAccountType(type) {
    const sectionOpt = document.getElementById('sectionOpt');
    const professorOpt = document.getElementById('professorOpt');
    const accTypeLabel = document.getElementById('accTypeLabel');
    const accTypeSub = document.getElementById('accTypeSub');

    const professorFields1 = document.getElementById('professorFields1');
    const professorFields2 = document.getElementById('professorFields2');
    const sectionFields1 = document.getElementById('sectionFields1');
    const sectionFields2 = document.getElementById('sectionFields2');

    sectionOpt.classList.toggle('selected', type === 'section');
    professorOpt.classList.toggle('selected', type === 'professor');

    if (type === 'section') {
      accTypeLabel.textContent = 'Section';
      accTypeSub.textContent = 'Register your section to reserve and manage campus rooms.';

      professorFields1.style.display = 'none';
      professorFields2.style.display = 'none';
      sectionFields1.style.display = 'flex';
      sectionFields2.style.display = 'flex';
    } else {
      accTypeLabel.textContent = 'Professor';
      accTypeSub.textContent = 'Register as a faculty member to reserve and manage campus rooms.';

      sectionFields1.style.display = 'none';
      sectionFields2.style.display = 'none';
      professorFields1.style.display = 'flex';
      professorFields2.style.display = 'flex';
    }
  }

  // Initialize on load: Section Account is the default selected type
  selectAccountType('section');

  document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const type = document.querySelector('input[name="accountType"]:checked').value;
    alert('Account created as ' + type + ' account (connect this to your backend).');
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

  bindPasswordToggleVisibility('regPass', 'regPassToggle');
  bindPasswordToggleVisibility('regConfirm', 'regConfirmToggle');
</script>

</body>
</html><?php /**PATH C:\Users\heavenlee\Downloads\LogInSignup\resources\views/Auth/Register.blade.php ENDPATH**/ ?>