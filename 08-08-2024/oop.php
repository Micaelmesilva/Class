<?php
class Student{
    private $name;
    private $grade1;
    private $grade2;


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of grade1
     */
    public function getGrade1()
    {
        return $this->grade1;
    }

    /**
     * Set the value of grade1
     */
    public function setGrade1($grade1): self
    {
        $this->grade1 = $grade1;

        return $this;
    }

    /**
     * Get the value of grade2
     */
    public function getGrade2()
    {
        return $this->grade2;
    }

    /**
     * Set the value of grade2
     */
    public function setGrade2($grade2): self
    {
        $this->grade2 = $grade2;

        return $this;
    }

    //media
    public function getMedia(){
        $media = ($this -> grade1 + $this -> grade2) / 2;
        return $media;
    }
}
$medias = array();
for ($i = 0; $i < 3; $i++) { 
    $student = new Student();
    $name = readline("Informe nome: ");
    $student->setName($name);
    $grade1 = readline("Informe nota 1: ");
    $student->setGrade1($grade1);
    $grade2 = readline("Informe a nota 2: ");
    $student->setGrade2($grade2);

    $media = $student->getMedia();
    array_push($medias, $media);
    system('clear');
}
$i = 1;
foreach ($medias as $num) {

    echo "Media do Aluno " . $i . " é ". $num . "\n";
    $i++;
}

