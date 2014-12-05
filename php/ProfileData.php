<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 4/12/2014
 * Time: 3:38 μμ
 */

class ProfileData
{
    private $shop;

    public function __construct()
    {
        //$this->shop = new Shops();
    }
    public function setProfileData($newShop)
    {
        $this->shop = $newShop;
    }
    public function getProfileData()
    {
        return $this->shop;
    }

}