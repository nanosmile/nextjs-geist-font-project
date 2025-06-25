<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - NanoGym</title>
    <style>
        body {
            background-color: #121212;
            color: #ffcc00;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .nav {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        .nav a {
            color: #ccc;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
        }
        .nav a.active {
            background-color: #ffcc00;
            color: #121212;
        }
        .stats {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-card {
            background-color: #222;
            border-radius: 8px;
            padding: 20px;
            flex: 1;
            text-align: center;
        }
        .stat-number {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #ffcc00;
        }
        .stat-label {
            font-size: 16px;
            color: #aaa;
        }
        .recent-workouts {
            background-color: #222;
            border-radius: 8px;
            padding: 20px;
        }
        .recent-workouts h2 {
            margin-top: 0;
            color: #ffcc00;
        }
        .workout-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .workout-list li {
            border-bottom: 1px solid #444;
            padding: 10px 0;
            color: #ddd;
        }
        .workout-list li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a href="/dashboard" class="active">Dashboard</a>
        <a href="/exercises">Exercises</a>
        <a href="/schedule">Schedule</a>
        <a href="/logout" style="margin-left:auto; background:#fff; color:#000; padding:8px 16px; border-radius:4px; text-decoration:none;">Logout</a>
    </nav>

    <h1>Dashboard</h1>

    <div class="stats">
        <div class="stat-card">
            <div class="stat-number"><?= $totalWorkouts ?></div>
            <div class="stat-label">Total Workouts</div>
        </div>
        <div class="stat-card">
            <div class="stat-number"><?= $workoutsThisWeek ?></div>
            <div class="stat-label">This Week</div>
        </div>
        <div class="stat-card">
            <div class="stat-number"><?= esc($favoriteCategory) ?></div>
            <div class="stat-label">Favorite Category</div>
        </div>
    </div>

    <div class="recent-workouts">
        <h2>Recent Workouts</h2>
        <?php if (empty($recentWorkouts)): ?>
            <p>No workout logs yet. Start tracking your progress!</p>
        <?php else: ?>
            <ul class="workout-list">
                <?php foreach ($recentWorkouts as $workout): ?>
                    <li>
                        Sets: <?= esc($workout['sets']) ?>, Reps: <?= esc($workout['reps']) ?>, Weight: <?= esc($workout['weight']) ?> kg, Date: <?= date('m/d/Y', strtotime($workout['logged_at'])) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
