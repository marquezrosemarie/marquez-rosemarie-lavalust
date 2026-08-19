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
        :root { --ink:#172033; --muted:#5d6b82; --glass:rgba(255,255,255,.58); --line:rgba(255,255,255,.72); --accent:#dc6b80; --accent-dark:#b84561; }
        * { box-sizing:border-box; }
        body { margin:0; min-height:100vh; display:grid; place-items:center; padding:24px; font-family:Arial,Helvetica,sans-serif; color:var(--ink); background:linear-gradient(135deg,#f7d8dc,#d8e4f5 52%,#cde9e1); }
        body:before, body:after { content:""; position:fixed; width:250px; height:250px; border-radius:50%; filter:blur(2px); opacity:.45; z-index:-1; }
        body:before { top:-70px; left:-70px; background:#f4a7ae; } body:after { right:-80px; bottom:-80px; background:#a9d8d0; }
        .card { width:min(440px,100%); padding:42px 38px; text-align:center; background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(64,72,98,.18), inset 0 1px 0 #fff; backdrop-filter:blur(18px); }
        .brand { margin-bottom:30px; font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        .avatar { width:92px; height:92px; margin:0 auto 22px; display:grid; place-items:center; border-radius:50%; color:white; font-size:2rem; font-weight:700; background:linear-gradient(145deg,#ee9aaa,var(--accent-dark)); box-shadow:0 12px 24px rgba(184,69,97,.25); }
        h1 { margin:0 0 10px; font-size:2rem; } .subtitle { margin:0 0 28px; color:var(--muted); line-height:1.6; }
        .button { display:block; width:100%; padding:15px 18px; border:0; border-radius:14px; color:#fff; background:linear-gradient(135deg,var(--accent),var(--accent-dark)); font:inherit; font-weight:700; text-decoration:none; cursor:pointer; box-shadow:0 12px 22px rgba(184,69,97,.22); } .button:hover { transform:translateY(-1px); }
        @media (max-width:480px) { body { padding:16px 12px; } .card { padding:32px 22px; } h1 { font-size:1.7rem; } }
    </style>
</head>
<body>
    <main class="card">
        <div class="brand"><span>Student</span> Portal</div>
        <div class="avatar">RM</div>
        <h1>Student Access</h1>
        <p class="subtitle">View Rosemarie Marquez's student profile.</p>
        <a class="button" href="<?= site_url('student/access'); ?>">View Student Profile</a>
    </main>
</body>
</html>
