<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="<?php if($page=='home'){echo 'active';}?>" href="example.php">Home</a>
  <a class="<?php if($page=='details'){echo 'active';}?>" href="details.php">Account Details</a>
  <a class="<?php if($page=='about'){echo 'active';}?>" href="#">About</a>
</div>