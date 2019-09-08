<?php
    namespace Post\Model;
    use RuntimeException;
    use Zend\Db\TableGateway\TableGatewayInterface;
    
    class PostTable
    {
        private $tableGateway;
    
        public function __construct(TableGatewayInterface $tableGateway)
        {
            $this->tableGateway = $tableGateway;
        }
    
        public function fetchAll()
        {
            return $this->tableGateway->select();
        }
    
        public function getPost($id)
        {
            $id = (int) $id;
            $rowset = $this->tableGateway->select(['id' => $id]);
            $row = $rowset->current();
            if (! $row) {
                throw new RuntimeException(sprintf(
                    'Could not find row with identifier %d',
                    $id
                ));
            }
    
            return $row;
        }
    
        public function saveData($post){
            $data = [
                'nombre' => $post->getNombre(),
                'raza'  => $post->getRaza(),
                'sexo'  => $post->getSexo(),
                'caracteristicas'  => $post->getCaracteristicas(),
            ];

            if($post->getId()){
                $this->tableGateway->update($data, ['id' => $post->getId()]);
            
            }   
            else{
                $this->tableGateway->insert($data);
            }   
                
        }

        public function deletePost($id){
            $this->tableGateway->delete([
                'id' => $id ]);
        }

            
    }
?>