<?php

abstract Class Equipments
{
    private $EquipmentId;
    private $Cost;

    abstract public function EquipmentDetails();
    abstract public function PurchaseEquipment();
    abstract public function Repair();
}
