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
        :root { --ink:#2b171d; --muted:#735a63; --glass:rgba(252,244,246,.56); --line:rgba(255,255,255,.72); --accent:#9b4053; --accent-dark:#681c2e; }
        * { box-sizing:border-box; } body { margin:0; min-height:100vh; padding:28px 18px; font-family:Georgia,'Times New Roman',serif; color:var(--ink); background:linear-gradient(135deg,#ead6dc,#d8c1c8 52%,#eee0d2); } .shell { width:min(1100px,100%); margin:auto; }
        .card { background:var(--glass); border:1px solid var(--line); border-radius:28px; box-shadow:0 24px 60px rgba(83,35,48,.18),inset 0 1px 0 #fff; backdrop-filter:blur(18px); overflow:hidden; } .header { display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap; padding:24px 28px; border-bottom:1px solid #ffffff80; } .brand { display:inline-flex; align-items:center; gap:10px; font-size:1.45rem; font-weight:700; } .brand span { color:var(--accent-dark); }
        .brand-logo { width:42px; height:42px; object-fit:contain; flex:0 0 auto; }
        nav { display:flex; gap:10px; flex-wrap:wrap; } nav a { padding:10px 14px; border-bottom:2px solid var(--accent); color:var(--ink); text-decoration:none; font-weight:700; } nav a:hover { color:var(--accent-dark); }
        .content { display:grid; grid-template-columns:245px 1fr; gap:0; padding:0 28px 28px; min-width:0; } .aside,.details { min-width:0; padding:28px 24px; } .aside { border-right:1px solid #ffffff99; }
        .avatar { width:150px; height:150px; margin:0 auto 18px; display:block; object-fit:cover; border-radius:18px; border:5px solid rgba(255,255,255,.7); box-shadow:9px 9px 0 #9b405355; } .profile-title { margin-bottom:12px; font-size:1.45rem; font-weight:700; overflow-wrap:anywhere; } .badge { display:inline-block; padding:7px 10px; border-left:3px solid var(--accent); color:var(--accent-dark); background:#ffffff55; font-size:.73rem; font-weight:700; text-transform:uppercase; }
        h1 { margin:0 0 20px; font-size:clamp(2rem,4vw,2.7rem); } .grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:0 18px; } .item { min-width:0; padding:15px 0; border-bottom:1px solid #ffffff99; } .label { display:block; margin-bottom:7px; color:var(--muted); font-size:.7rem; font-weight:700; letter-spacing:.07em; text-transform:uppercase; } .value { font-weight:700; line-height:1.5; overflow-wrap:anywhere; } .skills { display:flex; flex-wrap:wrap; gap:9px; margin-top:14px; } .skills span { padding:8px 11px; border-radius:5px; color:var(--accent-dark); background:#9b405326; font-size:.8rem; font-weight:700; }
        @media (max-width:760px) { .content { grid-template-columns:1fr; } .grid { grid-template-columns:1fr; } .header { justify-content:center; text-align:center; } .aside { border-right:0; border-bottom:1px solid #ffffff99; } } @media (max-width:480px) { body { padding:16px 12px; } .header { padding:20px 16px; } .content { gap:0; padding:0 16px 20px; } .aside,.details { padding:24px 4px; } nav a { padding:10px 12px; font-size:.9rem; } }
    </style>
</head>
<body>
    <main class="shell card">
        <header class="header"><div class="brand"><img class="brand-logo" src="<?= base_url('minsulogo.png'); ?>" alt="Mindoro State University logo"><span>Student</span> Profile</div><nav><a href="<?= site_url('student'); ?>">Home</a><a href="<?= site_url('student/logout'); ?>">Logout</a></nav></header>
        <section class="content">
            <aside class="aside"><img class="avatar" src="<?= base_url($student['profile_picture']); ?>" alt="<?= htmlspecialchars($student['name']); ?> profile picture"><div class="profile-title"><?= htmlspecialchars($student['name']); ?></div><div class="badge">Verified Student</div></aside>
            <section class="details"><h1>Student Information</h1><div class="grid">
                <div class="item"><span class="label">Student ID</span><div class="value"><?= htmlspecialchars($student['student_id']); ?></div></div>
                <div class="item"><span class="label">Name</span><div class="value"><?= htmlspecialchars($student['name']); ?></div></div>
                <div class="item"><span class="label">Course</span><div class="value"><?= htmlspecialchars($student['course']); ?></div></div>
                <div class="item"><span class="label">Year Level</span><div class="value"><?= htmlspecialchars($student['year']); ?></div></div>
                <div class="item"><span class="label">Section</span><div class="value"><?= htmlspecialchars($student['section']); ?></div></div>
                <div class="item"><span class="label">Email</span><div class="value"><?= htmlspecialchars($student['email']); ?></div></div>
                <div class="item"><span class="label">Address</span><div class="value"><?= htmlspecialchars($student['address']); ?></div></div>
                <div class="item"><span class="label">Contact</span><div class="value"><?= htmlspecialchars($student['contact']); ?></div></div>
                <div class="item"><span class="label">Facebook</span><div class="value"><a href="<?= htmlspecialchars($student['facebook']); ?>" target="_blank" rel="noopener noreferrer">View Facebook Profile</a></div></div>
            </div><div class="item" style="margin-top:14px;"><span class="label">Characteristics</span><div class="skills"><?php foreach ($student['characteristics'] as $characteristic): ?><span><?= htmlspecialchars($characteristic); ?></span><?php endforeach; ?></div></div></section>
        </section>
    </main>
</body>
</html>
