<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? 'Student Home'); ?></title>
    <style>
        :root { --ink:#172033; --muted:#5d6b82; --glass:rgba(255,255,255,.56); --line:rgba(255,255,255,.72); --accent:#dc6b80; --accent-dark:#b84561; }
        * { box-sizing:border-box; } body { margin:0; min-height:100vh; padding:28px 18px; font-family:Arial,Helvetica,sans-serif; color:var(--ink); background:linear-gradient(135deg,#f7d8dc,#d8e4f5 52%,#cde9e1); }
        .shell { width:min(1080px,100%); margin:auto; } .card { background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(64,72,98,.18),inset 0 1px 0 #fff; backdrop-filter:blur(18px); }
        .topbar { display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap; padding:24px 28px; } .brand { font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        nav { display:flex; gap:10px; flex-wrap:wrap; } nav a { padding:11px 15px; border:1px solid rgba(255,255,255,.7); border-radius:12px; color:var(--ink); text-decoration:none; font-weight:700; background:rgba(255,255,255,.3); } nav a:hover { color:var(--accent-dark); background:#fff8; }
        .hero { display:grid; grid-template-columns:1.35fr 1fr; gap:24px; padding:14px 28px 30px; } .panel { min-width:0; padding:30px; border:1px solid rgba(255,255,255,.65); border-radius:22px; background:rgba(255,255,255,.26); box-shadow:inset 0 1px 0 #fff8; }
        .eyebrow { display:inline-block; margin-bottom:16px; padding:7px 11px; border-radius:999px; color:var(--accent-dark); background:rgba(220,107,128,.13); font-size:.72rem; font-weight:700; letter-spacing:.08em; text-transform:uppercase; } h1 { margin:0 0 16px; font-size:clamp(2.2rem,5vw,4rem); overflow-wrap:anywhere; } .lead { color:var(--muted); line-height:1.7; }
        .profile { text-align:center; } .avatar { width:112px; height:112px; margin:0 auto 18px; display:grid; place-items:center; border-radius:50%; color:#fff; font-size:2.5rem; font-weight:700; background:linear-gradient(145deg,#ee9aaa,var(--accent-dark)); box-shadow:0 12px 24px #b8456138; } h2 { margin:0 0 20px; overflow-wrap:anywhere; }
        .mini { display:grid; gap:10px; text-align:left; } .mini div { display:flex; justify-content:space-between; gap:12px; padding:10px 12px; border-bottom:1px solid #ffffff80; } .mini span { min-width:0; text-align:right; overflow-wrap:anywhere; } .mini strong { color:var(--muted); }
        @media (max-width:760px) { .hero { grid-template-columns:1fr; } .topbar { justify-content:center; text-align:center; } nav { justify-content:center; } } @media (max-width:480px) { body { padding:16px 12px; } .topbar { padding:20px 16px; } .hero { gap:16px; padding:4px 16px 20px; } .panel { padding:22px 18px; } nav a { padding:10px 12px; font-size:.9rem; } }
    </style>
</head>
<body>
    <main class="shell card">
        <header class="topbar"><div class="brand"><span>Student</span> Portal</div><nav><a href="<?= site_url('student/profile'); ?>">Student Profile</a><a href="<?= site_url('student/logout'); ?>">Logout</a></nav></header>
        <section class="hero">
            <div class="panel"><div class="eyebrow">Student Information</div><h1>Welcome!</h1><p class="lead">You are viewing the student information of Rosemarie Marquez. Open the profile for complete details.</p></div>
            <div class="panel profile"><div class="avatar">RM</div><h2><?= htmlspecialchars($student['name']); ?></h2><div class="mini"><div><strong>Student ID</strong><span><?= htmlspecialchars($student['student_id']); ?></span></div><div><strong>Course</strong><span><?= htmlspecialchars($student['course']); ?></span></div><div><strong>Year</strong><span><?= htmlspecialchars($student['year']); ?></span></div><div><strong>Section</strong><span><?= htmlspecialchars($student['section']); ?></span></div></div></div>
        </section>
    </main>
</body>
</html>
