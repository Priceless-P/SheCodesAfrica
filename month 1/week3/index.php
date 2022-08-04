<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Users | <i>Error Handler Testing</i></title>
  </head>
  <body>
    <h1>Users</h1>
<?
//use FileReader;
require_once 'FileReader.php';

$filename = 'data.json';
$jsonFile = new FileReader();
try
{
$value = $jsonFile->readFile($filename);
$users = json_encode($value);
echo $users;
}
catch(FileNotFoundException $e)
{
  echo  " The File $filename not found.";
}
catch(BadJsonException $e)
{
  echo  "Contents of $filename could not be decoded into json.";
}
?>
  </body>
</html>