<?php

Class Lab
{
    private $LabId;
    private $InchargeId;
    private $LabName;
    private $EquipmentId;

    public function LabDetails()
    {
        return showDetails();
    }
    public function IsOccupied($val)
    { /** This method tells whether the lab is occupied or not.
        */
        if ($value != false)
            return "Come In! Lab is open";
        return "Come back later, Lab is closed";
    }

    public function PayFine()
    {
        /**
         * This method shows the fine details of a particular student who breaks or damages any equipment in the lab.
         */
        showWhoBrokeWhat();
    }
}