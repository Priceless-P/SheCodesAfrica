<?php

Class LabEquipments extends Equipments
{
    private $ClassId;
    private $BenchCount;
    private $FanCount;
    private $LightCount;

    public function EquipmentDetails()
    {
        /**
         * This contains the details of equipment in the lab and also the equipment of class
         */
        return "Lab Equipment Details ..."
    }

    public function PurchaseEquipment()
    {
        /**
         * This method is to purchase the equipment and contains the details of newly purchased equipment.
         */
        return "Lab Purchase Equipment whatever";
    }

    public function Repair()
    {
        /**
         * This method is to repair any equipment.
         */
        return true;
    }
}