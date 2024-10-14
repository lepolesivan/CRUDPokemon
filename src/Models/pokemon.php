<?php
namespace app\Models;

    class Pokemon
    {
        private ?string $id;
        private ?string $nom;
        private ?string $type;
        private ?int $level;
        private ?string $description;

        public function __construct(?string $id, ?string $nom, ?string $type, ?int $level, ?string $description)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->type = $type;
            $this->level = $level;
            $this->description = $description;
        }

        public function setName(?string $nom) :static
        { 
            $this->nom = $nom;
            return $this;
        }
        public function setType(?string $type) :static
        { 
            $this->type = $type;
            return $this;
        }
        public function setLevel(?int $level) :static
        { 
            $this->level = $level;
            return $this;
        }
        public function setDescrip(?string $description) :static
        { 
            $this->description = $description;
            return $this;
        }

        public function getId() : ?string
        {
             return $this->id;
        }

        public function getName() : ?string
        {
             return $this->nom;
        }

        public function getType() : ?string
        {
             return $this->type;
        }

        public function getLevel() : ?int
        {
             return $this->level;
        }
        public function geDescrip() : ?string
        {
             return $this->description;
        }
        
    }