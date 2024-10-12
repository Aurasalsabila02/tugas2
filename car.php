<?php
    // I N T E R F A C E
    interface car 
    {
        function drive(): void;
        function gettire(): int;
    }
    // Implementasi interface pada class childnya
    class avanza implements car
    {
        public function drive(): void
        {
            echo "Drive avanza <br>";
        }
        public function gettire(): int
        {
            return 4;
        }
    }

    // Interface Inheritence
    interface hasbrand
    {
        function getbrand(): string;
    }   

    interface ismaintence
    {
        function ismaintence(): bool;
    }
    // Inheritence
    interface car0029 extends hasbrand
    {
        function drive(): void;
        function gettire(): int;
    }
    // Implementasi interface pada class childnya
    class avanza0053 implements car0029
    {
        public function drive(): void
        {
            echo "Drive avanza <br>";
        }
        public function gettire(): int
        {
            return 4;
        }
        public function getbrand(): string
        {
            return "Toyota";
        }
        public function ismaintence(): bool
        {
            return false;
        }
    }
?>