<?php
abstract  class Plugin{
    abstract public function setTitle($title);
    public function Show(){
        echo '<div class="plugin">
                <h1>'.$this->title.'</h1>
              </div>';
    }
}

class LastComments extends Plugin{

    public function setTitle($title)
    {
        $this->title=$title;
    }
}

class SocialMedia extends Plugin{
    public function setTitle($title)
    {
        $this->title=$title;
    }
}

$lastComments = new LastComments();
$lastComments->setTitle('Son Yorumlar');

$socialMedia = new SocialMedia();
$socialMedia->setTitle('Sosyal Medya Hesapları');
echo $lastComments->Show();
echo $socialMedia->Show();
