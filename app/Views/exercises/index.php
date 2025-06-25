<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercises - NanoGym</title>
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
        .filters {
            margin-bottom: 20px;
        }
        .filters button {
            background-color: #333;
            border: none;
            color: #ccc;
            padding: 8px 16px;
            margin-right: 8px;
            border-radius: 4px;
            cursor: pointer;
        }
        .filters button.active {
            background-color: #ffcc00;
            color: #121212;
        }
        .exercise-list {
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
            gap: 20px;
        }
        .exercise-card {
            background-color: #222;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .exercise-image {
            background-color: #444;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 24px;
        }
        .exercise-content {
            padding: 16px;
            flex-grow: 1;
        }
        .exercise-name {
            font-weight: bold;
            margin-bottom: 8px;
            color: #ffcc00;
        }
        .exercise-meta {
            font-size: 14px;
            color: #aaa;
            margin-bottom: 8px;
        }
        .exercise-description {
            font-size: 14px;
            color: #ddd;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a href="/dashboard">Dashboard</a>
        <a href="/exercises" class="active">Exercises</a>
        <a href="/schedule">Schedule</a>
        <a href="/logout" style="margin-left:auto; background:#fff; color:#000; padding:8px 16px; border-radius:4px; text-decoration:none;">Logout</a>
    </nav>

    <h1>Exercises</h1>

    <div class="filters">
        <?php foreach ($categories as $cat): ?>
            <a href="/exercises?category=<?= $cat ?>" class="button <?= ($selectedCategory === $cat) ? 'active' : '' ?>"><?= $cat ?></a>
        <?php endforeach; ?>
    </div>

    <div class="exercise-list">
        <?php if (empty($exercises)): ?>
            <p>No exercises found.</p>
        <?php else: ?>
            <?php foreach ($exercises as $exercise): ?>
                <div class="exercise-card">
                    <div class="exercise-image">
                        <?php if ($exercise['image_url']): ?>
                            <img src="<?= esc($exercise['image_url']) ?>" alt="<?= esc($exercise['name']) ?>" style="width:100%; height:150px; object-fit:cover;" />
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </div>
                    <div class="exercise-content">
                        <div class="exercise-name"><?= esc($exercise['name']) ?></div>
                        <div class="exercise-meta"><?= esc($exercise['muscle_group']) ?> | <?= esc($exercise['equipment']) ?></div>
                        <div class="exercise-description"><?= esc($exercise['description']) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
