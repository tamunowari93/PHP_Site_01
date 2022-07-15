<?PHP

namespace App\Constructor;

class Page 
{

  private $pageID;
  
  public function __construct($pageID)
  {
      $this->pageID = $pageID;
  }
  
  public function getPage(): string
  {
      return $this->pageID;
  }
}

