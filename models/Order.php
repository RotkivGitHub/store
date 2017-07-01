<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 21:08
 */
class Order
{
    private $id;
    private $totalPrice;
    private $status;
    private $products;
    private $userName;
    private $userAdress;
    private $userPhone;
    private $dataCreate;
    private $comment;

    public function __construct($id, $totalPrice, $status, $products, $userName, $userAdress, $userPhone, $dataCreate, $comment)
    {
        $this-> id = $id;
        $this-> totalPrice = $totalPrice;
        $this-> status = $status;
        $this-> products = $products;
        $this-> userName = $userName;
        $this-> userAdress = $userAdress;
        $this-> userPhone = $userPhone;
        $this-> dataCreate = $dataCreate;
        $this-> comment = $comment;

    }

    public function getId(){
        return $this->id;
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getProducts(){
        return $this->products;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function getUserAdress(){
        return $this->userAdress;
    }

    public function getUserPhone(){
        return $this->userPhone;
    }

    public function getDataCreate(){
        return $this->dataCreate;
    }

    public function getComment(){
        return $this->comment;
    }

    public function setStatus($status){
        $this->status = $status;
    }


}