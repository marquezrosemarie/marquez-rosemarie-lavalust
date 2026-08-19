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
        :root { --ink:#2b171d; --muted:#735a63; --glass:rgba(252,244,246,.56); --line:rgba(255,255,255,.72); --accent:#9b4053; --accent-dark:#681c2e; --safe:#256b58; --safe-soft:#d9eee5; --locked:#8d3148; --locked-soft:#f4d8df; }
        * { box-sizing:border-box; } body { margin:0; min-height:100vh; padding:28px 18px; font-family:Georgia,'Times New Roman',serif; color:var(--ink); background:linear-gradient(135deg,#ead6dc,#d8c1c8 52%,#eee0d2); }
        .shell { width:min(1080px,100%); margin:auto; } .card { background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(83,35,48,.18),inset 0 1px 0 #fff; backdrop-filter:blur(18px); }
        .topbar { display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap; padding:24px 28px; border-bottom:1px solid #ffffff80; } .brand { display:inline-flex; align-items:center; gap:10px; font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        .brand-logo { width:42px; height:42px; object-fit:contain; flex:0 0 auto; }
        nav { display:flex; gap:10px; flex-wrap:wrap; } nav a { padding:10px 14px; border-bottom:2px solid var(--accent); color:var(--ink); text-decoration:none; font-weight:700; } nav a:hover { color:var(--accent-dark); }
        .hero { display:grid; grid-template-columns:1fr 1.1fr; gap:0; padding:0 28px 30px; } .panel { min-width:0; padding:36px 30px; } .welcome { border-right:1px solid #ffffff99; }
        .eyebrow { display:inline-block; margin-bottom:16px; color:var(--accent-dark); font-size:.72rem; font-weight:700; letter-spacing:.12em; text-transform:uppercase; } h1 { margin:0 0 16px; font-size:clamp(2.5rem,5vw,4.6rem); line-height:.98; overflow-wrap:anywhere; } .lead { color:var(--muted); line-height:1.7; }
        .profile { align-self:center; } .avatar { width:112px; height:112px; margin:0 auto 18px; display:block; object-fit:cover; border-radius:18px; border:4px solid rgba(255,255,255,.7); box-shadow:9px 9px 0 #9b405355; } h2 { margin:0 0 20px; overflow-wrap:anywhere; }
        .mini { display:grid; gap:10px; text-align:left; } .mini div { display:flex; justify-content:space-between; gap:12px; padding:10px 0; border-bottom:1px solid #ffffff99; } .mini span { min-width:0; text-align:right; overflow-wrap:anywhere; } .mini strong { color:var(--muted); }
        .access-panel { margin:0 28px 30px; padding:20px 24px; border:1px solid #ffffffb8; border-radius:18px; background:rgba(255,255,255,.34); } .access-panel.is-on { border-color:#d69aaa; background:linear-gradient(120deg,#fff0f3,#f6dce3); } .access-panel.is-off { border-color:#9bcdbd; background:linear-gradient(120deg,#effaf5,#d9eee5); } .access-head { display:flex; justify-content:space-between; align-items:center; gap:18px; } .status { flex:0 0 auto; display:inline-flex; align-items:center; gap:8px; padding:9px 12px; border-radius:999px; font-size:.76rem; font-weight:700; letter-spacing:.08em; text-transform:uppercase; } .status:before { content:""; width:8px; height:8px; border-radius:50%; background:currentColor; box-shadow:0 0 0 4px currentColor; opacity:.22; } .status-on { color:var(--locked); background:var(--locked-soft); } .status-off { color:var(--safe); background:var(--safe-soft); } .access-actions { display:flex; justify-content:flex-end; align-items:center; gap:18px; margin-top:16px; } .toggle { min-width:72px; padding:11px 16px; border:0; border-radius:8px; color:#fff; background:var(--accent-dark); font:inherit; font-size:.88rem; font-weight:700; cursor:pointer; } .toggle:hover { background:var(--accent); } .access-panel.is-off .toggle { color:#174d3e; background:#b6dfcf; } .access-panel.is-off .toggle:hover { background:#a0d2bf; }
        .notice { margin:0 28px 24px; padding:14px 18px; border-left:4px solid var(--locked); color:var(--locked); background:#fff0f3; font-weight:700; }
        @media (max-width:760px) { .hero { grid-template-columns:1fr; } .welcome { border-right:0; border-bottom:1px solid #ffffff99; } .topbar { justify-content:center; text-align:center; } nav { justify-content:center; } .access-head,.access-actions { align-items:stretch; flex-direction:column; } .status { align-self:flex-start; } } @media (max-width:480px) { body { padding:16px 12px; } .topbar { padding:20px 16px; } .hero { padding:0 16px 20px; } .panel { padding:28px 4px; } .access-panel { margin:0 16px 20px; padding:20px 18px; } .notice { margin:0 16px 20px; } nav a { padding:10px 12px; font-size:.9rem; } }
    </style>
</head>
<body>
    <main class="shell card">
        <header class="topbar"><div class="brand"><img class="brand-logo" src="<?= base_url('minsulogo.png'); ?>" alt="Mindoro State University logo"><span>Student</span> Portal</div><nav><a href="<?= site_url('student/profile'); ?>">Student Profile</a><a href="<?= site_url('student/logout'); ?>">Logout</a></nav></header>
        <?php if ($middleware_blocked ?? false): ?><p class="notice">Profile access is blocked.</p><?php endif; ?>
        <?php $protection_enabled = $middleware_protection_enabled ?? false; ?>
        <section class="access-panel <?= $protection_enabled ? 'is-on' : 'is-off'; ?>">
            <div class="access-head"><span class="status <?= $protection_enabled ? 'status-on' : 'status-off'; ?>"><?= $protection_enabled ? 'ON' : 'OFF'; ?></span><form method="post" action="<?= site_url('student/middleware/toggle'); ?>"><button class="toggle" type="submit"><?= $protection_enabled ? 'OFF' : 'ON'; ?></button></form></div>
        </section>
        <section class="hero">
            <div class="panel"><div class="eyebrow">Student Information</div><h1>Welcome!</h1><p class="lead">You are viewing the student information of Rosemarie Marquez. Open the profile for complete details.</p></div>
            <div class="panel profile"><img class="avatar" src="<?= base_url($student['profile_picture']); ?>" alt="<?= htmlspecialchars($student['name']); ?> profile picture"><h2><?= htmlspecialchars($student['name']); ?></h2><div class="mini"><div><strong>Student ID</strong><span><?= htmlspecialchars($student['student_id']); ?></span></div><div><strong>Course</strong><span><?= htmlspecialchars($student['course']); ?></span></div><div><strong>Year</strong><span><?= htmlspecialchars($student['year']); ?></span></div><div><strong>Section</strong><span><?= htmlspecialchars($student['section']); ?></span></div></div></div>
        </section>
    </main>
</body>
</html>
