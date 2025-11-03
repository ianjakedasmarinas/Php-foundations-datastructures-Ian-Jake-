<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>📚 Digital Library Organizer — Main</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
    .sidebar .nav-link:hover {
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
      background: white;
      margin-bottom: 25px;
    }
    .btn {
      border-radius: 10px;
      transition: 0.3s;
    }
    .btn:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>📚 Library</h2>
  <a href="main.php" class="nav-link">🏠 Home</a>
  <a href="recursion.php" class="nav-link">🌀 Recursion</a>
  <a href="hashtable.php" class="nav-link">🔍 Hash Table</a>
  <a href="bst.php" class="nav-link">🌲 BST</a>
</div>

<div class="main-content text-center">
  <h1 class="fw-bold mb-4 text-dark">Welcome to the Digital Library Organizer</h1>
  <p class="text-secondary mb-5 fs-5">Explore three programming concepts that help organize books in a digital library:</p>

  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card p-4 shadow-sm border-0">
        <h4 class="text-primary">🌀 Recursion</h4>
        <p>Displays nested categories using recursive functions.</p>
        <a href="recursion.php" class="btn btn-primary w-100 mt-2">Open Recursion</a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-4 shadow-sm border-0">
        <h4 class="text-success">🔍 Hash Table</h4>
        <p>Search for books using efficient key-value lookup.</p>
        <a href="hashtable.php" class="btn btn-success w-100 mt-2">Open Hash Table</a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-4 shadow-sm border-0">
        <h4 class="text-warning">🌲 BST</h4>
        <p>Organizes books alphabetically using Binary Search Tree.</p>
        <a href="bst.php" class="btn btn-warning w-100 mt-2">Open BST</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
