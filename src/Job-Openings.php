<?php
    class JobOpening
    {
        private $title;
        private $description;
        // private $contactInfo=>array($name, $email, $address);

        private $name;
        private $email;
        private $address;

        function __construct($title, $description, $name, $email, $address)
        {
            $this->title = $title;
            $this->description = $description;
            $this->name = $name;
            $this->email = $email;
            $this->address = $address;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setEmail($new_email)
        {
            $this->email = $new_email;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setAddress($new_address)
        {
            $this->address = $new_address;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setDescription($new_description)
        {
            $this->description = $new_description;
        }

    }


 ?>
