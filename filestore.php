<?php

class Filestore {

    public $filename = '';
    public $is_csv = false;
    
    function __construct($filename = '') 
    {
      $this->filename = $filename;

      $this->is_csv = substr($this->filename, -3) == 'csv';
    }

    public function read() 
    {
      if ($this->is_csv) {
        return $this->read_csv();
      } else {
        return $this->read_lines();
      }
    }

    public function write($array) 
    {
      if ($this->is_csv) {
         return $this->write_csv();
      } else {
         return $this->write_lines();
      }
    }

    private function read_lines()
    {
	  $filesize = filesize($this->filename);
	  if ($filesize > 0) 
	  {
	    $content = fopen($this->filename, 'r');
	    $fileString = trim(fread($content, $this->filesize));
	    $file = explode("\n", $fileString);
	    fclose($content);
		 return $file;
	  } else {
		 return [];
	  }
	}

    private function write_lines($array)
    {
	  $handle = fopen($this->filename, 'w');
      $string = implode("\n", $list);
      fwrite($handle, $string);
      fclose($handle);
    }

    private function read_csv()
    {
	  $entries = [];
	  $handle = fopen($this->filename, 'r');
	  while (!feof($handle)) {
		$row = fgetcsv($handle);
		if(is_array($row)) {
			$entries[] = $row;
		}
	  }
	  fclose($handle);
	  return $entries;
    }

    private function write_csv($array)
    {
	  $handle = fopen($this->filename, 'w');
      foreach ($newArray as $fields) {
		fputcsv($handle, $fields);
	  }
	  fclose($handle);
	}

}




