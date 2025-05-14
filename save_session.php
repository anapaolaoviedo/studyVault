<?php
$conn = new mysqli("localhost", "root", "root", "studyvault", 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$topic = $_POST['topic'];
$subtopic = $_POST['subtopic'];
$study_date = $_POST['study_date'];
$duration = $_POST['duration'];
$notes = $_POST['notes'];

$stmt = $conn->prepare("INSERT INTO study_sessions (topic, subtopic, study_date, duration_minutes, notes) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssds", $topic, $subtopic, $study_date, $duration, $notes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>✅ Saved!</title>
</head>
<body class="bg-pink-50 flex items-center justify-center min-h-screen font-sans">
  <div class="bg-white p-10 rounded-2xl shadow-xl max-w-md w-full text-center">
    <?php
    if ($stmt->execute()) {
        echo '<h2 class="text-2xl font-bold text-pink-700 mb-4">✅ Study Session Saved!</h2>';
        echo '<p class="text-gray-700 mb-6">You’re one step closer to becoming unstoppable 💪</p>';
    } else {
        echo '<h2 class="text-2xl font-bold text-red-700 mb-4">❌ Error saving your session</h2>';
        echo '<p class="text-gray-700 mb-6">' . $stmt->error . '</p>';
    }
    $stmt->close();
    $conn->close();
    ?>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="add.html" class="bg-pink-500 text-white px-5 py-2 rounded-lg font-semibold hover:bg-pink-600 transition">➕ Log Another</a>
      <a href="view.php" class="bg-purple-500 text-white px-5 py-2 rounded-lg font-semibold hover:bg-purple-600 transition">📊 See Progress</a>
    </div>
  </div>
</body>
</html>