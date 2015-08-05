<?php 


class Rectangle
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->setHeight($height);
        $this->setWidth($width);

    }

    public function perimeter(){
        $sumsides = ($this->getHeight() * 2) + ($this->getWidth() * 2);
        return $sumsides;
    }

    public function area()
    {
        return $this->getHeight() * $this->getWidth();
    }

    protected function setHeight($height)
    {
        $this->height = $height;
    }

    protected function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }
}

class Square extends Rectangle
{

    public function __construct($height){
        parent::__construct($height, $height);
    }

    public function perimeter(){
        $sumsides = ($this->height * 4);
        return $sumsides;
    }

    public function area()
    {
        return pow($this->height, 2);
    }
}