<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title ?? 'Student Profile'); ?></title>
    <style>
        :root { --ink:#172033; --muted:#5d6b82; --glass:rgba(255,255,255,.56); --line:rgba(255,255,255,.72); --accent:#dc6b80; --accent-dark:#b84561; }
        * { box-sizing:border-box; } body { margin:0; min-height:100vh; padding:28px 18px; font-family:Arial,Helvetica,sans-serif; color:var(--ink); background:linear-gradient(135deg,#f7d8dc,#d8e4f5 52%,#cde9e1); } .shell { width:min(1100px,100%); margin:auto; }
        .card { background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(64,72,98,.18),inset 0 1px 0 #fff; backdrop-filter:blur(18px); overflow:hidden; } .header { display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap; padding:24px 28px; border-bottom:1px solid #ffffff80; } .brand { font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        nav { display:flex; gap:10px; flex-wrap:wrap; } nav a { padding:11px 15px; border:1px solid #ffffffb3; border-radius:12px; color:var(--ink); text-decoration:none; font-weight:700; background:#ffffff4d; } nav a:hover { color:var(--accent-dark); background:#fff8; }
        .content { display:grid; grid-template-columns:270px 1fr; gap:24px; padding:28px; min-width:0; } .aside,.details { min-width:0; padding:24px; border:1px solid #ffffffa6; border-radius:22px; background:#ffffff42; box-shadow:inset 0 1px 0 #fff8; } .aside { text-align:center; }
        .avatar { width:128px; height:128px; margin:0 auto 18px; display:grid; place-items:center; border-radius:50%; color:#fff; font-size:2.8rem; font-weight:700; background:linear-gradient(145deg,#ee9aaa,var(--accent-dark)); box-shadow:0 12px 24px #b8456138; } .profile-title { margin-bottom:12px; font-size:1.45rem; font-weight:700; overflow-wrap:anywhere; } .badge { display:inline-block; padding:8px 12px; border-radius:999px; color:#277b68; background:#b8e6d880; font-size:.73rem; font-weight:700; text-transform:uppercase; }
        h1 { margin:0 0 20px; font-size:clamp(2rem,4vw,2.7rem); } .grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:14px; } .item { min-width:0; padding:15px; border:1px solid #ffffff8c; border-radius:15px; background:#ffffff40; } .label { display:block; margin-bottom:7px; color:var(--muted); font-size:.7rem; font-weight:700; letter-spacing:.07em; text-transform:uppercase; } .value { font-weight:700; line-height:1.5; overflow-wrap:anywhere; } .skills { display:flex; flex-wrap:wrap; gap:9px; margin-top:14px; } .skills span { padding:8px 11px; border-radius:999px; color:var(--accent-dark); background:#dc6b8020; font-size:.8rem; font-weight:700; }
        @media (max-width:760px) { .content { grid-template-columns:1fr; } .grid { grid-template-columns:1fr; } .header { justify-content:center; text-align:center; } } @media (max-width:480px) { body { padding:16px 12px; } .header { padding:20px 16px; } .content { gap:16px; padding:20px 16px; } .aside,.details { padding:20px 16px; } nav a { padding:10px 12px; font-size:.9rem; } }
    </style>
</head>
<body>
    <main class="shell card">
        <header class="header"><div class="brand"><span>Student</span> Profile</div><nav><a href="<?= site_url('student'); ?>">Home</a><a href="<?= site_url('student/logout'); ?>">Logout</a></nav></header>
        <section class="content">
            <aside class="aside"><div class="avatar">RM</div><div class="profile-title"><?= htmlspecialchars($student['name']); ?></div><div class="badge">Verified Student</div></aside>
            <section class="details"><h1>Student Information</h1><div class="grid">
                <div class="item"><span class="label">Student ID</span><div class="value"><?= htmlspecialchars($student['student_id']); ?></div></div>
                <div class="item"><span class="label">Name</span><div class="value"><?= htmlspecialchars($student['name']); ?></div></div>
                <div class="item"><span class="label">Course</span><div class="value"><?= htmlspecialchars($student['course']); ?></div></div>
                <div class="item"><span class="label">Year Level</span><div class="value"><?= htmlspecialchars($student['year']); ?></div></div>
                <div class="item"><span class="label">Section</span><div class="value"><?= htmlspecialchars($student['section']); ?></div></div>
                <div class="item"><span class="label">Email</span><div class="value"><?= htmlspecialchars($student['email']); ?></div></div>
                <div class="item"><span class="label">Address</span><div class="value"><?= htmlspecialchars($student['address']); ?></div></div>
                <div class="item"><span class="label">Contact</span><div class="value"><?= htmlspecialchars($student['contact']); ?></div></div>
            </div><div class="item" style="margin-top:14px;"><span class="label">Skills</span><div class="skills"><?php foreach ($student['skills'] as $skill): ?><span><?= htmlspecialchars($skill); ?></span><?php endforeach; ?></div></div></section>
        </section>
    </main>
</body>
</html>
