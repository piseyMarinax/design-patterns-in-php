<?php
    echo "the decorator pattern is a design pattern that allows behavior to be added to an individual object, either statically or dynamically, without affecting the behavior of other objects from the same class.[1]<br /><br /><br />";

    interface CarSerivce
    {
        public function getCost();
        public function getDes();
    }

    class BasicIn implements CarSerivce
    {
        public function getCost()
        {
            return 19;
        }
        public function getDes()
        {
            return "Basic In";
        }
    }

    class BasicInOli implements CarSerivce 
    {
        protected $carSerivce;

        function __construct(CarSerivce $CarSerivce)
        {
            $this->carSerivce =  $CarSerivce;
        }

        public function getCost()
        {
            return 19+ $this->carSerivce->getCost();
        }

        public function getDes()
        {
            return $this->carSerivce->getDes(). " Oli";
        }
    }

    $service = new BasicInOli(new BasicIn());
    echo $service->getCost();
    echo "<br />";
    echo $service->getDes();
    




?>