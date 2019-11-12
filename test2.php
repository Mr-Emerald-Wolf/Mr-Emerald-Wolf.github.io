<!DOCTYPE html>
<html>
    
    <head>
    <?php echo "<title>". $row['name']. " | ThinkYourSelfNow </title>"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <?php require_once('post_config.php'); ?>
    <script>
        var x = 0;
    function loadPosts(y) {

      var xhttp1 = new XMLHttpRequest();
      x += y;

      xhttp1.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          document.getElementById("posts-container").innerHTML = this.responseText;
        }
      };
      xhttp1.open("GET", "test2.php?q=" + x , true);
      xhttp1.send();
      
    }
    loadPosts(3);
    </script>
    </head>
    
    <?php
        class Template_1 {
    	/**
    	 * The filename of the template to load.
    	 *
    	 * @access protected
    	 * @var string
    	 */
        protected $file;
        
        /**
         * An array of values for replacing each tag on the template (the key for each value is its corresponding tag).
         *
         * @access protected
         * @var array
         */
        protected $values = array();
        
        /**
         * Creates a new Template object and sets its associated file.
         *
         * @param string $file the filename of the template to load
         */
        public function __construct($file) {
            $this->file = $file;
        }
        
        /**
         * Sets a value for replacing a specific tag.
         *
         * @param string $key the name of the tag to replace
         * @param string $value the value to replace
         */
        public function set($key, $value) {
            $this->values[$key] = $value;
        }
        
        /**
         * Outputs the content of the template, replacing the keys for its respective values.
         *
         * @return string
         */
        public function output() {
        	/**
            * Tries to verify if the file exists.
        	 * If it doesn't return with an error message.
        	 * Anything else loads the file contents and loops through the array replacing every key for its value.
        	 */
            if (!file_exists($this->file)) {
            	return "Error loading template file ($this->file).<br />";
            }
            $output = file_get_contents($this->file);
            
            foreach ($this->values as $key => $value) {
            	$tagToReplace = "[@$key]";
            	$output = str_replace($tagToReplace, $value, $output);
            }

            return $output;
        }
        
        /**
         * Merges the content from an array of templates and separates it with $separator.
         *
         * @param array $templates an array of Template objects to merge
         * @param string $separator the string that is used between each Template object
         * @return string
         */
        
    }
       
    echo '  <div class="container">';
     echo"<div class='row'>";
        for ($x = 0; $x <= 2; $x++) { 
            
            
        
            require_once('post_config.php');
            require_once('templateEngine.php');
            $sql = "SELECT * FROM `express-posts` ORDER BY `express-posts`.`id` DESC LIMIT ". $x. ",1"; 
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $path = $row['path'];
            
            
            $post = new Template("posts.tpl");
            $post->set("img1", $row['img1']);
            $post->set("name", $row['path']);
            $post->set("sub_heading", $row['sub_heading']);
                
                echo $post->output();
        
        }
        echo "</div>";
        echo '</div>';

    
        ?>
    