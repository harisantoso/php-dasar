<?php

$conn = mysqli_connect("localhost", "root", "", "phpp");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $row = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function add($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $kelamin = htmlspecialchars($data['kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $alamat = htmlspecialchars($data['alamat']);

  $query = "INSERT INTO siswa VALUES('', '$nama', '$kelamin', '$agama', '$alamat')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}


function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = $data['nama'];
  $kelamin = $data['kelamin'];
  $agama = $data['agama'];
  $alamat = $data['alamat'];

  $query = "UPDATE siswa
            SET NAMA = '$nama', KELAMIN = '$kelamin', AGAMA = '$agama', ALAMAT = '$alamat'
            WHERE ID = '$id'";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}


function delete($id)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM siswa WHERE ID = $id");
  return mysqli_affected_rows($conn);
}
