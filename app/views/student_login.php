<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? 'Student Access'); ?></title>
    <style>
        :root { --ink:#2b171d; --muted:#735a63; --glass:rgba(252,244,246,.58); --line:rgba(255,255,255,.72); --accent:#9b4053; --accent-dark:#681c2e; }
        * { box-sizing:border-box; }
        body { margin:0; min-height:100vh; display:grid; place-items:center; padding:24px; font-family:Georgia,'Times New Roman',serif; color:var(--ink); background:linear-gradient(135deg,#ead6dc,#d8c1c8 52%,#eee0d2); }
        body:before, body:after { content:""; position:fixed; width:250px; height:250px; border-radius:50%; filter:blur(2px); opacity:.45; z-index:-1; }
        body:before { top:-70px; left:-70px; background:#d49aa7; } body:after { right:-80px; bottom:-80px; background:#d9b99c; }
        .card { width:min(760px,100%); display:grid; grid-template-columns:.8fr 1.2fr; overflow:hidden; background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(44,66,56,.18), inset 0 1px 0 #fff; backdrop-filter:blur(18px); }
        .intro { display:flex; flex-direction:column; justify-content:space-between; padding:38px 30px; color:#fff7f8; background:rgba(104,28,46,.92); } .intro small { letter-spacing:.16em; text-transform:uppercase; } .intro strong { font-size:4rem; line-height:.9; font-weight:400; } .intro p { margin:0; line-height:1.6; color:#f0d8de; }
        .form-side { padding:42px 38px; } .brand { margin-bottom:30px; font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        .avatar { width:82px; height:82px; margin-bottom:22px; display:grid; place-items:center; border-radius:18px; color:white; font-size:1.8rem; font-weight:700; background:var(--accent); box-shadow:8px 8px 0 rgba(104,28,46,.16); }
        h1 { margin:0 0 10px; font-size:2rem; } .subtitle { margin:0 0 28px; color:var(--muted); line-height:1.6; }
        .button { display:block; width:100%; padding:15px 18px; border:0; border-radius:10px; color:#fff; background:var(--accent-dark); font:inherit; font-weight:700; text-decoration:none; cursor:pointer; box-shadow:0 12px 22px rgba(104,28,46,.22); } .button:hover { background:var(--accent); }
        @media (max-width:640px) { .card { grid-template-columns:1fr; } .intro { gap:30px; padding:26px 24px; } .intro strong { font-size:3rem; } .form-side { padding:30px 24px; } }
        @media (max-width:480px) { body { padding:16px 12px; } .form-side { padding:28px 20px; } h1 { font-size:1.7rem; } }
    </style>
</head>
<body>
    <main class="card">
        <section class="intro"><small>Personal file</small><strong>RM</strong><p>Profile</p></section>
        <section class="form-side">
            <div class="brand"><span>Student</span> Portal</div>
            <div class="avatar">RM</div>
            <h1>View Access</h1>
            <p class="subtitle">View Rosemarie Marquez's student profile.</p>
            <a class="button" href="<?= site_url('student/access'); ?>">View Student Profile</a>
        </section>
    </main>
</body>
</html>
