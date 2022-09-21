
<?

class QuizModel {
     public function __construct(){
        /*Connects to database */
   $this->db = new Database;
   }

   public function science(){
      $this->db->query('SELECT * FROM Science');
      return $this->db->getAll();
   }
   public function computer(){
      $this->db->query('SELECT * FROM General_Knowledge');
      return $this->db->getAll();
   }
   public function nature(){
      $this->db->query('SELECT * FROM ComputerScience');
      return $this->db->getAll();
   }
}