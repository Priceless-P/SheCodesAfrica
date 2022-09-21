<?
class Quiz extends Controller{
    public function getQuiz()
{
    $path = "https://opentdb.com/api.php?amount=10&category=18";
    $json = file_get_contents($path);
  $data =  json_decode($json, TRUE);

$this->view('dashboard', $data);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
}

}