<?php
  class Rectangle  // Class Declaration
  {
    private $length; // made these private
    private $width;

    function __construct($side_length, $side_width)
    {
        $this->length = $side_length;
        $this->width = $side_width;
    }

    function isSquare()  // method to calculate if square boolean
    {
        if ($this->length == $this->width) {
          return true;
        } else {
          return false;
        }
    }

    function getArea()  // method to calculate area
    {
        return $this->length * $this->width;
    }

// SET LENGTH
    function setLength($new_length)  // Sets the value of the object's property length
    {
        $this->lenth = (float) $new_length;
    }

// GET LENGTH
    function getLength()
    {
        return $this->length;
    }
// SET WIDTH
    function setWidth($new_width)
    {
        $this->width = (float) $new_width;
    }
// GET WIDTH
    function getWidth()
    {
        return $this->width;
    }

  }

?>
