<?php
$conn = new mysqli("localhost", "root", "root", "studyvault", 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM study_sessions ORDER BY study_date DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>📖 Study History</title>
</head>
<body class="bg-pink-50 font-sans p-8">
  <div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-xl">
    <h2 class="text-3xl font-bold text-pink-700 mb-6 text-center">📚 Your Study Log</h2>

    <table class="w-full table-auto border-collapse text-sm text-left text-gray-700">
      <thead class="bg-pink-100 text-pink-800 font-semibold">
        <tr>
          <th class="px-4 py-2">Date</th>
          <th class="px-4 py-2">Topic</th>
          <th class="px-4 py-2">Subtopic</th>
          <th class="px-4 py-2">Duration</th>
          <th class="px-4 py-2">Notes</th>
        </tr>
      </thead>
      <tbody>

      <?php
      while ($row = $result->fetch_assoc()) {
          echo "<tr class='border-b hover:bg-pink-50 transition'>";
          echo "<td class='px-4 py-2'>{$row['study_date']}</td>";
          echo "<td class='px-4 py-2'>{$row['topic']}</td>";
          echo "<td class='px-4 py-2'>{$row['subtopic']}</td>";
          echo "<td class='px-4 py-2'>{$row['duration_minutes']} min</td>";
          echo "<td class='px-4 py-2'>{$row['notes']}</td>";
          echo "</tr>";
      }
      ?>

      </tbody>
    </table>

    <div class="mt-8 text-center">
      <a href="add.html" class="bg-pink-500 text-white font-bold px-6 py-2 rounded-lg hover:bg-pink-600 transition duration-300">➕ Log More</a>
    </div>
  </div>
</body>
</html>

<?php
$conn->close();
?>