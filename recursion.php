<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🌀 Recursion | Digital Library Organizer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    <?php include 'assets/style.css'; ?>
    body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background-color: #f5f7fb;
}
.sidebar {
  position: fixed;
  top: 0; left: 0;
  width: 250px;
  height: 100vh;
  background-color: #2f3542;
  color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px 10px;
}
.sidebar h2 {
  font-weight: 700;
  margin-bottom: 30px;
  text-align: center;
}
.sidebar .nav-link {
  color: white;
  width: 100%;
  text-align: left;
  padding: 10px 20px;
  border-radius: 10px;
  transition: 0.3s;
}
.sidebar .nav-link:hover, .sidebar .nav-link.active {
  background-color: #57606f;
  text-decoration: none;
}
.main-content {
  margin-left: 250px;
  padding: 40px;
}
.card {
  border-radius: 15px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  overflow: hidden;
  background: white;
  margin-bottom: 25px;
}
  </style>
</head>
<body>
<div class="sidebar">
  <h2>📚 Library</h2>
  <a href="recursion.php" class="nav-link active">🌀 Recursion</a>
  <a href="hashtable.php" class="nav-link">🔍 Hash Table</a>
  <a href="bst.php" class="nav-link">🌲 BST</a>
</div>

<div class="main-content">
  <h1 class="fw-bold text-dark mb-4">🌀 Recursive Library Display</h1>
  <?php
  $library = [
    "Fiction" => [
      "Fantasy" => ["Harry Potter", "The Hobbit"],
      "Mystery" => ["Sherlock Holmes", "Gone Girl"]
    ],
    "Non-Fiction" => [
      "Science" => ["A Brief History of Time", "The Selfish Gene"],
      "Biography" => ["Steve Jobs", "Becoming"]
    ]
  ];

  function displayLibrary($library, $indent = 0) {
    foreach ($library as $key => $value) {
      echo str_repeat("&nbsp;&nbsp;", $indent) . "<strong>$key</strong><br>";
      if (is_array($value)) {
        displayLibrary($value, $indent + 1);
      } else {
        echo str_repeat("&nbsp;&nbsp;", $indent + 1) . "$value<br>";
      }
    }
  }
  ?>
  <div class="bg-white p-3 mt-3 rounded shadow-sm">
    <?php displayLibrary($library); ?>
  </div>
</div>
</body>
</html>
