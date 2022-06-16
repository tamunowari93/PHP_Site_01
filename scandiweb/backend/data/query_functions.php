<?php

  // Products  
  // function add_product($sku, $name, $price, $prodtype, $description) {
  //   global $db;
  //   $sql = "INSERT INTO products ";
  //   $sql .= "(sku, name, price, prodtype, description) ";
  //   $sql .= "VALUES (";
  //   $sql .= "'" . db_escape($db, $sku) . "',";
  //   $sql .= "'" . db_escape($db, $name) . "',";
  //   $sql .= "'" . db_escape($db, $price) . "',";
  //   $sql .= "'" . db_escape($db, $prodtype) . "',";
  //   $sql .= "'" . db_escape($db, $description) . "'";
  //   $sql .= ")";
  //   $result = mysqli_query($db, $sql);
  
  //   // For INSERT statements, $result is true/false
  //   if($result) {
  //     return true;
  //   } else {
  //     // INSERT failed
  //     echo mysqli_error($db);
  //     db_disconnect($db);
  //     exit;
  //   }
  // } 

  function addDVD($sku, $name, $price, $size, $description) {
    global $db;
    $sql = "INSERT INTO dvd ";
    $sql .= "(sku, name, price, size, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $sku) . "',";
    $sql .= "'" . db_escape($db, $name) . "',";
    $sql .= "'" . db_escape($db, $price) . "',";
    $sql .= "'" . db_escape($db, $size) . "',";
    $sql .= "'" . db_escape($db, $description) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
  function addFurniture($sku, $name, $price, $dimensions, $description) {
    global $db;
    $sql = "INSERT INTO furniture ";
    $sql .= "(sku, name, price, dimensions, description ) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $sku) . "',";
    $sql .= "'" . db_escape($db, $name) . "',";
    $sql .= "'" . db_escape($db, $price) . "',";
    $sql .= "'" . db_escape($db, $dimensions) . "',";
    $sql .= "'" . db_escape($db, $description) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
  function addBook($sku, $name, $price,  $weight_kg, $description) {
    global $db;
    $sql = "INSERT INTO book ";
    $sql .= "(sku, name, price, weight, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $sku) . "',";
    $sql .= "'" . db_escape($db, $name) . "',";
    $sql .= "'" . db_escape($db, $price) . "',";
    $sql .= "'" . db_escape($db, $weight_kg) . "',";
    $sql .= "'" . db_escape($db, $description) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  // Find products
  function find_DVD() {
    global $db;
    $sql = "SELECT * FROM dvd ";
    $result = mysqli_query($db, $sql);
    
    if ($result==true) {
      // Fetch one and one row
      return $result;
    }
    else {
      // Retrieve failed
      echo mysqli_error($db);
      mysqli_free_result($result);
      db_disconnect($db);
      exit;
    }
  }
  function find_Furniture() {
    global $db;
    $sql = "SELECT * FROM furniture ";
    $result = mysqli_query($db, $sql);
    
    if ($result==true) {
      // Fetch one and one row
      return $result;
    }
    else {
      // Retrieve failed
      echo mysqli_error($db);
      mysqli_free_result($result);
      db_disconnect($db);
      exit;
    }
  }
  function find_Book() {
    global $db;
    $sql = "SELECT * FROM book ";
    $result = mysqli_query($db, $sql);
    
    if ($result==true) {
      // Fetch one and one row
      return $result;
    }
    else {
      // Retrieve failed
      echo mysqli_error($db);
      mysqli_free_result($result);
      db_disconnect($db);
      exit;
    }
  }
  
  function delete_product($sku) {
    global $db;
    $sql = "DELETE FROM products ";
    $sql .= "WHERE id='" . db_escape($db, $sku) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
  function mass_delete_DVD() {
    global $db;
    $sql = "DELETE FROM dvd ";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  function mass_delete_FRN() {
    global $db;
    $sql = "DELETE FROM furniture ";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  function mass_delete_BK() {
    global $db;
    $sql = "DELETE FROM book ";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  

?>