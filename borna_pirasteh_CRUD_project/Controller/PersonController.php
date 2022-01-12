<?php

namespace Vargha_Khallokhi_CRUD\Controller;
use Vargha_Khallokhi_CRUD\Model\Actions;
use Vargha_Khallokhi_CRUD\Model\Person;
use Vargha_Khallokhi_CRUD\Helper\PersonHelper;

class PersonController
{
    /**
     * @throws \Exception
     */
    public function switcher($uri, $persons_request)
    {
        switch ($uri)
        {
            case Actions::CREATE:
                $this->createAction($persons_request);
                break;
            case Actions::UPDATE:
                $this->updateAction($persons_request);
                break;
            case Actions::READ:
                $this->readAction($persons_request);
                break;
            case Actions::READ_ALL:
                $this->readAllAction($persons_request);
                break;
            case Actions::DELETE:
                $this->deleteAction($persons_request);
                break;
            default:
                break;
        }
    }

    /**
     * @throws \Exception
     */
    public function updateAction($persons_request)
    {
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $username=$_POST["username"];
        $person = new Person($firstName,$lastName,$username);
        $personHelper = new PersonHelper();
        $personHelper->update($person);
    }
    /**
     * @throws \Exception
     */

    public function createAction($persons_request)
    {
        $firstName=$_POST["FirstName"];
        $lastName=$_POST["LastName"];
        $username=$_POST["Username"];
        $person = new Person($firstName,$lastName,$username);
        $personHelper = new PersonHelper();
        $personHelper->insert($person);
    }

    /**
     * @throws \Exception
     */
    public function readAction($persons_request)
    {
        $id=$_GET["id"];
        $personHelper = new PersonHelper();
        $personHelper->fetch($id);
    }

    /**
     * @throws \Exception
     */
    public function readAllAction($persons_request)
    {
        $personHelper = new PersonHelper();
        $personHelper->fetchAll();
    }

    /**
     * @throws \Exception
     */
    public function deleteAction($persons_request)
    {
        $username=$_POST["username"];
        $personHelper = new PersonHelper();
        $personHelper->delete($username);
    }
}
