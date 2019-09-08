<?php
    
namespace Post\Model;
/**
 * 
 */
class Post 
{
    protected $id;
    protected $nombre;
    protected $raza;
    protected $sexo;
    protected $caracteristicas;
     
    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->nombre = !empty($data['nombre']) ? $data['nombre'] : null;
        $this->raza  = !empty($data['raza']) ? $data['raza'] : null;
        $this->sexo  = !empty($data['sexo']) ? $data['sexo'] : null;
        $this->caracteristicas  = !empty($data['caracteristicas']) ? $data['caracteristicas'] : null;
    }
    public function getId(){
    return $this->id;        
    }
    public function getNombre(){
    return $this->nombre;        
    }
    public function getRaza(){
    return $this->raza;        
    }
    public function getSexo(){
    return $this->sexo;        
    }
      
    public function getCaracteristicas(){
    return $this->caracteristicas;        
    }

    public function getArrayCopy(){
    return [
        'id' => $this->id,
        'nombre' => $this->nombre,
        'raza' => $this->raza,
        'Sexo' => $this->sexo,
        'caracteristicas' => $this->caracteristicas,];

    }


}
