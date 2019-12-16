<?php


namespace App\Modelos;


class PrescripcionFinal
{
private $id;
private $Diagnostico_OI;
private $Diagnostico_OD;
private $AV_OD;
private $VL_OD;
private $AI_OI;
private $VL_OI;
private $VP_OD;
private $VP_OI;
private $DNP_OD;
private $DNP_OI;
private $AB_OD;
private $AB_OI;

    /**
     * PrescripcionFinal constructor.
     * @param $id
     * @param $Diagnostico_OI
     * @param $Diagnostico_OD
     * @param $AV_OD
     * @param $VL_OD
     * @param $AI_OI
     * @param $VL_OI
     * @param $VP_OD
     * @param $VP_OI
     * @param $DNP_OD
     * @param $DNP_OI
     * @param $AB_OD
     * @param $AB_OI
     */
    public function __construct($id, $Diagnostico_OI, $Diagnostico_OD, $AV_OD, $VL_OD, $AI_OI, $VL_OI, $VP_OD, $VP_OI, $DNP_OD, $DNP_OI, $AB_OD, $AB_OI)
    {
        $this->id = $id;
        $this->Diagnostico_OI = $Diagnostico_OI;
        $this->Diagnostico_OD = $Diagnostico_OD;
        $this->AV_OD = $AV_OD;
        $this->VL_OD = $VL_OD;
        $this->AI_OI = $AI_OI;
        $this->VL_OI = $VL_OI;
        $this->VP_OD = $VP_OD;
        $this->VP_OI = $VP_OI;
        $this->DNP_OD = $DNP_OD;
        $this->DNP_OI = $DNP_OI;
        $this->AB_OD = $AB_OD;
        $this->AB_OI = $AB_OI;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDiagnosticoOI()
    {
        return $this->Diagnostico_OI;
    }

    /**
     * @param mixed $Diagnostico_OI
     */
    public function setDiagnosticoOI($Diagnostico_OI): void
    {
        $this->Diagnostico_OI = $Diagnostico_OI;
    }

    /**
     * @return mixed
     */
    public function getDiagnosticoOD()
    {
        return $this->Diagnostico_OD;
    }

    /**
     * @param mixed $Diagnostico_OD
     */
    public function setDiagnosticoOD($Diagnostico_OD): void
    {
        $this->Diagnostico_OD = $Diagnostico_OD;
    }

    /**
     * @return mixed
     */
    public function getAVOD()
    {
        return $this->AV_OD;
    }

    /**
     * @param mixed $AV_OD
     */
    public function setAVOD($AV_OD): void
    {
        $this->AV_OD = $AV_OD;
    }

    /**
     * @return mixed
     */
    public function getVLOD()
    {
        return $this->VL_OD;
    }

    /**
     * @param mixed $VL_OD
     */
    public function setVLOD($VL_OD): void
    {
        $this->VL_OD = $VL_OD;
    }

    /**
     * @return mixed
     */
    public function getAIOI()
    {
        return $this->AI_OI;
    }

    /**
     * @param mixed $AI_OI
     */
    public function setAIOI($AI_OI): void
    {
        $this->AI_OI = $AI_OI;
    }

    /**
     * @return mixed
     */
    public function getVLOI()
    {
        return $this->VL_OI;
    }

    /**
     * @param mixed $VL_OI
     */
    public function setVLOI($VL_OI): void
    {
        $this->VL_OI = $VL_OI;
    }

    /**
     * @return mixed
     */
    public function getVPOD()
    {
        return $this->VP_OD;
    }

    /**
     * @param mixed $VP_OD
     */
    public function setVPOD($VP_OD): void
    {
        $this->VP_OD = $VP_OD;
    }

    /**
     * @return mixed
     */
    public function getVPOI()
    {
        return $this->VP_OI;
    }

    /**
     * @param mixed $VP_OI
     */
    public function setVPOI($VP_OI): void
    {
        $this->VP_OI = $VP_OI;
    }

    /**
     * @return mixed
     */
    public function getDNPOD()
    {
        return $this->DNP_OD;
    }

    /**
     * @param mixed $DNP_OD
     */
    public function setDNPOD($DNP_OD): void
    {
        $this->DNP_OD = $DNP_OD;
    }

    /**
     * @return mixed
     */
    public function getDNPOI()
    {
        return $this->DNP_OI;
    }

    /**
     * @param mixed $DNP_OI
     */
    public function setDNPOI($DNP_OI): void
    {
        $this->DNP_OI = $DNP_OI;
    }

    /**
     * @return mixed
     */
    public function getABOD()
    {
        return $this->AB_OD;
    }

    /**
     * @param mixed $AB_OD
     */
    public function setABOD($AB_OD): void
    {
        $this->AB_OD = $AB_OD;
    }

    /**
     * @return mixed
     */
    public function getABOI()
    {
        return $this->AB_OI;
    }

    /**
     * @param mixed $AB_OI
     */
    public function setABOI($AB_OI): void
    {
        $this->AB_OI = $AB_OI;
    }

    protected function store()
    {
        
}
}