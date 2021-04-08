<?php

trait TShowImage{
    public function showImage()
    {
        echo "<img alt=\"Не вдалося завантажити картинку\" src=$this->path>";
    }
}

?>