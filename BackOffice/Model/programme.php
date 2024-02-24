<?php
class programme
{
    private ?int $idp = null;
    private ?string $objectif = null;
    private ?string $idExercice = null;
    

    public function __construct($id = null, $obj, $ide)
    {
        $this->idp = $id;
        $this->objectif = $obj;
        $this->idExercice = $ide;
        
    }

    /**
     * Get the value of idProgram
     */
    public function getIDprogram()
    {
        return $this->idp;
    }

    /**
     * Get the value of objectif
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set the value of objectif
     *
     * @return  self
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get the value of idExercice
     */
    public function getIDexercice()
    {
        return $this->idExercice;
    }

    /**
     * Set the value of idExercice
     *
     * @return  self
     */
    public function setIDexercice($idExercice)
    {
        $this->idExercice = $idExercice;

        return $this;
    }

}
