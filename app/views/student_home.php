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
        :root { --ink:#2b171d; --muted:#735a63; --glass:rgba(252,244,246,.56); --line:rgba(255,255,255,.72); --accent:#9b4053; --accent-dark:#681c2e; }
        * { box-sizing:border-box; } body { margin:0; min-height:100vh; padding:28px 18px; font-family:Georgia,'Times New Roman',serif; color:var(--ink); background:linear-gradient(135deg,#ead6dc,#d8c1c8 52%,#eee0d2); }
        .shell { width:min(1080px,100%); margin:auto; } .card { background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(83,35,48,.18),inset 0 1px 0 #fff; backdrop-filter:blur(18px); }
        .topbar { display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap; padding:24px 28px; border-bottom:1px solid #ffffff80; } .brand { display:inline-flex; align-items:center; gap:10px; font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        .brand-logo { width:42px; height:42px; object-fit:contain; flex:0 0 auto; }
        nav { display:flex; gap:10px; flex-wrap:wrap; } nav a { padding:10px 14px; border-bottom:2px solid var(--accent); color:var(--ink); text-decoration:none; font-weight:700; } nav a:hover { color:var(--accent-dark); }
        .hero { display:grid; grid-template-columns:1fr 1.1fr; gap:0; padding:0 28px 30px; } .panel { min-width:0; padding:36px 30px; } .welcome { border-right:1px solid #ffffff99; }
        .eyebrow { display:inline-block; margin-bottom:16px; color:var(--accent-dark); font-size:.72rem; font-weight:700; letter-spacing:.12em; text-transform:uppercase; } h1 { margin:0 0 16px; font-size:clamp(2.5rem,5vw,4.6rem); line-height:.98; overflow-wrap:anywhere; } .lead { color:var(--muted); line-height:1.7; }
        .profile { align-self:center; } .avatar { width:112px; height:112px; margin:0 auto 18px; display:block; object-fit:cover; border-radius:18px; border:4px solid rgba(255,255,255,.7); box-shadow:9px 9px 0 #9b405355; } h2 { margin:0 0 20px; overflow-wrap:anywhere; }
        .mini { display:grid; gap:10px; text-align:left; } .mini div { display:flex; justify-content:space-between; gap:12px; padding:10px 0; border-bottom:1px solid #ffffff99; } .mini span { min-width:0; text-align:right; overflow-wrap:anywhere; } .mini strong { color:var(--muted); }
        @media (max-width:760px) { .hero { grid-template-columns:1fr; } .welcome { border-right:0; border-bottom:1px solid #ffffff99; } .topbar { justify-content:center; text-align:center; } nav { justify-content:center; } } @media (max-width:480px) { body { padding:16px 12px; } .topbar { padding:20px 16px; } .hero { padding:0 16px 20px; } .panel { padding:28px 4px; } nav a { padding:10px 12px; font-size:.9rem; } }
    </style>
</head>
<body>
    <main class="shell card">
        <header class="topbar"><div class="brand"><img class="brand-logo" src="<?= base_url('minsulogo.png'); ?>" alt="Mindoro State University logo"><span>Student</span> Portal</div><nav><a href="<?= site_url('student/profile'); ?>">Student Profile</a><a href="<?= site_url('student/logout'); ?>">Logout</a></nav></header>
        <section class="hero">
            <div class="panel"><div class="eyebrow">Student Information</div><h1>Welcome!</h1><p class="lead">You are viewing the student information of Rosemarie Marquez. Open the profile for complete details.</p></div>
            <div class="panel profile"><img class="avatar" src="<?= base_url($student['profile_picture']); ?>" alt="<?= htmlspecialchars($student['name']); ?> profile picture"><h2><?= htmlspecialchars($student['name']); ?></h2><div class="mini"><div><strong>Student ID</strong><span><?= htmlspecialchars($student['student_id']); ?></span></div><div><strong>Course</strong><span><?= htmlspecialchars($student['course']); ?></span></div><div><strong>Year</strong><span><?= htmlspecialchars($student['year']); ?></span></div><div><strong>Section</strong><span><?= htmlspecialchars($student['section']); ?></span></div></div></div>
        </section>
    </main>
</body>
</html>
