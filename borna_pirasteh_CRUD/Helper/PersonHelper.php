<?php

namespace Vargha_Khallokhi_CRUD\Helper;
use Vargha_Khallokhi_CRUD\Helper\DBConnector as DBConnector;
use Vargha_Khallokhi_CRUD\Controller\PersonController;

class PersonHelper{

    public function insert($requested_person , $name_of_table , $col):bool{
        try {
            $DBConnector = new DBConnector();
            $DBConnector->connect();
        } catch (Exeption $e) {
            echo "Connection Problem: " . $e->getMessage();
        } catch (\Exception $e) {
        }

        $query = "INSERT INTO $name_of_table(";
        for ($i=0; $i <sizeof($col) ; $i++) {

            if ($i ==0) {
                $query=".$col[i],.";
            }elseif ($i == sizeof($col)-1) {
                $query="$col[i]) VALUES ('$requested_person->getFirstName()', '$requested_person->getLastName()', '$requested_person->getUsername()')";
            }else {
                $query="$col[i],.";
            }
        }

        return $this->insert($query);
    }

    public function fetch(int $id,$name_of_table ):bool{
        try {
            $this->connect();
        } catch (Exeption $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $query = "SELECT * FROM $name_of_table WHERE id == $id";
        return $this->get($query);
    }

    public function fetchAll($name_of_table):bool{
        try {
            $this->connect();
        } catch (Exeption $e) {
            echo "Connection Problem: " . $e->getMessage();
        }
        $query = "SELECT * FROM $name_of_table";
        return $this->get($query);
    }
    
    public function delete($requested_person,$name_of_table):bool{
        try {
            $this->connect();
        } catch (Exeption $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $query = "DELETE FROM $name_of_table WHERE id=$requested_person->getId()";
        return $this->delete($query);
    }

    public function update($requested_person,$name_of_table):bool{
        try {
            $this->connect();
        } catch (Exeption $e) {
            echo "Connection Problem: " . $e->getMessage();
        }
        $query = "UPDATE $name_of_table SET firstName='$requested_person->getFirstName()',lastName='$requested_person->getLastName()',userName='$requested_person->getUsername() ' WHERE id=$requested_person->getId()";
        return $this->update($query);
    }

    
}
