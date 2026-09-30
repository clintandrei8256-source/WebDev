<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Room Reservation — Access Portal</title>
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
      <button class="tab-btn active" id="loginTab" onclick="switchTab('login')" type="button">LOGIN</button>
      <button class="tab-btn" id="registerTab" onclick="switchTab('register')" type="button">REGISTER</button>
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
        Don't have an account? <a href="#" onclick="switchTab('register'); return false;">Create an account</a>
      </div>
    </form>

    <!-- REGISTER FORM -->
    <form id="registerForm">
      <div class="form-heading">
        <h2 class="serif-heading">Create a <span id="accTypeLabel">Section</span> Account</h2>
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
          <input type="text" id="regSectionName" placeholder="e.g. BSIT 2-3" required>
        </div>
        <div class="field">
          <label>Program</label>
          <input type="text" id="regProgram" placeholder="e.g. BS Information Technology" required>
        </div>
      </div>
      <div class="field-row" id="sectionFields2">
        <div class="field">
          <label>Year Level</label>
          <select id="regYearLevel" required>
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
          <select id="regCampusSection" required>
            <option value="" disabled selected>Select campus</option>
            <option value="main">Main Campus</option>
            <option value="satellite">Satellite Campus</option>
          </select>
        </div>
      </div>

      <div class="field">
        <label>Institutional Email / Username</label>
        <input type="text" id="regEmail" placeholder="Enter your institutional email or username" required>
      </div>

      <div class="field-row">
        <div class="field password-wrap">
          <label>Password</label>
          <input type="password" id="regPass" placeholder="Create a password" oninput="validatePassword()" required>
        </div>

        <div class="field password-wrap">
          <label>Confirm Password</label>
          <input type="password" id="regConfirm" placeholder="Confirm your password" oninput="validatePassword()" required>
        </div>
      </div>
      <div class="hint" id="matchHint"></div>

      <label class="terms">
        <input type="checkbox" id="termsCheck" onchange="checkFormValidity()">
        <span>I agree to the <a href="#">Terms and Conditions</a> of the Iskedyul system.</span>
      </label>

      <button type="submit" class="submit-btn" id="registerBtn" disabled>CREATE ACCOUNT</button>

      <div class="footnote">
        Already have an account? <a href="#" onclick="switchTab('login'); return false;">Sign in</a>
      </div>
    </form>
  </div>
</div>

<script>
  function switchTab(tab) {
    const loginTab = document.getElementById('loginTab');
    const registerTab = document.getElementById('registerTab');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    if (tab === 'login') {
      loginTab.classList.add('active');
      registerTab.classList.remove('active');
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
    } else {
      registerTab.classList.add('active');
      loginTab.classList.remove('active');
      registerForm.classList.add('active');
      loginForm.classList.remove('active');
    }
  }

  function toggleRequired(container, isRequired) {
    container.querySelectorAll('input, select').forEach(el => { el.required = isRequired; });
  }

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

      toggleRequired(professorFields1, false);
      toggleRequired(professorFields2, false);
      toggleRequired(sectionFields1, true);
      toggleRequired(sectionFields2, true);
    } else {
      accTypeLabel.textContent = 'Professor';
      accTypeSub.textContent = 'Register as a faculty member to reserve and manage campus rooms.';

      sectionFields1.style.display = 'none';
      sectionFields2.style.display = 'none';
      professorFields1.style.display = 'flex';
      professorFields2.style.display = 'flex';

      toggleRequired(sectionFields1, false);
      toggleRequired(sectionFields2, false);
      toggleRequired(professorFields1, true);
      toggleRequired(professorFields2, true);
    }
  }

  // Initialize on load: Section Account is the default selected type
  selectAccountType('section');

  let pwValid = false;

  function validatePassword() {
    const pass = document.getElementById('regPass').value;
    const confirm = document.getElementById('regConfirm').value;

    const ruleLen = pass.length >= 8;
    const ruleUpper = /[A-Z]/.test(pass);
    const ruleNum = /[0-9]/.test(pass);
    const ruleSpecial = /[!@#$%^&*(),.?":{}|<>_\-]/.test(pass);
    const allValid = ruleLen && ruleUpper && ruleNum && ruleSpecial;

    const matchHint = document.getElementById('matchHint');
    let matchOk = false;
    if (confirm.length === 0) {
      matchHint.textContent = '';
      matchHint.className = 'hint';
    } else if (pass === confirm) {
      matchHint.textContent = '✓ Passwords match';
      matchHint.className = 'hint success';
      matchOk = true;
    } else {
      matchHint.textContent = '✕ Passwords do not match';
      matchHint.className = 'hint error';
    }

    pwValid = allValid && matchOk;
    checkFormValidity();
  }

  function checkFormValidity() {
    const termsChecked = document.getElementById('termsCheck').checked;
    document.getElementById('registerBtn').disabled = !(pwValid && termsChecked);
  }

  document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Login submitted (connect this to your backend).');
  });

  document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const type = document.querySelector('input[name="accountType"]:checked').value;
    alert('Account created as ' + type + ' account (connect this to your backend).');
  });
</script>

</body>
</html><?php /**PATH C:\Users\heavenlee\Downloads\LogInSignup\resources\views/Auth/LogInRegister.blade.php ENDPATH**/ ?>