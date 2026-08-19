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
        :root { --ink:#21312d; --muted:#65736e; --glass:rgba(244,249,244,.58); --line:rgba(255,255,255,.72); --accent:#648f7b; --accent-dark:#315f50; }
        * { box-sizing:border-box; }
        body { margin:0; min-height:100vh; display:grid; place-items:center; padding:24px; font-family:Georgia,'Times New Roman',serif; color:var(--ink); background:linear-gradient(135deg,#dbe8df,#b7c9c1 52%,#e8dfc9); }
        body:before, body:after { content:""; position:fixed; width:250px; height:250px; border-radius:50%; filter:blur(2px); opacity:.45; z-index:-1; }
        body:before { top:-70px; left:-70px; background:#b9d7c4; } body:after { right:-80px; bottom:-80px; background:#d7c798; }
        .card { width:min(760px,100%); display:grid; grid-template-columns:.8fr 1.2fr; overflow:hidden; background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(44,66,56,.18), inset 0 1px 0 #fff; backdrop-filter:blur(18px); }
        .intro { display:flex; flex-direction:column; justify-content:space-between; padding:38px 30px; color:#f4faf5; background:rgba(49,95,80,.9); } .intro small { letter-spacing:.16em; text-transform:uppercase; } .intro strong { font-size:4rem; line-height:.9; font-weight:400; } .intro p { margin:0; line-height:1.6; color:#d9e9df; }
        .form-side { padding:42px 38px; } .brand { margin-bottom:30px; font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        .avatar { width:82px; height:82px; margin-bottom:22px; display:grid; place-items:center; border-radius:18px; color:white; font-size:1.8rem; font-weight:700; background:var(--accent); box-shadow:8px 8px 0 rgba(49,95,80,.16); }
        h1 { margin:0 0 10px; font-size:2rem; } .subtitle { margin:0 0 28px; color:var(--muted); line-height:1.6; }
        .button { display:block; width:100%; padding:15px 18px; border:0; border-radius:10px; color:#fff; background:var(--accent-dark); font:inherit; font-weight:700; text-decoration:none; cursor:pointer; box-shadow:0 12px 22px rgba(49,95,80,.22); } .button:hover { background:var(--accent); }
        @media (max-width:640px) { .card { grid-template-columns:1fr; } .intro { gap:30px; padding:26px 24px; } .intro strong { font-size:3rem; } .form-side { padding:30px 24px; } }
        @media (max-width:480px) { body { padding:16px 12px; } .form-side { padding:28px 20px; } h1 { font-size:1.7rem; } }
    </style>
</head>
<body>
    <main class="card">
        <section class="intro"><small>Personal file · 03</small><strong>RM</strong><p>A quiet space for Rosemarie's student record.</p></section>
        <section class="form-side">
            <div class="brand"><span>Student</span> Portal</div>
            <div class="avatar">RM</div>
            <h1>Student Access</h1>
            <p class="subtitle">View Rosemarie Marquez's student profile.</p>
            <a class="button" href="<?= site_url('student/access'); ?>">View Student Profile</a>
        </section>
    </main>
</body>
</html>
