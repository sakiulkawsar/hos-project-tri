<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Check Handlers — Static Preview</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>

  <div class="card">
    <h1>Static preview — AJAX handler responses</h1>
    <div class="small">This page is a <strong>static</strong> preview showing the messages your PHP handler would return. No PHP or JavaScript here — just sample outputs.</div>

    <div class="row" style="margin-top:18px;">

      <div class="item">
        <label class="label">1) Room occupancy check (sample)</label>
        <div class="result">
          <!-- sample when seats already full -->
          <div><strong>Input:</strong> roomno = 101</div>
          <div class="hint err" style="margin-top:8px;">2. Seats already full.</div>

          <hr style="margin:12px 0; border:none; border-top:1px solid rgba(11,26,31,0.04)">

          <!-- sample when all seats available -->
          <div><strong>Input:</strong> roomno = 201</div>
          <div class="hint ok" style="margin-top:8px;">All Seats are Available</div>
        </div>
      </div>

      <div class="item">
        <label class="label">2) Old password check (sample)</label>
        <div class="result">
          <!-- sample when password matched -->
          <div><strong>Input:</strong> oldpassword = userOldPass</div>
          <div class="hint ok" style="margin-top:8px;">Password matched.</div>

          <hr style="margin:12px 0; border:none; border-top:1px solid rgba(11,26,31,0.04)">

          <!-- sample when password not matched -->
          <div><strong>Input:</strong> oldpassword = wrongPass</div>
          <div class="hint err" style="margin-top:8px;">Password Not matched</div>
        </div>
      </div>

      <div class="item">
        <label class="label">3) Email validation / uniqueness (sample)</label>
        <div class="result">
          <!-- invalid email -->
          <div><strong>Input:</strong> emailid = not-an-email</div>
          <div class="hint err" style="margin-top:8px;">error : You did not enter a valid email.</div>

          <hr style="margin:12px 0; border:none; border-top:1px solid rgba(11,26,31,0.04)">

          <!-- email exists -->
          <div><strong>Input:</strong> emailid = existing@example.com</div>
          <div class="hint err" style="margin-top:8px;">Email already exist. Please try again.</div>

          <hr style="margin:12px 0; border:none; border-top:1px solid rgba(11,26,31,0.04)">

          <!-- email available -->
          <div><strong>Input:</strong> emailid = newuser@example.com</div>
          <div class="hint ok" style="margin-top:8px;">(Would be accepted) — no existing record found.</div>
        </div>
      </div>

      <div class="item">
        <label class="label">4) Registration number uniqueness (sample)</label>
        <div class="result">
          <!-- reg no exists -->
          <div><strong>Input:</strong> regno = REG2025-01</div>
          <div class="hint err" style="margin-top:8px;">Registration number already exist. Please try again.</div>

          <hr style="margin:12px 0; border:none; border-top:1px solid rgba(11,26,31,0.04)">

          <!-- reg no available -->
          <div><strong>Input:</strong> regno = REG2025-99</div>
          <div class="hint ok" style="margin-top:8px;">(Would be accepted) — no existing registration found.</div>
        </div>
      </div>

    </div>

    <p class="hint" style="margin-top:16px">If you want, I can convert this back into a safe AJAX endpoint (PHP) + client-side JS so these checks run live when the user types — tell me whether you want raw PHP responses (text/html) or JSON responses for a fetch/AJAX client.</p>
  </div>

</body>
</html>
