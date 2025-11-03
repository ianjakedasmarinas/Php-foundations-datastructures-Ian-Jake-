<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🌲 BST | Digital Library Organizer</title>
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
    input.form-control {
      border-radius: 10px;
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

<div class="main-content">
  <h1 class="fw-bold text-dark mb-4">Digital Library Organizer</h1>

  <div id="bst" class="card p-4">
    <h4 class="text-warning">🌲 Binary Search Tree — Book Titles</h4>
    <?php
    class Node {
      public $data;
      public $left;
      public $right;
      public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
      }
    }

    class BinarySearchTree {
      public $root = null;

      public function insert($data) {
        $this->root = $this->insertNode($this->root, $data);
      }

      private function insertNode($node, $data) {
        if ($node === null) return new Node($data);
        if ($data < $node->data) $node->left = $this->insertNode($node->left, $data);
        else $node->right = $this->insertNode($node->right, $data);
        return $node;
      }

      public function search($node, $data) {
        if ($node === null) return false;
        if (strcasecmp($node->data, $data) === 0) return true;
        return (strcasecmp($data, $node->data) < 0)
          ? $this->search($node->left, $data)
          : $this->search($node->right, $data);
      }

      public function inorderTraversal($node) {
        if ($node !== null) {
          $this->inorderTraversal($node->left);
          echo htmlspecialchars($node->data) . "<br>";
          $this->inorderTraversal($node->right);
        }
      }
    }

    $bst = new BinarySearchTree();
    $books = ["A Brief History of Time", "Becoming", "Gone Girl", "Harry Potter", "Sherlock Holmes", "The Hobbit"];
    foreach ($books as $book) $bst->insert($book);

    $result = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["searchBST"])) {
      $title = trim($_POST["bst_title"]);
      $found = $bst->search($bst->root, $title);
      $result = $found ? "✅ Found!" : "❌ Not Found.";
    }
    ?>

    <div class="bg-white p-3 mt-3 rounded shadow-sm">
      <h5>Inorder Traversal (Alphabetical):</h5>
      <div class="ms-3 text-muted">
        <?php $bst->inorderTraversal($bst->root); ?>
      </div>
    </div>

    <form method="POST" action="bst.php" class="mt-4">
      <div class="input-group">
        <input type="text" name="bst_title" class="form-control" placeholder="Search Book Title" required>
        <button type="submit" name="searchBST" class="btn btn-warning">Search</button>
      </div>
    </form>

    <?php if ($result): ?>
      <div class="alert alert-info mt-3"><?= $result ?></div>
    <?php endif; ?>
  </div>
</div>
</body>
</html>

